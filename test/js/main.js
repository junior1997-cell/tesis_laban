function init() {    

    //Cargamos los departamentos
	$.post("ajax/test_baron.php?op=departamento", function(r){

		$("#departamento").html(r);
	});

    //Cargamos los provincia
	$.post("ajax/test_baron.php?op=provincia", function(r){
		$("#provincia").html(r);
	});

    //Cargamos los distrito
	$.post("ajax/test_baron.php?op=distrito", function(r){

		$("#distrito").html(r);
	});

    //Cargamos los total varon respuestas
	$.post("ajax/test_baron.php?op=mostrar_total_hombre", function(data, status){

        var data1 = JSON.parse(data);   console.log(data1.total);

		$("#total_varon").html(data1.total);
	});

    //Cargamos los total mujer respuestas
	$.post("ajax/test_baron.php?op=mostrar_total_mujeres", function(data, status){

        var data2 = JSON.parse(data);    console.log(data2.total);

		$("#total_mujer").html(data2.total);
	});

    //Cargamos los total de respuestas
	$.post("ajax/test_baron.php?op=mostrar_total", function(data, status){

        var data3 = JSON.parse(data);    console.log(data3.total);

		$("#total").html(data3.total);
	});
}

(function ($) {
    "use strict";

    /*================================================================== [ Validate ]*/

    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){

        var check = true;

        for(var i=0; i<input.length; i++) {

            if(validate(input[i]) == false){

                showValidate(input[i]);

                

                check=false;
            }
        }
        
        return check;
    });


    $('.validate-form .input100').each(function(){

        $(this).focus(function(){

           hideValidate(this);
        });
    });

    function validate (input) {        

        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {

            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                
                return false;
            }

        } else {

            if($(input).val() == '' ){

                return false;
            }
        }
    }

    function showValidate(input) {

        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {

        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }

    /*================================================================== [ Modal ]*/

    $('.modal-subscribe').on('click',function(e){

        e.stopPropagation();
        localStorage.setItem('nombre', $("#nombre").val()); 
        localStorage.setItem('apellidos', $("#apellidos").val()); 
        localStorage.setItem('codigo_estudiante', $("#codigo_estudiante").val()); 
        localStorage.setItem('distrito', $("#distrito").val()); 
        localStorage.setItem('sexo', $("#sexo").val());
        localStorage.setItem('nacimiento', $("#nacimiento").val()); 
        localStorage.setItem('celular', $("#celular").val()); 
        localStorage.setItem('provincia', $("#provincia").val()); 
        localStorage.setItem('universidad', $("#universidad").val()); 
        localStorage.setItem('carrera', $("#carrera").val());
        localStorage.setItem('tipo_colegio', $("#tipo_colegio").val());    
        console.log($("#nombre").val());
        console.log($("#apellidos").val());
        console.log($("#codigo_estudiante").val());
        console.log($("#distrito").val());
        console.log($("#sexo").val());
        console.log($("#nacimiento").val());
        console.log($("#celular").val());
        console.log($("#provincia").val());
        console.log($("#universidad").val());
        console.log($("#carrera").val());
        console.log($("#tipo_colegio").val());
    })
    
    $('.btn-close-modal').on('click', function(e){

        $('#subscribe').modal('hide'); 

         
    });

})(jQuery);

init();