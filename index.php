<?php
print "<h3> REFRESH PAGE</h3>";
$file_name="count.txt";
$file=fopen($file_name,"r");
$visited=fscanf($file,"%d");
fclose($file);
$visited[0]++;
$file=fopen($file_name,"w");
fprintf($file,"%d",$visited[0]);
fclose($file);
print "Total number of views : ".$visited[0];
?>