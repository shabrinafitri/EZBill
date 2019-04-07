<section class="sidebar" style="height: auto;">
	<div class="user-panel">
		<div class="pull-left image">
			<img src="{{ asset('/AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
    	</div>
    	<div class="pull-left info">
      		<p>{{ Auth::user()->name }}</p>
      		<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    	</div>
	</div>
	<ul class="sidebar-menu tree" data-widget="tree">
	    <li class="header">MAIN NAVIGATION</li>
	    <li>
	    	<a href="{{ route('admin.dashboard') }}"><i class="fa fa-th"></i><span>Dashboard</span></a>
	    </li>
	    <li>
	      	<a href="{{ route('admin.index.customer') }}"><i class="fa fa-th"></i><span>Customer</span></a>
	    </li>
	    <li>
	      	<a href="{{ route('admin.index.tariff') }}"><i class="fa fa-th"></i><span>Tariff</span></a>
	    </li>
	    <li>
	      	<a href="{{ route('admin.index.utilization') }}"><i class="fa fa-th"></i><span>Utilization</span></a>
	    </li>
	    <li>
	      	<a href="{{ route('admin.index.billing') }}"><i class="fa fa-th"></i><span>Billing</span></a>
	    </li>
	    <li>
	      	<a href="{{ route('admin.index.payment') }}"><i class="fa fa-th"></i><span>Payment</span></a>
	    </li>
  	</ul>
</section>