<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Toko Mantap</title>
</head>
<body>
    <div class="container">
        <h1 class="my-3">Toko Mantap</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="width: 18rem;">
            <img src="{{asset('assets/img/Mie Ayam.jpeg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Mie ayam</h5>
                <form method="POST" action="checkout">
                @csrf
                    <div class="mb-3">
                        <label for="qty" class="form-label">Quantity</label>
                        <input type="number" name="qty" class="form-control" id="qty" placeholder="0">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="name">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="phone">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">address</label>
                        <textarea name="address" class="form-control" id="address" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Checkout</a>
                </form>
            </div>
        </div> 
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>