<?php
//require "test1.php";
//require "test2.php";

test1::test();
test2::test();

function load1($class){

    require $class.".php";
}