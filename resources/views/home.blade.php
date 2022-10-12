<!doctype html>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> ADD To Cart </title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="{{asset('css.css')}}">

  </head>
    <body>
    
<div class="container">
    <h3 class="h3">Laravel 8 shopping Cart With Demo using Session </h3>
    <div class="row">
    
        <div class="col-md-3 col-sm-6">
     <form action="{{route('addtocart')}}" method="POST">

            @csrf
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                        <img class="pic-2" src="https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                </div>

                <input type="hidden" name="id" value="1">
                <input type="hidden" name="name" value="Product1">
                <input type="hidden" name="price" value="150">
                <input type="hidden" name="qty" value="1">
    

                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Product 1</a></h3>
                    <div class="price">$16.00
                        <span>$20.00</span>
                    </div>
                    <a class="add-to-cart"><button type="submit">+ Add To Cart</button> </a>
                </div>
            </div>

        </form>
        </div>

        <!-- product 2 -->
              <div class="col-md-3 col-sm-6">
     <form action="{{route('addtocart')}}" method="POST">

            @csrf
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                        <img class="pic-2" src="https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                </div>

                <input type="hidden" name="id" value="2">
                <input type="hidden" name="name" value="Product2">
                <input type="hidden" name="price" value="50">
                <input type="hidden" name="qty" value="1">
    

                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Product 2</a></h3>
                    <div class="price">$16.00
                        <span>$20.00</span>
                    </div>
                    <a class="add-to-cart"><button type="submit">+ Add To Cart</button> </a>
                </div>
            </div>

        </form>
        </div>

        <!-- product 3 -->
              <div class="col-md-3 col-sm-6">
     <form action="{{route('addtocart')}}" method="POST">

            @csrf
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                        <img class="pic-2" src="https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Sale</span>
                    <span class="product-discount-label">20%</span>
                </div>

                <input type="hidden" name="id" value="3">
                <input type="hidden" name="name" value="Product 3">
                <input type="hidden" name="price" value="100">
                <input type="hidden" name="qty" value="1">
    

                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Product 3</a></h3>
                    <div class="price">$16.00
                        <span>$20.00</span>
                    </div>
                    <a class="add-to-cart"><button type="submit">+ Add To Cart</button> </a>
                </div>
            </div>

        </form>
        </div>
      



    </div>
</div>
<hr>


    </body>
    </html>
