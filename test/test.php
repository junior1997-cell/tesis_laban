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

		<!-- Toastr -->
		<link rel="stylesheet" href="toastr/toastr.min.css">
    </head>
    <style>
        video {
            max-width: 100%;
            max-height: 100%;
        }
        		/* (1280x720) Galaxy Note 2, WXGA */
		@media only screen and (min-device-width: 290px) and (max-device-width: 938px) {
            /* insert styles here */
            .video{
                
                display: none;
            }
            .boady{
                background-color: brown;
            }
            .bag{
                background-color: #992e45;
            }
        }
    </style>
    <body class="boady" >
        <div style="position: absolute;">
            <video autoplay="" muted="" loop="" class="video">
                <source src="images/v_fondo.mp4" type="video/mp4" />
            </video>
            <div class="overlay"></div>
        </div>
        <div class="size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-t-55 p-b-35 respon1 bag" style="position: absolute;">
            <div class="flex-col-c p-t-50 p-b-50 pregunta-1">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    1. Me gusta divertirme. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p1-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(1,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p1-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(1,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p1-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(1,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p1-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(1,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
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
                    <div class="flex-col-c-m size2 how-countdown p2-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(2,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p2-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(2,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p2-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(2,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p2-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(2,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
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
                    <div class="flex-col-c-m size2 how-countdown p3-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(3,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p3-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(3,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p3-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(3,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p3-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(3,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
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
                    <div class="flex-col-c-m size2 how-countdown p4-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(4,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p4-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(4,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p4-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(4,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p4-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(4,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
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
                    <div class="flex-col-c-m size2 how-countdown p5-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(5,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p5-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(5,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p5-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(5,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p5-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(5,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 6-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-6" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                     6. Me es difícil controlar mi cólera. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p6-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(6,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p6-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(6,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p6-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(6,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p6-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(6,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 7-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-7" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    7. Es fácil decirle a la gente cómo me siento. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p7-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(7,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p7-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(7,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p7-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(7,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p7-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(7,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 8-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-8" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    8. Me gustan todas las personas que conozco. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p8-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(8,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p8-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(8,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p8-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(8,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p8-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(8,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 9-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-9" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    9. Me siento seguro (a) de mi mismo (a). *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p9-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(9,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p9-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(9,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p9-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(9,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p9-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(9,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 10-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-10" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    10. Sé cómo se sienten las personas. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p10-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(10,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p10-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(10,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p10-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(10,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p10-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(10,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 11-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-11" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    11. Sé como mantenerme tranquilo (a). *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p11-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(11,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p11-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(11,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p11-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(11,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p11-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(11,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 12-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-12" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                     12. Intento usar diferentes formas de responder las preguntas difíciles. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p12-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(12,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p12-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(12,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p12-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(12,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p12-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(12,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 13-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-13" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    13. Pienso que las cosas que hago salen bien. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p13-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(13,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p13-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(13,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p13-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(13,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p13-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(13,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 14-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-14" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    14. Soy capaz de respetar a los demás. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p14-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(14,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p14-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(14,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p14-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(14,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p14-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(14,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 15-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-15" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    15. Me molesto demasiado de cualquier cosa. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p15-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(15,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p15-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(15,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p15-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(15,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p15-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(15,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 16-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-16" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    16. Es fácil para mí comprender las cosas nuevas. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p16-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(16,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p16-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(16,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p16-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(16,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p16-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(16,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 17-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-17" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    17. Puedo hablar fácilmente sobre mis sentimientos. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p17-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(17,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p17-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(17,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p17-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(17,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p17-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(17,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 18-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-18" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    18. Pienso bien de todas las personas. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p18-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(18,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p18-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(18,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p18-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(18,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p18-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(18,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 19-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-19" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    19. Espero lo mejor. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p19-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(19,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p19-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(19,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p19-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(19,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p19-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(19,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 20-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-20" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    20. Tener amigos es importante. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p20-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(20,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p20-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(20,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p20-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(20,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p20-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(20,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 21-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-21" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    21.  Peleo con la gente. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p21-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(21,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p21-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(21,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p21-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(21,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p21-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(21,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 22-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-22" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    22. Puedo comprender preguntas difíciles. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p22-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(22,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p22-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(22,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p22-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(22,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p22-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(22,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>
            <!--Pregunta 23-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-23" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    23. Me agrada sonreír. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p23-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(23,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p23-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(23,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p23-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(23,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p23-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(23,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 24-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-24" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    24. Intento no herir los sentimientos de las personas. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p24-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(24,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p24-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(24,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p24-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(24,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p24-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(24,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 25-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-25" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    25. No me doy por vencido (a) ante un problema hasta que lo resuelvo. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p25-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(25,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p25-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(25,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p25-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(25,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p25-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(25,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 26-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-26" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    26. Tengo mal genio. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p26-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(26,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p26-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(26,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p26-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(26,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p26-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(26,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 27-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-27" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    27. Nada me molesta. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p27-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(27,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p27-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(27,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p27-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(27,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p27-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(27,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 28-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-28" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    28. Es difícil hablar sobre mis sentimientos más íntimos. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p28-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(28,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p28-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(28,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p28-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(28,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p28-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(28,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 29-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-29" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    29. Sé que las cosas saldrán bien. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p29-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(29,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p29-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(29,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p29-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(29,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p29-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(29,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 30-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-30" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    30. Puedo dar buenas respuestas a preguntas difíciles. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p30-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(30,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p30-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(30,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p30-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(30,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p30-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(30,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 31-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-31" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    31. Puedo fácilmente describir mis sentimientos. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p31-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(31,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p31-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(31,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p31-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(31,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p31-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(31,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 32-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-32" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    32. Sé cómo divertirme. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p32-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(32,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p32-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(32,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p32-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(32,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p32-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(32,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 33-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-33" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    33. Debo decir siempre la verdad. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p33-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(33,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p33-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(33,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p33-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(33,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p33-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(33,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 34-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-34" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    34. Puedo tener muchas maneras de responder una pregunta difícil, cuando yo quiero. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p34-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(34,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p34-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(34,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p34-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(34,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p34-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(34,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 35-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-35" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    35. Me molesto fácilmente. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p35-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(35,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p35-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(35,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p35-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(35,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p35-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(35,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 36-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-36" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    36. Me agrada hacer cosas para los demás. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p36-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(36,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p36-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(36,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p36-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(36,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p36-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(36,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 37-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-37" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    37. No me siento muy feliz. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p37-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(37,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p37-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(37,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p37-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(37,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p37-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(37,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 38-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-38" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    38. Puedo usar fácilmente diferentes modos de resolver los problemas. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p38-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(38,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p38-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(38,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p38-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(38,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p38-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(38,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 39-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-39" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    39. Demoro en molestarme. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p39-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(39,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p39-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(39,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p39-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(39,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>
                    <div class="flex-col-c-m size2 how-countdown p39-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(39,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 40-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-40" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    40. Me siento bien conmigo mismo (a). *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p40-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(40,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p40-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(40,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p40-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(40,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p40-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(40,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 41-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-41" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    41. Hago amigos fácilmente. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p41-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(41,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p41-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(41,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p41-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(41,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p41-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(41,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 42-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-42" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    42. Pienso que soy el (la) mejor en todo lo que hago. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p42-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(42,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p42-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(42,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p42-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(42,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p42-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(42,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 43-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-43" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    43. Para mí es fácil decirle a las personas cómo me siento. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p43-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(43,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p43-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(43,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p43-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(43,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p43-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(43,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 44-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-44" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    44. Cuando respondo preguntas difíciles trato de pensar en muchas soluciones. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p44-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(44,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p44-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(44,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p44-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(44,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p44-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(44,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 45-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-45" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    45. Me siento mal cuando las personas son heridas en sus sentimientos. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p45-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(45,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p45-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(45,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p45-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(45,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p45-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(45,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 46-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-46" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    46. Cuando estoy molesto (a) con alguien, me siento molesto (a) por mucho tiempo. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p46-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(46,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p46-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(46,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p46-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(46,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p46-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(46,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 47-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-47" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    47. Me siento feliz con la clase de persona que soy. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p47-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(47,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p47-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(47,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p47-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(47,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p47-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(47,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 48-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-48" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    48. Soy bueno (a) resolviendo problemas. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p48-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(48,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p48-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(48,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p48-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(48,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p48-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(48,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 49-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-49" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    49. Para mí es difícil esperar mi turno. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p49-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(49,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p49-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(49,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p49-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(49,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p49-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(49,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 50-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-50" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    50. Me divierte las cosas que hago. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p50-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(50,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p50-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(50,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p50-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(50,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p50-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(50,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 51-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-51" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    51. Me agradan mis amigos. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p51-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(51,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p51-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(51,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p51-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(51,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p51-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(51,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 52-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-52" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    52. No tengo días malos. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p52-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(52,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p52-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(52,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p52-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(52,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p52-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(52,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 53-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-53" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    53. Me es difícil decirle a los demás mis sentimientos. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p53-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(53,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p53-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(53,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p53-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(53,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p53-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(53,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 54-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-54" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    54. Me fastidio fácilmente. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p54-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(54,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p54-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(54,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p54-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(54,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p54-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(54,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 55-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-55" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    55. Puedo darme cuenta cuando mi amigo se siente triste. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p55-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(55,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p55-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(55,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p55-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(55,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p55-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(55,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 56-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-56" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    56. Me gusta mi cuerpo. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p56-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(56,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p56-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(56,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p56-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(56,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p56-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(56,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 57-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-57" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    57. Aún cuando las cosas sean difíciles, no me doy por vencido. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p57-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(57,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p57-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(57,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p57-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(57,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p57-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(57,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 58-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-58" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    58. Cuando me molesto actúo sin pensar. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p58-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(58,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p58-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(58,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p58-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(58,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p58-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(58,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 59-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-59" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    59. Sé cuando la gente está molesta aún cuando no dicen nada. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p59-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(59,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p59-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(59,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p59-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(59,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p59-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(59,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 60-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-60" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                    60. Me gusta la forma como me veo. *
                </p>

                <div class="flex-w flex-c cd100 p-b-82">
                    <div class="flex-col-c-m size2 how-countdown p60-r1 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(60,1)">
                        <span class="s1-txt1">1. MUY RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p60-r2 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(60,2)">
                        <span class="s1-txt1">2. RARA VEZ</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p60-r3 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(60,3)">
                        <span class="s1-txt1">3. MENUDO</span>
                    </div>

                    <div class="flex-col-c-m size2 how-countdown p60-r4 pintar-hover" style="cursor: pointer !important;" onclick="pintarrespuestas(60,4)">
                        <span class="s1-txt1">4. MUY A MENUDO</span>
                    </div>
                </div>
            </div>

            <!--Pregunta 61-->
            <div class="flex-col-c p-t-50 p-b-50 pregunta-61" style="display: none;">
                <h3 class="l1-txt1 txt-center p-b-10">
                    Test Ice de Baron
                </h3>

                <p class="txt-center l1-txt2 p-b-60">
                   Haz finalizado el test felicitaciones!!
                </p>

				<div class="flex-w flex-c cd100 p-b-82">
					<img src="images/gracias.gif" alt="" width="200">
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
