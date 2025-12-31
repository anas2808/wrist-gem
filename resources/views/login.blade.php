<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('cssfile/login.css')}}">
    <title>Modern Login Page</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            
            <form method="post" action="{{URL::to('register')}}">
                @csrf
                <h1>Register</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" name="user" placeholder="Name" required>
                <input type="email" name="userId" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" min="8" max="16" required>
                <input type="password" name="cpassword" placeholder="Password" min="8" max="16" required>
                <button type="submit">Register</button>
            </form>
            @if($errors->any())
            <span style="color:red"><h4>{{$errors->first()}}</h4></span>
            @endif
            
        </div>

        <div class="form-container sign-in">
            <form method="post" action="{{URL::to('login')}}" >
                @csrf
                <h1>Login</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="text" name="user" placeholder="username" required>
                <input type="password" name="password" placeholder="Password" min="8" max="16" required>
                <a href="#">Forget Your Password?</a>
                <button type="submit">login</button>
            </form>
            @if($errors->any())
            <span style="color:red"><h4>{{$errors->first()}}</h4></span>
            @endif
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome ,friend!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">login</button>
                     <a href="{{ url('index')}}"><button class="hidden">Home </button></span></a>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Welcome Back Friend</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="register">register</button>
                    
                    <a href="{{ url('index')}}"><button class="hidden">Home </button></span></a>
                   
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('jsfile/login.js')}}"></script>
</body>

</html>
