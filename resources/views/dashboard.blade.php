<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            background-color: #f4f4f4;
            width: 200px;
            padding: 20px;
            margin-left: 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }

        nav ul li {
            margin-bottom: 10px;
        }

        nav ul li a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
        }

        nav ul li a:hover {
            background-color: #ddd;
        }

        .main-content {
            padding: 20px;
        }

        .main-content h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
</style>
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <nav>
                        <ul>
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li><a href="">Doctor List</a></li>
                            <li><a href="">Patient List</a></li>
                            <li><a href="">Appointment Details</a></li>
                            <li><a href="">Prescription List</a></li>
                            <li><a href="">Manage Doctors</a></li>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-9">
                <div class="main-content p-3">
                    <h1>Dashboard</h1>
                    
                        
                        <div class="row">
                            <div class="col-md-4">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-square fa-stack-2x text-primary"></i>
                                    <i class="fa fa-users fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-square fa-stack-2x text-primary"></i>
                                    <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-square fa-stack-2x text-primary"></i>
                                    <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-square fa-stack-2x text-primary"></i>
                                    <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="col-md-4">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-square fa-stack-2x text-primary"></i>
                                    <i class="fa fa-sign-out fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="col-md-6">
                                <!-- Icon for Content 6 (Add your icon here) -->
                            </div>
                        </div>
                    <!-- Add more rows and columns as needed -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
