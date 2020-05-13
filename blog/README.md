<!-- get dynamic background image inline style -->
	<!--** home page & post page -->
	@section('bg-img', asset(''))
	<!--** header.blade.php -->
	<header class="masthead" style="background-image: url(@yield('bg-img'))">
<!-- link redirection -->
	<a href="{{ url('/post') }}">
<!-- check the route list in terminal -->
	php artisan route:list

<!-- #3 table structure -->
- the slug should not be greater than 100 char for seo purposes
category 
	- type of the blog
tag
	- describe the content