<?php
  $mysqli = new mysqli("localhost", "root", "", "gbi");
  // $sql="SELECT f.Customer, year(date) , sum(revenue) from f_gbi f join d_customer d on f.Customer = d.Customer group by d.Customer, year(date)";
  $sql="SELECT f.Customer, month(date), sum(revenue) from f_gbi f join d_customer d on f.Customer = d.Customer
        where month(date) = 3 and year(date) = 2015 group by d.Customer, month(date)";

  $res = $mysqli->query($sql);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Total Customer Revenue in June 2017</title>
    <meta name="description" content="Hello, WebVR! • A-Frame">
	<script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
  <script src="interact.js"></script>

  </head>
  <body>
	<a-scene background="color: #808080">

		<!-- For Teleport-->
      <a-entity id="cameraRig">
      <!-- camera -->
      <a-entity id="head" camera position="0 1.6 0" wasd-controls look-controls cursor="rayOrigin: mouse"></a-entity>
      <!-- hand controls -->
      <a-entity id="left-hand" vive-controls="hand: left" teleport-controls="cameraRig: #cameraRig; teleportOrigin: #head;"></a-entity>
      <a-entity id="right-hand" vive-controls="hand: right" laser-controls="hand: right"></a-entity>
		</a-entity>

	<a-entity id="diagram-marz" rotation ="0 -90 0" position="12 2 5">
	<a-entity position=" -6 -5 -6" scale ="0.5 0.5 0.5" rotation="0 0 0 ">
	<?php

	  $x=0;
	  $cust=0;
	  while ($row = $res->fetch_row()) {

		$val=$row[2]/100000;
		if ($cust!=$row[0]) {$x=$x+1;$cust=$row[0];}
		$v2=$val/2;

		$month=$row[1];
		$z=$month-4;
		//print "<a-box position=\"$x $v2 $z\" rotation=\"0 0 0\" scale=\"0.6 $val 0.6\" color=#F0F0EC shadow></a-box>\n";
		print "<a-box position=\"$x $v2 $z\" rotation=\"0 0 0\" scale=\"0.6 $val 0.6\" color=\"#0d698b\" change-color-on-hover=\"color: green\"></a-box>\n";
	  }
	?>
	</a-entity>

	<!-- Diagrammtext -->
		<a-entity position="0 -6 -6.3" material="color: #eee" text="color: white; align: center; value: Customer; width: 6">
        </a-entity>
		<a-entity position="-6.3 -2 -6.3" rotation="0 0 90" material="color: #eee" text="color: white; align: center; value: Revenue; width: 6">
        </a-entity>
		<a-entity position="-6 0 -8.5" rotation="0 -90 0" material="color: #eee" text="color: white; align: center; value: Month; width: 6">
        </a-entity>
		<a-entity position="0 3 -10" geometry="primitive: plane; width: 8; height: 1" material="color: #fff" text="color: blue; align: center; value: Total Customer Revenue in Maerz 2015; width: 10">
        </a-entity>

	<!-- Diagrammline -->
		<a-entity position ="0 -5 0"
		line="start: -6 -0.5 -6.3; end: 6.3 -0.5 -6.3; color: white"
		line__1="start: -6 -0.5 -6.3; end: -6 -0.5 -11; color: white"
		line__2="start: -6 -0.5 -6.3; end: -6 5 -6.3; color:white">
		</a-entity>
    </a-entity>

    </a-scene>
  </body>
</html>
