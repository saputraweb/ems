<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Hasil</h3>
		</div>
		<div class="panel-body">

        <?php $satu = explode(".",$lissatu); ?>
        
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
                <td> <?php echo $satu[0];?>
                </td>
            </tr>
            <tr>
                <td>Duduk ke berbaring</td>
                <td>
                <?php echo $satu[1];?>
                </td>
            </tr>
            <tr>
                <td>Duduk ke berdiri</td>
                <td>
                <?php echo $lisdua;?>
                </td>
            </tr>
            <tr>
                <td>Berdiri</td>
                <td>
                <?php echo $listiga;?>
                </td>
            </tr>
            <tr>
                <td>Berjalan</td>
                <td>
                <?php echo $lisempat;?>
                </td>
            </tr>
            <tr>
                <td>Kemampuan berjalan (6 meter)</td>
                <td>
                <?php echo $lislima;?>
                </td>
            </tr>
            <tr>
                <td>Kemampuan menjangkau</td>
                <td>
                <?php echo $lisenam;?>
                </td>
            </tr>
           
        </tbody>
        </table>
       <?php if( $hasil->total < 10 ){?>
        <h2>Ketergantungan penuh</h2>
        <ul>
        <li>Transfer
            <ol>
            <li>Tentukan tingkat kesadaran dan kemampuan pasien</li>
            <li>Tentukan alat yang akan digunakan untuk membantu pasien berpindah seperti kursi roda</li>
            <li>Tentukan jumlah orang yang akan membantu memindahkan pasien</li>
            <li>Komunikasikan kepada pasien bahwa pasien akan berpindah posisi</li>
            <li>Pastikan lokasi yang akan menjadi tujuan aman untuk pasien</li>
            <li>Bantu pasien melakukan ambulasi, gunakan tubuh perawat sebagai penopang</li>
            <li>Tempatkan pasien ke tempat baru dengan aman</li>
            <li>Evaluasi keadaan pasien</li>
            </ol>
        </li>
        <li>Toileting
            <ol>
            <li>Jaga privasi pasien</li>
            <li>Komunikasikankepadapasiententangtindakantoileting</li>
            <li>Lepaskan pakaian bawah pasien</li>
            <li>Bantu pasien melakukan eliminiasi urin atau feses dengan menggunakan pispot atau urinal</li>
            <li>Bantu pasien membersihkan genitalnya dengan cara membasuh dengan air atau tissue</li>
            <li>Ganti pakaian pasien jika dibutuhkan</li>
            <li>Pantau integritas kulit pasien</li>
            </ol>
        </li>
        <li>Dressing
            <ol>
            <li>Jaga privasi pasien</li>
            <li>Bantu pasien memelih baju yang akan digunakan</li>
            <li>Bantu pasien menggunakan pakaian</li>
            <li>antu pasien mengkancingkan pakaian</li>
            <li>Bantu pasien menyisir rambut</li>
            </ol>
        </li>
        </ul>
        <?php } ?>
        <?php if( $hasil->total >= 10 && $hasil->total <= 13 ){?>
            <h2>Ketergantungan sebagian</h2>
        <ul>
        <li>Transfer
            <ol>
            <li>Tentukan kemampuan pasien</li>
            <li>Tentukan tingkat kesadaran pasien</li>
            <li>Tentukan jenis alat bantu transfer yang akan digunakan seperti kursi roda, walker, tongkat dll</li>
            <li>Letakkan alat bantu didekat pasien</li>
            <li>Bantu pasien berdiri atau bangun dari tempat tidur</li>
            <li>Patau keamanan dan keselamatan pasien selama ambulasi</li>
            </ol>
        </li>
        <li>Toileting
            <ol>
            <li>Jaga privasi pasien</li>
            <li>Bantu pasien menuju toilet</li>
            <li>Pantau respon pasien</li>
            <li>Bantu pasien menyiram toilet</li>
            <li>Anjurkan pasien rutin BAB dan BAK</li>
            <li>Pantau keamanan tempat pasien ke kamar mandi</li>
            </ol>
        </li>
        <li>Dressing
            <ol>
            <li>Jaga privasi pasien</li>
            <li>Bantu pasien memilih baju yang akan digunakan</li>
            <li>Dekatkan baju, alat make up, sisir didekat pasien</li>
            <li>Bantu pasien mengikat atau mengkancing baju jika dibutuhka</li>
            </ol>
        </li>
        </ul>
        <?php } ?>
        <?php if( $hasil->total >= 14 ){?>
            <h2>Independent</h2>
            <ol>
            <li>Ajarkan pasien strategi yang dapat digunakan untuk mempertahankan perilaku sehat untuk menghindari kondisi sakit</li>
            <li>Gunakan metode diskusi kelompok dan role play untuk meningkatkan perilaku sehat</li>
            </ol>
        <?php } ?>
        </div
</div>