<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Skill Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
        
    </head>
    <body>
        <div class="alert alert-success col-md-offset-5 hide" style="position: absolute;">
  <strong>Success!</strong> Record Saved Successfully
</div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center">Product Form</h1>
            <form id="productForm"> 
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <label>Product Name</label>
                <input type="text" name="p_name" id="p_name" class="form-control"/>
                <label>Quantity</label>
                <input type="text"  placeholder="Please type only numbers" name="p_quantity" id="p_quantity" class="form-control onlyNumber"/>
                <label>Price</label>
                <input type="text" placeholder="Please type only numbers" name="p_price" id="p_price" class="form-control onlyNumber"/>
                <a id="saverecord" class="btn btn-primary">Save Record</a>
            </form>    
        </div>
            <div class="col-md-4 col-md-offset-4 saved_detail">
                <label>Product Name : <span id="r_p_name"></span></label><a href="javascript:" id="e_p_name" class="pull-right">edit</a><br/>
                <label>Product Price : <span id="r_p_price"></span></label><a href="javascript:" id="e_p_price" class="pull-right">edit</a><br/>
                <label>Product Quantity : <span id="r_p_quantity"></span></label><a href="javascript:" id="e_p_stock" class="pull-right">edit</a><br/>
            </div>
        </div>
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"  type="text/javascript" ></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
    </body>
</html>
