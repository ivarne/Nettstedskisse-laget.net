<?php
header('Content-Type: text/html; charset=UTF-8');
include 'config.php';
if(!(isset($_GET['tab'])&&in_array($_GET['tab'],array_keys($menu))))
exit('feil i tab.<a href='.$_SERVER['REQUEST_URI'].'?tab=Medlem>prøv dette</a>');
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
  <body class="<?php echo isset($_GET['debug'])?'showgrid':''?>">
    <div class="container">
      <div class="span-24 header noprint">
        <div class=" prepend-21 span-3 last">
          Norsk | Engelsk
        </div>
        <h1>Laget.net</h1>
        <ul class="tabnav">
          <?php foreach($menu as $page => $subpages):?>
          <li<?php echo ($_GET['tab']==$page)?' class="active"':'' ?>>
            <a href="index.php?tab=<?php echo $page?>"><?php echo $page?></a>
            <?php if ($subpages):?> 
            <ul>
              <?php foreach($subpages as $subpage): ?>
                <li>
                  <a href="index.php?tab=<?php echo $page?>&amp;subpage=<?php echo $subpage?>"><?php echo $subpage?></a>
                </li>
              <?php endforeach?>
            <?php endif ?>
            </ul>
          </li>
          <?php endforeach;?>
        </ul>
      </div>
      <div class="span-24">
      <?php include "./${_GET['tab']}.php";?>
      </div>
      <hr>
      <h2 class="alt">Velkommen til alfakurs til våren om du har lyst.</h2>
    </div>
  </body>
</html>