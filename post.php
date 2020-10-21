<?php
    include('inc/header.php');


    $postid = mysqli_real_escape_string($db->link, $_GET['id']);
    if (!isset($postid) || $postid == NULL){
        header("Location: 404.php");
    } else{
        $id = $postid;
    }
?>

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
                <?php
                $query = "select * from tbl_post where id=$id";
                $post = $db->select($query);
                if ($post){
                    while ($result = $post->fetch_assoc()){
                ?>
				<h2><?php echo $result['title'];?></h2>
                <h4><?php echo $fn->formateDate($result['date']); ?> By <a href="#"><?php echo $result['author']; ?></a></h4>
				<img src="admin/<?php echo $result['image'];?>" alt="MyImage"/>
				<?php echo $result['body']; ?>



				<div class="relatedpost clear">
					<h2>Related articles</h2>
                    <?php
                    $catid = $result['cat'];
                    $queryRelated = "select * from tbl_post where cat='$catid' order by rand()";
                    $relatedPost = $db->select($queryRelated);
                    if ($relatedPost){
                        while ($rresult = $relatedPost->fetch_assoc()){
                    ?>
					<a href="post.php?id=<?php echo $result['id']; ?>">
                        <img src="admin/<?php echo $result['image'];?>" alt="post image"/>
                    </a>
				    <?php } } else{ echo "No Related post available"; } ?>
				</div>
                <?php } } else{header('Location: 404.php');} ?>
	</div>

		</div>

<?php
    include ('inc/sidebar.php');
    include ('inc/footer.php');