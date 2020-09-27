@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>
                            {{ $post->title }}

                            <a href="{{ url('admin/posts') }}" class="btn btn-default pull-right">Go Back</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <p>{{ $post->body }}</p>

                        
                        <p><strong>Tags: </strong>{{ $post->tags }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
