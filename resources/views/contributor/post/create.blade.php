@extends('layouts.app')

@section('title')
   e - tiket | Buy Ticket - Train
@endsection

@section('css')
    <style>
        ul.pagination {margin-bottom:0;}
        .toast {border: 1px solid #007BFF;}
        .infoMessage {z-index:999;}
        .top-right {top: 8px;right: 8px;}
    </style>
@endsection

@section('js')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6 h4 font-weight-bold"><i class="fas fa-ticket-alt"></i> | Buy Ticket - Train</div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('contributor.home') }}" class="btn btn-sm btn-danger">
                                        <i class="fas fa-backspace"></i> Back
                                    </a>
                                </div>
                            </div>
                        </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <div class="form-group">
                                    <i class="fas fa-train"></i> |
                                    <label>Origin</label>
                                    <select class="form-control">
                                            <option value="">Jakarta, Indonesia (JKTA)</option>
                                            <option>Surabaya, Indonesia (SUB)</option>
                                            <option>Bali / Denpasar, Indonesia (DPS)</option>
                                            <option>Yogyakarta, Indonesia (YKIA)</option>
                                            <option>Medan, Indonesia (KNO)</option>
                                            <option>Makassar, Indonesia (UPG)</option>
                                            <option>Semarang, Indonesia (SRG)</option>
                                            <option>Balikpapan, Indonesia (BPN)</option>
                                            <option>Banjarmasin, Indonesia (BDJ)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <i class="fas fa-subway"></i> |
                                    <label>Destination</label>
                                    <select class="form-control">
                                            <option value="">Jakarta, Indonesia (JKTA)</option>
                                            <option>Surabaya, Indonesia (SUB)</option>
                                            <option>Bali / Denpasar, Indonesia (DPS)</option>
                                            <option>Yogyakarta, Indonesia (YKIA)</option>
                                            <option>Medan, Indonesia (KNO)</option>
                                            <option>Makassar, Indonesia (UPG)</option>
                                            <option>Semarang, Indonesia (SRG)</option>
                                            <option>Balikpapan, Indonesia (BPN)</option>
                                            <option>Banjarmasin, Indonesia (BDJ)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="form-group">
                                    <i class="fas fa-child"></i> |
                                        <label for="adult">Adult</label>
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="adult" aria-describedby="adult" placeholder="">
                                                <small id="adult" class="form-text text-muted">Age 3+</small>
                                            </div>
                                        </form>
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="form-group">
                                    <i class="fas fa-baby"></i> |
                                        <label for="child">Child</label>
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="child" aria-describedby="child" placeholder="">
                                                <small id="child" class="form-text text-muted">Below 3</small>
                                            </div>
                                        </form>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <i class="far fa-calendar-alt"></i> |
                                        <label for="tanggal">Departure Date</label>
                                        <input type="date" class="form-control" name="tanggal" placeholder="tanggal">
                                </div>
                            </div>
                        </div>
                                <button type="submit" class="btn btn-primary float-right"><i class="fas fa-check"></i> Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
