<table>
<tr>
	<th width="30">No</th>
	<th width="200">KOTA</th>
	<th width="300">PROPINSI</th>
	
</tr>
<?php
	foreach ($model as $model1){
?>
<tr>
	<td><?php echo $model1['id']?></td>
	<td><?php echo $model1['nama_kota']?></td>
	<td><?php echo $model1['propinsi']?></td>
</tr>
<?php
}
?>
</table>