@extends('layouts.app')

@section('title')
e - tiket | Making Your Trip Convinient
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body h2"><i class="fas fa-train"></i> Train </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('contributor.post.create') }}">Buy Now</a>
                        <div class="small text-white"><i class="fas fa-angle-double-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body h2"><i class="fas fa-plane"></i> Plane </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('contributor.post.manage') }}">Buy Now</a>
                        <div class="small text-white"><i class="fas fa-angle-double-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
