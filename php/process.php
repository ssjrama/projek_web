<?php
session_start();

$id = 0;
$title = '';
$content = '';
$date = '';
$update = false;

$mysqli = new mysqli('localhost', 'root', '', 'pw1') or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    //$date = $_POST['date'];
    $date = date("Y-m-d");

    $mysqli->query("insert into post (title, content, date) values('$title','$content','$date');")
        or die(mysqli_error($mysqli));

    $_SESSION['message'] = "Record has been saved";
    $_SESSION['msg_type'] = "success";

    header("Location: admin.php");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("delete from post where idPost='$id';") or die(mysqli_error($mysqli));

    $_SESSION['message'] = "Record has been deleted";
    $_SESSION['msg_type'] = "danger";

    header("Location: admin.php");
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("select * from post where idPost='$id';") or die(mysqli_error($mysqli));
    if (count($result) == 1) {
        $row = $result->fetch_array();
        $title = $row['title'];
        $content = $row['content'];
        $date = $row['date'];
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = $_POST['date'];

    $mysqli->query("update post set title='$title', content='$content', date='$date' where idPost='$id';") or die($mysqli->error);
    $_SESSION['message'] = "Record has been updated";
    $_SESSION['msg_type'] = 'warning';

    header("Location: admin.php");
}
