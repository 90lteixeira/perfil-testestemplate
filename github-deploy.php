<?php

$path = '/home/admin/web/lteixeira.tk/public_html/';
shell_exec('cd ' . $path . ' && sudo git pull origin master 2>&1');
