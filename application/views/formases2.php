<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Form</h3>
		</div>
		<div class="panel-body">

        <form action="<?php echo site_url('form/simpanassest');?>" method="post">
            <input type="hidden" name="id_pasien" value="<?php echo $det->id_pasien;?>">
        
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tugas</th>
                <th>Kriteria</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Berbaring ke duduk</td>
                <td>
                    <select name="berbaring" id="" required>
                        <option value="">Pilih</option>
                        <?php echo $lissatu;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Duduk ke berbaring</td>
                <td>
                    <select name="duduk" id="" required>
                        <option value="">Pilih</option>
                        <?php echo $lissatu;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Duduk ke berdiri</td>
                <td>
                    <select name="dukberdiri" id="" required>
                        <option value="">Pilih</option>
                        <?php echo $lisdua;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Berdiri</td>
                <td>
                    <select name="berdiri" id="" required>
                        <option value="">Pilih</option>
                        <?php echo $listiga;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Berjalan</td>
                <td>
                    <select name="berjalan" id="" required>
                        <option value="">Pilih</option>
                        <?php echo $lisempat;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kemampuan berjalan (6 meter)</td>
                <td>
                    <select name="meter" id="" required>
                        <option value="">Pilih</option>
                        <?php echo $lislima;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kemampuan menjangkau</td>
                <td>
                    <select name="mejangkau" id="" required>
                        <option value="">Pilih</option>
                        <?php echo $lisenam;?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                <input type="submit" value="Simpan" class="btn btn-primary" />
                </td>
            </tr>
        </tbody>
        </table>
       
        </form>
        </div
</div>