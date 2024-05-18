@php
use Illuminate\Support\Facades\Auth;
@endphp
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">
    <link rel="icon" type="image/png" href="image/favicon.png">


    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Furni</title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="index">Furni<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index">Home</a>
                    </li>
                    <li><a class="nav-link" href="shop">Shop</a></li>
                    <li><a class="nav-link" href="about">About us</a></li>
                    <li><a class="nav-link" href="services">Services</a></li>
                    <li><a class="nav-link" href="blog">Blog</a></li>
                    <li><a class="nav-link" href="contact">Contact us</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav ml-2 mb-md-0 ms-5">
                    @if(Auth::check())
                        <li>
                            <a class="nav-link mb-2" href="dashboard">
                                <img src="images/user.svg">
                                <span class="login">{{ Auth::user()->name }}</span>
                            </a>
                        </li>
                    @else
                        <li>
                            <a class="nav-link active" href="login">
                                <img src="images/login.svg">
                                <span class="login">LOGIN</span>
                            </a>
                        </li>
                    @endif
                    <li><a class="nav-link" href="cart"><img src="images/cart.svg"></a></li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- End Header/Navigation -->
