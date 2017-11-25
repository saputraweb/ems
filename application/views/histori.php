<?php include("header.php"); ?>
<ol class="breadcrumb">
  <li><a href="/ems">Home</a></li>
  <li class="active">Histori</li>
</ol>
<table class="table table-bordered" id="datatable">
<thead>
    <tr>
        <th>Tanggal Input</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jns. Kelamin</th>
        <th>#</th>
    </tr>
</thead>
<tbody>
    <?php echo $hasil; ?>
</tbody>
</table>
<?php include("footer.php"); ?>