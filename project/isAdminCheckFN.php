<?php
function isAdminCheck()
{
  if (!$_SESSION['isAdmin']) {
    return false;
  } else {
    return true;
  }
}
?>