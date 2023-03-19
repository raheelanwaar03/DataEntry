<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Authentication</title>
</head>

<body style="background-image: url({{ asset('assets/img/bg/9.jpg') }});background-repeat:no-repeat;background-size:cover;">
    <x-alert/>
    <img src="" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-success">Register New Account</h1>
            </div>
        </div>
        <div class="row min-vh-100">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="card bg-transparent border-black shadow-lg w-100">
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label style="color:green"><b style="font-size: 25px">User Name</b></label>
                                <input type="text" name="name" style="background: transparent;color:black "
                                    class="form-control" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group">
                                <label style="color:green"><b style="font-size: 25px">Email</b></label>
                                <input type="text" style="background: transparent;color:black " name="email"
                                    class="form-control" placeholder="Enter Your Email">
                            </div>
                            <div class="form-group">
                                <label style="color:green"><b style="font-size: 25px">Phone</b></label>
                                <input type="number" style="background: transparent;color:black " name="phone"
                                    class="form-control" placeholder="Enter Your Phone">
                            </div>
                            <div class="form-group">
                                <label style="color:green"><b style="font-size: 25px">Address</b></label>
                                <input type="text" style="background: transparent;color:black " name="address"
                                    class="form-control" placeholder="Enter Your Address">
                            </div>
                            <div class="form-group">
                                <label style="color:green"><b style="font-size: 25px">Password</b></label>
                                <input type="password" style="background: transparent;color:black " name="password"
                                    class="form-control" placeholder="Enter Your Password">
                            </div>
                            <div class="form-group">
                                <label style="color:green"><b style="font-size: 25px">Confirm Password</b></label>
                                <input type="password" style="background: transparent;color:black "
                                    name="password_confirmation" class="form-control"
                                    placeholder="Enter Your Confirm Password">
                            </div>
                            <div class="form-group">
                                <label style="color:green"><b style="font-size: 25px">Referal</b></label>
                                <input type="text" name="referal" value="{{ $referal }}" class="form-control text-dark" readonly>
                            </div>
                            <button type="submit" class="btn btn-success">Enroll</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-light">Already have account?<span><a href="{{ route('login') }}" style="text-decoration: none;" class="btn btn-success btn-lg"> Sign
                            in </a></span></h1>
            </div>
        </div>
    </div>
</body>

</html>
