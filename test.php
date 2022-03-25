<html>
     <head>
          <title> Test </title>
</head>
<body>
<p>What is AirFlow-3000?<br />
	Discover below.</p>
<?php
     $dir =   $_POST["dir"];
     $speed = $_POST["speed"];
     $batt =  $_POST["batt"];
     $data =  $dir . ',' . $speed . ',' . $batt;
     $file =  './current.txt';
     file_put_contents($file, $data);
	echo "test write";
   ?>
</body>
</html>