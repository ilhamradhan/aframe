<?php
  $mysqli = new mysqli("localhost", "root", "", "gbi");
  // $sql="SELECT f.Customer, year(date), sum(revenue) from f_gbi f join d_customer d on f.Customer = d.Customer group by d.Customer, year(date)";
  $sql="SELECT f.Customer, year(date), sum(revenue) from f_gbi f join d_customer d on f.Customer = d.Customer where  year(date) = 2014 group by d.Customer, year(date)";

  $res = $mysqli->query($sql);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Year 2014</title>
    <meta name="description" content="Hello, WebVR! • A-Frame">
	<script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
  <!-- <script>

        AFRAME.registerComponent("foo", {
      init: function() {
        let self = this.el
        this.el.addEventListener("click", (e)=>{
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              self.children[0].setAttribute("value", this.responseText;
            }
          };
          xhttp.open("GET", "monat.php", true);
          xhttp.send();
        })
      }
      })
  </script> -->

  </head>
  <body>
  <a-assets>
		<!-- background -->
		<img id="groundTexture" src="https://cdn.aframe.io/a-painter/images/floor.jpg">
		<!-- Säulentext -->
		<a-mixin id="boxText1" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Professional Touring
							Bike-Black
							Sold: 7200"
							visible="false"></a-mixin>
		<a-mixin id="boxText2" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Folding Bike
							Sold: 8220"
							visible="false"></a-mixin>
		<a-mixin id="boxText3" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Motorbike
							Sold: 6200"
							visible="false"></a-mixin>
		<a-mixin id="boxText4" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Racing Bike
							Sold: 5400"
							visible="false"></a-mixin>
		<a-mixin id="boxText5" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Electric Bike
							Sold: 12400"
							visible="false"></a-mixin>
		<a-mixin id="boxText6" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Flying Bike
							Sold: 6400"
							visible="false"></a-mixin>
		<a-mixin id="boxText7" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Deluxe Touring
							Bike-Black
							Sold: 3200"
							visible="false"></a-mixin>
		<a-mixin id="boxText8" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Road Bike Alu SRAM
							Sold: 8400"
							visible="false"></a-mixin>
		<a-mixin id="boxText9" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Women\'s Off
							Road Bike Fully
							Sold: 6500"
							visible="false"></a-mixin>
		<a-mixin id="boxText10" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Men\'s Off Road Bike
							Hard Tail SRAM
							Sold: 14020"
							visible="false"></a-mixin>
		<a-mixin id="boxText11" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Air Pump
							Sold: 7030"
							visible="false"></a-mixin>
		<a-mixin id="boxText12" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Elbow Pads
							Sold: 5900"
							visible="false"></a-mixin>
		<a-mixin id="boxText13" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Professional Touring
							Bike-Red
							Sold: 5900"
							visible="false"></a-mixin>
		<a-mixin id="boxText14" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Road Bike
							Carbon Campagnolo
							Sold: 5900"
							visible="false"></a-mixin>
		<a-mixin id="boxText15" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: City Max
							Sold: 5900"
							visible="false"></a-mixin>
		<a-mixin id="boxText16" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Edel Fixie
							Sold: 5900"
							visible="false"></a-mixin>
		<a-mixin id="boxText17" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: E-Bike Tailwind
							Sold: 5900"
							visible="false"></a-mixin>
		<a-mixin id="boxText18" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Hoverboard
							Sold: 5900"
							visible="false"></a-mixin>
		<a-mixin id="boxText19" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Off Road Helmet
							Sold: 5900"
							visible="false"></a-mixin>
		<a-mixin id="boxText20" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: T-shirt
							Sold: 5900"
							visible="false"></a-mixin>
		<a-mixin id="boxText21" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: First Aid Kit
							Sold: 5900"
							visible="false"></a-mixin>
		<a-mixin id="boxText22" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Deluxe Touring
							Bike-Red
							Sold: 5900"
							visible="false"></a-mixin>
		<a-mixin id="boxText23" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Deluxe Touring
							Bike-Silver
							Sold: 5900"
							visible="false"></a-mixin>
		<a-mixin id="boxText24" text="color: blue; align: center; width: 5; letterSpacing: 2; color: black;
							value: Jet Pack
							Sold: 5900"
							visible="false"></a-mixin>
		<img id="tabelle2Thumbnail" crossorigin="anonymous" src="tabelle2.jpg">
	</a-assets>

	<a-scene background="color: #808080">
	<a-cylinder id="ground" src="#groundTexture" radius="32" height="0.1" position="0 -3 0"></a-cylinder>

		<!-- For Teleport-->
      <a-entity id="cameraRig">
      <!-- camera -->
      <a-entity id="head" camera position="0 1.6 0" wasd-controls look-controls cursor="rayOrigin: mouse"></a-entity>
      <!-- hand controls -->
      <a-entity id="left-hand" vive-controls="hand: left" teleport-controls="cameraRig: #cameraRig; teleportOrigin: #head;"></a-entity>
      <a-entity id="right-hand" vive-controls="hand: right" laser-controls="hand: right"></a-entity>
		</a-entity>

	<a-entity id="diagram" position=" -6 0 -6" scale ="0.5 0.5 0.5" rotation="0 0 0 ">
	<?php

	  $x=0;
	  $cust=0;
	  while ($row = $res->fetch_row()) {

		$val=$row[2]/1000000;
		if ($cust!=$row[0]) {$x=$x+1;$cust=$row[0];}
		$v2=$val/2;

		$year=$row[1];
		$z=$year-2015;
		print "<a-box position=\"$x $v2 $z\" rotation=\"0 0 0\" scale=\"0.6 $val 0.6\" color=#F0F0EC shadow></a-box>\n";
	  }
	?>
	</a-entity>

  <a-box foo></a-box>



	<!-- Diagrammtext -->
		<a-entity position="0 -0.7 -6.3" material="color: #eee" text="color: white; align: center; value: Kunden; width: 6">
        </a-entity>
		<a-entity position="-6.3 4 -6.3" rotation="0 0 90" material="color: #eee" text="color: white; align: center; value: Revenue; width: 6">
        </a-entity>
		<a-entity position="-6 -0.7 -8.5" rotation="0 -90 0" material="color: #eee" text="color: white; align: center; value: Jahr; width: 6">
        </a-entity>
		<a-entity position="0 9 -10" geometry="primitive: plane; width: 4; height: 1" material="color: #fff" text="color: blue; align: center; value: 2014; width: 10">
        </a-entity>

	<!-- Diagrammline -->
		<a-entity
		line="start: -6 -0.5 -6.3; end: 6.3 -0.5 -6.3; color: white"
		line__1="start: -6 -0.5 -6.3; end: -6 -0.5 -11; color: white"
		line__2="start: -6 -0.5 -6.3; end: -6 7 -6.3; color:white">
		</a-entity>


    </a-scene>
  </body>
</html>
