@extends('layouts.app')

@section('title')
    Admin | Post | Show #{{ $post->id }}
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6 h4 font-weight-bold">Post - Show #{{ $post->id }}</div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('posts.index') }}" class="btn btn-sm btn-danger">
                                        <i class="fas fa-backspace"></i> Back
                                    </a>
                                </div>
                            </div>
                        </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-striped mb-0">
                            <tbody>
                                <tr>
                                    <th>#ID</th>
                                    <td>{{ $post->id }}</td>
                                </tr>
                                <tr>
                                    <th>#USER</th>
                                    <td>{{ $post->user->name }}</td>
                                </tr>
                                <tr>
                                    <th>#CATEGORY</th>
                                    <td>{{ $post->category->title }}</td>
                                </tr>
                                <tr>
                                    <th>#TITLE</th>
                                    <td>{{ $post->title }}</td>
                                </tr>
                                <tr>
                                    <th>#SLUG</th>
                                    <td>{{ $post->slug }}</td>
                                </tr>
                                <tr>
                                    <th>#IMAGE</th>
                                    <td>
                                        <a href="{{ asset('img/post/'.$post->image) }}" data-fancybox>
                                            <img src="{{ asset('img/post/'.$post->image) }}" alt="{{ $post->title }}" width="120" class="img-thumbnail">    
                                        </a>    
                                    </td>
                                </tr>
                                <tr>
                                    <th>#DESCRIPTION</th>
                                    <td>{!! $post->description !!}</td>
                                </tr>
                                <tr>
                                    <th>#CONTENT</th>
                                    <td>{!! $post->content !!}</td>
                                </tr>
                                <tr>
                                    <th>#SLIDER</th>
                                    <td>{{ $post->slider == 1 ? "Tampil":"Not Found"}}</td>
                                </tr>
                                <tr>
                                    <th>#HOT</th>
                                    <td>{{ $post->hot == 1 ? "Tampil":"Not Found"}}</td>
                                </tr>
                                <tr>
                                    <th>#SHOW</th>
                                    <td>{{ $post->show == 1 ? "Tampil":"Not Found"}}</td>
                                </tr>
                                <tr>
                                    <th>#RATING</th>
                                    <td>
                                        @for ( $i = 0; $i < 5; $i++ ) 
                                            <i class="fas fa-star @if( $i < $post->rating ) text-primary @endif"></i>
                                        @endfor
                                    </td>
                                <tr>
                                    <th>#CREATED</th>
                                    <td>{{ $post->created_at }} ({{ $post->created_at->diffForHumans() }})</td>
                                </tr>
                                <tr>
                                    <th>#UPDATED</th>
                                    <td>{{ $post->updated_at }} ({{ $post->updated_at->diffForHumans() }})</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection