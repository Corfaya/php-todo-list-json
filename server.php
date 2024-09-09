<?php
    $toDoList = file_get_contents("./data/todolist.json");
    $toDoListArr = json_decode($toDoList, true);

    // controllo se todo è stato inviato e quindi se esiste
    if(isset($_POST["todo"])) {
        $todo_element = $_POST["todo"];
        // array associativo per il nuovo elemento
        $itemToAdd = [
            "id" => strlen($toDoListArr) + 1,
            "done" => false,
            "name" => $todo_element
        ];

        array_push($toDoListArr, $itemToAdd);

        file_put_contents("./data/todolist.json", json_encode($toDoListArr));
    }

    header("Content-type: application/json");
    echo json_encode($toDoListArr)
?>