
<div class="content">
  <h2>Selamat Datang Di Aplikasi Penggajian PT Intan</h2>
  <hr>
  <h3>=> Halaman Laporan Gaji</h3>
  <a href="<?= base_url()?>Welcome/laporanGajiPrint" target="_blank" style="margin-left: 20px;background-color:cadetblue;color:black;border-radius:10px;height:30px">|| Print Data ||</a>
<div class="container" style="margin-top: 20px;">
<table class="table-zebra-striping data" id="data-gaji">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        <th>Gaji Pokok</th>
        <th>Tunjangan Makan</th>
        <th>Tunjangan Pulsa</th> 
        <th>Bonus</th> 
        <th>Total Terima</th> 
        <th>Aksi</th> 
    </thead>
    <tbody id="listRecords">                    
                </tbody>

                <tfoot>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        <th>Gaji Pokok</th>
        <th>Tunjangan Makan</th>
        <th>Tunjangan Pulsa</th> 
        <th>Bonus</th> 
        <th>Total Terima</th> 
        <th>Aksi</th> 
    </tfoot>

</table>

</div>
</div>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/crud_operation.js'?>"></script>
</body>
</html>
