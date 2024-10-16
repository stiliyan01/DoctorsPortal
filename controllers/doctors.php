<?php

// dd($_SERVER, 'goshe');

dump('goshe');
ini_set("default_socket_timeout", 100);

header("Location: {$_SERVER['HTTP_REFERER']}");