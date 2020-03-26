<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.html', ['titleHtml'=> $title])
    @include('partials.styles')
</head>
<body>
	<header>
		@include('partials.header')
	</header>
	<main>
		@yield('content')
	</main>
	<footer>
		@include('partials.footer')
	</footer>

</body>
</html>
