<html lang="en">

<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Webpixels">

	@php $routename = Route::currentRouteName(); @endphp

		<title>Renova8-{{ucfirst($routename)}}</title>

		<!-- Favicon -->
		<link rel="icon" href="{{asset('assets/img/brand/favicon.png')}}" type="image/png">

		<!-- Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800">

		<!-- Font Awesome 5 -->
		<link rel="stylesheet" href="{{asset('assets/vendor/%40fortawesome/fontawesome-pro/css/all.min.css')}}">
		<!-- Page plugins -->
		<link type="text/css" href="{{asset('assets/vendor/highlight.js/styles/atom-one-dark.css')}}" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">


		<link rel="stylesheet" href="{{asset('assets/css/nprogress.css')}}">

		<link rel="stylesheet" href="{{asset('assets/css/sweetalert.css')}}">
		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">


</head>

@yield('contents')

<body>

		<script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('assets/vendor/in-view/dist/in-view.min.js')}}"></script>
		<!-- Page plugins -->
		<script src="{{asset('assets/vendor/highlight.js/lib/highlight.js')}}"></script>
		<script src="{{asset('assets/js/form-validation.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/nprogress.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/sweetalert.min.js')}}"></script>




		<!-- Theme JS -->

		<script src="{{asset('assets/js/theme.min.js')}}"></script>

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

		<script type="text/javascript">
			$('#addinfo').submit(function(event) {

	    jQuery('body').show();
	    jQuery('.version').text(NProgress.version);
	    NProgress.start();
				event.preventDefault()
				/* Act on the event */
				var form =  $( "form" ).serialize();
				$.ajax({
					url: '/postenq',
					type: 'post',
					dataType: 'json',
					data: form,
				})
				.done(function() {
					toastr.options.progressBar = true;
			toastr.options.showMethod = 'slideDown';
			toastr.success("Enguiry submitted successfully");
			setTimeout(function() { NProgress.done(); jQuery('.fade').removeClass('out'); }, 1000);
			 $('#myModal').modal('toggle');
		
				})
				
			setTimeout(function() { NProgress.done(); jQuery('.fade').removeClass('out'); }, 1000);
			});
		</script>


</body>
</html>

