<?php
//require "test1.php";
//require "test2.php";
spl_autoload_register("load1");
spl_autoload_register("load2");

test1::test();
test2::test();

function load1($class){

    require $class.".php";
}

function load2($class){

   echo $class;
}