<nav
	class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button">
				<i class="fas fa-bars"></i>
			</a>
		</li>

		@include('adminlte::layouts.partials.header_menu')

	</ul>

	<!-- Right navbar links -->
	<ul
		class="navbar-nav ml-auto">
		@yield('header')
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown" href="#">
				<span>
					@auth
						{{ Auth::user()->name }}
					@endauth
					@guest
						Guest
					@endguest
				</span>
				&nbsp;
				<i class="far fa-user"></i>
			</a>

            @auth
			<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
				<a href="{{ route('dashboard.profile') }}" class="dropdown-item">
					<i class="fas fa-user mr-2"></i>
					Profile
				</a>
				<a href="{{ route('dashboard.profile_edit_password') }}" class="dropdown-item">
					<i class="fas fa-cog mr-2"></i>
					Ubah Password
				</a>
				<div class="dropdown-divider"></div>
				<a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
					<i class="fas fa-sign-out-alt mr-2"></i>
					Logout
				</a>
			</div>
            @endauth

		</li>
	</ul>
</nav>
