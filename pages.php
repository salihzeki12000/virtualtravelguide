<?php
$page=$_GET['page'];
switch($page)
{

  case 'blog':
  include('blog.php');
  break;

  case 'hotel':
  include('hotelbooking.php');
  break;

  default:
  include('home.php');
}

  ?>
rferferf
