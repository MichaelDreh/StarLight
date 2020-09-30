
<style>
html, body {
    background-image: url('style.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    font-family: 'Numans', sans-serif;
}

.container {
    height: 100%;
    align-content: center;
}

.card {
    height: 500px;
    margin-top: auto;
    margin-bottom: auto;
    width: 400px;
    background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span {
    font-size: 60px;
    margin-left: 10px;
    color: #FFC312;
}

    .social_icon span:hover {
        color: white;
        cursor: pointer;
    }

.card-header h3 {
    color: white;
}

.social_icon {
    position: absolute;
    right: 20px;
    top: -45px;
}

.input-group-prepend span {
    width: 50px;
    background-color: #FFC312;
    color: black;
    border: 0 !important;
}

input:focus {
    outline: 0 0 0 0 !important;
    box-shadow: 0 0 0 0 !important;
}

.remember {
    color: white;
}

    .remember input {
        width: 20px;
        height: 20px;
        margin-left: 15px;
        margin-right: 5px;
    }

.login_btn {
    color: black;
    background-color: #FFC312;
    width: 100px;
}

    .login_btn:hover {
        color: black;
        background-color: white;
    }

.links {
    color: white;
}

    .links a {
        margin-left: 4px;
    }


</style>


<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Sign In</h3>
                  
                </div>
                <div class="card-body" sytle="text:white;">
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                        <label  class="d-flex links">Name</label>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <label  class="d-flex links">Email</label>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <label  class="d-flex links">Password</label>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <label  class="d-flex links">Confirm-Password</label>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="row">
                            <div class="col-sm-8 d-flex justify-content-center links">
                            <a style="padding-top: 7px;" href="{{ route('login') }}">Already Have An Account? Login</a>
                            </div>
                            <div class="col-sm-4 d-flex float-right justify-content-center links">
                            <input type="submit" value="Login" class="btn float-right btn-info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




