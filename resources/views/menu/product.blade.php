@extends('menu.layout')

@section('name') {!! ucwords(str_replace('-', ' ', $title)) !!} @endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <p><strong class="pr-3">SLUG:</strong>{!! $slug !!}</p>
                <p><strong class="pr-3">SLUG+STR REPLACE:</strong>{!! str_replace('-', ' ', $slug) !!}</p>
                <p><strong class="pr-3">SLUG+STR REPLACE+UCWORDS:</strong>{!! ucwords(str_replace('-', ' ', $slug)) !!}</p>
            </div>
        </div>
    </div>
@endsection