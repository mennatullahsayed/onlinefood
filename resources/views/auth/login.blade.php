<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <form method="POST" action="{{ route('login') }}">
                        @csrf
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" name ="email" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name ="password" placeholder="Password" required="" />
              </div>
              <div>
               
              
                <button  class="btn btn-default submit" type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                       @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                            </a>
                      @endif        
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> m4ro3 ah 3omr!</h1>
                  <p>©2020 maryam w 4rka2ha</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
          <form method="POST" action="{{ route('register') }}">
                        @csrf
     <h1>Create Account</h1>
                       <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="User Name" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       </div>
                       <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                       
                       <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                       @error('password')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                  
               </div>
               
                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Con-Password">
                            </div>

                            <div>
                                <input  id="address" type="text" class="form-control" name="address" required   placeholder="Adress">
                            </div>

                            <div>
                                <input   type="text" class="form-control" name="phone" required   placeholder="phone">
                            </div>
                            <div>
                                <input   type="password" class="form-control" name="creditcard" required   placeholder="creditcard">
                            </div>












                            <div  >
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                           </div>      
                           <div class="clearfix"></div>

<div class="separator">
  <p class="change_link">Already a member ?
    <a href="#signin" class="to_register"> Log in </a>
  </p>

  <div class="clearfix"></div>
  <br />

  <div>
    <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
    <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>

        </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
