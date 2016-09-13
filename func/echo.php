<?php
// echo.php for Microshell in /home/bertoc_t/PROJ/MicroShell/func
// 
// Made by Bertocco Thomas-Killian
// Login   <bertoc_t@etna-alternance.net>
// 
// Started on  Sat Oct 18 09:10:47 2014 Bertocco Thomas-Killian
// Last update Sat Oct 18 10:24:44 2014 Bertocco Thomas-Killian
//
function eo($param)
{
  $c = 0;
  $d = 0;
  $strecho = $param[1][0];
  while (isset($strecho[$c]))
    {
      $c++;
    }
  $c = $c - 1;
  if (($strecho[0] == "'" && $strecho[$c] == "'") || ($strecho[0] == '"' && $strecho[$c] == '"'))
    {
      $d = 1;
      $c = $c - 2;
    }
  while (isset($strecho[$c]))
    {
      echo($strecho[$d]);
      $d++;
      $c--;
    }
  echo ("\n");
}
?>