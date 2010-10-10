<div class="title">
<h3>Grapheur example</h3>
</div>
<div class="image">
<img src="images/slides2/slide6.jpg" alt="slide1" height="290" width="770"/>
</div>
<div class="text">
<img src="images/slide6sma2.jpg" alt="slide5" height="200" width="267"/>
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

