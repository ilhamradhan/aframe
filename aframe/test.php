<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
  <script>

  $(document).ready(function(){
    $("a-plane").click(function(){
      $("#klik").load("monat.php #diagram-monat");
      alert( "Load was performed." );
    });
  });

  </script>
</head>
<body>
  <a-scene background="color: #808080">
      <a-entity id="head" camera position="0 1.6 0" wasd-controls look-controls cursor="rayOrigin: mouse"></a-entity>
      <a-plane id="klik" width="4" position="0 0 -5"> </a-box>
  </a-scene>


  <!-- <div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

  <button>Get External Content</button> -->

</body>
</html>
