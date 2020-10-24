@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img class="w-100" src="/storage/{{$post->image}}">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img class="rounded-circle w-100" style="max-width: 70px" src="/storage/{{$post->user->profile->image}}">
                    </div>
                    <div class="d-flex align-items-center">
                        <h5 class="font-weight-bold m-0" style="font-size: 15pt">
                            <a href="/profile/{{$post->user->id}}">
                                <span class="text-dark">{{$post->user->username}}</span>
                            </a>
                        </h5>
                        <follow-button user-id="{{$post->user->id}}" follows="{{$follows}}"></follow-button>
                    </div>
                </div>

                <hr>

                <div>
                    <p> Created at: {{$post->created_at}}</p>
                </div>

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
    </div>
</div>
@endsection
