<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include('header')
</head>
<body>
@include('nav')
 @yield('admin_body')
@yield('user_body')


</body>