var preguntacarrito= [];
var respuestacarrito= [];
//Función que se ejecuta al inicio
function init(){
	
	$("#formulario_test").on("submit",function(e){

		guardaryeditar_test(e);	

	});

    toastr.success("Bienvenido al Test de Baron !!")
}

function limpiar() {
    $("#barra_progress").css({"width":'0%'});
    $("#barra_progress").text("0%");
}
function pintarrespuestas(p,r){

    var cont=0;

    $(".p"+p+"-r"+r).addClass('pintar-respuesta');

    // istanciamos la pregunta
    // let pregunta= p;
      
    // const arraypregunta ={
    //     pregunta:pregunta
    // }

    // instaciamos la respuesta
    // let respuesta= r;
      
    // const arrayrespuesta ={
    //     respuesta:respuesta
    // }

    if (p==1) {

        $(".pregunta-1").hide();

        $(".pregunta-2").show();

        toastr.success("Cambios guardados !!")

        // guardamos la pregunta
        // preguntacarrito=[...preguntacarrito,preguntacarrito];

        var arraypreguntaconvert = JSON.stringify(preguntacarrito.push(p));
        
        localStorage.setItem("arraypregunta", preguntacarrito);

        // guardamos la repuesta
        // respuestacarrito=[...respuestacarrito,arrayrespuesta];

        var arrayrespuestaconvert = JSON.stringify(respuestacarrito.push(r));
        
        localStorage.setItem("arrayrespuesta", respuestacarrito);

        console.log(preguntacarrito);
        console.log(arraypreguntaconvert);
    }else {

        if (p == 60) {

            // guardamos la pregunta
            // preguntacarrito=[...preguntacarrito,arraypregunta];

            var arraypreguntaconvert = JSON.stringify(preguntacarrito.push(p));
            
            localStorage.setItem("arraypregunta", arraypreguntaconvert);
            
            // guardamos la repuesta
            // respuestacarrito=[...respuestacarrito,arrayrespuesta];

            var arrayrespuestaconvert = JSON.stringify(respuestacarrito.push(r));
            
            localStorage.setItem("arrayrespuesta", arrayrespuestaconvert);

            toastr.success("Cambios guardando en la BD... !!")

            let nombre              = localStorage.getItem('nombre'); 
            let apellido            = localStorage.getItem('apellido'); 
            let codigo_estudiante   = localStorage.getItem('codigo_estudiante'); 
            let sexo                = localStorage.getItem('sexo'); 
            let fecha_nacimiento    = localStorage.getItem('fecha_nacimiento');
            let numero_telefono     = localStorage.getItem('numero_telefono'); 
            let universidad         = localStorage.getItem('universidad'); 
            let carrera             = localStorage.getItem('carrera'); 
            let tipo_colegio        = localStorage.getItem('tipo_colegio'); 
            let departamento        = localStorage.getItem('departamento');
            let provincia           = localStorage.getItem('provincia');    
            let distrito            = localStorage.getItem('distrito');
            
            let pregunta            = preguntacarrito;
            let punto               = respuestacarrito;

            console.log(pregunta);

            console.log(punto);

            $('#guardando-respuestas').show();

            $.post("ajax/test_baron.php?op=guardaryeditar", 
                {
                    nombre : nombre, 
                    apellido : apellido, 
                    codigo_estudiante : codigo_estudiante, 
                    sexo : sexo, 
                    fecha_nacimiento : fecha_nacimiento, 
                    numero_telefono : numero_telefono, 
                    universidad : universidad, 
                    carrera : carrera, 
                    tipo_colegio : tipo_colegio, 
                    departamento : departamento, 
                    provincia : provincia, 
                    distrito : distrito,
                    pregunta : pregunta,
                    punto : punto,
                }, 
                function(e){
                    if (e == "ok") {

                        console.log(e);

                        cont=p+1;

                        $(".pregunta-"+p).hide();
        
                        $(".pregunta-"+cont).show();

                        $('#guardando-respuestas').hide();
                    } else {

                        toastr.error(e)
                    }                
                }
                 
            );
            
            
            // formData.append(nombre, apellido, codigo_estudiante, sexo, fecha_nacimiento, numero_telefono, universidad, carrera, tipo_colegio, departamento, provincia, distrito, pregunta, punto);
             
        }else{
            // guardamos la pregunta 
            // preguntacarrito=[...preguntacarrito,arraypregunta];

            var arraypreguntaconvert = JSON.stringify(preguntacarrito.push(p));
            
            localStorage.setItem("arraypregunta", preguntacarrito);

            // guardamos la repuesta
            // respuestacarrito=[...respuestacarrito,arrayrespuesta];

            var arrayrespuestaconvert = JSON.stringify(respuestacarrito.push(r));
            
            localStorage.setItem("arrayrespuesta", respuestacarrito);
    
            cont=p+1;
    
            $(".pregunta-"+p).hide();
    
            $(".pregunta-"+cont).show();
    
            toastr.success("Cambios guardados !!")
            console.log(preguntacarrito);
            console.log(arraypreguntaconvert);
        }       
    }
}


function l_m(){

    limpiar();

    $("#barra_progress").css({"width":'0%'});

    $("#barra_progress").text("0%");
}

function guardaryeditar_test(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	
	var formData = new FormData($("#formulario_venta")[0]);

	$.ajax({
		url: "../ajax/venta.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos){ 

            if (datos == "ok") {

                toastr.success('Venta registrada correctamente')

            } else {

                toastr.error(datos)

            }
	    }
	});    
}

function buscar_sunat_reniec() {
	
    $('#search').hide();

    $('#charge').show();

    let tipo_doc = $("#tipo_documento").val();

    let dni_ruc = $("#num_documento").val();

    if (tipo_doc == 'DNI') {

        $('#tipo_doc').removeClass('is-invalid');

        if (dni_ruc.length == '8') {

            $.post("../ajax/persona.php?op=reniec", { dni: dni_ruc }, function (data, status) {
                
                data = JSON.parse(data);
                
                if (data.success == false) {

                    $('#search').show();

                    $('#charge').hide();
                    
                    toastr.error('Es probable que el sistema de busqueda esta en mantenimiento o los datos no existe en la RENIEC!!!');

                } else {
                    
                    $('#search').show();

                    $('#charge').hide();

                    $("#nombre").val(data.nombres + ' ' +  data.apellidoPaterno + ' ' + data.apellidoMaterno);

                    toastr.success('Cliente encontrado!!!!');
                }
            })
        } else {

            $('#search').show();

            $('#charge').hide();

            toastr.info('Asegurese de que el DNI tenga 8 dígitos!!!');
        }

    } else {

        if (tipo_doc == 'RUC') {

            $('#tipo_doc').removeClass('is-invalid');

            if (dni_ruc.length == '11') {

                $.post("../ajax/persona.php?op=sunat", { ruc: dni_ruc }, function (data, status) {
                     
                    data = JSON.parse(data);

                    if (data.success == false) {

                        $('#search').show();

                        $('#charge').hide();

                        toastr.error('Datos no encontrados en la SUNAT!!!');
                    } else {

                        if (data.estado == 'ACTIVO') {

                            $('#search').show();

                            $('#charge').hide();

                            $("#nombre").val(data.razonSocial);

                            data.nombreComercial == null ? $("#apellidos_nombre_comercial").val('-') : $("#apellidos_nombre_comercial").val(data.nombreComercial);
                            
                            data.direccion == null ? $("#direccion").val('-') : $("#direccion").val(data.direccion);
                            // $("#direccion").val(data.direccion);
                            toastr.success('Cliente encontrado');
                        } else {

                            toastr.info('Se recomienda no generar BOLETAS o Facturas!!!');

                            $('#search').show();

                            $('#charge').hide();

                            $("#nombre").val(data.razonSocial);

                            data.nombreComercial == null ? $("#apellidos_nombre_comercial").val('-') : $("#apellidos_nombre_comercial").val(data.nombreComercial);
                            data.direccion == null ? $("#direccion").val('-') : $("#direccion").val(data.direccion);

                            // $("#direccion").val(data.direccion);
                        }
                    }
                })
            } else {

                $('#search').show();

                $('#charge').hide();

                toastr.info('Asegurese de que el RUC tenga 11 dígitos!!!');
            }
        } else {
            if (tipo_doc == 'CEDULA' || tipo_doc == 'OTRO' ) {

                $('#search').show();

                $('#charge').hide();

                toastr.info('No necesita hacer consulta');
            } else {

                $('#tipo_doc').addClass('is-invalid');

                $('#search').show();

                $('#charge').hide();

                toastr.error('Selecione un tipo de documento');
            }
        }
    }
}

init();
