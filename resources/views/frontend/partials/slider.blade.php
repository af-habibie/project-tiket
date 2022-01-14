<section id="slider">
    <div class="container">
        <div class="main-slider">
            <div class="badg">
                <p><a href="#">Popular.</a></p>
            </div>
            <div class="flexslider">
                <ul class="slides">
                    @if (count($postsSlider) > 0)
                        @foreach ($postsSlider as $item)
                            <li>
                                <a href="{{ route('news.details', $item->slug) }}"><img src="{{ asset('img/post/'.$item->image) }}" alt="{{ $item->title }}" />
                                <p class="flex-caption"><a href="{{ route('news.details', $item->slug) }}">{!! $item->title !!}</a></p>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
        @include("frontend.partials.latest")
    </div>    
</section>