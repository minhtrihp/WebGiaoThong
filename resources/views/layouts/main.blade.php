<!DOCTYPE html>
<html lang="">
<head>
    @include('user_view/import')
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
</body>
</html>
