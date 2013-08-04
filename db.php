<?php
  exec("cat /proc/cpuinfo && free -m && df -h && ls -l /", $out);
  foreach ($out as $o) {
  	echo $o."<br/>";
  }
  
?>