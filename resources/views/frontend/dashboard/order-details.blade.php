@extends('layouts.user-dashboard')
@section('content')
	<div class="row">
		<div class="col-2">
			<div class="nav flex-column">
				<a class="nav-link active" href="/user/dashboard">Home</a>
			</div>
		</div>
		<div class="col-md-10">
			<div class="content">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col col-md-12 mt-3">
							<div class="card">
								<div class="card-header">
									<div class="row">
										<div class="col">
											<h5>Order Item</h5>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<table class="table">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Product Name</th>
													<th scope="col">Price</th>
													<th scope="col">Quantity</th>
													<th scope="col">Total Price</th>
												</tr>
											</thead>
											<tbody>

												@foreach ($order->orderItems as $row)
													<tr>
														<td>{{ $row->id }}</td>
														<td>{{ $row->product->title }}</td>
														<td>{{ $row->price }}</td>
														<td>{{ $row->quantity }}</td>
														<td>{{ $row->quantity * $row->price }}</td>
													</tr>
												@endforeach

											</tbody>
										</table>
										<h5>Order Summary</h5>
										<hr>
										<table class="table border-0 w-50 float-right">
											<tbody>
												<tr>
													<th scope="row">Sub Total</th>
													<td style="float: right">{{ $order->subtotal }}</td>
												</tr>
												<tr>
													<th scope="row">Tax</th>
													<td style="float: right">{{ $order->tax }}</td>
												</tr>
												<tr>
													<th scope="row">Shipping</th>
													<td style="float: right">0</td>
												</tr>
												<tr>
													<th scope="row">Total</th>
													<td style="float: right">{{ $order->total }}</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col col-md-12 mt-3">
							<div class="card">
								<div class="card-header">
									<div class="row">
										<div class="col">
											<h5>Billing Details</h5>
										</div>
									</div>
								</div>
								<div class="card-body">
									<table class="table">
										<tr>
											<th>First Name</th>
											<td>{{ $order->firstname }}</td>
											<th>Last Name</th>
											<td>{{ $order->lastname }}</td>
										</tr>
										<tr>
											<th>Phone</th>
											<td>{{ $order->mobile }}</td>
											<th>Email</th>
											<td>{{ $order->email }}</td>
										</tr>
										<tr>
											<th>Line 1</th>
											<td>{{ $order->line1 }}</td>
											<th>Line 2</th>
											<td>{{ $order->line2 }}</td>
										</tr>
										<tr>
											<th>City</th>
											<td>{{ $order->city }}</td>
											<th>Distric</th>
											<td>{{ $order->province }}</td>
										</tr>
										<tr>
											<th>Country</th>
											<td>{{ $order->country }}</td>
											<th>ZipCode</th>
											<td>{{ $order->zipcode }}</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="col col-md-12 mt-3">
							<div class="card">
								<div class="card-header">
									<div class="row">
										<div class="col">
											<h5>Shipping Details</h5>
										</div>
									</div>
								</div>
								<div class="card-body">
									@if ($order->is_shipping_different == true)
										<table class="table">
											<tr>
												<th>First Name</th>
												<td>{{ $order->shipping->firstname }}</td>
												<th>Last Name</th>
												<td>{{ $order->shipping->lastname }}</td>
											</tr>
											<tr>
												<th>Phone</th>
												<td>{{ $order->shipping->mobile }}</td>
												<th>Email</th>
												<td>{{ $order->shipping->email }}</td>
											</tr>
											<tr>
												<th>Line 1</th>
												<td>{{ $order->shipping->line1 }}</td>
												<th>Line 2</th>
												<td>{{ $order->shipping->line2 }}</td>
											</tr>
											<tr>
												<th>City</th>
												<td>{{ $order->shipping->city }}</td>
												<th>Distric</th>
												<td>{{ $order->province }}</td>
											</tr>
											<tr>
												<th>Country</th>
												<td>{{ $order->shipping->country }}</td>
												<th>ZipCode</th>
												<td>{{ $order->shipping->zipcode }}</td>
											</tr>
										</table>
									@endif
								</div>
							</div>
						</div>
						<div class="col col-md-12 mt-3">
							<div class="card">
								<div class="card-header">
									<div class="row">
										<div class="col">
											<h5>Transaction Details</h5>
										</div>
									</div>
								</div>
								<div class="card-body">

									<table class="table">
										<tr>
											<th>Transaction Mode</th>
											<td>{{ $order->transaction->mode }}</td>
										</tr>
										<tr>
											<th>Status</th>
											<td>{{ $order->transaction->status }}</td>
										</tr>
										<tr>
											<th>Trasaction Date</th>
											<td>{{ $order->transaction->created_at->diffForHumans() }}</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<!-- /.col-md-6 -->
					</div>
					<!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
		</div>
	</div>
@endsection
