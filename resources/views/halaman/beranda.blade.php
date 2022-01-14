@extends('halaman.layout')

@section('name')
    {{ $title }}
@endsection

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="jumbotron bg-primary text-white text-center">
                    <h1 class="display-4">{{ $title }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection