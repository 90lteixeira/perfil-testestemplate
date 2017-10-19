<?php

$path = '/home/admin/web/lteixeira.tk/public_html/';
$output = shell_exec('cd ' . $path . ' && sudo git pull origin master 2>&1');
echo "<pre>$output</pre>";