<?php 
	//Incluímos inicialmente la conexión a la base de datos
	require "../config/Conexion.php";

	Class TestBaron
	{
		//Implementamos nuestro constructor
		public function __construct(){	}

		//Implementamos un método para insertar registros
		public function insertar($nombre,$apellidos,$codigo_estudiante,$sexo,$edad,$numero_telefono,$escuela_profesional,$ciclo_grupo,$pregunta,$punto)
		{
			$sql="INSERT INTO persona (nombre,apellidos,codigo_estudiante,sexo,edad,numero_telefono,escuela_profesional,ciclo_grupo)
			VALUES ('$nombre','$apellidos','$codigo_estudiante','$sexo','$edad','$numero_telefono','$escuela_profesional','$ciclo_grupo')";

			//return ejecutarConsulta($sql);
			$idpersona=ejecutarConsulta_retornarID($sql);

			$num_elementos=0;

			$sw=true;

			while ($num_elementos < count($idarticulo))
			{

				$insertar_pregunta = "INSERT INTO respuesta(idpersona, idpregunta, idpunto)	
				VALUES ('$idpersona', '$pregunta[$num_elementos]','$punto[$num_elementos]')";

				ejecutarConsulta($insertar_pregunta) or $sw = false;

			}

			return $sw;
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
	}
?>