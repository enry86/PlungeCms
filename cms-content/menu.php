<div class="slidemenu">
  <div class="smenu_top">
    <a href="#top">top</a>
  </div>
  <?php
    if ($prev != null) {
        echo '<div class="smenu_prev">';
        echo '<a class="prev" href="#' . $prev . '"/>previous</a>';
        echo '</div>';
    }

    if ($next != null) {
        $img = '<img src="images/jump.png" alt="jump" heigth="100" width="150"/>';
        echo '<div class="smenu_next">';
        echo '<a class="next" href="#' . $next . '">' . $img . '</a>';
        echo '</div>';
    }

  ?>
</div>
