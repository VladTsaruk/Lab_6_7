<?php 
    include 'H:\xampp\htdocs\tsaruk\BLL\main.php';
       
       if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            // Получение данных из тела запроса
            parse_str(file_get_contents("php://input"), $deleteData);
        
            // Извлечение необходимых данных
            $id = $deleteData['id'];
            $result = deleteZone($id);
            
            if ($result == 'ok') {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record";
            }
        }
        
     ?>