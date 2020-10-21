<?php
include('config/config.php');
include ('lib/Database.php');
include ('helpers/formate.php');


$db = new Database();
$fn = new Formate();

?>

<!DOCTYPE html>
<html>
<head>
    <?php 
     include('scripts/meta.php');
     include('scripts/css.php');
     include('scripts/js.php');
     ?>

</head>

<body>
<div class="headersection templete clear">
    <a href="index.php">
        <div class="logo">
             <?php
                $query = "SELECT * FROM title_slogan WHERE id='1'";
                $blog_title = $db->select($query);
                if ($blog_title){
                while ($result = $blog_title->fetch_assoc()){
                ?>
            <img src="admin/<?php echo $result['logo'] ?>" alt="Logo"/>
            <h2><?php echo $result['title']; ?></h2>
            <p><?php echo $result['slogan'] ?></p>
        <?php } } ?>
        </div>
    </a>
    <div class="social clear">
        <div class="icon clear">
            <?php
                $query = "SELECT * FROM social WHERE id='1'";
                $social = $db->select($query);
                if ($social){
                while ($result = $social->fetch_assoc()){
            ?>   
            <a href="<?php echo $result['fb']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="<?php echo $result['tw']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="<?php echo $result['ln']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="<?php echo $result['ins']; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
            <?php } }?>
        </div>
        <div class="searchbtn clear">
            <form action="search.php" method="get">
                <input type="text" name="search" placeholder="Search keyword..."/>
                <input type="submit" name="submit" value="Search"/>
            </form>
        </div>
    </div>
</div>
<div class="navsection templete">
    <?php
        $path = $_SERVER['SCRIPT_FILENAME'];
        $currentpage = basename($path, '.php');
    ?>
    <ul>
        <li>
            <a <?php if ($currentpage == 'index'){echo "id='active'";} ?> href="index.php">Home</a>
        </li>
        <?php
            $query = "SELECT * FROM page";
            $page = $db->select($query);
            if ($page) {
            while ($result = $page->fetch_assoc()) {
        ?>
        <li>
            <a
            <?php
            if (isset($_GET['pageid']) && $_GET['pageid'] == $result['id']){
                echo "id='active'";
            }
            ?>
            href="page.php?pageid=<?php echo $result['id']; ?>"><?php echo $result['name']; ?></a>
        </li>
            <?php  }}?>
        <li>
            <a <?php if ($currentpage == 'contact'){echo "id='active'";} ?> href="contact.php">Contact</a>
        </li>

    </ul>
</div>
