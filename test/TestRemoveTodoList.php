<?php
require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";

addTodoList("Agung");
AddTodoList("Ruhiyat");
addTodoList("nendra");
addTodoList("ida");
addTodoList("nayla");

showTodoList();
removeTodoList(3);
showTodoLIst();
removeTodoList(2);
showTodoList();
$success = removeTodoList(6);
var_dump($success);

showTodoList();
