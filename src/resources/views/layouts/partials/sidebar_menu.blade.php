<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<a href="{{ route('dashboard.index') }}" class="brand-link">
		<img src="{{ env('APP_ICON', '') }}" alt="icon" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">
			{{ config('app.name', 'my app') }}
		</span>
	</a>


	<div class="sidebar">
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @yield('sidebar_menu', 'sidebar_menu use lavary')
			</ul>
		</nav>
	</div>
</aside>
