@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row p-5">
            <div class="col-3">
                <img class="rounded-circle img-thumbnail" src="Example image">
            </div>
            <div class="col-9 pl-5 pb-5">
                <div><h1>{{$user->username}}</h1></div>

                <div class="d-flex">
                    <div class="pr-5"><strong>470</strong> posts</div>
                    <div class="pr-5"><strong>604k</strong> followers</div>
                    <div class="pr-5"><strong>434</strong> following</div>
                </div>

                <div class="pt-4"><strong>{{$user->profile->title}}</strong></div>
                <div>{{$user->profile->description}}</div>
                @if($user->profile->url != null)
                    <div><a href="http://{{$user->profile->url}}" target="_blank">{{$user->profile->url}}</a></div>
                @endif
            </div>
        </div>

        <div class="text-center"><a href="/p/create">Create new Post</a></div>

        <div class="row pt-3">
            <div class="col-4"><img class="w-100" src="Example image"></div>
            <div class="col-4"><img class="w-100" src="Example image"></div>
            <div class="col-4"><img class="w-100" src="Example image"></div>
        </div>
    </div>
@endsection
