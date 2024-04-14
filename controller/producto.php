<?php
require_once("../config/conexion.php");
require_once("../model/PRODUCTO.php");

$producto = new Producto();

switch ($_GET["op"]) {

    case "guardar":
        $datos=$producto->insert_producto($_POST["prod_name"]);

        if(empty($_FILES['file']['name'])){

        }else{
            foreach ($datos as $row) {
                $countfiles = count($_FILES['file']['name']);
                $ruta       = "../asset/img/".$row["prod_id"]."/";
                $files_arr = array();
                
                if (!file_exists($ruta)) {
                    mkdir($ruta,0777,true);
                }

                for ($i=0; $i < $countfiles ; $i++) { 
                    $nombre  = $_FILES['file']['tmp_name'][$i];
                    $destino = $ruta.$_FILES['file']['name'][$i];

                        $producto->insert_img($row["prod_id"],$_FILES['file']['name'][$i]);
                        
                        move_uploaded_file($nombre,$destino);
                    }
            }
        }
        echo json_encode($datos);
        break;

}

// // Verificar si 'op' está definido en $_GET
// if (isset($_GET["op"])) {
//     // Si está definido, procede con el switch
//     switch ($_GET["op"]) {
//         case "guardar":
//             // Verificar si 'prod_name' está definido en $_POST
//             if (isset($_POST["prod_name"])) {
//                 // Si está definido, llama a la función insert_producto
//                 $producto->insert_producto($_POST["prod_name"]);
//             } else {
//                 // Si 'prod_name' no está definido, maneja el caso según sea necesario
//                 echo "Error: El nombre del producto no está definido.";
//             }
//             break;
//         default:
//             // Manejar otras opciones para 'op' si es necesario
//             echo "Error: Opción no válida.";
//             break;
//     }
// } else {
//     // Si 'op' no está definido, muestra un mensaje de error o realiza alguna otra acción
//     echo "Error: 'op' no está definido en la URL.";
// }
?>
