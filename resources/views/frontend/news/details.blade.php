@extends("frontend.layout.template")

@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="breadcrumbs column">
        <p>
            <a href="{{ route('home') }}">Home.</a> \\
            {{ $newsPost->title }}
        </p>
    </div>
    <div class="main-content">
        <div class="column-two-third single">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src={{ asset('img/post/'.$newsPost->image) }} alt="{{ $newsPost->title }}" />
                    </li>
                </ul>
            </div>
                        
            <h1 class="title">{{ $newsPost->title }}</h1>
                <span class="meta">{!! $newsPost->created_at->format('d F, Y') !!}     \\   
                    <a href="#">{{ $newsPost->category->title }}</a>   \\   
                    <a href="#">No Coments.</a>
                </span>
                {!! $newsPost->content !!}
                <ul>
                    <li><a href="#"><span class="twitter">Tweet</span></a></li>
                    <li><a href="#"><span class="pinterest">Pin it</span></a></li>
                    <li><a href="#"><span class="facebook">Like</span></a></li>
                </ul>
                    
                <div class="authorbox">
                    <img src="{{ asset('img/users/'.($newsPost->user->photo == '' ? 'noimage.jpg' : $newsPost->user->photo)) }}" alt="{{ $newsPost->user->name }}" />
                    <h6>{{  $newsPost->user->name  }}</h6>
                    <p>{{  $newsPost->user->email  }}</p>
                    <p class="mb-0"> Joined : {{  $newsPost->user->created_at->format('d F, Y')  }} - ({{  $newsPost->user->created_at->diffForHumans() }})</p>     
                </div>
                        
                @if (count($relatedPost) > 0)
                    <div class="relatednews">
                        <h5 class="line"><span>Related News.</span></h5>
                        <ul>
                            @foreach ($relatedPost as $item)
                            <li>
                                <a href="{{ route('news.details', $item->slug) }}">
                                    <img src="{{ asset('img/post/'.$item->image) }}" alt="{{ $item->title }}" class="alignleft" /></a>
                                <p>
                                    <span>{!! $item->created_at->format('d F, Y') !!}</span>
                                    <a href="#">{{ $item->title}}</a>
                                </p>
                                <span class="rating"><span style="width:{{ $item->rating*20 }}%;"></span></span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    
            <div class="comments">
                <h5 class="line"><span>Comments.</span></h5>
                @if (count($comments) > 0)
                    <ul>
                        @foreach ($comments as $item)
                            <li>
                                <div>
                                    <div class="comment-avatar">
                                        <img 
                                            src="{{ asset('img/users/'.($item->user->photo == '' ? 'noimage.jpg' : $item->user->photo)) }}"
                                            alt="{{ $item->user->name }}" />
                                    </div>
                                    <div class="commment-text-wrap">
                                        <div class="comment-data">
                                            <p>
                                                <a href="#" class="url">{{ $item->user->name }}</a> <br /> 
                                                <span>
                                                    {!! $item->created_at->format('F d, Y') !!}
                                                    <a href="#reply" class="comment-reply-link" data-id="{{ $item->id }}">Reply</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="comment-text">{{ $item->comment }}</div>
                                    </div>
                                </div>
                                @if (count($item->children) > 0)
                                    <ul class="children">
                                        @foreach ($item->children as $row)
                                            <li>
                                                <div>
                                                    <div class="comment-avatar">
                                                        <img 
                                                        src="{{ asset('img/users/'.($row->user->photo == '' ? 'noimage.jpg' : $row->user->photo)) }}" 
                                                        alt="{{ $row->user->name }}" />
                                                    </div>
                                                    <div class="commment-text-wrap">
                                                        <div class="comment-data">
                                                            <p>
                                                                <a href="#" class="url">{{ $row->user->name }}</a> <br /> 
                                                                <span>
                                                                    {!! $row->created_at->format('F d, Y') !!}
                                                                    <a href="#reply" class="comment-reply-link" data-id="{{ $row->id }}">Reply</a>
                                                                </span>
                                                            </p>
                                                        </div>
                                                        <div class="comment-text">{{ $row->comment }}</div>
                                                    </div>
                                                </div>
                                                            {{-- Komentar Level 3 --}}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                            No Comments Available For This Post <strong class="text-yellow">{{ $newsPost->title }}</strong>
                        @endif
                    </div>
                    <div class="comment-form" id="reply">
                        <h5 class="line"><span>Leave a reply.</span></h5>
                        @guest
                            <span class="text-yellow">Login To Post A Comment</span>
                        @endguest
                        @auth
                            @if (Auth::user()->is_admin == 2)
                            <form action="{{ route('comment.store') }}" method="POST">
                                @csrf
                                <div class="form">
                                    <label>Name*</label>
                                    <div class="input">
                                        <input type="text" class="name" value="{{ Auth::user()->name }}" name="name" readonly="readonly" />
                                    </div>
                                </div>
                                <div class="form">
                                    <label>Email*</label>
                                    <div class="input">
                                        <input type="text" class="name" value="{{ Auth::user()->email }}" name="email" readonly="readonly" />
                                    </div>
                                </div>
                                <div class="form">
                                    <label>Comment*</label>
                                    <textarea rows="10" cols="20" name="comment" @error("comment") class="is-invalid-custom" @enderror></textarea>
                                </div>
                                @error('comment')
                                    <div class="form mb-0-custom">
                                        <div class="text-danger-custom"><i class="fas fa-exclamation-triangle"></i> {{ $message }}</div>    
                                    </div>
                                @enderror
                            <input type="submit" class="post-comment" value="Post Comment" />
                            <input type="hidden" name="author_id" value="{{ $newsPost->user_id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="post_id" value="{{ $newsPost->id }}">
                            <input type="hidden"name="parent_id" id="comment_reply_parent_id" value="">      
                        </form>
                    @endif
                @endauth
            </div>
        </div>
        <!-- /Single -->
    </div>
@endsection

@section('css')
    <style>.text-yellow{color:#FFC000}
    .is-invalid-custom{border:1px solid #FF0000 !important;} 
    .text-danger-custom{color: #FF0000 !important;}
    .mb-0-custom{margin-bottom:0 !important;}
    </style>
@endsection