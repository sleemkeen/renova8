<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">

  @php $routename = Route::currentRouteName(); @endphp

    <title>Renova8-{{ucfirst($routename)}}</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800">

    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="assets/vendor/%40fortawesome/fontawesome-pro/css/all.min.css">
    <!-- Page plugins -->
    <link type="text/css" href="assets/vendor/highlight.js/styles/atom-one-dark.css" rel="stylesheet">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">





    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css">


</head>

@yield('contents')

<body>

    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/in-view/dist/in-view.min.js"></script>
    <!-- Page plugins -->
    <script src="assets/vendor/highlight.js/lib/highlight.js"></script>



    <!-- Theme JS -->

    <script src="assets/js/theme.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
 
    <script type="text/javascript">
        $(window).on("load",function() {
          $(window).scroll(function() {
            var windowBottom = $(this).scrollTop() + $(this).innerHeight();
            $(".fadez").each(function() {
              /* Check the location of each desired element */
              var objectBottom = $(this).offset().top + $(this).outerHeight();
              
              /* If the element is completely within bounds of the window, fade it in */
              if (objectBottom < windowBottom) { //object comes into view (scrolling down)
                if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
              } else { //object goes out of view (scrolling up)
                if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
              }
            });
          }).scroll(); //invoke scroll-handler on page-load
        });
    </script>


</body>
</html>

