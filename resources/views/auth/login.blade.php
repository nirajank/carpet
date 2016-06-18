@extends('app')

@section('content')

<div class="container-fluid" >
	<div class="row" style="width:900px;margin-left:295px;margin-top:50px">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading" style="color:white;background-color:black">LOGIN PAGE</div>
				<div class="panel-body" style="padding-right:100px">
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
								<i>{{ $errors->first('email')}}</i>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
								<i>{{$errors->first('password')}}</i>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="background-color:black;color:white">Login</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
						<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
						       Not have account yet???
								<a href="{{ url('/auth/register') }}" ><h2><span class="label label-default" style="background-color:black;color:white;position:relative;bottom:22px">Create New Account</span></h2></a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
