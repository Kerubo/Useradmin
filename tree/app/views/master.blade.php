<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
@include('includes.header')
<div class="container">

	<div id="main" class="row">

			@yield('content')

	</div>
	<div class="sidebar">
		@include('includes.sidebar')
	</div>

	 <!-- <footer class="footer">
		@include('includes.footer')
	</footer> -->
	@include('alert')

</div>
</body>
</html>
