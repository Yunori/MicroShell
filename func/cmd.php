<?php
// cmd.php for Microshell in /home/bertoc_t/PROJ/MicroShell/func
// 
// Made by Bertocco Thomas-Killian
// Login   <bertoc_t@etna-alternance.net>
// 
// Started on  Sat Oct 18 09:30:07 2014 Bertocco Thomas-Killian
// Last update Sat Oct 18 14:45:45 2014 Bertocco Thomas-Killian
//
function cmd($tcmd)
{
  $c = 0;
  while (isset(array_values($tcmd)[$c]))
    {
      echo(array_values($tcmd)[$c]); 
      $c++;
      echo ("  ");
    }
  echo ("\n");
}
?>