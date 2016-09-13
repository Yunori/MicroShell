<?php
// ls.php for Microshell in /home/bertoc_t/PROJ/MicroShell/func
// 
// Made by Bertocco Thomas-Killian
// Login   <bertoc_t@etna-alternance.net>
// 
// Started on  Sat Oct 18 09:15:01 2014 Bertocco Thomas-Killian
// Last update Sat Oct 18 11:35:35 2014 Bertocco Thomas-Killian
//
function lscan($scat, $param)
{
  if(isset($param[1][0]) == FALSE)
    {
      $scat[1][0] = '.';
    }
  $c = 0;
  if (file_exists($scat[1][0]) == TRUE && is_dir($scat[1][0]) == TRUE && is_readable($scat[1][0]) == TRUE && is_executable($scat[1][0]) == TRUE && $fh = fopen($scat[1][0], 'r'))
    {
      while(isset(scandir($scat[1][0])[$c]))
        {
          $tab[$c] = scandir($scat[1][0])[$c];
          $c++;
        }
      $c = 0;
      sort($tab);
      while(isset($tab[$c]))
        {
          if (is_dir($tab[$c]))
            {
              echo("\033[34m{$tab[$c]}");
              echo ("/");
            }
          else if(is_executable($tab[$c]) && is_dir($tab[$c]) == FALSE)
            {
              echo("\033[32m{$tab[$c]}");
              echo ("*");
            }
          else if(is_link($tab[$c]))
            {
              echo($tab[$c]);
              echo ("@");
            }
          else
            echo($tab[$c]);
          echo (" ");
          $c++;
        }
      echo ("\n");
    }
  else if (is_file($scat[1][0]) == TRUE)
    echo ("Is a file\n");
  else if (file_exists($scat[1][0]) == TRUE && (is_readable($scat[1][0]) == FALSE || is_executable($scat[1][0]) == FALSE))
    echo ("Permission denied\n");
  else if (file_exists($scat[1][0]) == FALSE && is_dir($scat[1][0]) == FALSE)
    echo ("No such file or directory\n");
  else
    echo ("Cannot open folder\n");
}
?>