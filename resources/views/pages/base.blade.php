<!doctype html>
<html lang="nl">
@include('fragments.header')
<body>
	<main>
		<div class="wrapper">
			@yield('content')
		</div>
	</main>

	<footer>
		@include('fragments.footer')
	</footer>
</body>
</html>