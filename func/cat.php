<?php
// cat.php for Microshell in /home/bertoc_t/PROJ/MicroShell/func
// 
// Made by Bertocco Thomas-Killian
// Login   <bertoc_t@etna-alternance.net>
// 
// Started on  Sat Oct 18 09:16:17 2014 Bertocco Thomas-Killian
// Last update Sat Oct 18 09:22:16 2014 Bertocco Thomas-Killian
//
function ct($scat)
{
  $c = 0;
  while(isset($scat[1][$c]))
    {
      if (file_exists($scat[1][$c]) == TRUE && is_file($scat[1][$c]) == TRUE && is_readable($scat[1][$c]) == TRUE && $fh = fopen($scat[1][$c], 'r'))
        {
          echo(file_get_contents($scat[1][$c]));
          echo("\n");
        }
      else if (is_dir($scat[1][$c]) == TRUE)
        echo ("Is a directory\n");
      else if (file_exists($scat[1][$c]) == TRUE && is_readable($scat[1][$c]) == FALSE)
        echo ("Permission denied\n");
      else if (file_exists($scat[1][$c]) == FALSE && is_dir($scat[1][$c]) == FALSE)
        echo ("No such file or directory\n");
      else
        echo ("Cannot open file\n");
      $c++;
    }
}
?>