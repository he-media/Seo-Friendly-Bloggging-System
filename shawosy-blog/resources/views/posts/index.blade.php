@extends('layouts.master')

@section('content')
<style>
    .panel-body{
        background-color:;
        color:;
    }
</style>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>
                            Posts

                            <a href="{{ url('admin/posts/create') }}" class="btn btn-default pull-right"><span class="fa fa-plus-square author-log-ic"></span>&nbsp;Create New</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><span><h3>Title</h3></span></th>
                                    <th><span><h3>Body</h3></span></th>
                                    
                                    
                                    <th><span><h3>Tags</h3></span></th>
                                    <th><span><h3>Published</h3></span></th>
                                    <th><span><h3>Action</h3></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                    <tr>
                                        <td><span style="font-size:18px;">{{ $post->title }}</span></td>
                                        <td><span style="font-size:18px;">{!! str_limit($post->body, 60) !!}</span></td>
                                        
                                        
                                        
                                        <td><span style="font-size:18px;">{{ $post->published }}</span></td>
                                        <td>
                                            @if (Auth::user()->is_admin)
                                                @php
                                                    if($post->published == 'Yes') {
                                                        $label = 'Draft';
                                                    } else {
                                                        $label = 'Publish';
                                                    }
                                                @endphp
                                                <a href="{{ url("/admin/posts/{$post->id}/publish") }}" data-method="PUT" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-warning">{{ $label }}</a>
                                            @endif
                                            <a href="{{ url("/admin/posts/{$post->id}") }}" class="btn btn-xs btn-success"><span class="fa fa-eye author-log-ic"></span>&nbsp;Show</a>
                                            <a href="{{ url("/admin/posts/{$post->id}/edit") }}" class="btn btn-xs btn-info"><span class="fa fa-edit author-log-ic"></span>&nbsp;Edit</a>
                                            <a href="{{ url("/admin/posts/{$post->id}/delete") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-danger"><span class="fa fa-trash author-log-ic"></span>&nbsp;Delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No post available.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {!! $posts->links() !!}

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
