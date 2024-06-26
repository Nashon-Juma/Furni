<div>
    <style>
        .wrapper {
            height: 420px;
            width: 654px;
            margin: 50px auto;
            border-radius: 7px 7px 7px 7px;
            /* VIA CSS MATIC https://goo.gl/cIbnS */
            -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
        }

        .product-img {
            float: left;
            height: 420px;
            width: 327px;
        }

        .product-img img {
            border-radius: 7px 0 0 7px;
        }

        .product-info {
            float: left;
            height: 420px;
            width: 327px;
            border-radius: 0 7px 10px 7px;
        }

        .product-text {
            height: 300px;
            width: 327px;
        }

        .product-text h1 {
            margin: 0 0 0 38px;
            padding-top: 52px;
            font-size: 34px;
            color: #474747;
        }

        .product-text h1,
        .product-price-btn p {
            font-family: 'Bentham', serif;
        }

        .product-text h2 {
            margin: 0 0 47px 38px;
            font-size: 13px;
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
            text-transform: uppercase;
            color: #d2d2d2;
            letter-spacing: 0.2em;
        }

        .product-text p {
            height: 125px;
            margin: 0 0 0 38px;
            font-family: 'Playfair Display', serif;
            color: #8d8d8d;
            line-height: 1.7em;
            font-size: 15px;
            font-weight: lighter;
            overflow: hidden;
        }

        .product-price-btn {
            height: 103px;
            width: 327px;
            margin-top: 17px;
            position: relative;
        }

        .product-price-btn p {
            display: inline-block;
            position: absolute;
            top: -13px;
            height: 50px;
            font-family: 'Trocchi', serif;
            margin: 0 0 0 38px;
            font-size: 28px;
            font-weight: lighter;
            color: #474747;
        }

        span {
            display: inline-block;
            height: 50px;
            font-family: 'Suranna', serif;
            font-size: 34px;
        }

        .product-price-btn button {
            float: right;
            display: inline-block;
            height: 50px;
            width: 176px;
            margin: 0 40px 0 16px;
            box-sizing: border-box;
            border: transparent;
            border-radius: 60px;
            font-family: 'Raleway', sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            cursor: pointer;
            outline: none;
        }

    </style>

    @foreach($product as image)
        <img src="{{ image->path }}" alt=".">
    @endforeach
    {{-- <img src="{{ $this->product->image->path }}" alt=""> --}}

    <!-- Start Hero Section
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Modern Interior <span clsas="d-block">Design Studio</span></h1>
                        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                        <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="images/couch.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Hero Section -->


    <div class="wrapper">
        <div class="product-img">
            <img src="http://bit.ly/2tMBBTd" height="420" width="327">
        </div>
        <div class="product-info">
            <div class="product-text">
                <h1>Harvest Vase</h1>
                <h2>by studio and friends</h2>
                <p>Harvest Vases are a reinterpretation<br> of peeled fruits and vegetables as<br> functional objects. The surfaces<br> appear to be sliced and pulled aside,<br> allowing room for growth. </p>
            </div>
            <div class="product-price-btn">
                <p><span>78</span>$</p>
                <div class="col-md-12 mb-3 mb-md-0">
                    <button type="button" class="btn mb-2">Add To Cart</button>
                    <button type="button" class="btn">Continue Shopping</button>

                </div>
            </div>
        </div>
    </div>
</div>
