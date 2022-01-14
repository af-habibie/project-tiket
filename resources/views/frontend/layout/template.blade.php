<!DOCTYPE html>
@include("frontend.partials.head")
<body>
    <div class="body-wrapper">
        <div class="controller">
            <div class="controller2">
                @include("frontend.partials.header")
                @if( Route::currentRouteName() != "news.category" && Route::currentRouteName() != "news.details") 
                @include("frontend.partials.slider") 
                @endif
                <section id="content">
                    <div class="container">
                        @yield("content")
                        @include("frontend.partials.sidebar")
                    </div>    
                </section>
                @include("frontend.partials.footer")
            </div>
        </div>
    </div>
    @include("frontend.partials.javascript")
</body>
</html>