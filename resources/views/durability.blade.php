@extends('layouts.app')

@section('content')
<div>
    <durability-page></durability-page>
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
    </style>
@endsection