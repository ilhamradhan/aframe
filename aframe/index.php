
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Datavisualisierung</title>
    <meta name="description" content="Hello, WebVR! ? A-Frame">
    <!-- A-Frame CDN -->
    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
    <!-- jQuery CDN -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <!-- A-Frame Teleport CDN -->
  	<script src="https://rawgit.com/fernandojsg/aframe-teleport-controls/master/dist/aframe-teleport-controls.min.js"></script>
    <!-- slice9: Create panels and backgrounds. -->
  	<script src="https://unpkg.com/aframe-slice9-component/dist/aframe-slice9-component.min.js"></script>
    <!-- layout: Arrange and position entities automatically. -->
    <script src="https://unpkg.com/aframe-layout-component@5.3.0/dist/aframe-layout-component.min.js"></script>
    <!-- proxy-event: Declaratively capture and event and reroute it to another entity. -->
    <script src="https://unpkg.com/aframe-proxy-event-component@2.1.0/dist/aframe-proxy-event-component.min.js"></script>
    <!-- external JavaScript -->
  	<script src="text-show.js"></script>
    <script src="interact.js"></script>
    <!-- jQuery AJAX -->
    <script>
    $(document).ready(function(){
      $("#menu1").click(function(){
        $("#menu1").load("monat.php #diagram-monat");
      });
    });
    $(document).ready(function(){
      $("#menu2").click(function(){
        $("#menu2").load("marz2015.php #diagram-marz");
      });
    });
    </script>
  </head>
<body>
<!--Scene start-->
<a-scene background="color: #808080">
	<!-- assets -->
	<a-assets>
		<!-- Säulentext -->
		<a-mixin id="boxText1" text="align: center; width: 5; letterSpacing: 2; color: black;
							value: Rocky Mountain
              Revenue: 5012793 Euro
              Year: 2016"
							visible="false"></a-mixin>
              <a-mixin id="diagtext1" text="align: center; width: 7; letterSpacing: 2; color: black;
          							value:Rocky Mountain"></a-mixin>
		<a-mixin id="boxText2" text="align: center; width: 5; letterSpacing: 2; color: black;
							value: Big Apple Bikes
							Revenue: 6050501 Euro
              Year: 2016"
							visible="false"></a-mixin>
              <a-mixin id="diagtext2" text="align: center; width: 7; letterSpacing: 2; color: black;
          							value:Big Apple Bikes"></a-mixin>
      		<a-mixin id="boxText3" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: Philly Bikes
      							Revenue: 4753693 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext3" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Philly Bikes"
                							></a-mixin>
      		<a-mixin id="boxText4" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: Peachtree Bikes
      							Revenue: 4117629 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext4" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Peachtree Bikes"
                							></a-mixin>
      		<a-mixin id="boxText5" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: Beantown Bikes
      							Revenue: 9255918 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext5" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Beantown Bikes"
                							></a-mixin>
      		<a-mixin id="boxText6" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: Windy City Bike
      							Revenue: 4291082 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext6" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Windy City Bike"
                							></a-mixin>
      		<a-mixin id="boxText7" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: Furniture City
      							Revenue: 2332315 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext7" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Furniture City "
                							></a-mixin>
      		<a-mixin id="boxText8" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: Motown Bikes
      							Revenue: 6521657 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext8" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Motown Bikes"
                							></a-mixin>
      		<a-mixin id="boxText9" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: SoCal Bikes
      							Revenue: 4609969 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext9" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:SoCal Bikes"
                							></a-mixin>
      		<a-mixin id="boxText10" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: Men\'s Off Road Bike
      							Hard Tail SRAM
      							Revenue: 9380256 Euro
                    Year: 2013"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext10" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Silicon Valley"
                							></a-mixin>
      		<a-mixin id="boxText11" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: DC Bikes
      							Revenue: 4889164 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext11" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:DC Bikes"
                							></a-mixin>
      		<a-mixin id="boxText12" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: Northwest Bikes
      							Revenue: 4195365 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext12" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Northwest Bikes"
                							></a-mixin>
      		<a-mixin id="boxText13" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: Airport Bikes
      							Revenue: 4657668 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext13" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Airport Bikes"
                							></a-mixin>
      		<a-mixin id="boxText14" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: Alster Cycling
      							Revenue: 5339725 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext14" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Alster Cycling"
                							></a-mixin>
      		<a-mixin id="boxText15" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: Bavaria Bikes
      							Revenue: 14440261 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext15" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Bavaria Bikes"
                							></a-mixin>
      		<a-mixin id="boxText16" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: Capital Bikes
      							Revenue: 8319400 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext16" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Capital Bikes"
                							></a-mixin>
      		<a-mixin id="boxText17" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: E-Bike Tailwind
      							Revenue: 5304065 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext17" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Cruiser Bikes"
                							></a-mixin>
      		<a-mixin id="boxText18" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: Hoverboard
      							Revenue: 3301652 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext18" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Drahtesel"
                							></a-mixin>
      		<a-mixin id="boxText19" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: Off Road Helmet
      							Revenue: 3514757 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext19" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Fahrpott"
                							></a-mixin>
      		<a-mixin id="boxText20" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: T-shirt
      							Revenue: 6377470 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext20" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Neckarrad"
                							></a-mixin>
      		<a-mixin id="boxText21" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: First Aid Kit
      							Revenue: 2261686 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext21" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Ostseerad"
                							></a-mixin>
      		<a-mixin id="boxText22" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: Deluxe Touring
      							Bike-Red
      							Revenue: 7723522 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext22" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Rödlelland"
                							></a-mixin>
      		<a-mixin id="boxText23" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: Deluxe Touring
      							Bike-Silver
      							Revenue: 5625872 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext23" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Red Light Bikes"
                							></a-mixin>
      		<a-mixin id="boxText24" text="align: center; width: 5; letterSpacing: 2; color: black;
      							value: Jet Pack
      							Revenue: 3189846 Euro
                    Year: 2016"
      							visible="false"></a-mixin>
                    <a-mixin id="diagtext24" text="align: center; width: 7; letterSpacing: 2; color: black;
                							value:Velodrom"
                							></a-mixin>
  <a-mixin id="jahrtext1" text="align: center; width: 7; letterSpacing: 2; color: black;
                    value:2007"
                    ></a-mixin>
  <a-mixin id="jahrtext2" text="align: center; width: 7; letterSpacing: 2; color: black;
                      value:2008"
                      ></a-mixin>
          <a-mixin id="jahrtext3" text="align: center; width: 7; letterSpacing: 2; color: black;
                            value:2009"
                            ></a-mixin>
          <a-mixin id="jahrtext4" text="align: center; width: 7; letterSpacing: 2; color: black;
                            value:2010"
                            ></a-mixin>
          <a-mixin id="jahrtext5" text="align: center; width: 7; letterSpacing: 2; color: black;
                            value:2011"
                            ></a-mixin>
          <a-mixin id="jahrtext6" text="align: center; width: 7; letterSpacing: 2; color: black;
                            value:2012"
                            ></a-mixin>
          <a-mixin id="jahrtext7" text="align: center; width: 7; letterSpacing: 2; color: black;
                            value:2013"
                            ></a-mixin>
          <a-mixin id="jahrtext8" text="align: center; width: 7; letterSpacing: 2; color: black;
                            value:2014"
                            ></a-mixin>
          <a-mixin id="jahrtext9" text="align: center; width: 7; letterSpacing: 2; color: black;
                            value:2015"
                            ></a-mixin>
          <a-mixin id="jahrtext10" text="align: center; width: 7; letterSpacing: 2; color: black;
                            value:2016"
                            ></a-mixin>

          <!-- Images. -->
          <img id="pageIconImg" src="https://cdn.glitch.com/0ddef241-2c1a-4bc2-8d47-58192c718908%2FdownIcon.png?1557829539105">
          <img id="sliceImg" src="https://cdn.glitch.com/0ddef241-2c1a-4bc2-8d47-58192c718908%2Fslice.png?1557308835598" crossorigin>
          <!-- Base mixins. -->
          <a-mixin id="font" text="font: roboto"></a-mixin>
          <a-mixin id="slice" slice9="color: #050505; transparent: true; opacity: 0.9; src: #sliceImg; left: 50; right: 52; top: 50; bottom: 52; padding: 0.15"></a-mixin>
          <!-- Menu and button mixins. Mixins can be composed from other mixins. -->
          <a-mixin id="buttonBackground" mixin="slice" slice9="width: 1.3; height: 0.3; color: #030303" render-order="button"></a-mixin>
              <a-mixin  id="buttonHoverEffect"
                animation__mouseenter="property: components.slice9.material.color; type: color; from: #030303; to: #333; easing: easeOutCubic; dur: 150; startEvents: mouseenter"
                animation__mouseleave="property: components.slice9.material.color; type: color; from: #333; to: #030303; easing: easeOutCubic; dur: 150; startEvents: mouseleave"></a-mixin>
              <a-mixin id="buttonText" mixin="font" text="align: center; width: 2.5; zOffset: 0.01; color: #333"></a-mixin>
              <a-mixin id="button" mixin="buttonBackground buttonHoverEffect buttonText" render-order="button"></a-mixin>
              <a-mixin id="pageButton" geometry="primitive: plane; width: 0.15; height: 0.15" material="src: #pageIconImg; shader: flat; transparent: true"
                       animation__mouseenter="property: components.material.material.color; type: color; from: #FFF; to: #AAF; dur: 100; startEvents: mouseenter"
                       animation__mouseleave="property: components.material.material.color; type: color; from: #AAF; to: #FFF; dur: 100; startEvents: mouseleave"></a-mixin>
      	</a-assets>

      <!-- For Teleport-->
        <a-entity id="cameraRig">
        <!-- camera -->
        <a-entity id="head" camera position="-3 1.6 0" wasd-controls look-controls cursor="rayOrigin: mouse"></a-entity>
        <!-- hand controls -->
        <a-entity id="left-hand" vive-controls="hand: left" teleport-controls="cameraRig: #cameraRig; teleportOrigin: #head;"></a-entity>
        <a-entity id="right-hand" vive-controls="hand: right" laser-controls="hand: right"></a-entity>
      </a-entity>

  <!-- DIAGRAM 1 -->
  <a-entity id="diagram">
	<!--Säulendiagramm-->
		<a-entity  position=" -6 0 -6" scale ="0.5 0.5 0.5" rotation="0 0 0 ">
			 <a-box position="1 2.5414665 -10" rotation="0 0 0" scale="0.6 5.082933 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: pink"></a-box>
			 <a-box position="1 2.4565185 -9" rotation="0 0 0" scale="0.6 4.913037 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: pink"></a-box>
			 <a-box position="1 1.85993 -8" rotation="0 0 0" scale="0.6 3.71986 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: pink"></a-box>
			 <a-box position="1 2.0676455 -7" rotation="0 0 0" scale="0.6 4.135291 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: pink"></a-box>
			 <a-box position="1 2.4470875 -6" rotation="0 0 0" scale="0.6 4.894175 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: pink"></a-box>
			 <a-box position="1 2.926517 -5" rotation="0 0 0" scale="0.6 5.853034 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: pink"></a-box>
			 <a-box position="1 2.854394 -4" rotation="0 0 0" scale="0.6 5.708788 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: pink"></a-box>
			 <a-box position="1 3.0073485 -3" rotation="0 0 0" scale="0.6 6.014697 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: pink"></a-box>
			 <a-box position="1 3.169776 -2" rotation="0 0 0" scale="0.6 6.339552 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: pink"></a-box>
			 <a-box position="1 2.5063965 -1" rotation="0 0 0" scale="0.6 5.012793 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: pink" text-show-for-first>
			 </a-box>
        <a-entity mixin="boxText1" id="boxText1" class="clickable" position="1 6 -1"></a-entity>
        <a-entity mixin="diagtext1" rotation="0 0 90" position="1 -2.5 -1"></a-entity>

			 <a-box position="2 2.066091 -10" rotation="0 0 0" scale="0.6 4.132182 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #F9F17F"></a-box>
			 <a-box position="2 2.1081225 -9" rotation="0 0 0" scale="0.6 4.216245 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #F9F17F"></a-box>
			 <a-box position="2 1.6209345 -8" rotation="0 0 0" scale="0.6 3.241869 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #F9F17F"></a-box>
			 <a-box position="2 2.1026 -7" rotation="0 0 0" scale="0.6 4.2052 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #F9F17F"></a-box>
			 <a-box position="2 2.4378855 -6" rotation="0 0 0" scale="0.6 4.875771 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #F9F17F"></a-box>
			 <a-box position="2 3.0042165 -5" rotation="0 0 0" scale="0.6 6.008433 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #F9F17F"></a-box>
			 <a-box position="2 3.6312735 -4" rotation="0 0 0" scale="0.6 7.262547 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #F9F17F"></a-box>
			 <a-box position="2 2.683376 -3" rotation="0 0 0" scale="0.6 5.366752 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #F9F17F"></a-box>
			 <a-box position="2 2.5106155 -2" rotation="0 0 0" scale="0.6 5.021231 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #F9F17F"></a-box>
			 <a-box position="2 3.0252505 -1" rotation="0 0 0" scale="0.6 6.050501 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #F9F17F" text-show-for-second>
			</a-box>
			<a-entity mixin="boxText2" id="boxText2" class="clickable" position="2 7 -1"></a-entity>
      <a-entity mixin="diagtext2" rotation="0 0 90" position="2 -2.5 -1"></a-entity>

			 <a-box position="3 2.154554 -10" rotation="0 0 0" scale="0.6 4.309108 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #CCFDAC"></a-box>
			 <a-box position="3 2.074405 -9" rotation="0 0 0" scale="0.6 4.14881 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #CCFDAC"></a-box>
			 <a-box position="3 1.329165 -8" rotation="0 0 0" scale="0.6 2.65833 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #CCFDAC"></a-box>
			 <a-box position="3 1.5012225 -7" rotation="0 0 0" scale="0.6 3.002445 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #CCFDAC"></a-box>
			 <a-box position="3 1.6947795 -6" rotation="0 0 0" scale="0.6 3.389559 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #CCFDAC"></a-box>
			 <a-box position="3 2.5349115 -5" rotation="0 0 0" scale="0.6 5.069823 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #CCFDAC"></a-box>
			 <a-box position="3 2.1506745 -4" rotation="0 0 0" scale="0.6 4.301349 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #CCFDAC"></a-box>
			 <a-box position="3 2.529206 -3" rotation="0 0 0" scale="0.6 5.058412 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #CCFDAC"></a-box>
			 <a-box position="3 1.9267775 -2" rotation="0 0 0" scale="0.6 3.853555 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #CCFDAC"></a-box>
			 <a-box position="3 2.3768465 -1" rotation="0 0 0" scale="0.6 4.753693 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #CCFDAC" text-show-for-third>
					</a-box>
			<a-entity mixin="boxText3" id="boxText3" class="clickable" position="3 5.3 -1"></a-entity>
      <a-entity mixin="diagtext3" rotation="0 0 90" position="3 -2.5 -1"></a-entity>

			 <a-box position="4 1.8432 -10" rotation="0 0 0" scale="0.6 3.6864 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="4 1.64636 -9" rotation="0 0 0" scale="0.6 3.29272 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="4 1.6018285 -8" rotation="0 0 0" scale="0.6 3.203657 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="4 1.47075 -7" rotation="0 0 0" scale="0.6 2.9415 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="4 1.9901735 -6" rotation="0 0 0" scale="0.6 3.980347 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="4 2.08683 -5" rotation="0 0 0" scale="0.6 4.17366 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="4 1.7359595 -4" rotation="0 0 0" scale="0.6 3.471919 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="4 3.105529 -3" rotation="0 0 0" scale="0.6 6.211058 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="4 2.322677 -2" rotation="0 0 0" scale="0.6 4.645354 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="4 2.0588145 -1" rotation="0 0 0" scale="0.6 4.117629 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #D86DF3" text-show-for-fourth>
					</a-box>
			<a-entity mixin="boxText4" id="boxText4" class="clickable" position="4 4.4 -1"></a-entity>
      <a-entity mixin="diagtext4" rotation="0 0 90" position="4 -2.5 -1"></a-entity>

			 <a-box position="5 3.660239 -10" rotation="0 0 0" scale="0.6 7.320478 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="5 3.1858025 -9" rotation="0 0 0" scale="0.6 6.371605 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="5 2.450074 -8" rotation="0 0 0" scale="0.6 4.900148 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="5 3.140084 -7" rotation="0 0 0" scale="0.6 6.280168 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="5 4.3828005 -6" rotation="0 0 0" scale="0.6 8.765601 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="5 4.633228 -5" rotation="0 0 0" scale="0.6 9.266456 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="5 4.2425525 -4" rotation="0 0 0" scale="0.6 8.485105 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="5 5.070519 -3" rotation="0 0 0" scale="0.6 10.141038 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="5 4.3900165 -2" rotation="0 0 0" scale="0.6 8.780033 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="5 4.627959 -1" rotation="0 0 0" scale="0.6 9.255918 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #7745DC" text-show-for-fifth>
					</a-box>
			<a-entity mixin="boxText5" id="boxText5" class="clickable" position="5 10 -1"></a-entity>
      <a-entity mixin="diagtext5" rotation="0 0 90" position="5 -2.5 -1"></a-entity>

			 <a-box position="6 1.934576 -10" rotation="0 0 0" scale="0.6 3.869152 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="6 1.836154 -9" rotation="0 0 0" scale="0.6 3.672308 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="6 1.4690365 -8" rotation="0 0 0" scale="0.6 2.938073 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="6 1.8737005 -7" rotation="0 0 0" scale="0.6 3.747401 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="6 2.390121 -6" rotation="0 0 0" scale="0.6 4.780242 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="6 2.3279985 -5" rotation="0 0 0" scale="0.6 4.655997 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="6 2.4361305 -4" rotation="0 0 0" scale="0.6 4.872261 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="6 3.283216 -3" rotation="0 0 0" scale="0.6 6.566432 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="6 2.286082 -2" rotation="0 0 0" scale="0.6 4.572164 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="6 2.145541 -1" rotation="0 0 0" scale="0.6 4.291082 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #DC4591" text-show-for-six>
	       </a-box>
			<a-entity mixin="boxText6" id="boxText6" class="clickable" position="6 5 -1"></a-entity>
      <a-entity mixin="diagtext6" rotation="0 0 90" position="6 -2.5 -1"></a-entity>

			 <a-box position="7 0.901045 -10" rotation="0 0 0" scale="0.6 1.80209 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="7 0.908532 -9" rotation="0 0 0" scale="0.6 1.817064 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="7 0.733955 -8" rotation="0 0 0" scale="0.6 1.46791 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="7 0.9469715 -7" rotation="0 0 0" scale="0.6 1.893943 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="7 0.969883 -6" rotation="0 0 0" scale="0.6 1.939766 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="7 1.2713695 -5" rotation="0 0 0" scale="0.6 2.542739 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="7 1.225309 -4" rotation="0 0 0" scale="0.6 2.450618 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="7 1.410494 -3" rotation="0 0 0" scale="0.6 2.820988 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="7 1.481798 -2" rotation="0 0 0" scale="0.6 2.963596 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="7 1.1661575 -1" rotation="0 0 0" scale="0.6 2.332315 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #E58211" text-show-for-seven>
					</a-box>
			<a-entity mixin="boxText7" class="clickable" id="boxText7" position="7 3 -1"></a-entity>
      <a-entity mixin="diagtext7" rotation="0 0 90" position="7 -2.5 -1"></a-entity>

			 <a-box position="8 1.6697795 -10" rotation="0 0 0" scale="0.6 3.339559 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="8 2.1095645 -9" rotation="0 0 0" scale="0.6 4.219129 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="8 1.223606 -8" rotation="0 0 0" scale="0.6 2.447212 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="8 1.8159165 -7" rotation="0 0 0" scale="0.6 3.631833 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="8 1.954369 -6" rotation="0 0 0" scale="0.6 3.908738 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="8 2.3876415 -5" rotation="0 0 0" scale="0.6 4.775283 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="8 2.025478 -4" rotation="0 0 0" scale="0.6 4.050956 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="8 2.5781095 -3" rotation="0 0 0" scale="0.6 5.156219 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="8 2.440349 -2" rotation="0 0 0" scale="0.6 4.880698 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="8 3.2608285 -1" rotation="0 0 0" scale="0.6 6.521657 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #8D7963" text-show-for-eight>
					</a-box>
			<a-entity mixin="boxText8" class="clickable" id="boxText8" position="8 7 -1"></a-entity>
      <a-entity mixin="diagtext8" rotation="0 0 90" position="8 -2.5 -1"></a-entity>

			 <a-box position="9 1.7912215 -10" rotation="0 0 0" scale="0.6 3.582443 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="9 2.28058 -9" rotation="0 0 0" scale="0.6 4.56116 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="9 1.66909 -8" rotation="0 0 0" scale="0.6 3.33818 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="9 1.170478 -7" rotation="0 0 0" scale="0.6 2.340956 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="9 1.8046965 -6" rotation="0 0 0" scale="0.6 3.609393 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="9 1.924506 -5" rotation="0 0 0" scale="0.6 3.849012 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="9 2.0718095 -4" rotation="0 0 0" scale="0.6 4.143619 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="9 3.0378745 -3" rotation="0 0 0" scale="0.6 6.075749 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="9 2.914111 -2" rotation="0 0 0" scale="0.6 5.828222 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="9 2.3049845 -1" rotation="0 0 0" scale="0.6 4.609969 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #F64B4B" text-show-for-nine>
					</a-box>
			<a-entity mixin="boxText9" class="clickable" id="boxText9" position="9 5 -1"></a-entity>
      <a-entity mixin="diagtext9" rotation="0 0 90" position="9 -2.5 -1"></a-entity>

			 <a-box position="10 5.221019 -10" rotation="0 0 0" scale="0.6 10.442038 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="10 5.433058 -9" rotation="0 0 0" scale="0.6 10.866116 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="10 3.365854 -8" rotation="0 0 0" scale="0.6 6.731708 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="10 3.958185 -7" rotation="0 0 0" scale="0.6 7.91637 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="10 5.6505595 -6" rotation="0 0 0" scale="0.6 11.301119 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="10 5.6520725 -5" rotation="0 0 0" scale="0.6 11.304145 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="10 4.690128 -4" rotation="0 0 0" scale="0.6 9.380256 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #0B1570" text-show-for-ten>
					</a-box>
			<a-entity mixin="boxText10" class="clickable" id="boxText10" position="10 10 -4"></a-entity>
      <a-entity mixin="diagtext10" rotation="0 0 90" position="10 -2.5 -1"></a-entity>

			 <a-box position="11 2.2094465 -10" rotation="0 0 0" scale="0.6 4.418893 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="11 1.9228145 -9" rotation="0 0 0" scale="0.6 3.845629 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="11 1.252334 -8" rotation="0 0 0" scale="0.6 2.504668 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="11 1.4773945 -7" rotation="0 0 0" scale="0.6 2.954789 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="11 2.0772725 -6" rotation="0 0 0" scale="0.6 4.154545 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="11 2.228202 -5" rotation="0 0 0" scale="0.6 4.456404 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="11 1.796118 -4" rotation="0 0 0" scale="0.6 3.592236 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="11 2.9282425 -3" rotation="0 0 0" scale="0.6 5.856485 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="11 2.147797 -2" rotation="0 0 0" scale="0.6 4.295594 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="11 2.444582 -1" rotation="0 0 0" scale="0.6 4.889164 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #3D7C06" text-show-for-eleven>
					</a-box>
			<a-entity mixin="boxText11" class="clickable" id="boxText11" position="11 5.5 -1"></a-entity>
      <a-entity mixin="diagtext11" rotation="0 0 90" position="11 -2.5 -1"></a-entity>

			 <a-box position="12 2.084786 -10" rotation="0 0 0" scale="0.6 4.169572 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="12 2.136315 -9" rotation="0 0 0" scale="0.6 4.27263 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="12 1.22815 -8" rotation="0 0 0" scale="0.6 2.4563 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="12 1.5601465 -7" rotation="0 0 0" scale="0.6 3.120293 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="12 2.667481 -6" rotation="0 0 0" scale="0.6 5.334962 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="12 2.5308935 -5" rotation="0 0 0" scale="0.6 5.061787 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="12 2.643245 -4" rotation="0 0 0" scale="0.6 5.28649 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="12 2.046022 -3" rotation="0 0 0" scale="0.6 4.092044 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="12 2.9921935 -2" rotation="0 0 0" scale="0.6 5.984387 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="12 2.0976825 -1" rotation="0 0 0" scale="0.6 4.195365 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #427549" text-show-for-12>
					</a-box>
			<a-entity mixin="boxText12" class="clickable" id="boxText12" position="12 4.5 -1"></a-entity>
      <a-entity mixin="diagtext12" rotation="0 0 90" position="12 -2.5 -1"></a-entity>

			 <a-box position="13 1.617478 -10" rotation="0 0 0" scale="0.6 3.234956 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="13 1.6718155 -9" rotation="0 0 0" scale="0.6 3.343631 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="13 1.823909 -8" rotation="0 0 0" scale="0.6 3.647818 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="13 2.0108015 -7" rotation="0 0 0" scale="0.6 4.021603 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="13 2.2301265 -6" rotation="0 0 0" scale="0.6 4.460253 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="13 1.8969655 -5" rotation="0 0 0" scale="0.6 3.793931 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="13 1.6331045 -4" rotation="0 0 0" scale="0.6 3.266209 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="13 1.736677 -3" rotation="0 0 0" scale="0.6 3.473354 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="13 2.723802 -2" rotation="0 0 0" scale="0.6 5.447604 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="13 2.328834 -1" rotation="0 0 0" scale="0.6 4.657668 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #564FB0" text-show-for-13>
					</a-box>
			<a-entity mixin="boxText13" class="clickable" id="boxText13" position="13 5.5 -1"></a-entity>
      <a-entity mixin="diagtext13" rotation="0 0 90" position="13 -2.5 -1"></a-entity>

			 <a-box position="14 1.8046085 -10" rotation="0 0 0" scale="0.6 3.609217 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="14 1.1905355 -9" rotation="0 0 0" scale="0.6 2.381071 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="14 1.351677 -8" rotation="0 0 0" scale="0.6 2.703354 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="14 1.3734785 -7" rotation="0 0 0" scale="0.6 2.746957 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="14 1.671397 -6" rotation="0 0 0" scale="0.6 3.342794 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="14 2.079778 -5" rotation="0 0 0" scale="0.6 4.159556 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="14 1.9550305 -4" rotation="0 0 0" scale="0.6 3.910061 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="14 1.9906835 -3" rotation="0 0 0" scale="0.6 3.981367 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="14 2.592024 -2" rotation="0 0 0" scale="0.6 5.184048 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="14 2.6698625 -1" rotation="0 0 0" scale="0.6 5.339725 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #DB0AAA" text-show-for-14>
					</a-box>
			<a-entity mixin="boxText14" class="clickable" id="boxText14" position="14 6.3 -1"></a-entity>
      <a-entity mixin="diagtext14" rotation="0 0 90" position="14 -2.5 -1"></a-entity>

			 <a-box position="15 3.784201 -10" rotation="0 0 0" scale="0.6 7.568402 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="15 3.742976 -9" rotation="0 0 0" scale="0.6 7.485952 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="15 4.477591 -8" rotation="0 0 0" scale="0.6 8.955182 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="15 4.5302825 -7" rotation="0 0 0" scale="0.6 9.060565 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="15 5.284035 -6" rotation="0 0 0" scale="0.6 10.56807 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="15 5.621843 -5" rotation="0 0 0" scale="0.6 11.243686 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="15 5.717936 -4" rotation="0 0 0" scale="0.6 11.435872 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="15 6.0741135 -3" rotation="0 0 0" scale="0.6 12.148227 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="15 6.76224 -2" rotation="0 0 0" scale="0.6 13.52448 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="15 7.2201305 -1" rotation="0 0 0" scale="0.6 14.440261 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #CB3B58" text-show-for-15>
					</a-box>
			<a-entity mixin="boxText15" class="clickable" id="boxText15" position="15 15 -1"></a-entity>
      <a-entity mixin="diagtext15" rotation="0 0 90" position="15 -2.5 -1"></a-entity>

			 <a-box position="16 2.1187635 -10" rotation="0 0 0" scale="0.6 4.237527 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="16 2.1706175 -9" rotation="0 0 0" scale="0.6 4.341235 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="16 1.8987215 -8" rotation="0 0 0" scale="0.6 3.797443 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="16 2.273927 -7" rotation="0 0 0" scale="0.6 4.547854 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="16 2.6626635 -6" rotation="0 0 0" scale="0.6 5.325327 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="16 3.135216 -5" rotation="0 0 0" scale="0.6 6.270432 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="16 2.9944425 -4" rotation="0 0 0" scale="0.6 5.988885 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="16 3.1011095 -3" rotation="0 0 0" scale="0.6 6.202219 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="16 3.5858865 -2" rotation="0 0 0" scale="0.6 7.171773 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="16 4.1597 -1" rotation="0 0 0" scale="0.6 8.3194 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #77091F" text-show-for-16>
					</a-box>
			<a-entity mixin="boxText16" class="clickable" id="boxText16" position="16 9 -1"></a-entity>
      <a-entity mixin="diagtext16" rotation="0 0 90" position="16 -2.5 -1"></a-entity>

			 <a-box position="17 1.723718 -10" rotation="0 0 0" scale="0.6 3.447436 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="17 1.5329265 -9" rotation="0 0 0" scale="0.6 3.065853 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="17 1.40475 -8" rotation="0 0 0" scale="0.6 2.8095 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="17 1.894821 -7" rotation="0 0 0" scale="0.6 3.789642 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="17 1.6372835 -6" rotation="0 0 0" scale="0.6 3.274567 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="17 2.0885805 -5" rotation="0 0 0" scale="0.6 4.177161 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="17 1.8886605 -4" rotation="0 0 0" scale="0.6 3.777321 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="17 2.34156 -3" rotation="0 0 0" scale="0.6 4.68312 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="17 2.2382885 -2" rotation="0 0 0" scale="0.6 4.476577 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="17 2.6520325 -1" rotation="0 0 0" scale="0.6 5.304065 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #8CA107" text-show-for-17>
					</a-box>
			<a-entity mixin="boxText17" class="clickable" id="boxText17" position="17 6 -1"></a-entity>
      <a-entity mixin="diagtext17" rotation="0 0 90" position="17 -2.5 -1"></a-entity>

			 <a-box position="18 1.085707 -10" rotation="0 0 0" scale="0.6 2.171414 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="18 1.2633645 -9" rotation="0 0 0" scale="0.6 2.526729 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="18 1.354228 -8" rotation="0 0 0" scale="0.6 2.708456 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="18 1.310722 -7" rotation="0 0 0" scale="0.6 2.621444 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="18 1.706247 -6" rotation="0 0 0" scale="0.6 3.412494 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="18 1.4210175 -5" rotation="0 0 0" scale="0.6 2.842035 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="18 1.5717575 -4" rotation="0 0 0" scale="0.6 3.143515 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="18 2.0284965 -3" rotation="0 0 0" scale="0.6 4.056993 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="18 2.080381 -2" rotation="0 0 0" scale="0.6 4.160762 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="18 1.650826 -1" rotation="0 0 0" scale="0.6 3.301652 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #4AD173" text-show-for-18>
					</a-box>
			<a-entity mixin="boxText18" class="clickable" id="boxText18" position="18 4 -1"></a-entity>
      <a-entity mixin="diagtext18" rotation="0 0 90" position="18 -2.5 -1"></a-entity>

			 <a-box position="19 1.4897455 -10" rotation="0 0 0" scale="0.6 2.979491 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="19 1.417484 -9" rotation="0 0 0" scale="0.6 2.834968 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="19 1.466638 -8" rotation="0 0 0" scale="0.6 2.933276 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="19 1.882069 -7" rotation="0 0 0" scale="0.6 3.764138 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="19 1.773388 -6" rotation="0 0 0" scale="0.6 3.546776 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="19 1.5194365 -5" rotation="0 0 0" scale="0.6 3.038873 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="19 1.595287 -4" rotation="0 0 0" scale="0.6 3.190574 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="19 1.5893265 -3" rotation="0 0 0" scale="0.6 3.178653 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="19 1.6328535 -2" rotation="0 0 0" scale="0.6 3.265707 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="19 1.7573785 -1" rotation="0 0 0" scale="0.6 3.514757 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #575C59" text-show-for-19>
					</a-box>
			<a-entity mixin="boxText19" class="clickable" id="boxText19" position="19 4.5 -1"></a-entity>
      <a-entity mixin="diagtext19" rotation="0 0 90" position="19 -2.5 -1"></a-entity>

			 <a-box position="20 1.6098785 -10" rotation="0 0 0" scale="0.6 3.219757 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="20 1.5664055 -9" rotation="0 0 0" scale="0.6 3.132811 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="20 1.714649 -8" rotation="0 0 0" scale="0.6 3.429298 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="20 2.382423 -7" rotation="0 0 0" scale="0.6 4.764846 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="20 2.31029 -6" rotation="0 0 0" scale="0.6 4.62058 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="20 2.1506325 -5" rotation="0 0 0" scale="0.6 4.301265 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="20 2.7450275 -4" rotation="0 0 0" scale="0.6 5.490055 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="20 2.346434 -3" rotation="0 0 0" scale="0.6 4.692868 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="20 2.773686 -2" rotation="0 0 0" scale="0.6 5.547372 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="20 3.188735 -1" rotation="0 0 0" scale="0.6 6.37747 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #235F61" text-show-for-20>
					</a-box>
			<a-entity mixin="boxText20" class="clickable" id="boxText20" position="20 7 -1"></a-entity>
      <a-entity mixin="diagtext20" rotation="0 0 90" position="20 -2.5 -1"></a-entity>

			 <a-box position="21 0.8135325 -10" rotation="0 0 0" scale="0.6 1.627065 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="21 0.7749955 -9" rotation="0 0 0" scale="0.6 1.549991 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="21 0.9899905 -8" rotation="0 0 0" scale="0.6 1.979981 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="21 0.8793605 -7" rotation="0 0 0" scale="0.6 1.758721 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="21 0.8230085 -6" rotation="0 0 0" scale="0.6 1.646017 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="21 1.122865 -5" rotation="0 0 0" scale="0.6 2.24573 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="21 1.182144 -4" rotation="0 0 0" scale="0.6 2.364288 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="21 1.264958 -3" rotation="0 0 0" scale="0.6 2.529916 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="21 1.092633 -2" rotation="0 0 0" scale="0.6 2.185266 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="21 1.130843 -1" rotation="0 0 0" scale="0.6 2.261686 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #9EF2F5" text-show-for-21>
					</a-box>
			<a-entity mixin="boxText21" class="clickable" id="boxText21" position="21 3 -1"></a-entity>
      <a-entity mixin="diagtext21" rotation="0 0 90" position="21 -2.5 -1"></a-entity>

			 <a-box position="22 2.360089 -10" rotation="0 0 0" scale="0.6 4.720178 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="22 2.654445 -9" rotation="0 0 0" scale="0.6 5.30889 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="22 2.4684915 -8" rotation="0 0 0" scale="0.6 4.936983 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="22 2.403332 -7" rotation="0 0 0" scale="0.6 4.806664 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="22 2.831287 -6" rotation="0 0 0" scale="0.6 5.662574 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="22 2.914774 -5" rotation="0 0 0" scale="0.6 5.829548 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="22 2.6002515 -4" rotation="0 0 0" scale="0.6 5.200503 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="22 3.087013 -3" rotation="0 0 0" scale="0.6 6.174026 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="22 3.861733 -2" rotation="0 0 0" scale="0.6 7.723466 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="22 3.861761 -1" rotation="0 0 0" scale="0.6 7.723522 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #F3C455" text-show-for-22>
					</a-box>
			<a-entity mixin="boxText22" class="clickable" id="boxText22" position="22 8.4 -1"></a-entity>
      <a-entity mixin="diagtext22" rotation="0 0 90" position="22 -2.5 -1"></a-entity>

			 <a-box position="23 2.260741 -10" rotation="0 0 0" scale="0.6 4.521482 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="23 1.468264 -9" rotation="0 0 0" scale="0.6 2.936528 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="23 2.0229995 -8" rotation="0 0 0" scale="0.6 4.045999 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="23 2.4052625 -7" rotation="0 0 0" scale="0.6 4.810525 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="23 2.786082 -6" rotation="0 0 0" scale="0.6 5.572164 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="23 2.638298 -5" rotation="0 0 0" scale="0.6 5.276596 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="23 2.2779035 -4" rotation="0 0 0" scale="0.6 4.555807 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="23 2.4026245 -3" rotation="0 0 0" scale="0.6 4.805249 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="23 2.944973 -2" rotation="0 0 0" scale="0.6 5.889946 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="23 2.812936 -1" rotation="0 0 0" scale="0.6 5.625872 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #FF0000" id="boxText23" text-show-for-23>
					</a-box>
			<a-entity mixin="boxText23" class="clickable" position="23 6.5 -1"></a-entity>
      <a-entity mixin="diagtext23" rotation="0 0 90" position="23 -2.5 -1"></a-entity>

			 <a-box position="24 1.328233 -10" rotation="0 0 0" scale="0.6 2.656466 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="24 1.142523 -9" rotation="0 0 0" scale="0.6 2.285046 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="24 1.2964325 -8" rotation="0 0 0" scale="0.6 2.592865 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="24 1.159639 -7" rotation="0 0 0" scale="0.6 2.319278 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="24 1.071368 -6" rotation="0 0 0" scale="0.6 2.142736 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="24 1.283933 -5" rotation="0 0 0" scale="0.6 2.567866 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="24 1.597215 -4" rotation="0 0 0" scale="0.6 3.19443 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="24 1.406941 -3" rotation="0 0 0" scale="0.6 2.813882 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="24 1.352062 -2" rotation="0 0 0" scale="0.6 2.704124 0.6" color=#F0F0EC shadow></a-box>
			 <a-box position="24 1.594923 -1" rotation="0 0 0" scale="0.6 3.189846 0.6" color=#F0F0EC shadow
					change-color-on-hover="color: #BDB76B" text-show-for-24>
					</a-box>
			<a-entity mixin="boxText24" class="clickable" id="boxText24"position="24 3.5 -1"></a-entity>
      <a-entity mixin="diagtext24" rotation="0 0 90" position="24 -2.5 -1"></a-entity>

      <a-entity mixin="jahrtext1" rotation="0 -90 -90" position="1 -2 -10"></a-entity>
      <a-entity mixin="jahrtext2" rotation="0 -90 -90" position="1 -2 -9"></a-entity>
      <a-entity mixin="jahrtext3" rotation="0 -90 -90" position="1 -2 -8"></a-entity>
      <a-entity mixin="jahrtext4" rotation="0 -90 -90" position="1 -2 -7"></a-entity>
      <a-entity mixin="jahrtext5" rotation="0 -90 -90" position="1 -2 -6"></a-entity>
      <a-entity mixin="jahrtext6" rotation="0 -90 -90" position="1 -2 -5"></a-entity>
      <a-entity mixin="jahrtext7" rotation="0 -90 -90" position="1 -2 -4"></a-entity>
      <a-entity mixin="jahrtext8" rotation="0 -90 -90" position="1 -2 -3"></a-entity>
      <a-entity mixin="jahrtext9" rotation="0 -90 -90" position="1 -2 -2"></a-entity>
      <a-entity mixin="jahrtext10" rotation="0 -90 -90" position="1 -2 -1"></a-entity>
	  </a-entity>

		<!-- Diagrammtext -->
		<a-entity id ="below-text" position="0 -2 -6.3" material="color: #eee" text="color: white; align: center; value: Customer; width: 6">
        </a-entity>
		<a-entity id ="left-text" position="-6.3 4 -6.3" rotation="0 0 90" material="color: #eee" text="color: white; align: center; value: Revenue; width: 6">
        </a-entity>
		<a-entity id ="more-left-text" position="-6 -1.5 -8.5" rotation="0 -90 0" material="color: #eee" text="color: white; align: center; value: Jahr; width: 6">
        </a-entity>
		<a-entity id ="title-text" position="0 9 -10" geometry="primitive: plane; width: 6; height: 1" material="color: #000" text="align: center; value: Total Yearly Customer revenue; width: 10">
        </a-entity>

			<!-- Diagrammline -->
				<a-entity
				line="start: -6 -0.5 -6.3; end: 6.3 -0.5 -6.3; color: white"
				line__1="start: -6 -0.5 -6.3; end: -6 -0.5 -11; color: white"
				line__2="start: -6 -0.5 -6.3; end: -6 7 -6.3; color:white">
				</a-entity>
		</a-entity>

<a-entity id="menu" position="-8.926 2.826 -5.661">
  <a-entity id="menuBackground" mixin="slice" slice9="height: 3; width: 2; color: #171717" render-order="menuBackground"></a-entity>
  <a-entity id="menuBack" mixin="pageButton" scale="1.5 1.5 1.5" position="-0.8 1.15 0.02" rotation="0 0 -90" onclick="document.location.reload(true)" render-order="menuItem"></a-entity>

  <!-- Main menu. -->
  <a-entity position ="0 0 0">
      <a-mixin id="buttonMain" mixin="button"></a-mixin>
      <a-entity id="title" text="value: Menu; color: #FAFAFA; width: 4; align: center" position="0 1.2 0.01"></a-entity>

    <a-entity class="buttons" layout="type: box; columns: 1; marginRow: -0.5" position="0.009 0.770 0.030">
      <a-entity id="menu1" mixin="buttonMain"
      text="value: Monthly Customer revenue; color: #F85333" ></a-entity>
      <a-entity id="menu2" mixin="buttonMain"
      text="value: Total Customer revenue
      in Maerz 2015; color: #48BAEA" ></a-entity>
      <a-entity id="menu3" mixin="buttonMain"
      text="value: Menu 3; color: #e0cb49"  ></a-entity>
      <a-entity id="menu4" mixin="buttonMain"
      text="value: Menu 4; color: #e0cb49"></a-entity>
    </a-entity>
  </a-entity>
</a-entity>
</a-scene>
</body>
</html>
