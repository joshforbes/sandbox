<script id="comment-template" type="text/x-handlebars-template">
    {{--<article class="comment">--}}
        {{--<h3>@{{ name }}</h3>--}}
        {{--<p>@{{ body }}</p>--}}
    {{--</article>--}}
    <article class="comment row">
        <div class="avatar-wrap col-md-1">
            <img src="http://lorempixel.com/60/60/?v={!! rand() !!}" alt=""/>
        </div>
        <div class="comment-wrap col-md-10">
            <span class="user-name">@{{ name }}</span>
            <span class="timestamp">@{{ time }}</span>
            <p>@{{ body }}</p>
        </div>
    </article>
</script>