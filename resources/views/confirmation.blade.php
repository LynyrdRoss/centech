@extends ('master')

@section ('nav')
@include ('partials.nav-white-v3')
@endsection

@section ('content')
<!-- 	<div class="table-responsive text-center"> -->
	<div class="container" style="padding-top: 90px">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-header">Confirmation</h1>
				<table class="table table-hover">
					<tr>
						<th>Image</th>
						<th>Name</th>
						<th>Quantity</th>
						<th>Price</th>
					</tr>

					<tbody>
						@foreach ($cart_items as $cart_item)
						<tr>
							<td>
								<img style="height:70px;width:85px;" class="img-responsive" src="{{$cart_item->product()->first()->product_thumb}}" alt="">
							</td>
							<td>{{$cart_item->product()->first()->name}}</td>
							<td>{{$cart_item->product()->first()->quantity}}</td>
							<td>${{$cart_item->product()->first()->price}}</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<td colspan="3"></td>
							<td><u>${{ $total_price }}</u></td>
						</tr>
					</tfoot>
				</table>

				{{-- <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::route('addmoney.paypal') !!}" >
					<!-- <a href="/paypal" class="btn btn-primary pull-right" style="margin-bottom: 20px;">Paypal</a> -->
				</form> --}}
			</div>
		</div>
	</div>
<!-- 	</div> -->
@endsection

@section ('footer')
@include ('partials.footer')
@endsection