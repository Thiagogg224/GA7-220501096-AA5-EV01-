<?php
    require_once("models/Cliente.php");

    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET': 
            if(isset($_GET['id_cliente'])){
                echo json_encode(Cliente::getWhere($_GET['id_cliente']));
            }else{
                echo json_encode(Cliente::getAll());
            }//end else
            break;
        case 'POST':
            $datos = json_decode(file_get_contents('php://input'));
            if($datos != NULL) {
                if(Cliente::insert($datos->usuario, $datos->contraseña, $datos->correo)){
                    http_response_code(200);
                }//end if
                else{
                    http_response_code(400);
                }
            }else{
                http_response_code(405);
            }  //end else     
            break;  

        case 'PUT':
            $datos = json_decode(file_get_contents('php://input'));
            if($datos != NULL) {
                if(Cliente::update($datos->id_cliente, $datos->usuario, $datos->contraseña, $datos->correo)){
                    http_response_code(200);
                }//end if
                else{
                    http_response_code(400);
                }
            }else{
                http_response_code(405);
            }  //end else     
            break;
            
        case 'DELETE':
            if(isset($_GET['id_cliente'])) {
                if (Cliente::delete($_GET['id_cliente'] )) {
                    http_response_code(200);
                }//end if
                else{
                    http_response_code(400);
                }//end else
            }//end if
            else{
                http_response_code(405);
            }//end else
            break;
        default:
            # code...
            break;
    }

?>