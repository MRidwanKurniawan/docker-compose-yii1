<style>
table.dataGrid
{
border-collapse:collapse;
border:1px solid black;
width:100;
#font-size:8px;
}
table.dataGrid td {
border:1px solid black;
padding:5px 5px 5px 5px;
}
</style>

<h2>DAFTAR KOTA KABUPATEN</h2>
<table class="dataGrid">
<tr>
	<td>NO</td><td>KOTA</td><td>PROPINSI</td>
</tr>
<?php 
$no=0;
foreach ($rows as $kota){
$no++;
?>
<tr>
<td><?php echo $no;?></td>
<td><?php echo $kota["nama_kota"];?></td>
<td><?php echo $kota["propinsi"];?></td>
</tr>
<?php } ?>
</table>