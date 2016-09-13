<?php
// cd.php for Microshell in /home/bertoc_t/PROJ/MicroShell/func
// 
// Made by Bertocco Thomas-Killian
// Login   <bertoc_t@etna-alternance.net>
// 
// Started on  Sat Oct 18 09:11:39 2014 Bertocco Thomas-Killian
// Last update Sat Oct 18 13:53:06 2014 Bertocco Thomas-Killian
//
function cd($scat, $param)
{
if(isset($param[1][0]) == FALSE)
    {
      $user = get_current_user();
      $scat[1][0] = ("/home/{$user}");
    }
  if ($scat[1][0] == '-')
    $scat[1][0] = '..';
  if (file_exists($scat[1][0]) == TRUE && is_dir($scat[1][0]) == TRUE && is_executable($scat[1][0]) == TRUE && is_readable($scat[1][0]) == TRUE && $fh = fopen($scat[1][0], 'r'))
    {
      chdir($scat[1][0]);
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