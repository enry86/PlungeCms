<!DOCTYPE html>
<?php
    include('src/site.php');
    if (isset($_GET['site'])) {
        $site = $_GET['site'];
    }
    else {
        $site = 'default';
    }
    $s = new Site($site);
    $s->read_site();
?>
<html>
<head>
  <style>p { color:red; }</style>
  <script src="lib/jquery-1.4.2.js"></script>
  <script src="lib/jquery.localscroll-min.js"></script>
  <script src="lib/jquery-scrollTo-1.4.2.js"></script>
  <script type="text/javascript" src="lib/jquery.scrolling-parallax.js"></script> 
  <script>
  $(document).ready(function () {
    $.localScroll();
    
    $(function() {
 
    $.scrollingParallax('images/nuvola_big.png', {
        staticSpeed : 0.5,
        loopIt : false,
        staticScrollLimit : false,
	bgRepeat:true,
        bgHeight: "4000px",
        bgPosition: "100px 150px",
	disableIE6 : true
    });
    
    $.scrollingParallax('images/nuvola_sma.png', {
        staticSpeed : 0.1,
        loopIt : false,
	staticScrollLimit : false,
        bgRepeat : true,
	bgHeight: "4000px",
        disableIE6 : true
    });
    
});
    
    });
  </script>
  <?php 
  echo '<link rel="stylesheet" type="text/css" href="css/' . $s->get_css()  . '"/>'; 
  ?>
  <title><?php echo $s->get_title(); ?></title>
</head>
<body>
<div class="logo"></div>
<div id='wrapper'>
  <div id="top" class=base>
    <?php
      $s->draw_site(); 
    ?>
  </div>  
</div>
</body>
</html>
