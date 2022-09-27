<?php

$email = $_POST ["email"];
$senha = $_POST["password"];

if ($email == 'edgarlindo@gmail.com' && $senha == '1234') {
    require "form.html";
}
else {
        echo 'Acesso negado!'
    ;}
