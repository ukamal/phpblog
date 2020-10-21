<?php
include ('inc/header.php');
include ('inc/sidebar.php');
?>
<div class="grid_10">

<div class="box round first grid">
<h2>Update Social Media</h2>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$fb = $fn->validation($_POST['fb']);
$tw = $fn->validation($_POST['tw']);
$ln = $fn->validation($_POST['ln']);
$ins = $fn->validation($_POST['ins']);

$fb  = mysqli_real_escape_string($db->link, $fb);
$tw  = mysqli_real_escape_string($db->link, $tw);
$ln  = mysqli_real_escape_string($db->link, $ln);
$ins  = mysqli_real_escape_string($db->link, $ins);

    if ($fb == "" || $tw == "" || $ln == "" || $ins == ""){
    echo "<span class='error'>Filed must not be empty!</span>";
    }else{
    $query="UPDATE social
    SET
    fb   = '$fb',
    tw    = '$tw',
    ln    = '$ln',
    ins    = '$ins'
    WHERE id = '1'
    ";

    $updated_rows = $db->update($query);
    if ($updated_rows) {
    echo "<span class='success'>Data Updated Successfully.
    </span>";
    }else {
    echo "<span class='error'>Data Not Updated!</span>";
    }
}
}
?>
<div class="block">      
<?php
    $query = "SELECT * FROM social WHERE id='1'";
    $social = $db->select($query);
    if ($social){
    while ($result = $social->fetch_assoc()){
?>      
<form action="social.php" method="post">
<table class="form">					
<tr>
    <td>
        <label>Facebook</label>
    </td>
    <td>
        <input type="text" name="fb" value="<?php echo $result['fb']; ?>" class="medium" />
    </td>
</tr>
 <tr>
    <td>
        <label>Twitter</label>
    </td>
    <td>
        <input type="text" name="tw" value="<?php echo $result['tw']; ?>" class="medium" />
    </td>
</tr>

 <tr>
    <td>
        <label>LinkedIn</label>
    </td>
    <td>
        <input type="text" name="ln" value="<?php echo $result['ln']; ?>" class="medium" />
    </td>
</tr>

 <tr>
    <td>
        <label>Instagram</label>
    </td>
    <td>
        <input type="text" name="ins" value="<?php echo $result['ins']; ?>" class="medium" />
    </td>
</tr>

 <tr>
    <td></td>
    <td>
        <input type="submit" name="submit" Value="Update" />
    </td>
</tr>
</table>
</form>
<?php }} ?>
</div>
</div>
</div>
<?php
include ('inc/footer.php');