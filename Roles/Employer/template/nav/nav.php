<?php

//All the current page variables
  $isEmployeeModule = (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'class="nav-link active"' : '';
  $isAccountant = (basename($_SERVER['PHP_SELF']) == 'delete.php') ? 'class="nav-link active"' : '';
  $isServices = (basename($_SERVER['PHP_SELF']) == 'rit_life.php') ? 'class="nav-link active"' : '';
  $isMore = (basename($_SERVER['PHP_SELF']) == 'nearby.php') ? 'class="nav-link active"' : '';
  $isMore1 = (basename($_SERVER['PHP_SELF']) == 'travelpic.php') ? 'class="nav-link active"' : '';
  $isMore2 = (basename($_SERVER['PHP_SELF']) == 'blog.php') ? 'class="nav-link active"' : '';




  echo    "<ul class='nav nav-tabs nav-justified' >";
  echo      "<li class='nav-item'><a $isEmployeeModule href='../Employee/Employee.php'>Employee Module</a></li>";
  echo      "<li class='nav-item' ><a $isAccountant href='#'>Accountant</a></li>";
  echo      "<li class='nav-item'><a $isServices href='#'>Services</a></li>";
  echo      "<li class='nav-item' ><a $isMore href='#'>More</a></li>";
  echo      "<li class='nav-item'><a $isMore1 href='#'>More1</a></li>";
  echo      "<li class='nav-item' ><a $isMore2 href='#'>More2</a></li>";
  echo    "</ul>";
  ?>
