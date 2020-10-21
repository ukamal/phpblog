<?php
include ('inc/header.php');
include ('inc/sidebar.php');
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Inbox</h2>
        <?php
        if (isset($_GET['seenid'])){
            $seenid = $_GET['seenid'];
            $query = "UPDATE contact SET status='1' WHERE id='$seenid'";
            $seenid = $db->update($query);
            if ($seenid){
                echo "<span class='success'>Message sent successfully!</span>";
            } else{
                echo "<span class='success'>Something went wrong!</span>";
            }
        }
        ?>
        <div class="block">
            <table class="data display datatable" id="example">
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $query = "SELECT * FROM contact WHERE status='0' order by id desc ";
            $msg = $db->select($query);
            if ($msg){
            $i=0;
            while ($result = $msg->fetch_assoc()){
            $i++;

            ?>
                <tr class="odd gradeX">
                    <td><?php echo $i; ?></td>
                    <td><?php echo $result['firstname'].' '.$result['lastname']; ?></td>
                    <td><?php echo $result['email']; ?></td>
                    <td><?php echo $fn->shortText($result['body'], 50); ?></td>
                    <td><?php echo $fn->formateDate($result['date']); ?></td>
                    <td><a href="viewmsg.php?msgid=<?php echo $result['id']; ?>">View</a> ||
                        <a href="replymsg.php?msgid=<?php echo $result['id']; ?>">Reply</a> ||
                        <a onclick="return confirm('Are you sure to move?');" href="?seenid=<?php echo $result['id']; ?>">Seen</a> ||
                    </td>
                </tr>
            <?php } } ?>
            </tbody>
        </table>
       </div>
    </div>

    <div class="box round first grid">
        <h2>Seen Message</h2>
        <?php
        if (isset($_GET['delid'])){
            $delid = $_GET['delid'];
            $deleteSeen = "DELETE FROM contact WHERE id='$delid'";
            $deleteSeen = $db->delete($deleteSeen);
            if ($deleteSeen){
                echo "<span class='success'>Message Deleted successfully!</span>";
            } else{
                echo "<span class='error'>Wo! Something went wrong!</span>";
            }
        }
        ?>
        <div class="block">
            <table class="data display datatable" id="example">
                <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $query = "SELECT * FROM contact WHERE status='1' order by id desc ";
                $msg = $db->select($query);
                if ($msg){
                    $i=0;
                    while ($result = $msg->fetch_assoc()){
                        $i++;

                        ?>
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['firstname'].' '.$result['lastname']; ?></td>
                            <td><?php echo $result['email']; ?></td>
                            <td><?php echo $fn->shortText($result['body'], 50); ?></td>
                            <td><?php echo $fn->formateDate($result['date']); ?></td>

                            <td><a href="viewmsg.php?msgid=<?php echo $result['id']; ?>">View</a> ||
                                <a onclick="return confirm('Are you sure to delete?');" href="?delid=<?php echo $result['id']; ?>">Delete</a></td>
                        </tr>
                    <?php } } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<script type="text/javascript">

$(document).ready(function () {
    setupLeftMenu();

    $('.datatable').dataTable();
    setSidebarHeight();


});
</script>
<?php
include ('inc/footer.php');