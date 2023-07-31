<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function remove_prefix($text, $prefix)
    {
        if (0 === strpos($text, $prefix))
            $text = substr($text, strlen($prefix)) . '';
        return $text;
    }
    public function loginByToken()
    {
        // Display the encrypted string

        // Non-NULL Initialization Vector for decryption
        $decryption_iv = '1234567891011121';
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;

        // Store the decryption key
        $decryption_key = "GeeksforGeeks";

        // Use openssl_decrypt() function to decrypt the data
        $decryption = openssl_decrypt(
            urldecode($this->remove_prefix(http_build_query(request()->all()), "token=")),
            $ciphering,
            $decryption_key,
            $options,
            $decryption_iv
        );

        // dd(urldecode($this->remove_prefix(http_build_query(request()->all()), "token=")));
        $explodestring = explode('-', $decryption);
        $npwp = $explodestring[0];
        $password = $explodestring[1];
        //   dd($explodestring);
        $authorize = DB::connection('mysql_tax')->select("select * from tb_daftarnpwp where id_daftar_npwp='$npwp' and password='$password'");
        $users = collect(User::where('npwp', $npwp)->select('email')->first());
        if (count($users) > 0) {
            $user = User::where('npwp', $npwp)->select('email')->first();
            $credentials = [
                'email' => $user->email,
                'password' => $password
            ];
            if (Auth::attempt($credentials)) {
                //    dd(auth()->user()->email);
                return redirect()->intended('arsipSPT')
                    ->withSuccess('Signed in');
            }
        } else {
            $data = [
                'name' => $authorize[0]->nama_ktp,
                'email' => $authorize[0]->email,
                'password' => $authorize[0]->password,
                'npwp' => $authorize[0]->id_daftar_npwp
            ];
            $credentials = [
                'email' => $authorize[0]->email,
                'password' => $authorize[0]->password
            ];
            $check = $this->create($data);
            if (Auth::attempt($credentials)) {
                //    dd(auth()->user()->email);
                return redirect()->intended('arsipSPT')
                    ->withSuccess('Signed in');
            }
        }


        return redirect("login")->withSuccess('Login details are not valid');

        
    }
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $users = collect(User::where('npwp', $request->email)->select('email')->first());
        if (count($users) > 0) {
            $user = User::where('npwp', $request->email)->select('email')->first();
            $credentials = [
                'email' => $user->email,
                'password' => $request->password
            ];
            if (Auth::attempt($credentials)) {
                //    dd(auth()->user()->email);
                return redirect()->intended('arsipSPT')
                    ->withSuccess('Signed in');
            }
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'npwp' => 'required'
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'npwp' => $data['npwp']
        ]);
    }
    public function form()
    {
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('index', $data);
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect::away('http://localhost/publik/login.php');
    }
}
