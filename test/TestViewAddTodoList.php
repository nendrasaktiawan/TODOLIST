<?php
require_once "View/ViewAddTodoList.php";
require_once "Helper/Input.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("Agung");
addTodoList("Ruhiyat");
addTodoList("Nendra");

viewAddTodoList();
showTodoList();
viewAddTodoList();
showTodoList();




