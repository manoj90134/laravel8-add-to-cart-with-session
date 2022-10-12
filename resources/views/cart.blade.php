<!doctype html>
  <html>
   <head>

    <style type="text/css">
      
body {
  margin-top: 20px;
}

    </style>
     
   </head> 
<body>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="panel-title">
            <div class="row">
              <div class="col-xs-6">
                <h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
              </div>
              <div class="col-xs-6">
                <a href="{{route('cart_home')}}"><button type="button" class="btn btn-primary btn-sm btn-block">
                 Continue shoping 
                </button></a>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-body">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
       <?php 
       $count=1;

        $total=0;  ?>
  
  @foreach(session('cart') as $id=>$product )
   <?php  $subtotal=$product['price']*$product['qty'] ;
    $total=$total+$subtotal;
    ?>
    <tr>
      <th scope="row">{{$count++}}</th>
      <td>{{$product['name'] }}</td>
      <td>{{$product['price'] }}</td>
      <td>{{$product['qty'] }}</td>
      <td>{{$subtotal}}</td>
      <td><a href="{{route('cart_remove',$product['id'])}}"><i class="fa fa-trash" aria-hidden="true"></i></a> </td>

    </tr>


  @endforeach

  </tbody>
</table>



        </div>
        <div class="panel-footer">
          <div class="row text-center">
            <div class="col-xs-11">
              <h4 class="text-right">Total <strong>{{$total}}</strong></h4>
            </div>
           <!--  <div class="col-xs-3">
              <button type="button" class="btn btn-success btn-block">
                Checkout
              </button>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
  </html>
