<?php 
	ob_start();

	if (strlen(session_id()) < 1){

		session_start();//Validamos si existe o no la sesión
	}

	//Llamamos al modelo, donde estan nuestras consultas a la Base de Datos.
	require_once "../modelos/Venta.php";

	// Instanciamos la Clase del modelo
	$venta=new Venta();

	// Recepcionamos las inputs del formulario
	$nombre				=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
	$apellidos			=$_SESSION["apellidos"];
	$codigo_estudiante	=isset($_POST["codigo_estudiante"])? limpiarCadena($_POST["codigo_estudiante"]):"";
	$sexo				=isset($_POST["sexo"])? limpiarCadena($_POST["sexo"]):"";
	$edad				=isset($_POST["edad"])? limpiarCadena($_POST["edad"]):"";
	$numero_telefono	=isset($_POST["fecha_hora"])? limpiarCadena($_POST["fecha_hora"]):"";
	$escuela_profesional=isset($_POST["impuesto"])? limpiarCadena($_POST["impuesto"]):"";
	$ciclo_grupo		=isset($_POST["total_venta"])? limpiarCadena($_POST["total_venta"]):"";	

	switch ($_GET["op"]){

		case 'guardaryeditar':

			if (!empty($nombre)){

				$rspta=$venta->insertar($nombre,$apellidos,$codigo_estudiante,$sexo,$edad,$numero_telefono,$escuela_profesional,$ciclo_grupo,$_POST["pregunta"],$_POST["punto"]);
				
				echo $rspta ? "ok" : "No se pudieron registrar tus datos";

			} else {

				echo "No se pudieron registrar tus datos";
				
			}

		break;
	}

	function recortarTexto($texto, $limite=100){

		$texto = trim($texto);

		$texto = strip_tags($texto);

		$tamano = strlen($texto);

		$resultado = '';

		if($tamano <= $limite){

			return $texto;

		}else{

			$texto = substr($texto, 0, $limite);

			$palabras = explode(' ', $texto);

			$resultado = implode(' ', $palabras);

			$resultado .= '...';

		}

		return $resultado;
	}

	ob_end_flush();

?>