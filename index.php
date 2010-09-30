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
  <script>
  $(document).ready(function () {
    $.localScroll()
    });
  </script>
  <?php 
  echo '<link rel="stylesheet" type="text/css" href="css/' . $s->get_css()  . '"/>'; 
  ?>
  <title><?php echo $s->get_title(); ?></title>
</head>
<body>
  <div id="top" class=base>
    <?php
      $s->draw_site(); 
    
    
    ?>
  </div>  
</body>
</html>
