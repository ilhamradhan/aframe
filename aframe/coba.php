<html>
  <head>
    <meta charset="utf-8">
    <title>Datavisualisierung</title>
    <meta name="description" content="Hello, WebVR! ? A-Frame">
    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
	<script src="https://unpkg.com/aframe-event-set-component@4.0.0/dist/aframe-event-set-component.min.js"></script>
	<script src="https://rawgit.com/fernandojsg/aframe-teleport-controls/master/dist/aframe-teleport-controls.min.js"></script>
	<script src="https://unpkg.com/aframe-slice9-component/dist/aframe-slice9-component.min.js"></script>
    <script src="https://unpkg.com/aframe-layout-component@5.3.0/dist/aframe-layout-component.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="scripttest.js"></script>

  <script>
        AFRAME.registerComponent ('jsonreader',
        {

        init: function()
        {
        var sceneEl = document.querySelector('a-scene');
        var el = document.createElement('a-text');


        $.getJSON( "stack.json", function( response ) {

           console.log(response);

        //push data to items

          $.each( response.data, function( key, val ) {
            $('#jadah').append(`\
              <a-entity layout="type: box; margin: 1.6" scale="0.8 0.8" position="0 -1 -4">\
             <a-text value='${val.name} \n ${val.code_name} \n ${val.candidate_seats[0].candidate.name}' color="red" id="entity1-1"></a-text>\

              </a-entity>\
              `);

         });//end each

        }); //end getJSON

        }
        });
</script>
</head>

<body>
  <a-entity id="head" camera position="0 1.6 0" wasd-controls look-controls cursor="rayOrigin: mouse"></a-entity>

<a-scene background="color:#808080">
<a-entity layout="type: box; margin: 1.6" scale="0.8 0.8 0.8" position="0 -1 -4" color="FFFFFF" jsonreader>
   <a-text jsonreader></a-text>
   <a-text id="coba" value="... entry 2 ..."></a-text>
   <a-text value="... entry 3 ..."></a-text>
</a-entity>
<a-box rotation="0 45 0"></a-box>

</a-scene>

</body>
</html>
