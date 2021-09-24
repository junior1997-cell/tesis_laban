<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Test Ice de Baron- Campus Tarapoto</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
		
		<!-- slect2 -->
        <!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css" /> -->
		<!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->		
		<link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <link rel="stylesheet" type="text/css" href="css/mi_stylo.css" />
        <!--===============================================================================================-->

		<!-- Toastr -->
		<link rel="stylesheet" href="toastr/toastr.min.css">
    </head>
    <style>
        video {
            max-width: 100%;
            max-height: 100%;
        }
        .size2 {
            width: 90px;
            height: 90px;
        }

    </style>
    <body>
        <div style="position: absolute;">
            <video autoplay="" muted="" loop="" class="video">
                <source src="images/v_fondo.mp4" type="video/mp4" />
            </video>
            <div class="overlay"></div>
        </div>
        <div class="size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-t-55 p-b-35 respon1" style="position: absolute;">
            <div class="flex-col-c p-t-50 p-b-50">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    Estudiantes que realizarón el Test
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown">
                        <span class="l1-txt3 p-b-9 days">35</span>
                        <span class="s1-txt1">Days</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown">
                        <span class="l1-txt3 p-b-9 hours">17</span>
                        <span class="s1-txt1">Hours</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown">
                        <span class="l1-txt3 p-b-9 minutes">50</span>
                        <span class="s1-txt1">Minutes</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown">
                        <span class="l1-txt3 p-b-9 seconds">39</span>
                        <span class="s1-txt1">Seconds</span>
                    </div>
                </div>

                <button class="flex-c-m s1-txt2 size3 how-btn" data-toggle="modal" data-target="#subscribe">
                    Realizar test
                </button>
            </div>
        </div>

        <!-- Modal Login -->
        <div class="modal fade" id="subscribe" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document" data-dismiss="modal">
                <div class="modal-subscribe where1-parent bg0 bor2 size4 p-t-54 p-b-50 p-l-15 p-r-15">
                    <button class="btn-close-modal how-btn2 fs-26 where1 trans-04">
                        <i class="zmdi zmdi-close"></i>
                    </button>

                    <div class="wsize1 m-lr-auto">
                        <h3 class="m1-txt1 txt-center p-b-36">
                            <span class="bor1 p-b-6">Registra tus datos</span>
                        </h3>

                        <p class="m1-txt2 txt-center p-b-40">
                            Para iniciar tu test Ice de Baron
                        </p>

                        <form class="contact100-form validate-form" id="formulario_datos" action="test.php" >
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="wrap-input100 m-b-10 validate-input" data-validate="Nombre es requerido">
                                        <input class="s1-txt4 placeholder0 input100" type="text" name="nombre" placeholder="Nombre*" />
                                        <span class="focus-input100"></span>
                                    </div>
                                    <div class="wrap-input100 m-b-10 validate-input" data-validate="Aprellido es requerido">
                                        <input class="s1-txt4 placeholder0 input100" type="text" name="apellidos" placeholder="Apellidos*" />
                                        <span class="focus-input100"></span>
                                    </div>
                                    <div class="wrap-input100 m-b-20 validate-input" data-validate="Código requerido">
                                        <input class="s1-txt4 placeholder0 input100" type="text" name="codigo_estudiante" placeholder="Código de Estudiante *" />
                                        <span class="focus-input100"></span>
                                    </div>
                                    <div class="m-b-10 validate-input" data-validate="Distrito requerido" >
                                        <select name="distrito" id="distrito" class="s1-txt4 placeholder0 input100 form-control" style="height: 39px; border-radius: 15px; color: #999999;">
                                            <option value="">Distrito</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="m-b-10 validate-input" data-validate="Sexo es requerido">
                                        <select name="sexo" id="sexo" class="s1-txt4 placeholder0 input100 form-control" style="height: 39px; border-radius: 15px; color: #999999;">
                                            <option value=""  >Sexo</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                        </select>
                                    </div>

                                    <div class="wrap-input100 m-b-10 validate-input" data-validate="Fecha nacimiento requerido">
                                        <input id="nacimiento" class="input100" type="date" name="nacimiento" placeholder="Fecha de Nacimiento" style="height: 39px; border-radius: 15px; color: #999999;" />
                                        <span class="focus-input100"></span>
                                    </div>

                                    <div class="wrap-input100 m-b-20 validate-input" data-validate="Número de teléfono requerido">
                                        <input class="s1-txt4 placeholder0 input100" type="number" name="celular" placeholder="Número de Teléfono *" />
                                        <span class="focus-input100"></span>
                                    </div>
                                    <div class="m-b-10 validate-input" data-validate="Provincia es requerido">
                                        <select name="provincia" id="provincia" class="s1-txt4 placeholder0 input100 form-control" style="height: 39px; border-radius: 15px; color: #999999;">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
									<div class="m-b-10 validate-input" data-validate="Universidad es requerido">
										<select name="universidad" id="universidad" class="s1-txt4 placeholder0 input100 form-control" style="height: 39px; border-radius: 15px; color: #999999;">
											<option value="">Universidad</option>
											<option value="Universidad Peruana Unión">Universidad Peruana Unión</option>
											<option value="Universidad Cesar Vallejo">Universidad Cesar Vallejo</option>
											<option value="Universidad Nacional de San Martín">Universidad Nacional de San Martín</option>
										</select>
									</div>
                                    <div class="m-b-10 validate-input" data-validate="Carrera es requerido">
                                        <select name="carrera" id="carrera" class="s1-txt4 placeholder0 input100 form-control" style="height: 39px; border-radius: 15px; color: #999999;">
                                            <option value="">Carrera</option>
                                            <option value="Administración">Administración</option>
                                            <option value="Arquitectura">Arquitectura</option>
                                            <option value="Contabilidad">Contabilidad</option>
                                            <option value="Derecho">Derecho</option>
                                            <option value="Ingeniería Ambiental">Ingeniería Ambiental</option>
                                            <option value="Ingeniería Civil">Ingeniería Civil</option>
                                            <option value="Psicología">Psicología</option>
                                            <option value="Ingeniería Industrial">Ingeniería Industrial</option>
                                            <option value="Ciencias de la Comunicación">Ciencias de la Comunicación</option>
                                            <option value="Ingeniería de Sistemas">Ingeniería de Sistemas</option>
                                            <option value="Enfermería">Enfermería</option>
                                            <option value="Marketing y Negocios Internacionales">Marketing y Negocios Internacionales</option>
                                            <option value="Medicina Humana">Medicina Humana</option>
                                        </select>
                                    </div>
                                    <div class="m-b-10 validate-input" data-validate="Tipo de Colegio es requerido">
                                        <select name="tipo_colegio" id="tipo_colegio"  class="s1-txt4 placeholder0 input100 form-control js-example-basic-single" style="height: 39px; border-radius: 15px; color: #999999;">
                                            <option value="" >Tipo Colegio</option>
                                            <option value="Nacional">Nacional</option>
                                            <option value="Privado">Privado</option>
                                        </select>
										<span class="focus-input100"></span>
										 
										
                                    </div>
									 
                                    <div class="m-b-10 validate-input" data-validate="Departamento es requerido">
                                        <select name="departamento" id="departamento" class="s1-txt4 placeholder0 input100 form-control" style="height: 39px; border-radius: 15px; color: #999999;">
                                             
                                        </select>
										<span class="focus-input100"></span>
                                    </div>

                                    <div class="w-full">
                                        <button class="flex-c-m s1-txt2 size5 how-btn1 trans-04" type="submit">
                                            Iniciar test
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <p class="s1-txt5 txt-center wsize2 m-lr-auto p-t-20 p-b-20">
						<footer class="main-footer" style="text-align: center;">
						<strong>Copyright &copy; <script>document.write(new Date().getFullYear())</script></strong> Todos los derechos reservados.
						</footer>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Select 2 -->
        <!-- <script src="vendor/select2/select2.min.js"></script> -->
		<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --> 
		<script src="js/bootstrap-select.min.js"></script>

		<!-- Toastr -->
		<script src="toastr/toastr.min.js"></script>

        <script src="vendor/countdowntime/moment.min.js"></script>
        <script src="vendor/countdowntime/moment-timezone.min.js"></script>
        <script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <script>
            $(".cd100").countdown100({
                // Set Endtime here
                // Endtime must be > current time
                endtimeYear: 0,
                endtimeMonth: 0,
                endtimeDate: 35,
                endtimeHours: 18,
                endtimeMinutes: 0,
                endtimeSeconds: 0,
                timeZone: "",
                // ex:  timeZone: "America/New_York", can be empty
                // go to " http://momentjs.com/timezone/ " to get timezone
            });

            window.addEventListener("load", function () {
                document.getElementById("nacimiento").type = "text";

                document.getElementById("nacimiento").addEventListener("blur", function () {
                    document.getElementById("nacimiento").type = "text";
                });

                document.getElementById("nacimiento").addEventListener("focus", function () {
                    document.getElementById("nacimiento").type = "date";
                });
            });

			
        </script>
        <!--===============================================================================================-->
        <script src="vendor/tilt/tilt.jquery.min.js"></script>
        <script>
            $(".js-tilt").tilt({
                scale: 1.1,
            });
        </script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>
		
    </body>
</html>
