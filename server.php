<?php
    $toDoList = file_get_contents("./data/todolist.json");
    // var_dump($toDoList);
    $toDoListJson = json_decode($toDoList);
    var_dump($toDoListJson);
?>