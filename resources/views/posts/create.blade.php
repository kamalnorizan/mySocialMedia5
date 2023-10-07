@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                    @if (isset($post))
                    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
                    @else
                    {{-- bootform --}}
                    {!! Form::open(['method' => 'POST', 'route' => 'posts.store']) !!}
                    @endif

                        {{-- boottext --}}
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            {!! Form::label('title', 'Title') !!}
                            {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        </div>

                        {{-- boottextarea --}}
                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            {!! Form::label('content', 'Content') !!}
                            {!! Form::textarea('content', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('content') }}</small>
                        </div>
                        @if (!isset($post))
                       <div class="btn-group pull-right">
                           {!! Form::submit("Create Post", ['class' => 'btn btn-success']) !!}
                       </div>
                        @else
                        <div class="btn-group pull-right">
                            {!! Form::submit("Update Post", ['class' => 'btn btn-success']) !!}
                        </div>
                        @endif

                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

