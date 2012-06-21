<?
	function conector(){
		$link=mysql_connect("201.155.192.116","ccanedo","1029384756");
		mysql_select_db("iticarloscanedo");
		return $link;
	}
?>