@if(Auth::check())
	<li class="dropdown">
		<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i>{{ Auth::user()->user}} <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="{{ url('admin/home') }}">Ingresar Sistema</a></li>
			<li><a href="{{ route('logout') }}">Finalizar Sesión</a></li>
		</ul>
	</li>
@else
	<li class="dropdown">
		<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="fase"><i class="fa fa-user"></i><span class="cared"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="{{ route('login-get') }}">Iniciar Sesión</a></li>
			<li><a href="{{ route('register-get') }}">Registrate</a></li>
		</ul>
	</li>
@endif
