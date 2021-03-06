@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="d-flex align-items-center col-6 offset-3 pt-4 pb-2">
                <div class="pr-3">
                    <img class="rounded-circle w-100" style="max-width: 45px" src="/storage/{{$post->user->profile->image}}">
                </div>
                <div>
                    <h5 class="font-weight-bold m-0" style="font-size: 12pt">
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{$post->user->username}}</span>
                        </a>
                    </h5>
                </div>
            </div>
            <div class="col-6 offset-3">
                <a href="/p/{{$post->id}}">
                    <img class="w-100" src="/storage/{{$post->image}}">
                </a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-6 offset-3">
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{$post->user->username}}</span>
                        </a>
                    </span>
                    {{$post->caption}}
                </p>
            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection
