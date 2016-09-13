<?php
// ci.php for Microshell in /home/bertoc_t/PROJ/Microshell
// 
// Made by Bertocco Thomas-Killian
// Login   <bertoc_t@etna-alternance.net>
// 
// Started on  Fri Oct 17 09:56:56 2014 Bertocco Thomas-Killian
// Last update Sat Oct 18 15:39:30 2014 Bertocco Thomas-Killian
//
include_once 'split.php';
function ci($input, $tcmd, $env)
{
  if (isset($input))
    {
      $n = 0;
      $cmd = scmd($input);
      $param = sp($input);
      $scat = scat($input);
      if (isset($cmd[1][0]))
	{
	  if (!in_array($cmd[1][0], $tcmd))
	    echo ("command not found\n");
	  if (in_array($cmd[1][0], $tcmd));
	  {
	    if (isset($param[1][0]))
	      {
		if ($cmd[1][0] == "getenv")      // getenv
		  getev($env, $scat);
		if ($cmd[1][0] == "echo")        // echo
		  eo($param);
		if ($cmd[1][0] == "cat")         // cat
		  ct($scat);
		//if ($cmd[1][0] == "setenv")    // setenv
		//sv($env, $scat);
		//if ($cmd[1][0] == "unsetenv")  // unsetenv
		//un($param);
	      }
	    if ($cmd[1][0] == "env")             // env
	      ev($env);
	    if ($cmd[1][0] == "pwd")             // pwd
	      pwd();
	    if ($cmd[1][0] == "ls")              // ls
	      lscan($scat, $param);
	    if ($cmd[1][0] == "cd")              // cd
	      cd($scat, $param);
	    if ($cmd[1][0] == "cmd")             // cmd
	      cmd($tcmd);
	    if ($cmd[1][0] == "clear")           // clear
	      clear();
	  }
	}
    }
}
?>