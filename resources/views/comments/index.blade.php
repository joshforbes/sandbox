@extends('app')

@section('content')

    <section class="col-md-8">
    @foreach($comments as $comment)
        <article class="comment row">
            <div class="avatar-wrap col-md-1">
                <img src="http://lorempixel.com/60/60/?v={!! rand() !!}" alt=""/>

            </div>
            <div class="comment-wrap col-md-10">
                <span class="user-name">{!! $comment->name !!}</span>
                <span class="timestamp">{!! $comment->created_at->diffForHumans() !!}</span>
                <p>{!! $comment->body !!}</p>
            </div>
        </article>
    @endforeach
    </section>

    <div class="col-md-4 comment-form">
        @include('partials.commentForm')
    </div>

@include('partials.commentHandlebars')

@endsection