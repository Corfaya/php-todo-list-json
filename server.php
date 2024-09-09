<?php
    $toDoList = file_get_contents("./data/todolist.json");
    $toDoListArr = json_decode($toDoList, true);

    if(isset($_POST["data"])) {
        $todo_element = $_POST["data"];

        array_push($toDoListArr, $todo_element);

        file_put_contents("./data/todolist.json", json_encode($toDoListArr));
    }

    header("Content-type: application/json");
    echo json_encode($toDoListArr)
?>