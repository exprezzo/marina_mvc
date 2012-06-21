<? session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?
	require_once('conectar.php');
	$link=conector();
	$band=0;

	
	if($_GET['vid']>0)
	{
	$sql="delete from horarios where id=$_GET[vid]";
	mysql_query($sql,$link);
	}
		
	if($band<=0){
				$sql="select dia,horarios.id,H.hora as Hora_Inicio,H2.hora as Hora_Final from dias inner join horarios on dias.id=horarios.id_dia	inner join horas as H on horarios.id_horainicio=H.id inner join horas as H2 on horarios.id_horafinal=H2.id where dias.id=1 and horarios.aula=$_SESSION[aula];";
		$res3=mysql_query($sql,$link);
		$band=1;
	}
	if(isset ($_POST['lstDiashor']))
	{
		$sql="select dia,horarios.id,H.hora as Hora_Inicio,H2.hora as Hora_Final from dias inner join horarios on dias.id=horarios.id_dia	inner join horas as H on horarios.id_horainicio=H.id inner join horas as H2 on horarios.id_horafinal=H2.id where dias.id=$_POST[lstDiashor] and horarios.aula=$_SESSION[aula]";
		$res3=mysql_query($sql,$link);
		$band=1;
	}


?>
<body>
<form id="form2" name="form2" method="post" action="">
  <table width="100%"  border="1">
    <tr>
      <th colspan="3" scope="col">Horarios</th>
    </tr>
    <tr>
      <td colspan="3"><select name="lstDiashor"  onchange="document.form2.submit();">
        <?
			$sql="select * from dias";
			$res2=mysql_query($sql,$link);
			while($reg2=mysql_fetch_object($res2)){
		?>
        <option value="<?=$reg2->id ?>" <? if($_POST['lstDiashor']==$reg2->id) echo "selected";?> >
          <?=$reg2->dia ?>
          </option>
        <? 
			}
		?>
      </select></td>
    </tr>
    <tr>
      <td height="32" colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td width="36%" height="39">Hora Inicio </td>
      <td width="37%">Hora final </td>
      <td width="27%"></td>
    </tr>
    <?
		if($band==1)
		{
			while($reg3=mysql_fetch_object($res3))
			{
				echo "<tr>";
				echo "<td> $reg3->Hora_Inicio</td>";
				echo "<td> $reg3->Hora_Final</td>";
				echo "<td> <a href='confdia.php?vid=$reg3->id'> Eliminar </a> </td>";
			   echo "</tr>";
			}
		}

		?>
  </table>
</form>
</body>
</html>