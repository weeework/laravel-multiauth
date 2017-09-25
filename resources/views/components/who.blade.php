@if (Auth::guard('web')->check())
	<div class="panel panel-default">
	    <div class="panel-heading">User Dashboard</div>

	    <div class="panel-body">
	        @if (session('status'))
	            <div class="alert alert-success">
	                {{ session('status') }}
	            </div>
	        @endif

	        You are logged in, User!
	    </div>
	</div>
@else
	<div class="panel panel-default">
	    <div class="panel-heading">User Home</div>

	    <div class="panel-body">
	        You are logged logout, User!
	    </div>
	</div>
@endif

@if (Auth::guard('admin')->check())
	<div class="panel panel-default">
	    <div class="panel-heading">Admin Dashboard</div>

	    <div class="panel-body">
	        @if (session('status'))
	            <div class="alert alert-success">
	                {{ session('status') }}
	            </div>
	        @endif

	        You are logged in, Admin!
	    </div>
	</div>
@else
	<div class="panel panel-default">
	    <div class="panel-heading">Admin Home</div>

	    <div class="panel-body">
	        You are logged logout, Admin!
	    </div>
	</div>
@endif

