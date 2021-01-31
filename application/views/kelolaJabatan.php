
<div class="content">
  <h2>Selamat Datang Di Aplikasi Penggajian PT Intan</h2>
  <hr>
  <h3>=> Halaman Kelola Data Jabatan</h3>
<div class="container">
  <form id="formJabatan" method="post">
  <div class="row">
    <div class="col-25">
      <label for="nama_depan">Nama Jabatan</label>
    </div>
    <div class="col-75">
      <input type="text" id="namaJabatan" name="namaJabatan" required placeholder="Nama Jabatan...">
    </div>
  </div>
  <div class="row">
  <button type="submit" id="simpan" style="background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    margin-top:15px;" >Simpan Data</button>
  </div>
  </form>
 <div class="container" style="margin-top: 20px;">
<table class="table-zebra-striping data" id="data-gaji">
    <thead>
        <th>No</th>
        <th>Nama Jabatan</th>
        <th>Aksi</th> 
    </thead>
    <tbody id="listJabatan">                    
                </tbody>

</table>

</div>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/crud_operation.js'?>"></script>
</body>
</html>
