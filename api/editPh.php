<?php
include "../base.php";

$table = $_POST['table'];
$db = new DB($table);

foreach ($_POST['id'] as $key => $id) {
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {

        $db->del($id);
    } else {

        $row = $db->find($id);

        switch ($table) {
            case "re_port":
                $row['class'] = $_POST['class'][$key];
                $row['text2'] = $_POST['text2'][$key];
                $row['href'] = $_POST['href'][$key];
                $row['sh'] = in_array($id, $_POST['sh']) ? 1 : 0;
                break;
            case "re_skill":
                $row['class'] = $_POST['class'][$key];
                $row['sh'] = in_array($id, $_POST['sh']) ? 1 : 0;
                break;
            case "re_connection":
                $row['text2'] = $_POST['text2'][$key];
                $row['icon'] = $_POST['icon'][$key];
                $row['href'] = $_POST['href'][$key];
                $row['sh'] = in_array($id, $_POST['sh']) ? 1 : 0;
                break;
            case "re_education":
            case "re_experience":
                $row['text2'] = $_POST['text2'][$key];
                $row['sh'] = in_array($id, $_POST['sh']) ? 1 : 0;
                break;
            case "re_aut":
                $row['sh'] = in_array($id, $_POST['sh']) ? 1 : 0;
                break;
            case "re_me":
                $row['sh'] = in_array($id, $_POST['sh']) ? 1 : 0;
                break;
            case "re_admin":
                $row['acc'] = $_POST['acc'][$key];
                $row['pw'] = $_POST['pw'][$key];
                break;
            case "re_menu":
                $row['href'] = $_POST['href'][$key];
                $row['sh'] = in_array($id, $_POST['sh']) ? 1 : 0;
                break;
        }
        if (!empty($_POST['text'])) {
            $row['text'] = $_POST['text'][$key];
        }
        $db->save($row);
    }
}
to("../backend.php?do=phto");
