@extends ('master')

@section ('nav')
@include ('partials.nav-white-v3')
@endsection

@section ('content')
<!-- 	<div class="table-responsive text-center"> -->
	<div class="container" style="padding-top: 90px">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-header">Billing Shipping Information</h1>
				<form class="well">
					<div class="form-group">
						<label for="fullname">First Name</label>
						<input type="text" value="{{$user->name}}" readonly>
					</div>
					<div class="form-group">
						<label for="region">Last Name</label>
						<input type="text" value="{{$user->last_name}}" readonly>
					</div>
					<div class="form-group">
						<label for="postal_code">E-mail</label>
						<input type="text" value="{{$user->email}}" readonly>
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<textarea name="readonly" id="" cols="30" rows="10">
							{{$details->address}}
							Region: {{$details->region}}
							Postal: {{$details->postal_code}}
						</textarea>
					</div>
				</form>

				<a href="/confirmation" class="btn btn-primary pull-right" style="margin-bottom: 20px;">Next</a>
			</div>
		</div>
	</div>
<!-- 	</div> -->
@endsection

@section ('footer')
@include ('partials.footer')
@endsection