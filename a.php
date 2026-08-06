<?php

$result = unserialize($_GET['result']); 

$password = unserialize($_GET['password']);

insert_to_sql($password);

function insert_to_sql($password){
//todo insert sql
}

!