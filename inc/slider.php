<div class="slidersection templete clear">
    <div id="slider">
    	 <?php
            $query = "SELECT * FROM slider ORDER BY ID limit 6";
            $slider = $db->select($query);
            if ($slider) {
                while ($result = $slider->fetch_assoc()) {
            ?>
        <a href="#"><img src="admin/<?php echo $result['image']; ?>" alt="nature 1" title="<?php echo $result['title']; ?>" /></a>
      <?php } }?>
    </div>

</div>