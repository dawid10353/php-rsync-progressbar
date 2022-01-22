<?php

$output = shell_exec("cat progress|tail -n8");
echo $output;