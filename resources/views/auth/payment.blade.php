<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Payment Page</title>
</head>

<body style="background-image: url({{ asset('assets/img/bg/9.jpg') }});background-repeat:no-repeat;background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-success">Payment Page</h1>
            </div>
        </div>
        <div style="margin-top: -100px" class="row min-vh-100">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <div class="card bg-transparent border-black shadow-lg w-100">
                    <div class="card-title">
                        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptatum nesciunt deleniti, sit saepe ex voluptate officiis blanditiis minus natus?</p>
                        <h4 class="text-center">Easypaisa Name:</h4>
                        <h4 class="text-center">Easypaisa Number:</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('Payment.Store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label style="color:green"><b style="font-size: 25px">Easypaisa Account Holder Name</b></label>
                                <input type="text" name="easypaisaName" style="background: transparent;color:black "
                                    class="form-control" placeholder="Easypaisa Account Holder">
                            </div>
                            <div class="form-group">
                                <label style="color:green"><b style="font-size: 25px">Easypaisa Number</b></label>
                                <input type="number" name="easypaisaNum" style="background: transparent;color:black "
                                    class="form-control" placeholder="Easypaisa Account Number">
                            </div>
                            <div class="form-group">
                                <label style="color:green"><b style="font-size: 25px">Put Trx or TID</b></label>
                                <input type="text" style="background: transparent;color:black " name="tid"
                                    class="form-control" placeholder="Enter Your Phone">
                            </div>
                            <button type="submit" class="btn btn-outline-success">Sumbit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
