@extends('layouts/bus')
@section('title', 'Seats' )
@section('content')

<div class="section section-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="panel panel-default" data-time-period="AM" data-operator-id="10">
					<div class="panel-heading text-my">
						Please select  (  ) Seats.
					</div>
					<div class="panel-body">
						<div class="row" >
							<div class="seatsChart col-lg-8">
								<div class="seatRow">
									<div class="seatRowNumber">
										Row 1
									</div>
									<div id="1_1" title="" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">1</div>
									<div id="1_2" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">2</div>
									<div id="1_3" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">3</div>
									<div id="1_4" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">4</div>
									<div id="1_5" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">5</div>
									<div id="1_6" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber  ">6</div>
									<div id="1_7" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">7</div>
									<div id="1_8" role="checkbox" value="45" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">8</div>


								</div>
								<div class="seatRow">
									<div class="seatRowNumber">
										Row 2
									</div>
									<div id="2_1" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">1</div>
									<div id="2_2" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">2</div>
									<div id="2_3" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">3</div>
									<div id="2_4" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">4</div>
									<div id="2_5" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">5</div>
									<div id="2_6" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber  ">6</div>
									<div id="2_7" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">7</div>
									<div id="2_8" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">8</div>

								</div>
								<div class="seatRow">
									<div class="seatRowNumber">
										Row 3
									</div>
									<div id="3_1" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">1</div>
									<div id="3_2" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">2</div>
									<div id="3_3" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">3</div>
									<div id="3_4" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">4</div>
									<div id="3_5" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">5</div>
									<div id="3_6" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber  ">6</div>
									<div id="3_7" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">7</div>
									<div id="3_8" role="checkbox" value="38" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">8</div>

								</div>   

								<div class="seatRow">
									<div class="seatRowNumber">
										Row 4
									</div>
									<div id="2_1" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">1</div>
									<div id="2_2" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">2</div>
									<div id="2_3" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">3</div>
									<div id="2_4" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">4</div>
									<div id="2_5" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">5</div>
									<div id="2_6" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber  ">6</div>
									<div id="2_7" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">7</div>
									<div id="2_8" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">8</div>

								</div>

								<div class="seatRow">
									<div class="seatRowNumber">
										Row 5
									</div>
									<div id="2_1" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">1</div>
									<div id="2_2" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">2</div>
									<div id="2_3" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">3</div>
									<div id="2_4" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">4</div>
									<div id="2_5" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">5</div>
									<div id="2_6" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber  ">6</div>
									<div id="2_7" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber ">7</div>
									<div id="2_8" role="checkbox" value="42" aria-checked="false" focusable="true" tabindex="-1" class=" seatNumber seatUnavailable">8</div>

								</div>                   

								<div class="seatsReceipt col-lg-2">
									<p><strong>Selected Seats: <span class="seatsAmount" />0 </span></strong> <button id="btnClear" class="btn">Clear</button></p>
									<ul id="seatsList" class="nav nav-stacked"></ul>

								</div>
							</div>

							<div class="checkout col-lg-offset-6">
								<span>Subtotal: CA$</span><span class="txtSubTotal">0.00</span><br /><button id="btnCheckout" name="btnCheckout" class="btn btn-primary"> Check out </button>

							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">

				<div class="panel panel-default">
					<div class="panel-heading text-my">
						Trip Information
					</div>
					<div class="panel-body">
						<table class="table table-striped">
							<tbody>
								<tr>
									<td class=" col-md-4 text-my">
										Operator
									</td>
									<td class=" col-md-8 text-my">
										Shwe Sin Set Kyar
									</td>
								</tr>

								<tr>
									<td class="col-md-4 text-my">
										Route
									</td>
									<td class="col-md-8 text-my">

										Yangon - Monywa

									</td>
								</tr>
								<tr>
									<td class="text-my">
										Departure Time
									</td>
									<td>
										Mar 18, 08:00 AM
									</td>
								</tr>
								<tr>
									<td class="text-my">
										Arrival Time
									</td>
									<td>
										Mar 18, 08:00 PM
									</td>
								</tr>



								<tr>
									<td class="text-my">
										Subtotal
									</td>
									<td>
										54,000 MMK
									</td>
								</tr>

							</tbody>
						</table>

						<hr>

						<h3 class="text-my text-muted text-center">Please select (  ) Seats.</h3>
						<div class="row" id="search">

							<div class="col-md-12 text-center">
								<a href="info.html" class="myButton btn btn-success">Continue Info</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


@endsection