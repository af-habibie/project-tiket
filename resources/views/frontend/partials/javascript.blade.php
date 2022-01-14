<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>

<script>
    $(function () {
        $(".comment-reply-link").on("click", function() {
        $("#comment_reply_parent_id").val(($(this).attr("data-id")));
    });
});
</script>

<script type="text/javascript" src="{{ asset('js/easing.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/1.8.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ui.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/carouFredSel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/superfish.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/customM.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/flexslider-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tweetable.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/timeago.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jflickrfeed.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/mobilemenu.js') }}"></script>
<!--[if lt IE 9]> <script type="text/javascript" src="{{ asset('js/html5.js') }}"></script> <![endif]-->
<script type="text/javascript" src="{{ asset('js/mypassion.js') }}"></script>
