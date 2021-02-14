@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" alt="" class="rounded-circle w-100">
        </div>

        <div class="col-9 pt-5">
            
            <div class="d-flex justify-content-between align-items-baseline">
                
                <div class="d-flex mb-4">
                    
                    <div class="h4">{{$user->username}}</div>
                    
                    <follow-button></follow-button>

                </div>

                @can('update' , $user->profile)
                    <a href="/p/create">Add new Post</a>
                @endcan

            </div>

            @can('update' , $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan            

            <div class="d-flex pt-1">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>25.9k</strong> followers</div>
                <div class="pr-5"><strong>320</strong> following</div>
            </div>

            <div class="pt-4">
                <div class="font-weight-bold">{{$user->profile->title}}</div>

                <div>{{$user->profile->description}}</div>
                
                
                <a href="{{$user->profile->url}}">{{$user->profile->url}}</a>
                

            </div>
        </div>
    </div>

    <div class="row pt-4">
        
        @foreach($user->posts as $post )
            <div class="col-4 mb-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" alt="" class="w-100">
                </a>
            </div>
        @endforeach

    </div>
</div>
@endsection
