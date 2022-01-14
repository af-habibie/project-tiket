<!DOCTYPE html>
@include("frontend.partials.head")
<body>
    <div class="body-wrapper">
        <div class="controller">
            <div class="controller2">
                @include("frontend.partials.header")
                <section id="content">
                    <div class="container">
                        @yield("content")
                    </div>    
                </section>
                @include("frontend.partials.footer")
            </div>
        </div>
    </div>
    @include("frontend.partials.javascript")
</body>
</html>