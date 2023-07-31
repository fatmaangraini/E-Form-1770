<title>Registration</title>
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h2 class="card-header text-center" style="text-align: center">Register User</h3>
                    <div class="card-body">
                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" style="border: 1px solid black; height: 30px; margin-left: 600px" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" style="border: 1px solid black; border-top: 0px; height: 30px; margin-left: 600px" placeholder="npwp" id="name" class="form-control" name="npwp"
                                    required autofocus>
                                
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" style="border: 1px solid black; border-top: 0px; height: 30px; margin-left: 600px" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" style="border: 1px solid black; border-top: 0px; height: 30px; margin-left: 600px" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <br>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember" style="margin-left: 630px;" > Remember Me</label>
                                </div>
                            </div>
                            <br>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block" style="margin-left: 650px;">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>