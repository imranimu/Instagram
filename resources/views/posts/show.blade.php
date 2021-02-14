@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-5">

        <div class="col-7">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">        
        </div>

        <div class="col-5">
            <div class="row pt-4">                
                <div class="col-3">
                    <img src="/storage/{{$post->user->profile->image}}" alt="" class="rounded-circle w-100">
                </div>                    
                <div class="col-9">                    
                    <h3>{{$post->user->username}}</h3>                    
                    <p>{{$post->caption}}</p>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
