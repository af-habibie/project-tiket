@extends('layouts.app')

@section('title')
    Contributor | Show #{{ $user->id }}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6 h4 font-weight-bold">User - Show #{{ $user->id }}</div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('contributor.home') }}" class="btn btn-sm btn-danger">
                                        <i class="fas fa-backspace"></i> Back
                                    </a>
                                </div>
                            </div>
                        </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <img src="{{ asset('img/users/' . ($user->photo == '' ? 'noimage.jpg' : $user->photo)) }}" width="250" alt="{{ $user->name }}" class="rounded-circle">
                            </div>
                            <div class="col-8">
                                <table class="table table-bordered table-hover table-striped mb-0">
                            <tbody>
                                <tr>
                                    <th>#ID</th>
                                    <td>{{ $user->id }}</td>
                                </tr>
                                <tr>
                                    <th>#NAME</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th>#EMAIL</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <th>#CREATED</th>
                                    <td>{{ $user->created_at }} ({{ $user->created_at->diffForHumans() }})</td>
                                </tr>
                                <tr>
                                    <th>#UPDATED</th>
                                    <td>{{ $user->updated_at }} ({{ $user->updated_at->diffForHumans() }})</td>
                                </tr>
                                <tr>
                                    <th>#ROLE</th>
                                    <td>{!! $user->is_admin == 1 ? 'Admin' : 'User' !!}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection