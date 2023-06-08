<?php 
    include 'H:\xampp\htdocs\tsaruk\BLL\main.php';

        if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
            // Получение данных из тела запроса
            parse_str(file_get_contents("php://input"), $putData);
        
            // Извлечение необходимых данных
            $id = $putData['id'];
           $result = updateZoneName($id, "Just POSTMAN new name");
            
            if ($result == 'ok') {
                echo "Record updated successfully";
            } else {
                echo "Error updating record";
            }
        }
        
?>