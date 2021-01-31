
<div class="content">
  <h2>Selamat Datang Di Aplikasi Penggajian PT Intan</h2>
  <hr>
  <h3>=> Halaman Kelola Data Gaji</h3>
  <p id="pesan"></p>
<div class="container">
  <form id="saveEmpForm" method="POST">
  <div class="row">
    <div class="col-25">
      <label for="nama_depan">Nama Karyawan</label>
    </div>
    <div class="col-75">
      <input type="text" id="namaKaryawan" name="namaKaryawan" placeholder="Nama Karyawan..." required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Alamat</label>
    </div>

    <div class="col-75">
      <textarea id="alamatKaryawan" required name="alamatKaryawan" placeholder="Alamat Karyawan.." style="height:100px"></textarea>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="negara">Jabatan</label>
    </div>

    <div class="col-75">
      <select id="jabatanKaryawan" name="jabatanKaryawan" required>
      <option value="" selected disabled>--Pilih--</option>
      <?php foreach($jabatan as $jb):?>
        <option value="<?= $jb->namaJabatan?>"><?= $jb->namaJabatan?></option>
        <?php endforeach;?>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="nama_belakang">Gaji Pokok</label>
    </div>
    <div class="col-75">
      <input type="text" id="gajiPokok" name="gajiPokok" onkeyup="sum();" required placeholder="Gaji Pokok..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="nama_belakang">Tunjangan Makan</label>
    </div>
    <div class="col-75">
      <input type="text" id="tunjanganMakan" name="tunjanganMakan" onkeyup="sum();" required placeholder="Tunjangan Makan..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="nama_belakang">Tunjangan Pulsa</label>
    </div>
    <div class="col-75">
      <input type="text" id="tunjanganPulsa" name="tunjanganPulsa" onkeyup="sum();" required placeholder="Tunjangan Pulsa..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="nama_belakang">Bonus Karyawan</label>
    </div>
    <div class="col-75">
      <input type="text" id="bonusKaryawan" name="bonusKaryawan" onkeyup="sum();" required placeholder="Bonus Karyawan..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="nama_belakang">Total Terima Gaji</label>
    </div>
    <div class="col-75">
      <input type="text" id="totalTerima" name="totalTerima" required placeholder="Total Terima Gaji.." readonly>
    </div>
  </div>

  <div class="row">
    <button type="submit" id="simpan" style="background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;" >Simpan Data</button>
  </div>
  </form>
</div>
</div>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script>

      function sum() {
      var gaji = document.getElementById('gajiPokok').value;  
      var satu = document.getElementById('tunjanganMakan').value;
      var dua = document.getElementById('tunjanganPulsa').value;
      var tiga = document.getElementById('bonusKaryawan').value;
      var result = parseInt(satu) + parseInt(dua)+parseInt(tiga)+parseInt(gaji);
      if (!isNaN(result)) {
         document.getElementById('totalTerima').value = result;
      }
}

</script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/crud_operation.js'?>"></script>
</body>
</html>
