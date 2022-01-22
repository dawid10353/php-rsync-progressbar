<?php

    $output = htmlspecialchars(preg_replace('/\s+/', '',shell_exec("cat progress|tail -n1|awk '{print $2}'")));
        if(preg_match('/^[1-9][0-9]?\%$|^100\%$/',$output)){
        echo $output;
        }