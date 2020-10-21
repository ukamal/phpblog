<?php
include ('inc/header.php');
include ('inc/sidebar.php');


if (!isset($_GET['userid']) || $_GET['userid'] == NULL){
    echo "<script>window.location = 'userlist.php'; </script>";
    }else{
    $id = $_GET['userid'];
}

?>
<div class="grid_10">

<div class="box round first grid">
<h2>User Details</h2>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   echo "<script>window.location = 'userlist.php'; </script>";
}

?>
<div class="block">
<?php
$query = "SELECT * FROM tbl_user where id='$id'";
$getuser = $db->select($query);
if ($getuser) {
while ($result = $getuser->fetch_assoc()){
?>
    <form action="" method="post" enctype="multipart/form-data">
        <table class="form">
            <tr>
                <td>
                    <label>Name</label>
                </td>
                <td>
                    <input type="text" readonly value="<?php echo $result['name']; ?>" class="medium" />
                </td>
            </tr>

            <tr>
                <td>
                    <label>UserName</label>
                </td>
                <td>
                    <input type="text" readonly value="<?php echo $result['username']; ?>" class="medium" />
                </td>
            </tr>

            <tr>
                <td>
                    <label>Email</label>
                </td>
                <td>
                    <input type="text" readonly value="<?php echo $result['email']; ?>" class="medium" />
                </td>
            </tr>

            <tr>
                <td style="vertical-align: top; padding-top: 9px;">
                    <label>Details</label>
                </td>
                <td>
                    <textarea class="tinymce" readonly>
                        <?php echo $result['details']; ?>
                    </textarea>
                </td>
            </tr>
            
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" Value="Ok" />
                </td>
            </tr>
        </table>
    </form>
    <?php } } ?>
</div>
</div>
</div>
<div class="clear">
</div>
</div>


<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
    setupTinyMCE();
    setDatePicker('date-picker');
    $('input[type="checkbox"]').fancybutton();
    $('input[type="radio"]').fancybutton();
});
</script>

<?php
include ('inc/footer.php');
?>