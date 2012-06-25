<ul id="menu">
	<?php
		foreach($this->menus as $menu){			?>			
			<li id="<?php $this->getMenuState($menu['target'].'.html.php'); ?>"><a href="<?php echo RESOURCES_PATH.$menu['target']; ?>"><?php echo $menu['texto']; ?></a></li>		
  <?php } ?>	
</ul>