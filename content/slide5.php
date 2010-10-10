<div class="right">
<div class="title">
<h3>Grapheur example</h3>
</div>
<div class="text">
<img src="images/slide5.jpg" alt="slide5" height="413" width="550"/>
</div>
<?php
        if ($index == 0) {
            echo '<div class="jump">';
            echo '<a href="#' . $next . '">';
            echo '<img src="images/jump.png" height="100" width="150" alt="Jump!"/>';
            echo '</a></div>';
        }
        if ($index != 0) include('cms-content/menu.php'); 
?>
</div>
<div class="image">
<img src="images/slides/slide6.jpg" alt="slide1" height="600" width="230"/>
</div>
