<?php
// split.php for Microshell in /home/bertoc_t/PROJ/MicroShell
// 
// Made by Bertocco Thomas-Killian
// Login   <bertoc_t@etna-alternance.net>
// 
// Started on  Fri Oct 17 13:28:28 2014 Bertocco Thomas-Killian
// Last update Fri Oct 17 17:56:27 2014 Bertocco Thomas-Killian
//
function scmd($input)
{
  preg_match_all("/^([\S]+)\s?/", $input, $cmd); //1rst
  return $cmd;
}
function sp($input)
{
  preg_match_all("/\s{1}([\S\s]+)/", $input, $param); //2nd +1 +1... -- all in [1][0]
  return $param;
}
function scat($input)
{
  preg_match_all("/[\s{1}]([\S]+)/", $input, $scat); //2nd +1 +1... 1 -- [1][c]
  return $scat;
}
?>