@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @forelse ($posts as $post)
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">{{$post->id}} - {{$post->title}}~ <small>{{$post->user->name}} ({{ $post->user->posts->count() }})</small></div>

                <div class="card-body">
                    {{$post->content}}
                    <br>
                    <a href="{{route('posts.edit',['post'=>$post->id])}}" class="btn btn-info btn-sm">Edit Post</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    Post not found
                </div>
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection


