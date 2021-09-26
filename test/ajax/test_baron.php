<?php 
	ob_start();

	if (strlen(session_id()) < 1){

		session_start();//Validamos si existe o no la sesión
	}

	//Llamamos al modelo, donde estan nuestras consultas a la Base de Datos.
	require_once "../modelos/TestBaron.php";

	// Instanciamos la Clase del modelo
	$test_baron=new TestBaron();

	

	switch ($_GET["op"]){

		case 'guardaryeditar':
			// Recepcionamos las inputs del formulario
			 

			$nombre =isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
			$codigo_estudiante =isset($_POST["codigo_estudiante"])? limpiarCadena($_POST["codigo_estudiante"]):"";
			$apellidos =isset($_POST["apellidos"])? limpiarCadena($_POST["apellidos"]):"";
			$distrito =isset($_POST["distrito"])? limpiarCadena($_POST["distrito"]):"";
			$sexo =isset($_POST["sexo"])? limpiarCadena($_POST["sexo"]):"";
			$nacimiento =isset($_POST["nacimiento"])? limpiarCadena($_POST["nacimiento"]):"";
			$celular =isset($_POST["celular"])? limpiarCadena($_POST["celular"]):"";
			$provincia =isset($_POST["provincia"])? limpiarCadena($_POST["provincia"]):"";
			$universidad =isset($_POST["universidad"])? limpiarCadena($_POST["universidad"]):"";
			$carrera =isset($_POST["carrera"])? limpiarCadena($_POST["carrera"]):"";
			$tipo_colegio =isset($_POST["tipo_colegio"])? limpiarCadena($_POST["tipo_colegio"]):"";
			$departamento =isset($_POST["departamento"])? limpiarCadena($_POST["departamento"]):"";
			$pregunta =$_POST["pregunta"];
			$punto =$_POST["punto"];

			

			if (!empty($nombre)){

				$rspta=$test_baron->insertar($nombre,$codigo_estudiante,$apellidos,$distrito,$sexo,$nacimiento,$celular,$provincia,$universidad,$carrera,$tipo_colegio,$departamento,$pregunta,$punto);
				
				echo $rspta ? "ok" : "No se pudieron registrar tus datos";

			} else {

				echo "No se pudieron registrar tus datos";
				
			}

		break;

		case 'mostrar_total_mujeres':

			$rspta = $test_baron->mostrar_total_mujeres();
			
			echo json_encode($rspta);

		break;

		case 'mostrar_total_hombre':

			$rspta = $test_baron->mostrar_total_hombres();
			
			echo json_encode($rspta);

		break;

		case 'mostrar_total':

			$rspta = $test_baron->mostrar_total();
			
			echo json_encode($rspta);

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