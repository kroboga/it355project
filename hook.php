<?php
echo "<pre>";
echo shell_exec("git fetch origin 2>&1");
echo "<br />";
echo shell_exec("git reset --hard origin/master 2>&1");
echo "<br />";
echo shell_exec("/usr/bin/git pull 2>&1");
echo "</pre>";
?>