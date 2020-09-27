@extends('layouts.master')

@section('content')
<style>
    .panel-body{
        background-color:#509CDA;
        color:;
    }
    .control-label{
        color: #fff;
    }

   
.textareas {
    height:400cm ;  
}

</style>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>
                            Edit Post

                            <a href="{{ url('admin/posts') }}" class="btn btn-default pull-right"><span class="fa fa-chevron-circle-left author-log-ic"></span>&nbsp; Go Back</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        

                        {{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT', 'class' => 'form-horizontal','enctype'=>'multipart/form-data', )) }}
                            <?php  
                              $title           = $post->title;
                              $body          = $post->body;
                              $meta_tag          = $post->meta_tag;
                              $meta_description          = $post->meta_description;
                              $slug          = $post->slug;
                              $keywords     = $post->keywords;
                              
                              $tags           = $post->tags;                              
                              
                            ?>

                            @include('posts._form')

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fa fa-clipboard  author-log-ic"></span>&nbsp;Update
                                    </button>
                                </div>
                            </div>

                        {{ Form::close() }}
                    </div>
                </div>
            </div>

        </div>
    </div>


<script type="text/javascript">
function readURL(input) {
  if (input.images && input.images[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#imagePreview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

   
</script>
@endsection
