<?php
   $login = $_POST["log"];
   $password = $_POST["pass"];
   if (($login == "Петров") and ($password == 123)) {
       echo "Добро пожаловать";
   } else {
       echo "Доступ закрыт";
   }
?>