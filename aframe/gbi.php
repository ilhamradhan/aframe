1.	<?php
2.	  $mysqli = new mysqli("localhost", "root", "", "gbi");
3.	  $sql="SELECT f.Customer, year(date), sum(revenue) from f_gbi f JOIN d_customer d ON f.Customer = d.Customer GROUP BY d.Customer, year(date)";
4.	  $res = $mysqli->query($sql);
5.	?>
6.	<!DOCTYPE html>
7.	<html>
8.	  <head>
9.	    <meta charset="utf-8">
10.	    <title>Hello, WebVR! • A-Frame</title>
11.	    <meta name="description" content="Hello, WebVR! • A-Frame">
12.	    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
13.	  </head>
14.	  <body>
15.	    <a-scene background="color: #FAFAFA">
16.	    <a-entity camera look-controls wasd-controls position="20 5 10"></a-entity>
17.	<?php
18.	  $x=0;
19.	  $cust=0;
20.	  while ($row = $res->fetch_row()) {
21.	    if ($cust!=$row[0]) {$x=$x+1;$cust=$row[0];}
22.	    $val=$row[2]/1000000;
23.	    $v2=$val/2;
24.
25.	    $year=$row[1];
26.	    $z=$year-2017;
27.	    print "<a-box position=\"$x $v2 $z\" rotation=\"0 0 0\" scale=\"0.6 $val 0.6\" color=#4CC3D9></a-box>\n";
28.	  }
29.	?>
30.	    </a-scene>
31.	  </body>
32.	</html>
