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

<h2>DAFTAR PEGAWAI </h2>
<table class="dataGrid">
<tr>
	<td>NO</td><td>NIP</td><td>NAMA</td><td>ALAMAT</td><td>TANGGAL LAHIR</td><td>AGAMA</td>
</tr>
<?php 
$no=0;
foreach ($rows as $pegawai){
$no++;
?>
<tr>
<td><?php echo $no;?></td>
<td><?php echo $pegawai["nip"];?></td>
<td><?php echo $pegawai["nama"];?></td>
<td><?php echo $pegawai["alamat"];?></td>
<td><?php echo $pegawai["tanggal_lahir"];?></td>
<td><?php echo $pegawai["agama"];?></td>
</tr>
<?php } ?>
</table>