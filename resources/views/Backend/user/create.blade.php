@extends('Backend.layout.app')

@section('content')

<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									<h2>Example 1</h2>
									<p>
										Create one account to manage everything you do with Clip-Two, from your shopping preferences to your Clip-Two activity.
									</p>
									<hr>
									<form action="{{route('storeuser')}}" method="POST" role="form" id="form">
									  @include('Backend.user.form')
										<div class="row">
											<div class="col-md-8">
												<p>
													By clicking REGISTER, you are agreeing to the Policy and Terms &amp; Conditions.
												</p>
											</div>
											<div class="col-md-4">
												<button class="btn btn-primary btn-wide pull-right" type="submit">
													Add user <i class="fa fa-arrow-circle-right"></i>
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
@endsection
