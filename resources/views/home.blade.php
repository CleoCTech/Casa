@extends('layouts.app')

@section('content')
<div>
    
</div>

<div class="">
    <home-page></home-page>
</div>
@endsection
@section('styles')
    <style>

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Khand', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            line-height: 1;
            color: #212529;
            text-align: left;
            background-color: #fff;
        }

        h2{
            font-size: 30px;
        }

        div ,section{
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        a{
            background: transparent;
        }
        section {
            display: block;
        }
        


        .slider-area {
            background: #fff;
            height: 500px !important;
            overflow: hidden;
        }
        .collecties_afbeelding {
            background-color: #ffffff;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 500px;
            width: 100%;
    }
        .section-title {
            padding: 20px 0;
        }
        .section-title h2 {
            color: #856E62;
            line-height: 1.3;
            font-weight: 500;
        }
        .section-title h5 {
            color: #856E62;
            font-size: 16px;
            font-weight: 500;
        }
        h2 {
            font-size: 30px;
        }
        /* Anza kucopy from hapa section ya products */

            .product-area {
                overflow: hidden;
            }

            /* Section Title Start */
            .section-title{
                padding: 20px 0;
            }

            .section-title h2 {
                color: #856E62;
                line-height: 1.3;
                font-weight: 500;
            }

            /* Section Title End */

            /* Product Start*/
            .bg-pink {
                background: #F5DDD0;
            }

            .bg-pinks {
                background: #856E62;
            }

            .bg-pinkss {
                background: #C6B9AD;
            }

            .bg-pink p, .bg-pink a, .bg-pink h2, .bg-pink h4, .bg-pinkss p, .bg-pinkss a, .bg-pinkss h2, .bg-pinkss h4 {
                color: #000 !important;
            }

            .product {
                padding: 10px 10px 0 10px;
            }

            .product .product-img {
                margin: 0 auto;
                text-align: center;
                position: relative;
            }

            .product.home .product-name {
                min-height: initial !important;
            }
            .product .product-name {
                margin: 0 auto;
                text-align: center;
                padding: 5px 0;
            }

            .product .product-name a {
                color: #fff;
            }

            .product .product-name h5 {
                font-weight: 500;
            }
            .text-pink a h5 {
                color: #856E62;
            }
            .hometitle h5 {
                font-size: 25px;
                margin-bottom: 20px;
            }
        .row {
            /* display: -ms-flexbox; */
            display: flex;
            /* -ms-flex-wrap: wrap; */
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .section-title img {
            height: 35px;
        }

        .Gratis{
            text-align: center;
        }

        .subscribe {
            text-align: center;
            width: 40%;
            margin: 0 auto;
        }

        .subscribe img {
            margin: 15px 0;
        }

        .subscribe .row {
            margin-right: 0;
            margin-left: 0;
        }

        .form-group {
            margin-bottom: 0;
        }

        .subscribe .form-control {
            display: block;
            width: 100%;
            height: 30px;
            padding: 10px;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #222;
            background-color: #F5DDD0;
            background-clip: padding-box;
            border: 1px solid #F5DDD0;
            border-radius: 0;
        }

        .subscribe .submit {
            color: #707070;
            background-color: #fff;
            border: 1px solid #707070;
            padding: 0;
            transition: all 0.4s ease;
        }

        .subcribe .submit:hover {
            transition: all 0.4s ease;
            border: 1px solid #856E62;
            background: #856E62;
            color: #fff;
        }

        button {
            height: 30px;
            min-width: 20px!important;
        }

        button, select {
            text-transform: none;
        }

        button, input, optgroup, select, textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }
    
    </style>
@endsection
