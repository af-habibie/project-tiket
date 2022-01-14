@extends('frontend.layout.templateerror')

@section("title")
    404 Page Not Found
@endsection

@section('css')
    <style>
        .main-content {
            min-height: 550px !important;
            display: flex;
            justify-content: center;
            align-items: center;
            float: none;
            width: auto;
        }
    </style>
@endsection

@section('content')
    <div class="main-content">
        <h1 class="text-center">404 Page Not Found</h1>
    </div>
@endsection