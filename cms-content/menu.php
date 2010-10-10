<div class="slidemenu">
  <div class="smenu_top">
    <a href="#top">
        <img src="images/top.jpg" alt="Top" width="93" height="50"/>
    </a>
  </div>
  <?php
    if ($prev != null) {
        $img = '<img src="images/prev.jpg" alt="Previous" width="93" height="50"/>';
        echo '<div class="smenu_prev">';
        echo '<a class="prev" href="#' . $prev . '"/>' . $img . '</a>';
        echo '</div>';
    }

    if ($next != null) {
        $img = '<img src="images/next.jpg" alt="Next" heigth="50" width="93"/>';
        echo '<div class="smenu_next">';
        echo '<a class="next" href="#' . $next . '">' . $img . '</a>';
        echo '</div>';
    }

  ?>
</div>
