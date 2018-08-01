<?php

//All the current page variables
  $isEmployee = (basename($_SERVER['PHP_SELF']) == '../employee/employee.php') ? 'class="nav-link active"' : '';
  $isContracts = (basename($_SERVER['PHP_SELF']) == '../contracts/contracts.php') ? 'class="nav-link active"' : '';
  $isVacation = (basename($_SERVER['PHP_SELF']) == '../vacation/vacation.php') ? 'class="nav-link active"' : '';
  $isAllownaces = (basename($_SERVER['PHP_SELF']) == '../allownaces/allownaces.php') ? 'class="nav-link active"' : '';
  $isCustody = (basename($_SERVER['PHP_SELF']) == '../custody/custody.php') ? 'class="nav-link active"' : '';
  $isDecrease = (basename($_SERVER['PHP_SELF']) == '../decrease/decrease.php') ? 'class="nav-link active"' : '';
  $isMandates = (basename($_SERVER['PHP_SELF']) == '../mandates/mandates.php') ? 'class="nav-link active"' : '';




  echo    "<ul class='nav nav-tabs flex-column' >";
  echo      "<li class='nav-item'><a $isEmployee href='../employee/employee.php'>Employee</a></li>";
  echo      "<li class='nav-item' ><a $isContracts href='../contracts/contracts.php'>Contracts</a></li>";
  echo      "<li class='nav-item' ><a $isVacation href='../vacation/vacation.php'>Vacation</a></li>";
  echo      "<li class='nav-item'><a $isAllownaces href='../allownaces/allownaces.php'>Allownaces</a></li>";
  echo      "<li class='nav-item'><a $isCustody href='../custody/custody.php'>Custody</a></li>";
  echo      "<li class='nav-item' ><a $isDecrease href='../decrease/decrease.php'>Decrease</a></li>";
  echo      "<li class='nav-item' ><a $isMandates href='../mandates/mandates.php'>Mandates</a></li>";
  echo    "</ul>";
  ?>
