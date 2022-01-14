@extends('layouts.app')

@section('title')
    Admin | Post | Create
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <style>
        .select2-container .select2-selection--single { height: 39px !important; }
        .select2-container--default .select2-selection--single .select2-selection__rendered {line-height: 39px;}
        .select2-container--default .select2-selection--single .select2-selection__arrow {height: 38px;}
        .bg-light-custom{background:#EEE;}

    </style>
@endsection

@section('js')    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            $('select').select2();

            $('#description').summernote({
                placeholder: 'Description',
                height: 100
            });

            $('#content').summernote({
                placeholder: 'Content',
                height: 200
            });

            $("input[name=title]").keyup(function(){
                var str = $(this).val();
                str = str.toLowerCase();
                str = str.replace(/[^a-zA-Z0-9]+/g,'-');
                $("input[name=slug]").val(str);        
            });
            $("#image").change(function() {
                imagePreview(this);
            });

            function imagePreview(input) {
                if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $("#preview").removeClass("d-none");
                    $('#preview').attr('src', e.target.result);
                }

                    reader.readAsDataURL(input.files[0]); // convert to base64 string
                }
            }
        });

        function clickRating(val) {
            $("#rating").attr("value", val);
            //RESET
            $(`i.fa-star`).removeClass("text-primary");
            //SET
            $(`i.fa-star:nth-child(n+1):nth-child(-n+${val})`).addClass("text-primary");
        }
    </script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-6 h4 font-weight-bold">Post - Create</div>
                        <div class="col-6 text-right">
                                <a href="{{ route('posts.index') }}" class="btn btn-sm btn-danger">
                                    <i class="fas fa-backspace"></i> Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="user_id">User<span class="text-danger">*</span></label>
                                <select class="form-control @error('user_id') is-invalid @enderror" name="user_id">
                                    @if (count($user) > 0)
                                    <option value="">Choose User ...</option>
                                        @foreach ($user as $item)
                                            <option value="{{ $item->id }}" @if($item->id == old('user_id')) selected="selected" @endif>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('user_id') <code>{{ $message }}</code> @enderror
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category<span class="text-danger">*</span></label>
                                <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                                    @if (count($categories) > 0)
                                    <option value="">Choose Category ...</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}" @if($item->id == old('category_id')) selected="selected" @endif>
                                                {{ $item->title }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('category_id') <code>{{ $message }}</code> @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Title<span class="text-danger">*</span></label>
                                <input type="text" value="{{ old('title') }}" name="title" placeholder="Title" class="form-control @error('title') is-invalid @enderror">
                                @error('title') <code>{{ $message }}</code> @enderror
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug<span class="text-danger">*</span></label>
                                <input type="text" value="{{ old('slug') }}" name="slug" placeholder="Slug" class="form-control @error('slug') is-invalid @enderror">
                                @error('slug') <code>{{ $message }}</code> @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Image<span class="text-danger">*</span></label>
                                <div class="p-3 bg-light mb-3">
                                    <div class="font-italic small">*Slider 798 × 550 pixels</div>
                                    <div class="font-italic small">*Latest Top 1000 × 571 pixels</div>
                                    <div class="font-italic small">*Latest Bottom 1000 × 750 pixels</div>
                                    <div class="font-italic small">*Popular/Hot 1000 × 614 pixels</div>
                                </div>
                                <img class="img-thumbnail mt-3 mb-3 d-none" id="preview" src="" alt="Preview">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="image">
                                    <label class="custom-file-label" for="image">Browse file</label>
                                </div>
                                @error('image') <code>{{ $message }}</code> @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Description<span class="text-danger">*</span></label>
                                <textarea name="description" id="description">{{ old('description') }}</textarea>
                                @error('description') <code>{{ $message }}</code> @enderror
                            </div>
                            <div class="form-group">
                                <label for="content">Content<span class="text-danger">*</span></label>
                                <textarea name="content" id="content">{{ old('content') }}</textarea>
                                @error('content') <code>{{ $message }}</code> @enderror
                            </div>
                            <div class="form-group bg-light-custom p-3 rounded">
                                <label for="content" class="font-weight-bold pr-lg-5 mb-0">Set as</label>
                                <div class="custom-control custom-checkbox d-inline-block pr-lg-3">
                                    <input type="checkbox" class="custom-control-input" name="slider" id="slider" value="1" @if(old('slider')) checked="checked" @endif>
                                    <label class="custom-control-label" for="slider">Slider</label>
                                </div>
                                <div class="custom-control custom-checkbox d-inline-block pr-lg-3">
                                    <input type="checkbox" class="custom-control-input" name="hot" id="hot" value="1" @if(old('hot')) checked="checked" @endif>
                                    <label class="custom-control-label" for="hot">Hot</label>
                                </div>
                                <div class="custom-control custom-checkbox d-inline-block">
                                    <input type="checkbox" class="custom-control-input" name="show" id="show" value="1" @if(old('show')) checked="checked" @endif>
                                    <label class="custom-control-label" for="show">Show</label>
                                </div>
                                <div class="custom-control d-inline-block">
                                    <div class="d-inline-block pr-2">
                                        <i class="fas fa-star" onclick="clickRating(1)"></i>
                                        <i class="fas fa-star" onclick="clickRating(2)"></i>
                                        <i class="fas fa-star" onclick="clickRating(3)"></i>
                                        <i class="fas fa-star" onclick="clickRating(4)"></i>
                                        <i class="fas fa-star" onclick="clickRating(5)"></i>
                                    </div>
                                    Rating
                                    <input type="hidden" name="rating" id="rating" value="0">
                                </div>
                            </div>
                            <button type="hidden" class="btn btn-success"><i class="fas fa-plus-circle"></i> Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection