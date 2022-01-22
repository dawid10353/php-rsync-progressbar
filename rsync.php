<?php
   $Source = $_GET['Source'];
   $Destination = $_GET['Destination'];
   
   
   if(!file_exists('working')){
   file_put_contents('working', 'work', FILE_APPEND | LOCK_EX);
   
   if(file_exists("progress")){
      unlink("progress");
  }

   $down = popen('rsync -acp --info=progress2 --no-inc-recursive --no-owner --no-group --delete --bwlimit=30000 '.$Source.' '.$Destination, 'r');
   $order = array("\r\n", "\n", "\r");
   while($progress = fgets($down, 32)) {
   $update = str_replace($order,PHP_EOL, $progress);
   file_put_contents('progress', $update, FILE_APPEND | LOCK_EX);
   }
   file_put_contents('progress', "DONE 100%", FILE_APPEND | LOCK_EX);
   pclose($down);

   unlink('working');
}

   ?>