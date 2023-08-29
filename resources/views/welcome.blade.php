<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}"> --}}

    <title>Document</title>
    <style>
body {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            background-size: cover;
            max-width: 100%;
            margin: 0;
            padding: 0;
       }

       .container {
            padding: 0;
            
       }
       .navbar-nav {
               text-align: center;
               
               margin-top: 10px;
           }

.register {
    margin-top: 3%;
    padding: 3%;
}

.register-left {
    text-align: center;
    color: #fff;
    margin-top: 4%;
}

.register-left input {
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}

.register-right {
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
    padding: 2% 3%; /* Adjust padding for better spacing */
}


.register-left img {
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    animation: mover 1s infinite alternate;
}

@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}

.register-left p {
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}

.register-form {
    padding: 10%;
    margin-top: 10%;
}

.btnRegister {
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}

.nav-tabs {
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}

.nav-tabs .nav-link {
    padding: 1%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}

.nav-tabs .nav-link:hover {
    border: none;
}

.nav-tabs .nav-link.active {
    
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}

.register-heading {
    text-align: center;
    
    color: #495057;
}

    </style>
</head>
<body>
    
    <div class="container col-md-12">
        <div class="row">
            <div class="col-md-12">
                @include('nav')
            </div>
        </div>
        
        <div class="row">
                <div class="col-md-3 register-left">
                    <img src="{{ asset('images/ambu.jpg') }}" alt=""/>
                    <h3>Welcome</h3>
                   
                </div>
            
                <div class="col-md-9 register-right" >
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 40%;">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Signup</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Login</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Register as Patient</h3>
                           {{-- signup --}}
                           @include('auth.signup')
                        </div>
                        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3  class="register-heading">Login</h3>
                            {{-- login --}}
                            @include('auth.login')
                        </div>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-md-4">1jjj</div>
            <div class="col-md-4">2jjj</div>
            <div class="col-md-4">3hhh</div>
        </div>
        
    </div>
    

    <script>
        // ... (Your JavaScript code)
        var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('password_confirmation').value) {
            document.getElementById('message').style.color = '#5dd05d';
            document.getElementById('message').innerHTML = 'Matched';
        } else {
            document.getElementById('message').style.color = '#f55252';
            document.getElementById('message').innerHTML = 'Not Matching';
        }
        }

        function alphaOnly(event) {
        var key = event.keyCode;
        return ((key >= 65 && key <= 90) || key == 8 || key == 32);
        };

       
    </script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>