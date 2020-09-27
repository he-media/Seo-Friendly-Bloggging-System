@extends('ui.layouts.app')
<!-- change your master layouts here -->
@section('title', $post->title)
@section('keywords', $post->keywords)
@section('meta_tag', $post->meta_tag)
@section('meta_description', $post->meta_description)

@section('author', 'thedsolution')


@section('content')

<!--Page Title Section Satrt-->
  <div id="page_title">
    <div class="container text-center">
      <div class="panel-heading">blog</div>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Blog</li>
      </ol>
    </div>
  </div>
  <!--Page Title Section End--> 
  
  <!--Blog Page Start-->

   <section id="blog-area" class="blog-with-sidebar-area">
    <div class="container">
     <div class="row">
        <div class="col-md-9 col-sm-8 col-xs-12">
         <div class="blog-post">
            <!--Start single blog post-->
            
            <div class="single-blog-post">
              
                <div class="date_more">
                  
                  <div class="text-holder">
                    <h3>{{ $post->title }}</h3>
                    <div class="meta-info clearfix">
                      <ul class="post-info">
                        <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Mano</a></li>
                        <li><i class="fa fa-eye" aria-hidden="true"></i><a href="#">95 Views</a></li>
                        <li><i class="fa fa-comment-o" aria-hidden="true"></i> <a href="#">5 Comments</a></li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="text">
                  <p>{!! $post->body !!}</p>
                  </div>
                  <p>Tags:</p>{!! $post->tags !!}
                
             
            </div>
            
            
            
            
          </div>
        </div>
        <!--Start sidebar Wrapper-->
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="sidebar-wrapper">
            <div class="single-sidebar">
              <form class="search-form" action="#">
                <input placeholder="Search..." type="text">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </div>
            
          </div>
        </div>
        <!--End Sidebar Wrapper--> 
      </div>
    </div>
  </section>
  <!--Blog Page End--> 
  
  



      
    </div>
  </section>


@endsection
