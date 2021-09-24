<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Test Ice de Baron- Campus Tarapoto</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/mi_stylo.css">
	<!--===============================================================================================-->
	</head>
	<style>
	video {  
	max-width: 100%;
	max-height: 100%;
	/*width: auto;
	height: auto;
	position: fixed;   
	top: 50%;
	left: 50%;
	transform: translateX(-50%) translateY(-50%);  
	z-index: -100;
	background-size: cover;*/
	}

		
	</style>
	<body>
		<div style="position: absolute;">
			<video autoplay="" muted="" loop="" class="video">
			<source src="images/v_fondo.mp4" type="video/mp4">
			</video>
			<div class="overlay"></div>
		</div>
		<div class="size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-t-55 p-b-35 respon1" style="position: absolute;" >
			<div class="flex-col-c p-t-50 p-b-50">
				<h3 class="l1-txt1 txt-center p-b-10">
				Test Ice de Baron
				</h3>

				<p class="txt-center l1-txt2 p-b-60">
                         1. Me gusta divertirme. * 
				</p>

				<div class="flex-w flex-c cd100 p-b-82">
					<div class="flex-col-c-m size2 how-countdown pintar-respuesta pintar-hover">
						<span class="s1-txt1">1. MUY RARA VEZ</span>
					</div>

					<div class="flex-col-c-m size2 how-countdown pintar-hover">
						<span class="s1-txt1">2. RARA VEZ</span>
					</div>

					<div class="flex-col-c-m size2 how-countdown pintar-hover">
						<span class="s1-txt1">3.  MENUDO</span>
					</div>

					<div class="flex-col-c-m size2 how-countdown pintar-hover">
						<span class="s1-txt1">4. MUY A MENUDO</span>
					</div>
				</div>

				<button class="flex-c-m s1-txt2 size3 how-btn"  data-toggle="modal" data-target="#subscribe">
					Seguiente
				</button>
				<a href=""></a>
			</div>
		</div>

			
		<!--Modal preguntas-->
		<div class="modal fade" id="modal_preguntas" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document" data-dismiss="modal">
				<div class="modal-subscribe where1-parent bg0 bor2 size4 p-t-54 p-b-100 p-l-15 p-r-15">
					<button class="btn-close-modal how-btn2 fs-26 where1 trans-04">
						<i class="zmdi zmdi-close"></i>
					</button>

					<div class="wsize1 m-lr-auto">
						<h3 class="m1-txt1 txt-center p-b-36">
							<span class="bor1 p-b-6">Test Ice de Baron  </span>
						</h3>

						<p class="m1-txt2 txt-center p-b-40" style=" cursor:pointer !important; ">
						
						</p>

						<form class="contact100-form validate-form">
							<div class="row">

								<div class="col-lg-12">

									<input type="text" value="1" name="pregunta[]" hidden>
										<div class="row">
										<div class="col-lg-6">
											<div class="pintar-respuesta" >
												<p class="m1-txt2 txt-center " style=" cursor:pointer !important; ">
													1. MUY RARA VEZ
												</p>
											</div>
											<p class="m1-txt2 txt-center p-b-40" style=" cursor:pointer !important; ">
												2. RARA VEZ
											</p>
										</div>
										<div class="col-lg-6">
											<p class="m1-txt2 txt-center p-b-40" style=" cursor:pointer !important; ">
												3.  MENUDO
											</p>
											<p class="m1-txt2 txt-center p-b-40" style=" cursor:pointer !important; ">
												4. MUY A MENUDO 
											</p>
										</div>
									</div>
								</div>
								
								<div class="w-full">
									<button class="flex-c-m s1-txt2 size5 how-btn1 trans-04">
										Get Updates
									</button>
								</div>

							</div>
						</form>

					</div>
				</div>

			</div>
		</div>

		

	<!--===============================================================================================-->	
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/countdowntime/moment.min.js"></script>
		<script src="vendor/countdowntime/moment-timezone.min.js"></script>
		<script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
		<script src="vendor/countdowntime/countdowntime.js"></script>
		<script>
			$('.cd100').countdown100({
				// Set Endtime here
				// Endtime must be > current time
				endtimeYear: 0,
				endtimeMonth: 0,
				endtimeDate: 35,
				endtimeHours: 18,
				endtimeMinutes: 0,
				endtimeSeconds: 0,
				timeZone: "" 
				// ex:  timeZone: "America/New_York", can be empty
				// go to " http://momentjs.com/timezone/ " to get timezone
			});

			window.addEventListener('load',function(){

				document.getElementById('fecha').type= 'text';

				document.getElementById('fecha').addEventListener('blur',function(){

				document.getElementById('fecha').type= 'text';

				});

				document.getElementById('fecha').addEventListener('focus',function(){

				document.getElementById('fecha').type= 'date';

				});

			});

		</script>
	<!--===============================================================================================-->
		<script src="vendor/tilt/tilt.jquery.min.js"></script>
		<script >
			$('.js-tilt').tilt({
				scale: 1.1
			})
		</script>
	<!--===============================================================================================-->
		<script src="js/main.js"></script>

	</body>
	</html>