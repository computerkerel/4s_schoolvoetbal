<nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Schoolvoetbal</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-link @if(request()->is('/')) active @endif" aria-current="page" href="{{route('home')}}">Home</a>
				<a class="nav-link @if(request()->is('events')) active @endif" href="{{route('events')}}">Wedstrijden</a>
				<a class="nav-link @if(request()->is('teams')) active @endif" href="{{route("teams")}}">Teams</a>
				<a class="nav-link @if(request()->is('spelers')) active @endif" href="{{route("players")}}">Spelers</a>
                <a class="nav-link @if(request()->is('scheidsrechters')) active @endif" href="{{route("scheidsrechters")}}">Scheidsrechters</a>
				<a class="nav-link @if(request()->is('fields')) active @endif" href="{{route("fields")}}">Velden</a>
			</div>
		</div>

		@guest
		<div class="d-flex navbar-nav">
			<a href="{{route('usertype')}}" class="nav-link">Registreren</a>
			<a href="{{route('login')}}" class="nav-link">Inloggen</a>
		</div>
		@endguest

		@auth
			<div class="d-flex navbar-nav">
				<form action="{{route('logout')}}" method="POST">
					@csrf
					<a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault();
					   this.closest('form').submit();">Uitloggen</a>
				</form>
			</div>
		@endauth
	</div>
</nav>
