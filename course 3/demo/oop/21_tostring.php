<?php 
     class MyClass {
         function __toString() { 
             return "вызван метод __toString()";
         }
     }
     $obj = new MyClass; 
     echo $obj; // Выводит "вызван метод __toString()"
?>