<?php
include ('../lib/Session.php');
Session::checkSession();

include ('../config/config.php');
include ('../lib/Database.php');

$db = new Database();

if (!isset($_GET['sliderid']) || $_GET['sliderid'] == NULL){
    echo "<script>window.location = 'sliderlist.php'; </script>";
}else {
    $delslideid = $_GET['sliderid'];

    $query = "SELECT * FROM slider WHERE id='$delslideid'";
    $delslider = $db->select($query);
    if ($delslider){
        while ($delimg = $delslider->fetch_assoc()){
            $dellink = $delimg['image'];
            unlink($dellink);
        }
    }
    $delquery = "DELETE FROM slider WHERE id='$delslideid'";
    $delData = $db->delete($delquery);
    if ($delData){
        echo "<script>alert('Slider Deleted Successfully!'); </script>";
        echo "<script>window.location = 'sliderlist.php'; </script>";
    } else {
        echo "<script>alert('Data Not Deleted!'); </script>";
        echo "<script>window.location = 'sliderlist.php'; </script>";
    }
}
