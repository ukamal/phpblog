    <?php
    if (isset($_GET['pageid'])){
        $pagetitleid = $_GET['pageid'];
        $query = "SELECT * FROM page WHERE id='$pagetitleid'";
        $page = $db->select($query);
        if ($page) {
            while ($result = $page->fetch_assoc()) {?>
                <title><?php echo $result['name']; ?> | <?php echo TITLE; ?></title>

         <?php   } } } elseif (isset($_GET['id'])){
        $postid = $_GET['id'];
        $query = "SELECT * FROM tbl_post WHERE id='$postid'";
        $posts = $db->select($query);
        if ($posts) {
            while ($result = $posts->fetch_assoc()) {?>
                <title><?php echo $result['title']; ?> | <?php echo TITLE; ?></title>
            <?php   } } } else{?>
        <title><?php echo $fn->title(); ?> | <?php echo TITLE; ?></title>
   <?php } ?>

    <meta name="language" content="English">
    <meta name="description" content="It is a website about education">
    <?php
    if (isset($_GET['id'])){
        $keyword = $_GET['id'];
        $query = "SELECT * FROM tbl_post WHERE id='$keyword'";
        $keyword = $db->select($query);
        if ($keyword){
            while ($result = $keyword->fetch_assoc()){ ?>
                <meta name="keywords" content="<?php echo $result['tags']; ?>">
         <?php   } } }else{?>
            <meta name="keywords" content="<?php echo KEYWORDS; ?>">
         <?php } ?>

    <meta name="author" content="kamal">