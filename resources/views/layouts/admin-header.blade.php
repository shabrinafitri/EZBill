<header class="main-header">
	<a href="/" class="logo">
		<span class="logo-mini"><b>E</b>Z</span>
    	<span class="logo-lg"><b>EZ</b>Bill</span>
	</a>
	<nav class="navbar navbar-static-top">
	    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
	      <span class="sr-only">Toggle navigation</span>
	    </a>
	    <div class="navbar-custom-menu">
      		<ul class="nav navbar-nav">
		        <li class="dropdown user user-menu">
		          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="hidden-xs">{{ Auth::user()->name }}</span></a>
		          	<ul class="dropdown-menu">
		          		<li class="user-footer">
			            	<div class="pull-right">
			                	<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
			                	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                            </div>
			            </li>
		            </ul>
		        </li>
		    </ul>
		</div>
	</nav>
</header>