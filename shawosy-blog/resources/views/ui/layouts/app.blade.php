<!DOCTYPE html>
<html>
   <head profile="">
     @include('ui.includes.uihead') 
     <title> @yield('title')</title>
     <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon" />

     <meta name="tag" content="@yield('meta_tag')">
     <meta name="description" content="@yield('meta_description')">
    <meta name="Keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">
   </head>
   
   <body class="common home">
      <div id="wrapper" class="home_two">
         
         @include('ui.includes.uiheader')
         
         @yield('content')
         
         @include('ui.includes.uifooter')
         
          
        
      </div>
      
     @yield('extrajs')
   </body>
</html>