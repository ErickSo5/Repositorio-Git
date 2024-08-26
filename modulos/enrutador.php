<?php
    class enrutador{

        public function cargarVista($vista){

            if(@$_SESSION['validada'] == 1){
                switch($vista){
        
                     case "crearEmpleado":
                        include_once('vistas/empleados/'.$vista.'.php');
                        break;   

                     case "editarEmpleado":
                        include_once('vistas/empleados/'.$vista.'.php');
                        break;    

                    case "consultaEmpleado":
                        include_once('vistas/empleados/'.$vista.'.php');
                        break; 

                    case "eliminarEmpleado":
                     include_once('vistas/empleados/'.$vista.'.php');
                        break;  

                    case "inicioEmpleado":
                     include_once('vistas/empleados/'.$vista.'.php');
                      break; 
                      case "crearVacuna":
                        include_once('vistas/vacunas/'.$vista.'.php');
                        break;
                    
                    case "editarVacuna":
                        include_once('vistas/vacunas/'.$vista.'.php');
                        break;

                    case "consultaParametro":
                        include_once('vistas/vacunas/'.$vista.'.php');
                        break;

                    case "eliminarVacuna":
                        include_once('vistas/vacunas/'.$vista.'.php');
                        break;
                        
                    case "inicioVacuna":
                        include_once('vistas/vacunas/'.$vista.'.php');
                        break;
                        
                    case "crearHistorial":
                        include_once('vistas/historial_medico/'.$vista.'.php');
                        break;
                        
                    case "editarHistorial":
                        include_once('vistas/historial_medico/'.$vista.'.php');
                        break;
    
                    case "consultaParametro":
                        include_once('vistas/historial_medico/'.$vista.'.php');
                        break;
    
                    case "eliminarHistorial":
                        include_once('vistas/historial_medico/'.$vista.'.php');
                        break;
                            
                    case "inicioHistorial":
                        include_once('vistas/historial_medico/'.$vista.'.php');
                        break;
                    
                        case "crearMascota":
                            include_once('vistas/mascotas/'.$vista.'.php');
                            break;
                        
                        case "editarMascota":
                            include_once('vistas/mascotas/'.$vista.'.php');
                            break;
    
                        case "consultaParametro":
                            include_once('vistas/mascotas/'.$vista.'.php');
                            break;
    
                        case "eliminarMascota":
                            include_once('vistas/mascotas/'.$vista.'.php');
                            break;
                            
                        case "inicioMascota":
                            include_once('vistas/mascotas/'.$vista.'.php');
                            break;
                        
                            case "crearProveedor":
                                include_once('vistas/Proveedor/'.$vista.'.php');
                                break;
                            
                            case "editarProveedor":
                                include_once('vistas/Proveedor/'.$vista.'.php');
                                break;
        
                            case "consultaParametro":
                                include_once('vistas/Proveedor/'.$vista.'.php');
                                break;
        
                            case "eliminarProveedor":
                                include_once('vistas/Proveedor/'.$vista.'.php');
                                break;
                                
                            case "inicioProveedor":
                                include_once('vistas/Proveedor/'.$vista.'.php');
                                break;  


                    case "cerrar":
                        session_destroy();
                        echo "
                        <script language='JavaScript'>

                        window.location.href='index.html';
                        </script>";
                        break;

                    default:
                        include_once('vistas/error.php');
                }
            } else {

                    include_once('index.html');
            }
        }

        public function validarGet($variable){

            if(isset($variable)){

                return true;

            }else{
                
                if(@$_SESSION['validada'] == 1)
                include_once('inicio.html');

             else
             echo "
                        <script language='JavaScript'>

                        window.location.href='index.html';
                        </script>";
            }
        }
    }
?>
