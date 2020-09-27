<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shawosy=blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="{{asset('assets/dsolution/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/dsolution/css/style.css')}}" rel="stylesheet" />
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet'">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
      
</head>


    <body>
              
        <!-- Loader -->
        <div class="all-content-wrapper">
        <!-- Navigation Bar-->
        <!-- your header here -->
        <!-- End Navigation Bar-->
          @yield('content')
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        
 <script src="https://cdn.tiny.cloud/1/invalid-origin/tinymce/5.4.2-90/tinymce.min.js" referrerpolicy="origin">
<script type="text/javascript">
    const url='<?php echo URL('/'); ?>';
</script>
   
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
   
      
    
     
    
    
     <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
    });
  </script>
  
     @endif
    <!-- your footer here -->

        @yield('extrajs')
    </body>

</html>