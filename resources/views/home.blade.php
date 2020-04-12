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

        .Gratis {
            text-align: center;
        }
        .subcribe {
            text-align: center;
            width: 40%;
            margin: 0 auto;
        }
        .subcribe img {
            margin: 15px 0;
        }
        .subcribe .row {
            margin-right: 0;
            margin-left: 0;
        }
        .form-group {
            margin-bottom: 0;
        }
        .subcribe .form-control {
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
        .subcribe .submit {
        color: #707070;
        background-color: #fff;
        border: 1px solid #707070;
        padding: 0;
        transition: all 0.4s ease;
    }
    .footer-area {
        background: #C6B9AD;
        padding: 30px 0;
        overflow: hidden;
        margin-top: auto;
    }
    ol, ul {
        list-style: none;
    }
    html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .fo-menu ul li a {
        text-decoration: none;
        color: #fff;
        font-size: 16px;
        display: inline-block;
        line-height: 1.3;
        transition: all 0.4s ease;
        text-transform: capitalize;
    }
    .fo-menu p {
        color: #fff;
        line-height: 1.2;
    }
    .fo-menu .row {
        margin-right: 0;
        margin-left: 0;
        padding: 15px 0;
    }
    p {
        font-size: 16px;
    }
    .footer-bottom {
        margin-top: 15px;
        text-align: right;
        width: 100%;
        border-top: 1px solid #fff;
    }
    .footer-bottom .social {
        margin-top: 15px;
    }
    
    </style>
@endsection
