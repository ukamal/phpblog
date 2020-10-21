<?php
include ('inc/header.php');
include ('inc/sidebar.php');


if (!isset($_GET['msgid']) || $_GET['msgid'] == NULL){
echo "<script>window.location = 'inbox.php';</script>";
//header("Location:catlist.php");
} else{
$id = $_GET['msgid'];
}

?>
<div class="grid_10">

<div class="box round first grid">
    <h2>Reply Message</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $to       = $fn->validation($_POST['toMail']);
        $fromMail = $fn->validation($_POST['fromMail']);
        $subject  = $fn->validation($_POST['subject']);
        $message  = $fn->validation($_POST['message']);

        $sendMail = mail($to, $fromMail, $subject, $message);
        if ($sendMail){
            echo "<span class='success'>Message sent successfully!</span>";
        } else{
            echo "<span class='error'>Something went wrong!</span>";
        }
    }
    ?>
    <div class="block">
        <form action="" method="post">
            <?php
            $query = "SELECT * FROM contact WHERE id='$id'";
            $msg = $db->select($query);
            if ($msg){
                while ($result = $msg->fetch_assoc()){
            ?>
            <table class="form">

                <tr>
                    <td>
                        <label>To</label>
                    </td>
                    <td>
                        <input type="text" readonly name="toMail" value="<?php echo $result['email']; ?>" class="medium" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>From</label>
                    </td>
                    <td>
                        <input type="text" name="fromMail"  placeholder="Please Enter Your Email Address" class="medium" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Subject</label>
                    </td>
                    <td>
                        <input type="text" name="subject"  placeholder="Please Enter Subject" class="medium" />
                    </td>
                </tr>

                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Message</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="message"></textarea>
                    </td>
                </tr>

                <tr>
                    <td>

                    </td>
                    <td>
                        <input type="submit" name="submit" Value="Send" />
                    </td>
                </tr>
            </table>
        <?php    } } ?>
        </form>
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