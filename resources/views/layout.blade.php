<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!---- title -->
    <title>@yield('title')</title>

    <!---- customer css file -->
    <style>
        @import url("https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700;800;900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "League Spartan", sans-serif;
        }

        h1 {
            font-size: 50px;
            line-height: 64px;
            color: #222;
        }

        h2 {
            font-size: 46px;
            line-height: 54px;
            color: #222;
        }

        h4 {
            font-size: 20px;
            color: #222;
        }

        h6 {
            font-weight: 700;
            font-size: 12px;
        }

        p {
            font-size: 16px;
            color: #465b52;
            margin: 15px 0 20px 0;
        }

        .section-p1 {
            padding: 40px 80px;
        }

        .section-m1 {
            margin: 40px 0;
        }

        body {
            width: 100%;
        }

        /*----- header start --------*/

        #header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 80px;
            background: #e3e6f3;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
            z-index: 999;
            position: sticky;
            top: 0;
            left: 0;
        }

        #navbar {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #navbar li {
            list-style: none;
            padding: 0 20px;
            position: relative;
        }

        #navbar li a {
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            color: #1a1a1a;
            transition: 0.3s ease;
        }

        #navbar li a.active,
        #navbar li a:hover {
            color: #088178;
        }

        #navbar li a.active::after,
        #navbar li a:hover::after {
            content: "";
            width: 30%;
            height: 2px;
            background: #088178;
            position: absolute;
            bottom: -4px;
            left: 20px;
        }

        /*------- home page section ----------*/
        #hero {
            background-image: url(./img/T.png);
            height: 90vh;
            width: 100%;
            background-size: cover;
            background-position: top 25% right 0;
            padding: 0 80px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
        }

        #hero h4 {
            padding-bottom: 15px;
        }

        #hero h1 {
            color: #088178;
        }

        #hero button {
            background-image: url(./img/button.png);
            background-color: transparent;
            color: #088178;
            border: 0;
            padding: 14px 80px 14px 65px;
            background-repeat: no-repeat;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
        }

        /*----- feature section ---------*/

        #feature {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        #feature .fe-box {
            width: 180px;
            text-align: center;
            padding: 25px 15px;
            box-shadow: 20px 20px 34px rgba(0, 0, 0, 0.03);
            border: 1px solid #cce7d0;
            border-radius: 4px;
            margin: 15px 0;
        }

        #feature .fe-box:hover {
            box-shadow: 10px 10px 54px rgba(70, 62, 221, 0.2);
        }

        #feature .fe-box img {
            width: 100%;
            margin-bottom: 10px;
        }

        #feature .fe-box h6 {
            display: inline-block;
            padding: 9px 8px 6px 8px;
            line-height: 1;
            border-radius: 4px;
            color: #088178;
            background-color: #fddde4;
        }

        #feature .fe-box:nth-child(2) h6 {
            background-color: #cdebbc;
        }

        #feature .fe-box:nth-child(3) h6 {
            background-color: #d1e8f2;
        }

        #feature .fe-box:nth-child(4) h6 {
            background-color: #ccd4f8;
        }

        #feature .fe-box:nth-child(5) h6 {
            background-color: #f6dbf6;
        }

        #feature .fe-box:nth-child(6) h6 {
            background-color: #fff2e5;
        }

        /*-------feature product section ----*/

        #product1 {
            text-align: center;
        }

        #product1 .pro-container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            padding-top: 20px;
            grid-gap: 40px;
        }

        #product1 .pro {
            width: 100%;
            max-width: 250px;
            padding: 10px 12px;
            border: 1px solid #cce7d0;
            border-radius: 25px;
            cursor: pointer;
            box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
            margin: 15px 0;
            transition: 0.2s ease;
            position: relative;
        }

        #product1 .pro:hover {
            box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);
        }

        #product1 .pro img {
            width: 100%;
            border-radius: 20px;
        }

        #product1 .pro .des {
            text-align: start;
            padding: 10px 0;
        }

        #product1 .pro .des span {
            color: #606063;
            font-size: 12px;
        }

        #product1 .pro .des h5 {
            padding-top: 7px;
            color: #1a1a1a;
            font-size: 14px;
        }

        #product1 .pro .des i {
            font-size: 12px;
            color: rgb(243, 181, 25);
        }

        #product1 .pro .des h4 {
            padding-top: 7px;
            font-size: 15px;
            font-weight: 700;
            color: #088178;
        }

        #product1 .pro .fa-shopping-cart {
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 50px;
            background-color: #ebf6ea;
            font-weight: 500;
            color: #088178;
            border: 1px solid #cce7d0;
            position: absolute;
            bottom: 20px;
            right: 10px;
        }

        /*------ banner section start ------*/

        #banner {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-image: url(./img/banner/b2.jpg);
            width: 100%;
            height: 40vh;
            background-size: cover;
            background-position: center;
        }

        #banner h4 {
            color: #fff;
            font-size: 16px;
        }

        #banner h2 {
            color: #fff;
            font-size: 30px;
            padding: 10px 0;
        }

        #banner h2 span {
            color: #ef3636;
        }

        button.normal {
            font-size: 14px;
            font-weight: 600;
            padding: 15px 30px;
            color: #000;
            background-color: #fff;
            border-radius: 4px;
            border: none;
            outline: none;
            cursor: pointer;
            transition: 0.2s;
        }

        #banner button.normal:hover {
            background: #088178;
            color: #fff;
        }

        /* ------- sm banner section start -----*/

        #sm-banner {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
        }

        #sm-banner .banner-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            background-image: url(./img/banner/b17.jpg);
            /* min-width: 650px; */
            height: 50vh;
            background-size: cover;
            background-position: center;
            padding: 30px;
            flex: 1;
        }

        #sm-banner h4 {
            color: #fff;
            font-size: 20px;
            font-weight: 300;
        }

        #sm-banner h2 {
            color: #fff;
            font-size: 28px;
            font-weight: 800;
        }

        #sm-banner span {
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            padding-bottom: 15px;
        }

        button.white {
            font-size: 13px;
            font-weight: 600;
            padding: 11px 18px;
            color: #fff;
            background-color: transparent;
            cursor: pointer;
            border: 1px solid #fff;
            transition: 0.2s;
        }

        #sm-banner .banner-box:hover button {
            background-color: #088178;
            border: 1px solid #088178;
        }

        #sm-banner .banner-box2 {
            background-image: url(./img/banner/b10.jpg);
        }

        #banner3 {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 0 80px;
        }

        #banner3 .banner-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            background-image: url(./img/banner/b7.jpg);
            min-width: 30%;
            height: 30vh;
            background-size: cover;
            background-position: center;
            padding: 30px;
            margin-bottom: 20px;
        }

        #banner3 h2 {
            color: #fff;
            font-weight: 900;
            font-size: 22px;
        }

        #banner3 h3 {
            color: #ec544e;
            font-weight: 800;
            font-size: 15px;
        }

        #banner3 .banner-box2 {
            background-image: url(./img/banner/b4.jpg);
        }

        #banner3 .banner-box3 {
            background-image: url(./img/banner/b18.jpg);
        }

        /*---------- newsletter section --------*/

        #newsletter {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            align-items: center;
            background-image: url(./img/banner/b14.png);
            background-repeat: no-repeat;
            background-position: 20% 30%;
            background-color: #041e42;
        }

        #newsletter h4 {
            font-size: 22px;
            font-weight: 700;
            color: #fff;
        }

        #newsletter p {
            font-size: 14px;
            font-weight: 600;
            color: #818ea8;
        }

        #newsletter p span {
            color: #ffbd27;
        }

        #newsletter .form {
            display: flex;
            width: 40%;
        }

        #newsletter input {
            height: 3.125rem;
            width: 100%;
            padding: 0 1.25rem;
            font-size: 14px;
            border: 1px solid transparent;
            border-radius: 4px;
            outline: none;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        #newsletter button {
            background-color: #088178;
            color: #fff;
            white-space: nowrap;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        /*---------- footer section start --*/

        footer {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        footer .col {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        footer .logo {
            margin-bottom: 30px;
        }

        footer h4 {
            font-size: 14px;
            padding-bottom: 20px;
        }

        footer p {
            font-size: 13px;
            margin: 0 0 8px 0;
        }

        footer a {
            font-size: 13px;
            text-decoration: none;
            color: #222;
            margin-bottom: 10px;
        }

        footer .follow {
            margin-top: 20px;
        }

        footer .follow i {
            color: #465b52;
            padding-right: 4px;
            cursor: pointer;
        }

        footer .install .row img {
            border: 1px solid #088178;
            border-radius: 5px;
        }

        footer .install img {
            margin: 10px 0 15px 0;
        }

        footer .follow i:hover,
        footer a:hover {
            color: #088178;
        }

        .copyright {
            width: 100%;
            text-align: center;
        }

        #mobile {
            display: none;
            align-items: center;
        }

        #close {
            display: none;
        }

        /* Shop Page */
        #page-header {
            background-image: url("img/banner/b1.jpg");
            width: 100%;
            height: 20vh;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 14px;
        }

        #page-header h2,
        #page-header p {
            color: white;
        }

        #pagination {
            color: white;
        }

        #pagination a {
            text-decoration: none;
            background-color: #088178;
            padding: 15px 20px;
            border-radius: 4px;
            color: #fff;
            font-weight: 600;
        }

        #pagination a i {
            font-size: 16px;
            font-weight: 600;
        }

        /* end Shop page */

        /* Single Product */
        #prodetails {
            display: flex;
            margin-top: 20px;
        }

        #prodetails .single-product-image {
            width: 40%;
            margin-right: 50px;
        }

        #prodetails .small-img-group {
            display: flex;
            justify-content: space-between;
        }

        .small-img-col {
            flex-basis: 24%;
            cursor: pointer;
        }

        .single-product-details {
            width: 50%;
            padding-top: 30px;
            text-align: justify;
        }

        .single-product-details h4 {
            padding: 40px 0 20px 0;
        }

        .single-product-details h2 {
            font-size: 26px;
        }

        .single-product-details select {
            display: block;
            padding: 5px 10px;
            margin-bottom: 10px;
        }

        .single-product-details input {
            width: 50px;
            height: 47px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }

        .single-product-details input:focus {
            outline: none;
        }

        .single-product-details button {
            color: white;
            background: #088178;
            padding: 14px;
        }

        .single-product-details span {
            line-height: 25px;
        }

        /* end Single Product */

        /* Blog Page */
        #page-header.blog-header {
            background-image: url("img/banner/b19.jpg");
        }

        #blog {
            padding: 150px 150px 0 150px;
        }

        #blog .blog-box {
            display: flex;
            align-items: center;
            width: 100%;
            position: relative;
            padding-bottom: 90px;
        }

        #blog .blog-img {
            width: 50%;
            margin-right: 40px;
        }

        #blog img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        #blog .blog-details {
            width: 50%;
        }

        #blog .blog-details a {
            text-decoration: none;
            font-size: 11px;
            color: #000;
            font-weight: 700;
            position: relative;
            transition: 0.3s;
        }

        #blog .blog-details a:after {
            content: "";
            width: 50px;
            height: 1px;
            background-color: #000;
            position: absolute;
            top: 4px;
            right: -60px;
        }

        #blog .blog-details a:hover {
            color: #088178;
        }

        #blog .blog-details a:hover::after {
            background-color: #088178;
        }

        #blog .blog-box h1 {
            position: absolute;
            top: -40px;
            left: 0;
            font-size: 70px;
            font-weight: 700;
            color: #c9cbce;
            z-index: -9;
        }

        /* end Blog Page */

        /* About Page */
        #page-header.about-page {
            background-image: url("img/banner/b20.jpg");
        }

        #about-head {
            display: flex;
            align-items: center;
        }

        #about-head img {
            width: 50%;
            flex: 1;
            height: auto;
        }

        #about-head div {
            flex: 1;
            padding-left: 40px;
        }

        /* end About Page */

        /* Contact Page */
        .details ul {
            list-style: none;
        }

        .details ul li {
            display: flex;
            margin: 20px 0;
        }

        .details ul li p {
            margin: 0 0 0 20px;
        }

        #contact-details {
            display: flex;
        }

        #contact-details .details {
            flex: 1;
        }

        #contact-details .map {
            flex: 1;
            height: 400px;
        }

        #contact-details .map iframe {
            width: 100%;
            height: 100%;
        }

        #form-contact {
            display: flex;
        }

        #form-contact form {
            width: 65%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding-left: 40px;
        }

        #form-contact form h2 {
            font-size: 26px;
            line-height: 35px;
            padding: 20px 0;
        }

        #form-contact form input,
        #form-contact form textarea {
            width: 100%;
            padding: 12px 15px;
            outline: none;
            margin-bottom: 20px;
            border: 1px solid #e1e1e1;
        }

        #form-contact form button {
            background-color: #088178;
            color: #fff;
            padding: 20px;
        }

        #form-contact .people div {
            padding-bottom: 25px;
            padding-left: 30px;
        }

        #form-contact .people div img {
            width: 65px;
            height: 75px;
            object-fit: cover;
            margin-right: 15px;
        }

        #cart {
            overflow-x: auto;
        }

        #cart table {
            width: 100%;
            border-collapse: collapse;
            /* table-layout: fixed; bo cai nay de no' slide duoc khi width rat nho*/
            white-space: nowrap;
        }

        #cart table img {
            width: 70px;
        }

        #cart table td:nth-child(1) {
            width: 100px;
            text-align: center;
        }

        #cart table td:nth-child(2) {
            width: 150px;
            text-align: center;
        }

        #cart table td:nth-child(3) {
            width: 250px;
            text-align: center;
        }

        #cart table td:nth-child(4),
        #cart table td:nth-child(5),
        #cart table td:nth-child(6) {
            width: 150px;
            text-align: center;
        }

        #cart table td:nth-child(5) input {
            width: 70px;
            padding: 10px 5px 10px 15px;
        }

        #cart table thead {
            border: 1px solid #e2e2e2;
            border-left: none;
            border-right: none;
        }

        #cart table thead th {
            font-weight: 700;
            text-transform: uppercase;
            font-size: 13px;
            padding: 18px 0;
        }

        #cart table tbody td {
            padding-top: 15px;
        }

        #cart table tbody td {
            font-size: 13px;
        }

        #cart-add {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        #coupon {
            width: 50%;
            margin-bottom: 30px;
        }

        #coupon h3 {
            padding-bottom: 15px;
        }

        #coupon input {
            padding: 10px 20px;
            outline: none;
            width: 60%;
            margin-right: 10px;
            border: 1px solid #e2e9e1;
        }

        #coupon button,
        #subtotal button {
            background-color: #088178;
            color: white;
            padding: 12px 20px;
        }

        #subtotal {
            width: 50%;
            margin-bottom: 30px;
            border: 1px solid #e2e9e1;
            padding: 30px;
        }

        #subtotal table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        #subtotal table td {
            width: 50%;
            border: 1px solid #e2e9e1;
            font-size: 13px;
            padding: 10px;
        }

        #subtotal h3 {
            padding-bottom: 15px;
        }

        @media screen and (max-width: 799px) {
            #navbar {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: flex-start;
                position: fixed;
                top: 0;
                right: -300px;
                height: 100vh;
                width: 300px;
                background-color: #e3e6f3;
                box-shadow: 0 40px 50px rgba(0, 0, 0, 0.1);
                padding: 80px 0 0 40px;
                transition: 0.3s;
            }

            #navbar.active {
                right: 0;
            }

            #navbar li {
                margin-bottom: 25px;
            }

            #mobile {
                display: block;
                align-items: center;
            }

            #mobile i {
                color: #1a1a1a;
                font-size: 24px;
                padding-left: 20px;
            }

            #close {
                display: block;
                position: absolute;
                top: 30px;
                left: 30px;
                color: #222;
                font-size: 24px;
            }

            #lg-bag {
                display: none;
            }

            #hero {
                height: 70vh;
                background-position: top 30% right 30%;
                padding: 0 60px;
            }

            #feature {
                justify-content: center;
            }

            #feature .fe-box {
                margin: 15px 15px;
            }

            .section-p1 {
                padding: 40px 40px;
            }

            #product1 .pro-container {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                padding-top: 20px;
                grid-gap: 20px;
            }

            #product1 .pro {
                margin: 15px 15px;
            }

            #banner {
                height: 40vh;
            }

            #sm-banner .banner-box {
                min-width: 100%;
                height: 45vh;
                margin-top: 20px;
            }

            #banner3 {
                padding: 0 40px;
            }

            #banner3 .banner-box {
                width: 28%;
            }

            #newsletter .form {
                width: 70%;
            }

            /* Blog Posts */
            #blog {
                padding: 120px 50px 0 50px;
            }
        }

        @media screen and (max-width: 600px) {
            #product1 .pro-container {
                grid-template-columns: 1fr 1fr;
            }

            #product1 .pro {
                max-width: 200px;
            }

            /* Blog Posts */
            #blog {
                padding: 100px 20px 0 20px;
            }

            #blog .blog-box {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }

            #blog .blog-img,
            #blog .blog-details {
                width: 100%;
            }

            /* contact page */
            #contact-details {
                flex-direction: column;
            }

            #form-contact {
                flex-direction: column;
            }

            #form-contact form {
                width: 90%;
            }

            .people {
                padding-top: 30px;
            }

            /* Cart Page */
            #cart-add {
                flex-direction: column;
            }

            #coupon,
            #subtotal {
                width: 100%;
            }

            #subtotal {
                margin-bottom: 0;
            }
        }

        @media screen and (max-width: 450px) {
            #header {
                padding: 20px 40px;
            }

            #hero {
                height: 100vh;
                padding: 0 80px;
            }

            #hero h4 {
                font-size: 16px;
                padding-bottom: 15px;
            }

            h2 {
                font-size: 30px;
                line-height: 38px;
            }

            #hero h1 {
                font-size: 30px;
                color: #088178;
                line-height: 38px;
            }

            #product1 .pro-container {
                grid-template-columns: 1fr;
            }

            #product1 .pro {
                width: 100%;
                max-width: 300px;
            }

            #banner h2 {
                color: #fff;
                font-size: 20px;
                padding: 10px 20px;
            }

            #banner3 .banner-box {
                width: 100%;
            }

            #newsletter .form {
                display: block;
                width: 100%;
            }

            #newsletter button {
                margin-top: 20px;
            }

            /* single product */
            #prodetails {
                display: flex;
                flex-direction: column;
            }

            #prodetails .single-product-image {
                width: 100%;
                margin-right: 0px;
            }

            .single-product-details {
                width: 100%;
                padding-top: 30px;
            }

            /* Blog Posts */
            #blog {
                padding: 100px 20px 0 20px;
            }

            #blog .blog-box {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }

            #blog .blog-img,
            #blog .blog-details {
                width: 100%;
            }

            /* About Page */
            #about-head {
                flex-direction: column;
            }

            #about-head img {
                width: 100%;
                margin-bottom: 20px;
            }

            #about-head div {
                /* flex: 1; */
                padding-left: 0px;
            }
        }
    </style>
    <!---- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <section id="header">
        <a href="/"><img src="./img/n.png" class="logo" alt="" width="100px"></a>

        <div>
            <ul id="navbar">
                <li><a class="" href="/">Home</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li id="lg-bag"><a href=""><i class="fas fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href=""><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
    @yield('content')
    <!---- footer section start -->
    <footer class="section-p1">
        <div class="col">
            <a href="/"><img src="" class="logo" alt="" width="100px"></a>
            <h4>Contact</h4>
            <p><strong>Address:</strong> 562 Wellington Road, Street 32, San Francisco</p>
            <p><strong>Phone:</strong> +01 2222 365/(+91)0123456789</p>
            <p><strong>Hours:</strong> 10:00 - 18.00, Mon - Sat</p>

            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-pinterest"></i>
                    <i class="fa fa-heart"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">My Account</a>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>Form Store or Google Play</p>
            <div class="row">
                <img src="./img/pay/app.jpg" alt="">
                <img src="./img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Getways</p>
            <img src="./img/pay/pay.png" alt="">
        </div>


    </footer>

    <div class="copyright">
        <p>@ 2021, CodeSlaves Design - HTML CSS Ecommerce Template</p>
    </div>



    <!---- customer js file -->
    <script src="./script.js"></script>
</body>

</html>