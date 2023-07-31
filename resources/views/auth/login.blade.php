<title>Login</title>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center" >
            <div class="col-md-4" >
                <div class="card">
                    <h2 class="card-header text-center" style="text-align: center">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" style="border: 1px solid black; height: 30px; margin-left: 600px" placeholder="Masukkan NPWP" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" style="border: 1px solid black; border-top: 0px; height: 30px; margin-left: 600px"  placeholder="Masukkan Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" style="margin-left: 630px"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block" style="margin-left: 650px">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>