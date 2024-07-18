<?php
    /**
     * menambah Todo di List
     */
    function addTodoList(string $todo)
    {
    global $todoList;
    var_dump($todoList);
    $number = sizeof($todoList) + 1;
    $todoList[$number] = $todo;
    }
?>