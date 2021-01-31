<!DOCTYPE html>
<html>
<head>
    <title><?= $title;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= base_url('assets/css/')?>style.css">
</head>
<body>
<?php   $url= $this->uri->segment(2); ?>
<div class="sidebar">
    <img src="https://www.gadjian.com/static/images/feature_salary.png" alt="">
  <a  class="<?php if($url=="beranda"){ echo "active";}?>" href="<?= base_url('welcome/beranda')?>">Beranda</a>
  <a  class="<?php if($url=="kelolaGaji"){ echo "active";}?>" href="<?= base_url('welcome/kelolaGaji')?>">Kelola Data Gaji</a>
  <a  class="<?php if($url=="kelolaJabatan"){ echo "active";}?>" href="<?= base_url('welcome/kelolaJabatan')?>">Kelola Data Jabatan</a>
  <a  class="<?php if($url=="laporanGaji"){ echo "active";}?>"href="<?= base_url('welcome/laporanGaji')?>">Laporan Data Gaji</a>
  <a  class="<?php if($url=="keluar"){ echo "active";}?>"href="<?= base_url('welcome')?>" onclick="return confirm('Yakin Mau Keluar')">Keluar</a>
</div>
