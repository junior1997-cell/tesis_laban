var preguntacarrito= [];
var respuestacarrito= [];
//Función que se ejecuta al inicio
function init(){
	
	$("#formulario_test").on("submit",function(e){

		guardaryeditar_test(e);	

	});

    toastr.success("Bienvenido al Test de Baron !!")
}

function pintarrespuestas(p,r){

    var cont=0;

    $(".p"+p+"-r"+r).addClass('pintar-respuesta');

    // istanciamos la pregunta
    let pregunta= p;
      
    const arraypregunta ={
        pregunta:pregunta
    }

    // instaciamos la respuesta
    let respuesta= r;
      
    const arrayrespuesta ={
        respuesta:respuesta
    }

    if (p==1) {

        $(".pregunta-1").hide();

        $(".pregunta-2").show();

        toastr.success("Cambios guardados !!")

        // guardamos la pregunta
        preguntacarrito=[...preguntacarrito,arraypregunta];

        var arraypreguntaconvert = JSON.stringify(preguntacarrito);
        
        localStorage.setItem("arraypregunta", arraypreguntaconvert);

        // guardamos la repuesta
        respuestacarrito=[...respuestacarrito,arrayrespuesta];

        var arrayrespuestaconvert = JSON.stringify(respuestacarrito);
        
        localStorage.setItem("arrayrespuesta", arrayrespuestaconvert);

    }else {

        if (p == 60) {

            // guardamos la pregunta
            preguntacarrito=[...preguntacarrito,arraypregunta];

            var arraypreguntaconvert = JSON.stringify(preguntacarrito);
            
            localStorage.setItem("arraypregunta", arraypreguntaconvert);
            
            // guardamos la repuesta
            respuestacarrito=[...respuestacarrito,arrayrespuesta];

            var arrayrespuestaconvert = JSON.stringify(respuestacarrito);
            
            localStorage.setItem("arrayrespuesta", arrayrespuestaconvert);

            toastr.success("Cambios guardando en la BD... !!")

            let nombre              = localStorage.getItem('nombre'); 
            let codigo_estudiante   =localStorage.getItem('codigo_estudiante'); 
            let apellidos           =localStorage.getItem('apellidos'); 
            let distrito            =localStorage.getItem('distrito'); 
            let sexo                =localStorage.getItem('sexo');
            let nacimiento          =localStorage.getItem('nacimiento'); 
            let celular             =localStorage.getItem('celular'); 
            let provincia           =localStorage.getItem('provincia'); 
            let universidad         =localStorage.getItem('universidad'); 
            let carrera             =localStorage.getItem('carrera');
            let tipo_colegio        =localStorage.getItem('tipo_colegio');    
            let departamento        =localStorage.getItem('departamento');
            
            let pregunta            = JSON.parse(localStorage.getItem('arraypregunta'));
            let punto           = JSON.parse(localStorage.getItem('arrayrespuesta'));
            console.log(pregunta);
            console.log(punto);
            $('#modal-guardando').modal('show');
            $.post("ajax/test_baron.php?op=guardaryeditar", 
                {
                    nombre : nombre,
                    codigo_estudiante : codigo_estudiante,
                    apellidos : apellidos,
                    distrito : distrito,
                    sexo : sexo,
                    nacimiento : nacimiento,
                    celular : celular,
                    provincia : provincia,
                    universidad : universidad,
                    carrera : carrera,
                    tipo_colegio : tipo_colegio,
                    departamento : departamento,
                    pregunta : pregunta,
                    punto : punto,
                }, 
                function(e){
                    if (e == "ok") {
                        console.log(e);
                        cont=p+1;

                        $(".pregunta-"+p).hide();
        
                        $(".pregunta-"+cont).show();

                        $('#modal-guardando').modal('hide');
                    } else {

                        toastr.error(e)

                    }                
                }
            );

        }else{
            // guardamos la pregunta 
            preguntacarrito=[...preguntacarrito,arraypregunta];

            var arraypreguntaconvert = JSON.stringify(preguntacarrito);
            
            localStorage.setItem("arraypregunta", arraypreguntaconvert);

            // guardamos la repuesta
            respuestacarrito=[...respuestacarrito,arrayrespuesta];

            var arrayrespuestaconvert = JSON.stringify(respuestacarrito);
            
            localStorage.setItem("arrayrespuesta", arrayrespuestaconvert);
    
            cont=p+1;
    
            $(".pregunta-"+p).hide();
    
            $(".pregunta-"+cont).show();
    
            toastr.success("Cambios guardados !!")
        }       
    }
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
