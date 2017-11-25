<?php include("header.php"); ?>
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li class="active">Form</li>
</ol>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
<form class="form-horizontal" action="form/simpandata" method="post" data-toggle="validator" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama" required data-required-error="Nama tidak boleh kosong">
	  <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" name="tempat_lahir" class="form-control" id="inputEmail3" placeholder="Tempat Lahir" required data-required-error="Tempat Lahir tidak boleh kosong">
		<div class="help-block with-errors"></div>
	</div>
  </div>
  <div class="form-group">
  
    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Lahir</label>
    <div class="col-sm-10">
     <div id="sandbox-container">
		<div class="input-group date">
			<input type="text" name="tgl_lahir" class="form-control" placeholder="dd.mm.yyyy" required data-required-error="Tanggal Lahir tidak boleh kosong">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-calendar" aria-hidden="true"></i></span>
		</div>
	</div>
	<div class="help-block with-errors"></div>
	</div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <select name="jenkel" id="" class="form-control"  required data-required-error="Jenis kelamin harus dipilih">
		<option value="">Pilih Jenis Kelamin</option>
		<option value="L">Laki-laki</option>
		<option value="P">Perempuan</option>
	  </select>
	  <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Riwayat Penyakit</label>
    <div class="col-sm-10">
	<textarea name="riwayat" id="" cols="30" rows="10" class="form-control" placeholder="Riwayat Penyakit" required data-required-error="Riwayat Penyakit tidak boleh kosong"></textarea>
      
		<div class="help-block with-errors"></div>
	</div>
  </div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <table class="table table-bordered">
      	<thead>
			<tr>
				<th colspan="4">
				Tanda gejala HDR ( Checklist ya / tidak )
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Adanya perasaan malu terhadap diri sendiri</td>
				<td>
					<input type="radio" name="malu" id="" value="1" required />Ya
				</td>
				<td>
					<input type="radio" name="malu" id="" value="0" required />Tidak
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Adanya rasa bersalah terhadap hidupnya</td>
				<td>
					<input type="radio" name="bersalah" id="" value="1" required />Ya
				</td>
				<td>
					<input type="radio" name="bersalah" id="" value="0" required />Tidak
				</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Klien sering merendahkan diri</td>
				<td>
					<input type="radio" name="merendah" id="" value="1" required />Ya
				</td>
				<td>
					<input type="radio" name="merendah" id="" value="0" required />Tidak
				</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Klien tampak menarik diri</td>
				<td>
					<input type="radio" name="menarik" id="" value="1" required />Ya
				</td>
				<td>
					<input type="radio" name="menarik" id="" value="0" required />Tidak
				</td>
			</tr>
			<tr>
				<td>5</td>
				<td>Percaya diri kurang</td>
				<td>
					<input type="radio" name="percaya" id="" value="1" required />Ya
				</td>
				<td>
					<input type="radio" name="percaya" id="" value="0" required />Tidak
				</td>
			</tr>
			<tr>
				<td>6</td>
				<td>Kecenderungan perilaku menciderai</td>
				<td>
					<input type="radio" name="menciderai" id="" value="1" required />Ya
				</td>
				<td>
					<input type="radio" name="menciderai" id="" value="0" required />Tidak
				</td>
			</tr>
		</tbody>
      </table>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" value="Simpan" class="btn btn-primary" /> <a href="/" class="btn btn-danger">Batal</a>
    </div>
  </div>
</form>
</div>
	<div class="col-md-2"></div>
</div>
<?php include("footer.php"); ?>