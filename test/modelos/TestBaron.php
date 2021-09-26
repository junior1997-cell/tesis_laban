<?php 
	//Incluímos inicialmente la conexión a la base de datos
	require "../config/Conexion.php";

	Class TestBaron
	{
		//Implementamos nuestro constructor
		public function __construct(){	}

		//Implementamos un método para insertar registros
		public function insertar($nombre,$codigo_estudiante,$apellidos,$distrito,$sexo,$nacimiento,$celular,$provincia,$universidad,$carrera,$tipo_colegio,$departamento,$pregunta,$punto)
		{
			//var_dump($distrito);die;
			$sql="INSERT INTO persona (nombre,codigo_estudiante,apellido,iddistrito,sexo,fecha_nacimiento,numero_telefono,idprovincia,universidad,carrera,tipo_colegio,iddepartamento )
			VALUES ('$nombre','$codigo_estudiante','$apellidos','$distrito','$sexo','$nacimiento','$celular','$provincia','$universidad','$carrera','$tipo_colegio','$departamento')";

			//return ejecutarConsulta($sql);
			$idpersona=ejecutarConsulta_retornarID($sql);

			$num_elementos=0;
			//var_dump($idpersona);die;
			$sw=true;

			while ($num_elementos < count($punto))
			{

				$insertar_pregunta = "INSERT INTO respuesta(idpersona,idpregunta,idpunto)	
				VALUES ('$idpersona','$pregunta[$num_elementos]','$punto[$num_elementos]')";

				ejecutarConsulta($insertar_pregunta) or $sw = false;
			}

			return $idpersona;
		}

		// Select Departamento
		public function select_departamento()
		{
			$sql="SELECT * FROM tesis_laban.departamento;";

			return ejecutarConsulta($sql);		
		}

		// Select Provincia
		public function select_provincia()
		{
			$sql="SELECT * FROM tesis_laban.provincia;";

			return ejecutarConsulta($sql);		
		}

		// Select Distrito
		public function select_distrito()
		{
			$sql="SELECT * FROM tesis_laban.distrito;";

			return ejecutarConsulta($sql);		
		}

		// Cargamos los total varon respuestas
		public function mostrar_total_mujeres()
		{
			$sql="SELECT count(*) as total FROM tesis_laban.respuesta as r, tesis_laban.persona as p where  r.idpersona = p.id_persona and p.sexo = 'Femenino';";

			return ejecutarConsultaSimpleFila($sql);		
		}

		// Cargamos los total varon respuestas
		public function mostrar_total_hombres()
		{
			$sql="SELECT count(*) as total FROM tesis_laban.respuesta as r, tesis_laban.persona as p where  r.idpersona = p.id_persona and p.sexo = 'Masculino';";

			return ejecutarConsultaSimpleFila($sql);		
		}

		// Cargamos los total varon respuestas
		public function mostrar_total()
		{
			$sql="SELECT count(*) as total FROM tesis_laban.respuesta ;";

			return ejecutarConsultaSimpleFila($sql);		
		}
	}
?>