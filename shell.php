#!/usr/bin/env php
<?php
// OMG.php for Microshell in /home/bertoc_t/PROJ/Microshell
// 
// Made by Bertocco Thomas-Killian
// Login   <bertoc_t@etna-alternance.net>
// 
// Started on  Fri Oct 17 09:20:10 2014 Bertocco Thomas-Killian
// Last update Sat Oct 18 15:16:37 2014 Bertocco Thomas-Killian
include_once 'include.php';
$env = array();
static $tcmd = array('clear', 'exit', 'getenv', 'echo', 'cat', 'env', 'pwd', 'ls', 'cd', 'cmd');
sort($tcmd);
$user = get_current_user();
$stdin = fopen('php://stdin', 'r');
$input = "";

echo ("\n \n          ▬▬▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬▬▬\n");
echo ("▀█▀ █▬█ █ ▄█▀   █ ▄█▀   ▄█▀ █▬█ █ ▀█▀ (╯°□°)╯︵┻━┻ \n");
echo ("          ▬▬▬▬▬▬▬▬▬▬▬ஜ۩۞۩ஜ▬▬▬▬▬▬▬▬▬▬▬\n \n");
echo ("[ HELLO {$user} ]\n \n");

While ($input != "exit")
{
    echo ("\033[33m{$user}@macdemerde\033[0m | $> ");
    $input = trim(fgets($stdin));
    ci($input, $tcmd, $env);
}
echo("\n[ BYE BYE ─=≡Σ((( つ•̀ω•́)つ ]\n \n");
echo("[ J'ai trop kiffé ! ]\n");
echo(" [ Albert Einstein ]\n \n");
fclose($stdin);
?>