@extends('layouts.app')

@section('content')
<div class="container">
    @if($posts->count() > 0)
        @foreach($posts as $post)
            <div class="row">
                <div class="col-6 offset-3 pt-5">
                    <div>
                        <div class="d-flex align-items-center">
                            <div class="pr-3">
                                <img src="{{$post->user->profile->profileImage()}}" alt="profile-pic" class="w-100 rounded-circle" style="max-width: 50px">
                            </div>
                            <div>
                                <h5 class="font-weight-bold">
                                    <a style="color: #1b4b72" href="/profile/{{ $post->user->id }}">{{$post->user->username}}</a>
                                </h5>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <h5> <span class="font-weight-bold">
                        <a style="color: #1b4b72" href="/profile/{{ $post->user->id }}">{{$post->user->username}}</a>
                    </span>
                        @if(strlen($post->caption)  > 60)
                            {{ substr($post->caption, 0, 60) }}...
                        @else
                            {{$post->caption}}
                        @endif
                    </h5>
                </div>
            </div>
            <div class="row">
                <div  class="col-6 offset-3 py-3 ">
                    <a href="/p/{{ $post->id }}">
                        <img id="post-pic" src="/storage/{{$post->image}}" alt="full-insta-pic" class="w-100 h100">
                    </a>
                </div>
            </div>
        @endforeach
    @else
        There are no posts, *cricket noises*
    @endif

    <div class="row">
        <div class="col-12 d-flex justify-content-center pt-5">
            {{$posts->links()}}
        </div>
    </div>

</div>
@endsection
