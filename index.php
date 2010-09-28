<!DOCTYPE html>
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
  <link rel="stylesheet" type="text/css" href="./css/style.css"/>
</head>
<body>
<?php
    include('src/site.php');
    if (isset($_GET['site'])) {
        $site = $_GET['site'];
    }
    else {
        $site = 'default';
    }
    $s = new Site($site);
    $s->show_site();
    echo 'LOLOLOL'
?>

</body>
</html>
