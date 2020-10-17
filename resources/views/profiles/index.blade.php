@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row p-5">
            <div class="col-3">
                <img class="rounded-circle img-thumbnail" src="/storage/{{$user->profile->image}}">
            </div>
            <div class="col-9 pl-5 pb-5">
                <div class="d-flex justify-content-between align-items-baseline pb-2">
                    <div class="d-flex align-items-center">
                        <div class="h1">{{$user->username}}</div>
                        <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                    </div>

                    @can('update', $user->profile)
                        <a href="/p/create"><strong>Create new Post</strong></a>
                    @endcan
                </div>

                <div class="d-flex">
                    <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                    <div class="pr-5"><strong>604k</strong> followers</div>
                    <div class="pr-5"><strong>434</strong> following</div>
                </div>

                <div class="pt-4"><strong>{{$user->profile->title}}</strong></div>
                <div>{{$user->profile->description}}</div>
                @if($user->profile->url != null)
                    <div><a href="{{$user->profile->url}}" target="_blank">{{$user->profile->url}}</a></div>
                @endif
            </div>
        </div>

        <hr>

        <div class="row pt-3">
            @foreach($user->posts as $post)
                <div class="col-4 p-3">
                    <a href="/p/{{$post->id}}">
                        <img class="w-100" src="/storage/{{$post->image}}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
