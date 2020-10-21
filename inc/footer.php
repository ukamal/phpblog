</div>

<div class="footersection templete clear">
    <div class="footermenu clear">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Privacy</a></li>
        </ul>
    </div>
     <?php
        $query = "SELECT * FROM footer WHERE id='1'";
        $copyright = $db->select($query);
        if ($copyright){
        while ($result = $copyright->fetch_assoc()){
        ?>
        <p>&copy; <?php echo $result['copyright']; echo date(' Y');?></p>
        <?php }} ?>
    </div>
<div class="fixedicon clear">
   <?php
        $query = "SELECT * FROM social WHERE id='1'";
        $social = $db->select($query);
        if ($social){
        while ($result = $social->fetch_assoc()){
    ?>   
    <a href="<?php echo $result['fb']; ?>" target="_blank"><img src="images/fb.png" alt="Facebook"/></a>
    <a href="<?php echo $result['tw']; ?>" target="_blank"><img src="images/tw.png" alt="Twitter"/></a>
    <a href="<?php echo $result['ln']; ?>" target="_blank"><img src="images/in.png" alt="LinkedIn"/></a>
    <a href="<?php echo $result['ins']; ?>" target="_blank"><img src="images/gl.png" alt="instagram"/></a>
    <?php } } ?>
</div>
<script type="text/javascript" src="js/scrolltop.js"></script>
</body>
</html>