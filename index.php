<?php
header('Content-Type: text/html; charset=UTF-8');
include 'config.php';
if(!in_array($_GET['tab'],array_keys($menu)))
exit('feil i tab.');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Laget.net | Trondheim kristne studentlag</title>
    <!-- Framework CSS -->
    <link rel="stylesheet" href="./blueprint/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="./blueprint/print.css" type="text/css" media="print">
    <!--[if lt IE 8]><link rel="stylesheet" href="./blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
    <link rel="stylesheet" href="./style.css" type="text/css">

    <!-- Import fancy-type plugin for the sample page. -->
    <link rel="stylesheet" href="./blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
  </head>
  <body id="tab3" class="<?php echo isset($_GET['debug'])?'showgrid':''?>">
    <div class="container">
      <div class="header noprint">
        <div class=" prepend-21 span-3 last">
          Norsk | Engelsk
        </div>
        <h1>Laget.net</h1>
        <ul class="tabnav">
          <?php foreach($menu as $page => $subpage):?>
          <li<?php echo ($_GET['tab']==$page)?' class="active"':'' ?>>
            <a href="index.php?tab=<?php echo $page?>"><?php echo $page?></a>
          </li>
          <?php endforeach;?>
        </ul>
      </div>
      <div class="span-20">
      <?php include "./${_GET['tab']}.php";?>
      </div>
      <div class="span-4 last right">
        <ul class="menu">
          <?php foreach($menu[$_GET['tab']] as $page):?>
          <li<?php echo mt_rand(0,4)?'':' class="active"'?>><a href=''><?php echo $page ?></a></li>
          <?php endforeach;?>
        </ul>
      </div>
      <hr>
      <h2 class="alt">Velkommen til alfakurs til våren om du har lyst.</h2>
    </div>
  </body>
</html>