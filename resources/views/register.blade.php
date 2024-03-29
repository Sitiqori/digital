<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

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
        <div class="row justify-content-center">

            <div class="col-lg-6 col-md" style="margin-top: 10rem"> 
                @if ($errors->any())
                <div class="alert alert-danger"  style="text-align: center">
                     <ul>
                          @foreach ($errors->all() as $error )
                               <li>{{$error}}</li>
                          @endforeach
                     </ul>
                </div>
                @endif
                @if (session('status'))
                        <div class="alert alert-success"  style="text-align: center">
                            {{session('message')}}
                        </div>
                @endif
                <div class="card o-hidden border-0 shadow-lg " >
                        <!-- Nested Row within Card Body --> 
                            <div class="" style="width: 100%">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Form Register</h1>
                                    </div>
                                    <form class="user"  method="POST">
                                        @csrf
                                        <div class="form-group">
                                             <input type="text" class="form-control form-control-user"  name="nama_lengkap" id="nama_lengkap" placeholder="Full Name" required>
                                         </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"  name="email" id="email" placeholder="Email Address" required>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user"  name="username" id="username" placeholder="Username" required>
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user"  name="password" id="password" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                             <input type="text" class="form-control form-control-user"  name="alamat" id="alamat" placeholder="Address" required>
                                        </div>
                                         <button style="background-color: #E26266" type="submit"  class="btn btn-danger form-control">Register</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" style="color: #1c1a1b" href="login">Already have an account? Login!</a>
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