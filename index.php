<?php

header("Cache-control: private, max-age=0");
header("X-Test-Header: Test");
echo date('Y');
echo "\n";
echo "Hello World!";
print_r($_SERVER);
echo "\n";
print_r($_GET);