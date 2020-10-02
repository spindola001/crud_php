<?php
if (isset($_POST['action'])){
    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['action'])) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $action = "";
}

if (isset($_POST['id'])){
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $id = 0;
}

if (isset($_POST['email'])){
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['email'])) {
    $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $email = "";
}

if (isset($_POST['passwd'])){
    $passwd = filter_input(INPUT_POST, 'passwd', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['passwd'])) {
    $passwd = filter_input(INPUT_GET, 'passwd', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $passwd = "";
}