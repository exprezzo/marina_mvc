<style type="text/css">
.escena{
	border-radius: 20px 20px 20px 20px;
	background: none repeat scroll 0 0 #E9EAEE;
    border: 2px solid #FFFFFF;
    box-shadow: 1px 2px 6px rgba(0, 0, 0, 0.5);
    margin: 0 auto;
   // padding: 44px 40px 20px;
    text-align: center;
    width: 1200px;
	height: 460px;
	//position: absolute;
	margin-top:50px;
}

.obj_escena{
	background: none repeat scroll 0 0 black;
	width: 40px;
	height: 40px;
-webkit-border-radius: 25px;
-moz-border-radius: 25px;
border-radius: 25px;
	position:absolute;
}

</style>
<script type='text/css'>
	window.addEvent('domready', function(){

  new Drag.Move($('drag'), {

    container: $('container'),

    droppables: $$('.drop'),

    onEnter: function(element, droppable){
      droppable.setStyle('background', '#E79D35');
    },

    onLeave: function(element, droppable){
      droppable.setStyle('background', '#6B7B95');
    },

    onDrop: function(element, droppable){
      if (droppable) droppable.setStyle('background', '#C17878');
    }

  });

});
</script>
<div class='escena'>
	<?php 
		foreach($this->objetos as $objeto){
			echo '<div class="obj_escena" style=\'margin-left:'.$objeto['x'].'px; margin-top:'.$objeto['y'].'px;\'></div>';			
		}
	?>
	<!--div class="obj_escena" style='margin-left:750px; margin-top:50px;'></div>
	<div class="obj_escena" style='margin-left:150px; margin-top:50px;'></div>
	<div class="obj_escena" style='margin-left: 400px; margin-top:140px;'></div>
	<div class="obj_escena" style='margin-left:220px;  margin-top:300px;'></div>
	<div class="obj_escena" style='margin-left:550px; margin-top:390px;'></div>
	<div class="obj_escena" style='margin-left: 880px; margin-top:290px;'></div-->
</div>