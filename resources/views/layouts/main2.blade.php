<!DOCTYPE html>
<html lang="">
<head>
    @include('user_view/import2')
</head>
<body>
	<div class="container">
		<div class="news-paper">
            <!--Header-->
            @include('user_view.header')
            @include('user_view.menu')
            <!--Content-->
            @yield('content')
            <!--Footer-->
            @include('user_view.footer')
        </div>
    </div>

    <!-- Javascript files -->
		<!-- jQuery -->
		<script src="front/js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="front/js/bootstrap.min.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="front/js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="front/js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="front/js/custom.js"></script>
</body>
</html>
