
@extends('ui.layouts.app')
<!-- change your master layouts here -->
@section('title', 'Blog | thedsolution')
@section('description', '')
@section('keywords', 'Blog | thedsolution')
@section('author', 'Blog | thedsolution')

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
            @foreach ($posts as $post)
            <div class="single-blog-post">
              
                <div class="date_more">
                  
                  <div class="text-holder">
                    <h3 class="blog-title">{{ $post->title }}</h3>
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
                  <p>{!! str_limit($post->body, 700) !!}</p>
                   <a class="readmore" href="{{ url("/Posts/{$post->slug}") }}">READ MORE</a> </div>
             
            </div>
            @endforeach
            <!-- <div class="single-blog-post">
              
                <div class="date_more">
                  <div class="overlay-style-two"> 10<br />
                    jan </div>
                  <div class="text-holder">
                    <h3 class="blog-title">5 Tips Of Hiring Office Cleaners</h3>
                     <div class="meta-info clearfix">
                     <ul class="post-info">
                        <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Mano</a></li>
                        <li><i class="fa fa-eye" aria-hidden="true"></i><a href="#">95 Views</a></li>
                        <li><i class="fa fa-comment-o" aria-hidden="true"></i> <a href="#">5 Comments</a></li>
                        <li><i class="fa fa-tags" aria-hidden="true"></i><a href="#">Business, Seminar</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="text">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <a class="readmore" href="#">READ MORE</a> </div>
              </div> -->
            
            <nav aria-label="Page navigation" class="text-center">
              <ul class="pagination">
                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> Prev</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">Next <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
              </ul>
            </nav>
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
            <!-- <div class="single-sidebar">
              <div class="sec-title">
                <h3>Categories</h3>
                <span class="border"></span> </div>
              <ul class="categories clearfix">
                <li><a href="#">Cleaning services</a></li>
                <li><a href="#">Electrical services</a></li>
                <li><a href="#">Plumbing services</a></li>
                <li><a href="#">Appliances services</a></li>
                <li><a href="#">Carpentry services</a></li>
                <li><a href="#">Apartment Cleaning</a></li>
                <li><a href="#">Garden services</a></li>
                <li><a href="#">Car services</a></li>
                <li><a href="#">Pest Control services</a></li>
                <li><a href="#">painting services</a></li>
              </ul>
            </div>
            <div class="single-sidebar">
              <div class="sec-title">
                <h3>Latest Post</h3>
                <span class="border"></span> </div>
              <ul class="latest-post">
                <li>
                  <div class="img-holder"> <img src="{{asset('assets/dsolution/images/blog/post1.png')}}" alt="post1" /> </div>
                  <div class="title-holder"> <a href="#">
                    <h5 class="post-title"> Ground on the shore of this on uncharted desert </h5>
                    </a>
                    <h6 class="post-date"> 5 mins ago </h6>
                  </div>
                </li>
                <li>
                  <div class="img-holder"> <img src="{{asset('assets/dsolution/images/blog/post2.png')}}" alt="post2" /> </div>
                  <div class="title-holder"> <a href="#">
                    <h5 class="post-title"> Five passengers set sail that ay hour tour a tour. </h5>
                    </a>
                    <h6 class="post-date"> 1 week ago </h6>
                  </div>
                </li>
                <li>
                  <div class="img-holder"> <img src="{{asset('assets/dsolution/images/blog/post3.png')}}" alt="post3" /> </div>
                  <div class="title-holder"> <a href="#">
                    <h5 class="post-title"> Five passengers set sail that ay three hour tour. </h5>
                    </a>
                    <h6 class="post-date"> 2 days ago </h6>
                  </div>
                </li>
              </ul>
            </div>
            <div class="single-sidebar popular-tag">
              <div class="sec-title">
                <h3>Tags</h3>
                <span class="border"></span> </div>
              <ul class="popular-tag">
                <li><a href="#">Cleaning</a></li>
                <li><a href="#">Electrical</a></li>
                <li><a href="#">Appliances</a></li>
                <li><a href="#">Plumbing</a></li>
                <li><a href="#">Carpentry</a></li>
                <li><a href="#">Vehicle Care</a></li>
                <li><a href="#">Pest Control</a></li>
                <li><a href="#">Paintin</a></li>
              </ul>
            </div> -->
          </div>
        </div>
        <!--End Sidebar Wrapper--> 
      </div>
    </div>
  </section>
  <!--Blog Page End--> 
  
  
  
@endsection
