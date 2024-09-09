<?php
    $toDoList = file_get_contents("./data/todolist.json");
    $toDoListJson = json_decode($toDoList, true);
    // (perché in console?) var_dump($toDoListJson);

    header("Content-type: application/json");
    echo json_encode($toDoListJson)
?>