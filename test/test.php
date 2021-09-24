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
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <link rel="stylesheet" type="text/css" href="css/mi_stylo.css" />
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
                <source src="images/v_fondo.mp4" type="video/mp4" />
            </video>
            <div class="overlay"></div>
        </div>
        <div class="size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-t-55 p-b-35 respon1" style="position: absolute;">
            <div class="flex-col-c p-t-50 p-b-50 pregunta-1">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    1. Me gusta divertirme. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p1-r1 pintar-hover" onclick="pintarrespuestas(1,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p1-r2 pintar-hover" onclick="pintarrespuestas(1,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p1-r3 pintar-hover" onclick="pintarrespuestas(1,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p1-r4 pintar-hover" onclick="pintarrespuestas(1,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>

                <button class="flex-c-m s1-txt2 size3 how-btn" data-toggle="modal" data-target="#subscribe">
                    Seguiente
                </button>
                <a href=""></a>
            </div>
            <!--Pregunta 2-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-2" style="display: none;" >
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                     2. Soy muy bueno (a) para comprender cómo la gente se siente. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p2-r1 pintar-hover" onclick="pintarrespuestas(2,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p2-r2 pintar-hover" onclick="pintarrespuestas(2,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p2-r3 pintar-hover" onclick="pintarrespuestas(2,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p2-r4 pintar-hover" onclick="pintarrespuestas(2,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>

                <button class="flex-c-m s1-txt2 size3 how-btn" data-toggle="modal" data-target="#subscribe">
                    Seguiente
                </button>
                <a href=""></a>
            </div>
            <!--Pregunta 3-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-3" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    3. Puedo mantener la calma cuando estoy molesto. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p3-r1 pintar-hover" onclick="pintarrespuestas(3,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p3-r2 pintar-hover" onclick="pintarrespuestas(3,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p3-r3 pintar-hover" onclick="pintarrespuestas(3,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p3-r4 pintar-hover" onclick="pintarrespuestas(3,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>

                <button class="flex-c-m s1-txt2 size3 how-btn" data-toggle="modal" data-target="#subscribe">
                    Seguiente
                </button>
                <a href=""></a>
            </div>
            <!--Pregunta 4-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-4" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                        4. Soy feliz. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p4-r1 pintar-hover" onclick="pintarrespuestas(4,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p4-r2 pintar-hover" onclick="pintarrespuestas(4,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p4-r3 pintar-hover" onclick="pintarrespuestas(4,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p4-r4 pintar-hover" onclick="pintarrespuestas(4,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>

                <button class="flex-c-m s1-txt2 size3 how-btn" data-toggle="modal" data-target="#subscribe">
                    Seguiente
                </button>
                <a href=""></a>
            </div>
            <!--Pregunta 5-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-5" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    5. Me importa lo que les sucede a las personas. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p5-r1 pintar-hover" onclick="pintarrespuestas(5,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p5-r2 pintar-hover" onclick="pintarrespuestas(5,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p5-r3 pintar-hover" onclick="pintarrespuestas(5,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p5-r4 pintar-hover" onclick="pintarrespuestas(5,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>

                <button class="flex-c-m s1-txt2 size3 how-btn" data-toggle="modal" data-target="#subscribe">
                    Seguiente
                </button>
                <a href=""></a>
            </div>
            <!--Pregunta 6-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-6" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                   Haz finalizado el test felicitaciones!!
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <h1>Haz finalizado el test felicitaciones!!</h1>

                </div>

                <a class="flex-c-m s1-txt2 size3 how-btn" type="button" href="index.php">
                    Regresar al inicio
                </a>
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
                document.getElementById("fecha").type = "text";

                document.getElementById("fecha").addEventListener("blur", function () {
                    document.getElementById("fecha").type = "text";
                });

                document.getElementById("fecha").addEventListener("focus", function () {
                    document.getElementById("fecha").type = "date";
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
        <script src="js/respuestas.js"></script>
    </body>
</html>
