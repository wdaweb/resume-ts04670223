<?php
include_once "../base.php";

$table = $_POST['table'];
$db = new DB($table);

$data = [];
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], '../front/img/portfolio/' . $_FILES['img']['name']);
    $data['img'] = $_FILES['img']['name'];
}

if (!empty($_POST['text'])) {

    $data['text'] = $_POST['text'];
}

switch ($table) {
    case "re_admin":
        $data['acc'] = $_POST['acc'];
        $data['pw'] = $_POST['pw'];
        break;
    case "re_menu":
        $data['rank'] = $Menu->q("select max(rank) from re_menu ")[0][0] + 1;;
        $data['href'] = $_POST['href'];
        $data['sh'] = 1;
        break;
    case "re_education":
        case "re_experience":
        $data['rank'] = $Education->q("select max(rank) from re_education ")[0][0] + 1;;
        $data['text2'] = $_POST['text2'];
        $data['sh'] = 1;
        break;
    case "re_connection":
        $data['rank'] = $Connection->q("select max(rank) from re_connection ")[0][0] + 1;;
        $data['text2'] = $_POST['text2'];
        $data['icon'] = $_POST['icon'];
        $data['href'] = $_POST['href'];
        $data['sh'] = 1;
        break;
    case "re_port":
        $data['rank'] = $Port->q("select max(rank) from re_port ")[0][0] + 1;;
        $data['href'] = $_POST['href'];
        $data['text2'] = $_POST['text2'];
        $data['class'] = $_POST['class'];
        $data['sh'] = 1;
        break;
    case "re_headshot":
        $data['rank'] = $Port->q("select max(rank) from re_port ")[0][0] + 1;;
        $data['sh'] = 1;
        break;
    case "re_skill":
        $data['rank'] = $Skill->q("select max(rank) from re_skill ")[0][0] + 1;;
        $data['class'] = $_POST['class'];
        $data['sh'] = 1;
        break;
    default:
        $data['sh'] = 1;
}

$db->save($data);

to("../backend.php?do=phto");
