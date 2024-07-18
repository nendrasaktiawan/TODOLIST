<?php
require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("agung");
addTodoList("Ruhiyat");
addTodoList("nendra");

var_dump($todoList);