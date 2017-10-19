<?php

$path = '/html/admin/web/lteixeira.tk/public_html/';
shell_exec('cd ' . $path . ' && sudo git reset --hard HEAD && sudo git pull origin master 2>&1');
