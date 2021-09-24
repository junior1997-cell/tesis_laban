<?php 
	ob_start();

	if (strlen(session_id()) < 1){

		session_start();//Validamos si existe o no la sesión
	}

	//Llamamos al modelo, donde estan nuestras consultas a la Base de Datos.
	require_once "../modelos/TestBaron.php";

	// Instanciamos la Clase del modelo
	$test_baron=new TestBaron();

	// Recepcionamos las inputs del formulario
	$nombre				=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
	$apellidos			=isset($_POST["apellidos"])? limpiarCadena($_POST["apellidos"]):"";
	$codigo_estudiante	=isset($_POST["codigo_estudiante"])? limpiarCadena($_POST["codigo_estudiante"]):"";
	$sexo				=isset($_POST["sexo"])? limpiarCadena($_POST["sexo"]):"";
	$edad				=isset($_POST["edad"])? limpiarCadena($_POST["edad"]):"";
	$numero_telefono	=isset($_POST["fecha_hora"])? limpiarCadena($_POST["fecha_hora"]):"";
	$escuela_profesional=isset($_POST["impuesto"])? limpiarCadena($_POST["impuesto"]):"";
	$ciclo_grupo		=isset($_POST["total_venta"])? limpiarCadena($_POST["total_venta"]):"";	

	switch ($_GET["op"]){

		case 'guardaryeditar':

			if (!empty($nombre)){

				$rspta=$test_baron->insertar($nombre,$apellidos,$codigo_estudiante,$sexo,$edad,$numero_telefono,$escuela_profesional,$ciclo_grupo,$_POST["pregunta"],$_POST["punto"]);
				
				echo $rspta ? "ok" : "No se pudieron registrar tus datos";

			} else {

				echo "No se pudieron registrar tus datos";
				
			}

		break;

		case "departamento":
	
			$rspta = $test_baron->select_departamento();

			$estado = true;

			while ($reg = $rspta->fetch_object()) {

				if ($estado) {

					echo '<option value=' . '' . '>Departamento</option>';
					
					$estado= false;
				}	

			  	echo '<option value=' . $reg->id_departamento . '>' . $reg->nombre . '</option>';
			}

		break;

		case "provincia":
	
			$rspta = $test_baron->select_provincia();
			
			$estado = true;

			while ($reg = $rspta->fetch_object()) {

				if ($estado) {

					echo '<option value=' . '' . '>Provincia</option>';
					
					$estado= false;
				}

			  echo '<option value=' . $reg->id_provincia . '>' . $reg->nombre . '</option>';
			}

		break;

		case "distrito":
	
			$rspta = $test_baron->select_distrito();
			
			$estado = true;

			while ($reg = $rspta->fetch_object()) {

				if ($estado) {

					echo '<option value=' . '' . '>Distrito</option>';
					
					$estado= false;
				}

			  echo '<option value=' . $reg->id_distrito . '>' . $reg->nombre . '</option>';
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