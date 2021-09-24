function init() {    

    //Cargamos los departamentos
	$.post("ajax/test_baron.php?op=departamento", function(r){

        console.log(r);

		$("#departamento").html(r);
	});

    //Cargamos los departamentos
	$.post("ajax/test_baron.php?op=provincia", function(r){

        console.log(r);

		$("#provincia").html(r);
	});

    //Cargamos los departamentos
	$.post("ajax/test_baron.php?op=distrito", function(r){

        console.log(r);

		$("#distrito").html(r);
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
    })
    
    $('.btn-close-modal').on('click', function(e){

        $('#subscribe').modal('hide'); 

        toastr.success("Bienvenido al sistema !!") 
    });

})(jQuery);

init();