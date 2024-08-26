<?php 
    include_once ('clases/Empleado.php');
    include_once ('clases/Vacuna.php');
    include_once ('clases/Historial.php');
    include_once ('clases/Mascota.php');
    include_once ('clases/Proveedor.php');


    //clase

        class controladorEmpleado{

            //atributos
            
            private $empleado;
    
            //metodos
    
            public function __construct(){
    
                $this->empleado = new Empleado();
    
            }
    
            public function index(){
    
                $resultado = $this->empleado->listar();
                return $resultado;
    
            }
    
            public function crear($nombre, $direccion, $fecha_nacimiento, $lugar_nacimiento, $puesto, $sueldo, $telefono, $correo){
    
                $this->empleado->set("nombre", $nombre);
                $this->empleado->set("direccion", $direccion);
                $this->empleado->set("fecha_nacimiento", $fecha_nacimiento);
                $this->empleado->set("lugar_nacimiento", $lugar_nacimiento);
                $this->empleado->set("puesto", $puesto);
                $this->empleado->set("sueldo", $sueldo);
                $this->empleado->set("telefono", $telefono);
                $this->empleado->set("correo", $correo);
    
                $resultado = $this->empleado->crear();
                return $resultado;
    
            }
    
            public function eliminar($id_empleado){
                $this->empleado->set("id_empleado", $id_empleado);
                $this->empleado->eliminar();
            }
    
            public function consultar($id_empleado){
    
                $this->empleado->set("id_empleado", $id_empleado);
                $datos= $this->empleado->consultar();
                return $datos;
    
            }
    
            public function editar($id_empleado,$nombre, $direccion, $fecha_nacimiento, $lugar_nacimiento, $puesto, $sueldo, $telefono, $correo){
    
                $this->empleado->set("id_empleado", $id_empleado);
                $this->empleado->set("nombre", $nombre);
                $this->empleado->set("direccion", $direccion);
                $this->empleado->set("fecha_nacimiento", $fecha_nacimiento);
                $this->empleado->set("lugar_nacimiento", $lugar_nacimiento);
                $this->empleado->set("puesto", $puesto);
                $this->empleado->set("sueldo", $sueldo);
                $this->empleado->set("telefono", $telefono);
                $this->empleado->set("correo", $correo);
    
                $resultado = $this->empleado->editar();
                return $resultado;
            }
    
            }
            //clase para Vacunas

    class controladorVacuna{

        //atributos
        
        private $vacuna;

        //metodos

        public function __construct(){

            $this->vacuna = new Vacuna();

        }

        public function index(){

            $resultado = $this->vacuna->listar();
            return $resultado;

        }

        public function crear($nombre, $fecha_expiracion, $lote, $fecha_elaboracion, $cantidad, $tipo_vacuna, $descripcion){

            $this->vacuna->set("nombre", $nombre);
            $this->vacuna->set("fecha_expiracion", $fecha_expiracion);
            $this->vacuna->set("lote", $lote);
            $this->vacuna->set("fecha_elaboracion", $fecha_elaboracion);
            $this->vacuna->set("cantidad", $cantidad);
            $this->vacuna->set("tipo_vacuna", $tipo_vacuna);
            $this->vacuna->set("descripcion", $descripcion);
        
            $resultado = $this->vacuna->crear();
            return $resultado;

        }

        public function eliminar($id_vacuna){
            $this->vacuna->set("id_vacuna", $id_vacuna);
            $this->vacuna->eliminar();
        }

        public function consultar($id_vacuna){

            $this->vacuna->set("id_vacuna", $id_vacuna);
            $datos= $this->vacuna->consultar();
            return $datos;

        }

        public function editar($id_vacuna, $nombre, $fecha_expiracion, $lote, $fecha_elaboracion, $cantidad, $tipo_vacuna, $descripcion){

            $this->vacuna->set("id_vacuna", $id_vacuna);
            $this->vacuna->set("nombre", $nombre);
            $this->vacuna->set("fecha_expiracion", $fecha_expiracion);
            $this->vacuna->set("lote", $lote);
            $this->vacuna->set("fecha_elaboracion", $fecha_elaboracion);
            $this->vacuna->set("cantidad", $cantidad);
            $this->vacuna->set("tipo_vacuna", $tipo_vacuna);
            $this->vacuna->set("descripcion", $descripcion);
            $resultado= $this->vacuna->editar();
            return $resultado;

        }
    }


    class controladorHistorial{

        //atributos
        
        private $historial;

        //metodos

        public function __construct(){

            $this->historial = new Historial();

        }

        public function index(){

            $resultado = $this->historial->listar();
            return $resultado;

        }

        public function crear($diagnostico, $nombre_mascota, $tratamiento, $nombre_vacuna, $fecha_vacuna){

            $this->historial->set("diagnostico", $diagnostico);
            $this->historial->set("nombre_mascota", $nombre_mascota);
            $this->historial->set("tratamiento", $tratamiento);
            $this->historial->set("nombre_vacuna", $nombre_vacuna);
            $this->historial->set("fecha_vacuna", $fecha_vacuna);

            $resultado = $this->historial->crear();
            return $resultado;

        }

        public function eliminar($id_historial){
            $this->historial->set("id_historial", $id_historial);
            $this->historial->eliminar();
        }

        public function consultar($id_historial){

            $this->historial->set("id_historial", $id_historial);
            $datos= $this->historial->consultar();
            return $datos;

        }

        public function editar($id_historial, $diagnostico, $nombre_mascota, $tratamiento, $nombre_vacuna, $fecha_vacuna){

            $this->historial->set("id_historial", $id_historial); 
            $this->historial->set("diagnostico", $diagnostico);
            $this->historial->set("nombre_mascota", $nombre_mascota);
            $this->historial->set("tratamiento", $tratamiento);
            $this->historial->set("nombre_vacuna", $nombre_vacuna);
            $this->historial->set("fecha_vacuna", $fecha_vacuna);
            $resultado= $this->historial->editar();
            return $resultado;

        }
    }

    class controladorMascota{

        //atributos
        
        private $mascota;

        //metodos

        public function __construct(){

            $this->mascota = new Mascota();

        }

        public function index(){

            $resultado = $this->mascota->listar();
            return $resultado;

        }

        public function crear($nombre_mascota, $fecha_nacimiento, $tipo_animal, $raza, $peso, $size, $genero,$nombre_persona, $telefono_persona, $correo_persona){

            $this->mascota->set("nombre_mascota", $nombre_mascota);
            $this->mascota->set("fecha_nacimiento", $fecha_nacimiento);
            $this->mascota->set("tipo_animal", $tipo_animal);
            $this->mascota->set("raza", $raza);
            $this->mascota->set("peso", $peso);
            $this->mascota->set("size", $size);
            $this->mascota->set("genero", $genero);
            $this->mascota->set("nombre_persona", $nombre_persona);
            $this->mascota->set("telefono_persona", $telefono_persona);
            $this->mascota->set("correo_persona", $correo_persona);

            $resultado = $this->mascota->crear();
            return $resultado;

        }

        public function eliminar($id_mascota){
            $this->mascota->set("id_mascota", $id_mascota);
            $this->mascota->eliminar();
        }

        public function consultar($id_mascota){

            $this->mascota->set("id_mascota", $id_mascota);
            $datos= $this->mascota->consultar();
            return $datos;

        }

        public function editar($id_mascota, $nombre_mascota,$fecha_nacimiento, $tipo_animal, $raza, $peso, $size, $genero,$nombre_persona, $telefono_persona, $correo_persona){

            $this->mascota->set("id_mascota", $id_mascota);
            $this->mascota->set("nombre_mascota", $nombre_mascota);
            $this->mascota->set("fecha_nacimiento", $fecha_nacimiento);
            $this->mascota->set("tipo_animal", $tipo_animal);
            $this->mascota->set("raza", $raza);
            $this->mascota->set("peso", $peso);
            $this->mascota->set("size", $size);
            $this->mascota->set("genero", $genero);
            $this->mascota->set("nombre_persona", $nombre_persona);
            $this->mascota->set("telefono_persona", $telefono_persona);
            $this->mascota->set("correo_persona", $correo_persona);
            $resultado= $this->mascota->editar();
            return $resultado;

        }
    }

     //clase para proveedor

     class controladorProveedor{

        //atributos
        
        private $proveedor;

        //metodos

        public function __construct(){

            $this->proveedor = new Proveedor();

        }

        public function index(){

            $resultado = $this->proveedor->listar();
            return $resultado;

        }

        public function crear($nombre_farmaceutica, $direccion_farmaceutica, $telefono_farmaceutica, $correo_farmaceutica, $contacto){

            $this->proveedor->set("nombre_farmaceutica", $nombre_farmaceutica);
            $this->proveedor->set("direccion_farmaceutica", $direccion_farmaceutica);
            $this->proveedor->set("telefono_farmaceutica", $telefono_farmaceutica);
            $this->proveedor->set("correo_farmaceutica", $correo_farmaceutica);
            $this->proveedor->set("contacto", $contacto);
           

            $resultado = $this->proveedor->crear();
            return $resultado;

        }

        public function eliminar($id_proveedor){
            $this->proveedor->set("id_proveedor", $id_proveedor);
            $this->proveedor->eliminar();
        }

        public function consultar($id_proveedor){

            $this->proveedor->set("id_proveedor", $id_proveedor);
            $datos= $this->proveedor->consultar();
            return $datos;

        }

        public function editar($id_proveedor, $nombre_farmaceutica, $direccion_farmaceutica, $telefono_farmaceutica, $correo_farmaceutica, $contacto){

            $this->proveedor->set("id_proveedor", $id_proveedor);
            $this->proveedor->set("nombre_farmaceutica", $nombre_farmaceutica);
            $this->proveedor->set("direccion_farmaceutica", $direccion_farmaceutica);
            $this->proveedor->set("telefono_farmaceutica", $telefono_farmaceutica);
            $this->proveedor->set("correo_farmaceutica", $correo_farmaceutica);
            $this->proveedor->set("contacto", $contacto);
            
            $resultado = $this->proveedor->editar();
            return $resultado;

        }
     }

            
?>
