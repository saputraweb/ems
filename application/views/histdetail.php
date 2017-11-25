<?php include("header.php"); ?>
<?php
$jenkel=array("L"=>"Laki-laki","P"=>"Perempuan");
$ceklist=array("0"=>"Tidak","1"=>"Ya");
?>
<ol class="breadcrumb">
  <li><a href="/ems">Home</a></li>
  <li><a href="<?php echo site_url('histori');?>">Histori</a></li>
  <li class="active">Detail</li>
</ol>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Detail Klien</h3>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
			<tr>
				<td width="15%"><b>Nama</b></td>
				<td><?php echo $det->nama;?></td>
			</tr>
			<tr>
				<td width="15%"><b>Tempat Lahir</b></td>
				<td><?php echo $det->tempat_lahir;?></td>
			</tr>
			<tr>
				<td width="15%"><b>Tanggal Lahir</b></td>
				<td><?php echo $det->tgl_lahir;?></td>
			</tr>
			<tr>
				<td width="15%"><b>Jenis Kelamin</b></td>
				<td><?php echo $jenkel[$det->jenkel];?></td>
			</tr>
			<tr>
				<td width="15%"><b>riwayat</b></td>
				<td><?php echo $det->riwayat;?></td>
			</tr>
			<tr>
				<td colspan="2"><b>Adanya perasaan malu terhadap diri sendiri ? </b><?php echo $ceklist[$det->malu];?></td>
			</tr>
			<tr>
				<td colspan="2"><b>Adanya rasa bersalah terhadap hidupnya ? </b><?php echo $ceklist[$det->bersalah];?></td>
			</tr>
			<tr>
				<td colspan="2"><b>Klien sering merendahkan diri ? </b><?php echo $ceklist[$det->merendah];?></td>
			</tr>
			<tr>
				<td colspan="2"><b>Klien tampak menarik diri ? </b><?php echo $ceklist[$det->menarik];?></td>
			</tr>
			<tr>
				<td colspan="2"><b>Percaya diri kurang ? </b><?php echo $ceklist[$det->percaya];?></td>
			</tr>
			<tr>
				<td colspan="2"><b>Kecenderungan perilaku menciderai ? </b><?php echo $ceklist[$det->menciderai];?></td>
			</tr>
			<tr>
				<td colspan="2"><small>Data dibuat tanggal <?php echo $det->created_at;?><small></td>
			</tr>
			</table>
		</div>
	</div>
	
	</div>
	<div class="col-md-2"></div>
</div>
<?php include("footer.php"); ?>