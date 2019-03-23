<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bus Online Booking</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/cerulean/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Roboto|Source+Serif+Pro|Srisakdi" rel="stylesheet">
	<link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" href="css/style3.css">

</head>
<body>
	<div class="container" id="navigation">
		<div class="container d-flex justify-content-end"  id="navi">
			
			<nav class="navbar navbar-expand-lg">



				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" id="move-right" href="#cover">Home <span class="sr-only">(current)</span></a>
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
						
						<span></span>
						<span></span>
						<form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- end of navigation -->
	<div class="container" id="cover">
		<div class="row">
			
			
		</div>

		<div id="heading">
			<a href="#"><h1 class="text-center text-uppercase animated shake 4s"> Myanmar Bus Online Booking</h1></a>
		</div>		
	</div>

	<div class="page1"> 
			<div class="container" id="route-plan">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8"   id="one" >
						<form action="#">
							<div class="row" id="aa">
								<div class="col-md-6">
									<label class="text-my">Leaving From</label>
									<select id="sourceId" name="sourceId" class="form-control chosen">
										<option value="">Select a location</option>
										<option class="text-my" value="39 Phayagyi">

											39 Phayagyi ( ၃၉ဘုရားႀကီး )

										</option>

										<option class="text-my" value="Ahtet Min Hla">

											Ahtet Min Hla ( အထက္ မင္းလွ )

										</option>

										<option class="text-my" value="Ann">

											Ann ( အမ္း )

										</option>

										<option class="text-my" value="AungLan">

											AungLan ( ေအာင္လံ )

										</option>

										<option class="text-my" value="Aungpan">

											Aungpan ( ေအာင္ပန္း )

										</option>

										<option class="text-my" value="Ayadaw">

											Ayadaw ( အရာေတာ္ )

										</option>

										<option class="text-my" value="Bagan/Nyaung-U">

											Bagan/Nyaung-U ( ပုဂံ/ေညာင္ဦး )

										</option>
									</select>
								</div>
								<div class="col-md-6">
									<label class="text-my">Going To</label>
									<select id="destinationId" name="destinationId" class="form-control chosen">
										<option value="">Select a location</option>

										<option class="text-my" value="39 Phayagyi">

											39 Phayagyi ( ၃၉ဘုရားႀကီး )

										</option>

										<option class="text-my" value="Ahtet Min Hla">

											Ahtet Min Hla ( အထက္ မင္းလွ )

										</option>

										<option class="text-my" value="Ann">

											Ann ( အမ္း )

										</option>

										<option class="text-my" value="AungLan">

											AungLan ( ေအာင္လံ )

										</option>

										<option class="text-my" value="Aungpan">

											Aungpan ( ေအာင္ပန္း )

										</option>

										<option class="text-my" value="Ayadaw">

											Ayadaw ( အရာေတာ္ )

										</option>
									</select>							
								</div>
							</div>
							<div class="row" id="aa">
								<div class="col-md-6">
									<label class="text-my">Departure Date</label>
									<input type="text" id="departureDate"  name="departureDate" class="form-control datepicker" placeholder="Pick a date">
								</div>
								<div class="col-md-3">
									<label class="text-my">Seats</label>
									<select id="numberOfTravellers" name="numberOfTravellers" class="form-control">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
									</select>
								</div>
							</div>
							<div class="row" id="search">
								
								<div class="col-md-12 text-center">
									<a href="{{ route('bus.select')}}" class="myButton btn btn-success">Search Now</a>
								</div>
							</div>
						</form>
						
					</div>
					<div class="col-md-4 text-center" id="one">
						<img src="img/telenor.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	<div class="container" id="route">
		<div class="row justify-content-center">
			<div class="header">
				<h1> Popular Routes</h1>
			</div>
		</div>
		<div class="row" id="popular-route">
			
			<div class="col-lg-3 col-md-3 col-sm-6" id="image">
				<div class="panel panel-default">
					<img class="img-location img-responsive" src="img/mandalay.jpg" alt="...">
					<div class="panel-body">
						<div class="text-center">
							<a class="btn btn-link" href="#">
								Yangon - Mandalay
							</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-6 marbot-10" id="image">
				<div class="panel panel-default">
					<img class="img-location img-responsive" src="img/bagan.jpg" alt="...">
					<div class="panel-body">
						<div class="text-center">
							<a class="btn btn-link" href="#">
								Yangon - Bagan/Naung-Oo
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 marbot-10" id="image">
				<div class="panel panel-default">
					<img class="img-location img-responsive" src="img/naypyitaw.jpg" alt="...">
					<div class="panel-body">
						<div class="text-center">
							<a class="btn btn-link" href="#">
								Yangon - NayPyiTaw
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 marbot-10" id="image">
				<div class="panel panel-default">
					<img class="img-location img-responsive" src="img/mawlammyaing	.jpg" alt="...">
					<div class="panel-body">
						<div class="text-center">
							<a class="btn btn-link" href="#">
								Yangon - Mawlammyaing
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row" id="popular-route">
			
			<div class="col-lg-3 col-md-3 col-sm-6" id="image">
				<div class="panel panel-default">
					<img class="img-location img-responsive" src="img/mandalay.jpg" alt="...">
					<div class="panel-body">
						<div class="text-center">
							<a class="btn btn-link" href="#">
								Yangon - Mandalay
							</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-3 col-sm-6 marbot-10" id="image">
				<div class="panel panel-default">
					<img class="img-location img-responsive" src="img/bagan.jpg" alt="...">
					<div class="panel-body">
						<div class="text-center">
							<a class="btn btn-link" href="#">
								Yangon - Bagan/Naung-Oo
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 marbot-10" id="image">
				<div class="panel panel-default">
					<img class="img-location img-responsive" src="img/naypyitaw.jpg" alt="...">
					<div class="panel-body">
						<div class="text-center">
							<a class="btn btn-link" href="#">
								Yangon - NayPyiTaw
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 marbot-10" id="image">
				<div class="panel panel-default">
					<img class="img-location img-responsive" src="img/mawlammyaing	.jpg" alt="...">
					<div class="panel-body">
						<div class="text-center">
							<a class="btn btn-link" href="#">
								Yangon - Mawlammyaing
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end of Routes -->


	<div class="container" id="pay">
		<div class="row justify-content-center">
			<div class="header">
				<h1>Our Partners</h1>
			</div>
		</div>
		<div class="row" id="partner">
			
			<div class="col-sm-3" id="gallery">
				<a href="#"><img src="img/cb-pay1.jpeg" class="img-fluid image" alt="Our Member"></a>
				<div class="overlay">
					<div class="text">Tanks for your payment</div>
				</div>
			</div>
			<div class="col-sm-3" id="gallery">
				<a href="#"><img src="img/kbz-pay.jpeg" class="img-fluid" alt="Our Member"></a>
				<div class="overlay">
					<div class="text">Tanks for your payment</div>
				</div>
			</div>
			<div class="col-sm-3" id="gallery">
				<a href="#"><img src="img/mpu1.jpeg" class="img-fluid" alt="Our Member"></a>
				<div class="overlay">
					<div class="text">Tanks for your payment</div>
				</div>
			</div>
			<div class="col-sm-3" id="gallery">
				<a href="#"><img src="img/wavemoney.jpeg" class="img-fluid" alt="Our Member"></a>
				<div class="overlay">
					<div class="text">Tanks for your payment</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end of partner -->


	<div class="container" id="team">
		<div class="row justify-content-center">
			<div class="header">
				<h1>Our Team</h1>
			</div>
		</div>
		<div class="member-list">
			<div class="row" id="member-box">
				<div class="col-md-3" id="member">
					<img src="img/Htoo.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-md-9" id="info">
					<a href="#">
						<h1>Htoo</h1>
					</a>
					<p id="date">03/10/1997</p>
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus dolores similique cupiditate saepe pariatur, quaerat illum quae eaque </span>
				</div>
			</div>
			<div class="row" id="member-box">
				<div class="col-md-9" id="info">
					<a href="#">
						<h1>Min</h1>
					</a>
					<p id="date">03/10/1991</p>
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus dolores similique cupiditate saepe pariatur, quaerat illum quae eaque </span>
				</div>
				<div class="col-md-3" id="member">
					<img src="img/Min.jpg" class="img-fluid" alt="">
				</div>
			</div>
			<div class="row" id="member-box">
				<div class="col-md-3" id="member">
					<img src="img/zar.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-md-9" id="info">
					<a href="#">
						<h1>Zar</h1>
					</a>
					<p id="date">30/05/1997</p>
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus dolores similique cupiditate saepe pariatur, quaerat illum quae eaque </span>
				</div>
			</div>

		</div>
	</div>
	<!-- end of team -->


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







	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="{{ asset('css/app.css') }}"></script>
</body>
</html>