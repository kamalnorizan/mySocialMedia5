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
                        <div class="row">
                            <div class="col-md-12">
                                {{-- boottext --}}
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    {!! Form::label('title', 'Title') !!}
                                    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('title') }}</small>
                                </div>
                            </div>
                            <div class="col-md-12 pt-3">
                                {{-- boottextarea --}}
                                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                                    {!! Form::label('content', 'Content') !!}
                                    {!! Form::textarea('content', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('content') }}</small>
                                </div>
                            </div>
                        </div>



                        @if (!isset($post))
                       <div class="btn-group pull-right pt-3">
                           {!! Form::submit("Create Post", ['class' => 'btn btn-success']) !!}
                       </div>
                        @else
                        <div class="btn-group pull-right pt-3">
                            {!! Form::submit("Update Post", ['class' => 'btn btn-success']) !!}
                            <button class="btn btn-danger" type="button" data-id="{{$post->id}}" id="rmvBtn">Remove</button>
                        </div>
                        @endif

                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy','post'=>$post->id], 'id'=>'deleteForm' ]) !!}

{!! Form::close() !!}
@endsection

@section('script')

<script>
   $('#rmvBtn').click(function (e) {
        e.preventDefault();
        confirm('Are you sure you want to delete this post?') ? $('#deleteForm').submit() : false;
   });
</script>
@endsection
