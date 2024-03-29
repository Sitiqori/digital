<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="" style="background-color: #EEEFE1">

    <div class="container">

        <!-- Outer Row -->
        <div class="row  justify-content-center">
            <div class="col-lg-6 col-md d-flex flex-column"  style="margin-top: 10rem">
                
                @if (session('status'))
                <div class="alert alert-danger" style="text-align: center">
                    {{ session('status')}}
                </div>
                @endif
                <div class="card o-hidden border-0 shadow-lg ">
                        <!-- Nested Row within Card Body --> 
                            <div class="" style="width: 100%">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Form Login</h1>
                                    </div>
                                    <form class="user"  method="POST">
                                        @csrf
                                        <div class="form-group"> 
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp"placeholder="Enter Email Address..." name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" required>
                                        </div>
                                        <button style="background-color: #E26266" type="submit"  class="btn btn-danger form-control" >Login</button>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" style="color: #1c1a1b" href="register">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                            
                    
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>