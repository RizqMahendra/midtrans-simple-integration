<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
<script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{config('midtrans.client_key')}}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Toko Mantap</title>
</head>
<body>
    <div class="container">
        <h1 class="my-3">Toko Mantap</h1>
        <div class="row">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card" style="width: 18rem;">
            <img src="{{asset('assets/img/Mie Ayam.jpeg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Detail Pesanan</h5>
                <table class="table table-light">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td> : {{$order->name}}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td> : {{$order->phone}}</td>
                        </tr>
                        <tr>
                            <td>alamat</td>
                            <td> : {{$order->address}}</td>
                        </tr>
                        <tr>
                            <td>Qty</td>
                            <td> : {{$order->qty}}</td>
                        </tr>
                        <tr>
                            <td>Total Harga</td>
                            <td> : {{$order->total_price}}</td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-primary" id="pay-button">Bayar Sekarang</button>
            </div>
        </div> 
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{$snapToken}}', {
          onSuccess: function(result){
            /* You may add your own implementation here */
            alert("payment success!"); console.log(result);
          },
          onPending: function(result){
            /* You may add your own implementation here */
            alert("wating your payment!"); console.log(result);
          },
          onError: function(result){
            /* You may add your own implementation here */
            alert("payment failed!"); console.log(result);
          },
          onClose: function(){
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
          }
        })
      });
    </script>
</body>
</html>