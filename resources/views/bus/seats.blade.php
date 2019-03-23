<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="UTF-8">

	<title>Select Seat</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/cerulean/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Roboto|Source+Serif+Pro|Srisakdi" rel="stylesheet">
	<link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" href="css/style3.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="{{ asset('css/app.css') }}"></script>
</head>
<body>
	<div class="container" id="navigation">
		<div class="container d-flex justify-content-end"  id="navi">

			<nav class="navbar navbar-expand-lg navbar-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#cover">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#route">Routes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#pay">Partners</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#team">Team</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact</a>
						</li>
						<span></span>
						<span></span>
						<li class="nav-item justify-content-center">
							<a class="nav-link" href="route.html"><i class="fas fa-search"></i></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- end of navigation -->

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
								<div class="col-md-offset-2 col-md-7"  id="select-seat">
									<div class="driver-seat text-center">
										<a href="#" class="btn btn-success">Driver</a>
									</div>

									<table class="table table-seat-plan" id="seat-table">

										<tbody>
											<tr>
												<td>
													<a class="seat seat-available btn btn-success" href="#" data-seat-number="1" data-seat-id="29291353">
														<span>1</span>
													</a>
												</td>

												<td>
													<a class="seat seat-available btn btn-success" href="#" data-seat-number="2" data-seat-id="29291353">
														<span>2</span>
													</a>


												</td>

												<td>												<span class="aisle"></span>
												</td>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="3" data-seat-id="29291353">
														<span>3</span>
													</a>
												</td>

												<td>
													<a class="seat seat-available btn btn-success" href="#" data-seat-number="4" data-seat-id="29291353">
														<span>4</span>
													</a>
												</td>

											</tr>

											<tr>

												<td>
													<a class="seat seat-available btn btn-success" href="#" data-seat-number="5" data-seat-id="29291353">
														<span>5</span>
													</a>
												</td>

												<td>
													<a class="seat seat-available btn btn-success" href="#" data-seat-number="6" data-seat-id="29291353">
														<span>6</span>
													</a>
												</td>
												<td>												<span class="aisle"></span>
												</td>

												<td>
													<a class="seat seat-available btn btn-success" href="#" data-seat-number="7" data-seat-id="29291353">
														<span>7</span>
													</a>
												</td>

												<td>
													<a class="seat seat-available btn btn-success" href="#" data-seat-number="8" data-seat-id="29291353">
														<span>8</span>
													</a>
												</td>

											</tr>
											<tr>
												<td>
													<a class="seat seat-available btn btn-success" href="#" data-seat-number="9" data-seat-id="29291353">
														<span>9</span>
													</a>
												</td>

												<td>
													<a class="seat seat-available btn btn-success" href="#" data-seat-number="10" data-seat-id="29291353">
														<span>10</span>
													</a>
												</td>
												<td>
													<span class="aisle"></span>
												</td>

												<td>
													<a class="seat seat-available btn btn-success" href="#" data-seat-number="11" data-seat-id="29291353">
														<span>11</span>
													</a>
												</td>

												<td>
													<a class="seat seat-available btn btn-success" href="#" data-seat-number="12" data-seat-id="29291353">
														<span>12</span>
													</a>
												</td>

											</tr>

											<tr>

												<td>
													<a class="seat seat-available btn btn-success" href="#" data-seat-number="13" data-seat-id="29291353">
														<span>13</span>
													</a>
												</td>

												<td>
													<a class="seat seat-available btn btn-success" href="#" data-seat-number="14"data-seat-id="29291353">
														<span>14</span>
													</a>



												</td>

												<td>


													<span class="aisle"></span>


												</td>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="15" data-seat-id="29291353">
														<span>15</span>
													</a>



												</td>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="16" data-seat-id="29291353">
														<span>16</span>
													</a>



												</td>

											</tr>

											<tr>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="17" data-seat-id="29291353">
														<span>17</span>
													</a>



												</td>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="18" data-seat-id="29291353">
														<span>18</span>
													</a>



												</td>

												<td>


													<span class="aisle"></span>


												</td>

												<td>


													<a class="seat seat-available btn btn-success" href="#" data-seat-number="19" data-seat-id="29291353">
														<span>19</span>
													</a>



												</td>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="20" data-seat-id="29291353">
														<span>20</span>
													</a>



												</td>

											</tr>

											<tr>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="21" data-seat-id="29291353">
														<span>21</span>
													</a>



												</td>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="22" data-seat-id="29291353">
														<span>22</span>
													</a>



												</td>

												<td>


													<span class="aisle"></span>


												</td>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="23" data-seat-id="29291353">
														<span>23</span>
													</a>



												</td>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="24" data-seat-id="29291353">
														<span>24</span>
													</a>



												</td>

											</tr>

											<tr>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="25" data-seat-id="29291353">
														<span>25</span>
													</a>



												</td>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="26" data-seat-id="29291353">
														<span>26</span>
													</a>



												</td>

												<td>


													<span class="aisle"></span>


												</td>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="27" data-seat-id="29291353">
														<span>27</span>
													</a>



												</td>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="28" data-seat-id="29291353">
														<span>28</span>
													</a>



												</td>

											</tr>

											<tr>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="29" data-seat-id="29291353">
														<span>29</span>
													</a>




												</td>

												<td>


													<a class="seat seat-available btn btn-success" href="#" data-seat-number="30" data-seat-id="29291353">
														<span>30</span>
													</a>




												</td>

												<td>


													<span class="aisle"></span>


												</td>

												<td>



													
													<a class="seat seat-available btn btn-success" href="#" data-seat-number="31" data-seat-id="29291353">
														<span>31</span>
													</a>



												</td>

												<td>



													
													<a class="seat seat-available btn btn-success btn btn-success" href="#" data-seat-number="32" data-seat-id="29291353">
														<span>32</span>
													</a>



												</td>

											</tr>

											<tr>

												<td>



													
													
													<a class="seat seat-available btn btn-success" href="#" data-seat-number="33" data-seat-id="29291353">
														<span>33</span>
													</a>



												</td>

												<td>



													
													
													<a class="seat seat-available btn btn-success" href="#" data-seat-number="34" data-seat-id="29291353">
														<span>34</span>
													</a>



												</td>

												<td>


													<span class="aisle"></span>


												</td>

												<td>



													
													
													<a class="seat seat-available btn btn-success" href="#" data-seat-number="35" data-seat-id="29291353">
														<span>35</span>
													</a>



												</td>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="36" data-seat-id="29291353">
														<span>36</span>
													</a>



												</td>

											</tr>

											<tr>

												<td>


													<a class="seat seat-available btn btn-success" href="#" data-seat-number="37" data-seat-id="29291353">
														<span>37</span>
													</a>



												</td>

												<td>


													<a class="seat seat-available btn btn-success" href="#" data-seat-number="41" data-seat-id="29291353">
														<span>38</span>
													</a>



												</td>

												<td>


													<span class="aisle"></span>


												</td>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="39" data-seat-id="29291343">
														<span>39</span>
													</a>



												</td>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="40" data-seat-id="29291322">
														<span>40</span>
													</a>



												</td>

											</tr>

											<tr>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="41" data-seat-id="29291353">
														<span>41</span>
													</a>



												</td>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="42" data-seat-id="29291350">
														<span>42</span>
													</a>



												</td>

												<td>


													<span class="aisle"></span>


												</td>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="43" data-seat-id="29291344">
														<span>43</span>
													</a>



												</td>

												<td>



													<a class="seat seat-available btn btn-success" href="#" data-seat-number="44" data-seat-id="29291318">
														<span>44</span>
													</a>



												</td>

											</tr>

										</tbody></table>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-5">

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
		<div class="container" id="contact">
			<div class="row" id="foot">

				<div class="col-lg-4 col-md-4 col-sm-4" id="about">
					<h3 class="text-uppercase">About Us</h3>
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aliquam, perferendis eligendi,</span>
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aliquam, perferendis eligendi,</span>
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aliquam, perferendis eligendi,</span>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4" id="about">
					<h3 class="text-uppercase">Contact Info</h3>
					<span><i class="fas fa-phone"></i></span>
					<span></span>
					<span>09-259710510</span>
					<br>
					<br>
					<i class="fab fa-facebook-f 2x"></i>
					<span>find us on Facebook</span>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4" id="about">
					<h3 class="text-uppercase ">Navigation</h3>
					<a href="#cover" id="foot-nav"><i class="fas fa-angle-right"></i> Home</a><br>
					<a href="#route" id="foot-nav"><i class="fas fa-angle-right"></i> Route</a><br>
					<a href="#pay" id="foot-nav"><i class="fas fa-angle-right"></i> Partners</a><br>
					<a href="#team" id="foot-nav"><i class="fas fa-angle-right"></i> Team</a><br>
					<a href="#contact" id="foot-nav"><i class="fas fa-angle-right"></i>Contact</a>
				</div>

			</div>
		</div>
	</body>
	</html>