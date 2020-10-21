<?php
include ('inc/header.php');
include ('inc/sidebar.php');
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                <?php
                if (isset($_GET['delcat'])){
                    $delid = $_GET['delcat'];
                    $delquery = "delete from tbl_category where id='$delid' ";
                    $deldata = $db->delete($delquery);
                    if ($deldata){
                        echo "<span class='success'>Category Deleted successfully! !</span>";
                    }else{
                        echo "<span class='error'>Category not Delete !</span>";
                    }
                }
                ?>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                    <?php
                    $query = "SELECT * FROM tbl_category order by id desc ";
                    $category = $db->select($query);
                    if ($category){
                        $i=0;
                        while ($result = $category->fetch_assoc()){
                            $i++;

                    ?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['name']; ?></td>
							<td><a href="editcat.php?catid=<?php echo $result['id']; ?>">Edit</a> ||
                                <a onclick="return confirm ('Are you sure to delete this?'); " href="?delcat=<?php echo $result['id']; ?>">Delete</a>
                            </td>
						</tr>
                    <?php  }
                    } ?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
        <div class="clear">
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
?>