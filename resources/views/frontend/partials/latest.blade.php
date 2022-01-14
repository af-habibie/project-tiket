@if (count($postsLatest1) > 0)
    @foreach ($postsLatest1 as $item)
        <div class="slider2">
            <div class="badg">
            <p><a href="{{ route('news.details', $item->slug) }}">Latest.</a></p>
        </div>
        <a href="{{ route('news.details', $item->slug) }}"><img src="{{ asset('img/post/'.$item->image) }}" alt="{{ $item->title }}" /></a>
        <p class="caption"><a href="{{ route('news.details', $item->slug) }}">{{ $item->title }}</a></p>
    </div>
    @endforeach
@endif

@if (count($postsLatest2) > 0)
    @foreach ($postsLatest2 as $item)
        <div class="slider3">
            <a href="{{ route('news.details', $item->slug) }}"><img src="{{ asset('img/post/'.$item->image) }}" alt="{{ $item->title }}" /></a>
        <p class="caption"><a href="{{ route('news.details', $item->slug) }}">{{ $item->title }}</a></p>
        </div>
    @endforeach
@endif