$(document).ready(function() {
    ambilData();

    function ambilData() {
        $.ajax({
            type: 'ajax',
            url: 'http://localhost/intan/welcome/tampilGaji',
            async: false,
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var baris = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    baris += '<tr>' +
                        '<td>' + data[i].id_gaji + '</td>' +
                        '<td>' + data[i].namaKaryawan + '</td>' +
                        '<td>' + data[i].alamatKaryawan + '</td>' +
                        '<td>' + data[i].jabatanKaryawan + '</td>' +
                        '<td>' + data[i].gajiPokok + '</td>' +
                        '<td>' + data[i].tunjanganMakan + '</td>' +
                        '<td>' + data[i].tunjanganPulsa + '</td>' +
                        '<td>' + data[i].bonusKaryawan + '</td>' +
                        '<td>' + data[i].totalTerima + '</td>' +
                        '<td style="text-align:right;">' +
                        '<a href="editGaji/' + data[i].id_gaji + '">| Edit |</a>' + '<hr>' +
                        '<a href="javascript:void(0);" class="btn btn - danger btn - sm deleteGaji " data-id_gaji="' + data[i].id_gaji + '">|Hapus|</a>' +
                        '</td>' +
                        '</tr>';
                }
                $('#listRecords').html(baris);
            }

        });
    }

    ambilDataJabatan();

    function ambilDataJabatan() {
        $.ajax({
            type: 'ajax',
            url: 'http://localhost/intan/welcome/tampilJabatan',
            async: false,
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var baris = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    baris += '<tr>' +
                        '<td>' + data[i].idJabatan + '</td>' +
                        '<td>' + data[i].namaJabatan + '</td>' +
                        '<td style="text-align:right;">' +
                        '<a href="javascript:void(0);" class="btn btn - danger btn - sm deleteJabatan " data-id_jabatan="' + data[i].idJabatan + '">|Hapus|</a>' +
                        '</td>' +
                        '</tr>';
                }
                $('#listJabatan').html(baris);
            }

        });
    }
    // save new employee record
    $('#saveEmpForm').submit('click', function() {
        var namaKaryawan = $('#namaKaryawan').val();
        var alamatKaryawan = $('#alamatKaryawan').val();
        var jabatanKaryawan = $('#jabatanKaryawan').val();
        var gajiPokok = $('#gajiPokok').val();
        var tunjanganMakan = $('#tunjanganMakan').val();
        var tunjanganPulsa = $('#tunjanganPulsa').val();
        var bonusKaryawan = $('#bonusKaryawan').val();
        var totalTerima = $('#totalTerima').val();
        $.ajax({
            type: "POST",
            url: "http://localhost/intan/welcome/simpanGaji",
            // dataType: "JSON",
            data: {
                'namaKaryawan': namaKaryawan,
                'alamatKaryawan': alamatKaryawan,
                'jabatanKaryawan': jabatanKaryawan,
                'gajiPokok': gajiPokok,
                'tunjanganMakan': tunjanganMakan,
                'tunjanganPulsa': tunjanganPulsa,
                'bonusKaryawan': bonusKaryawan,
                'totalTerima': totalTerima
            },
            success: function(data) {
                console.log(data);
                alert("Data Berhasil Di Simpan !");

                $('#namaKaryawan').val("");
                $('#alamatKaryawan').val("");
                $('#jabatanKaryawan').val("");
                $('#gajiPokok').val("");
                $('#tunjanganMakan').val("");
                $('#tunjanganPulsa').val("");
                $('#bonusKaryawan').val("");
                $('#totalTerima').val("");
            }
        });
        return false;
    });

    // save new employee record
    $('#formJabatan').submit('click ', function() {
        var namaJabatan = $('#namaJabatan').val();

        console.log("berhasi;");
        $.ajax({
            type: "POST",
            url: "http://localhost/intan/welcome/simpanJabatan",
            // dataType: "JSON",
            data: {
                'namaJabatan': namaJabatan
            },
            success: function(data) {
                console.log(data);
                alert("Data Berhasil Di Simpan !");
                $('#namaJabatan').val("");
                window.location = "kelolaJabatan";
            }
        });
        return false;
    });

    $('.deleteGaji').click(function() {
        var el = this;

        // Delete id
        var deleteid = $(this).data('id_gaji');

        var confirmalert = confirm("Yakin Hapus Dengan ID =" + deleteid);
        if (confirmalert == true) {
            // AJAX Request
            $.ajax({
                url: 'http://localhost/intan/welcome/hapusGaji',
                type: 'POST',
                data: { id_gaji: deleteid },
                success: function(response) {
                    alert("Data Berhasil Di Hapus")
                    window.location = "laporanGaji";
                }
            });
        }

    });

    $('.deleteJabatan').click(function() {
        var el = this;

        // Delete id
        var deleteidjabatan = $(this).data('id_jabatan');

        console.log(deleteidjabatan);
        var confirmalert = confirm("Yakin Hapus Dengan ID =" + deleteidjabatan);
        if (confirmalert == true) {
            // AJAX Request
            $.ajax({
                url: 'http://localhost/intan/welcome/hapusJabatan',
                type: 'POST',
                data: { idJabatan: deleteidjabatan },
                success: function(response) {
                    alert("Berhasil Di Hapus !");
                    window.location = "kelolaJabatan";
                }
            });
        }

    });
    // //
    // save edit record
    $('#editEmpForm').on('submit', function() {
        var id_gaji = $('#id_gaji').val();
        var namaKaryawan = $('#namaKaryawan').val();
        var alamatKaryawan = $('#alamatKaryawan').val();
        var jabatanKaryawan = $('#jabatanKaryawan').val();
        var gajiPokok = $('#gajiPokok').val();
        var tunjanganMakan = $('#tunjanganMakan').val();
        var tunjanganPulsa = $('#tunjanganPulsa').val();
        var bonusKaryawan = $('#bonusKaryawan').val();
        var totalTerima = $('#totalTerima').val();
        $.ajax({
            type: "POST",
            url: "http://localhost/intan/welcome/editGajiProses",
            // dataType: "JSON",
            data: {
                'id_gaji': id_gaji,
                'namaKaryawan': namaKaryawan,
                'alamatKaryawan': alamatKaryawan,
                'jabatanKaryawan': jabatanKaryawan,
                'gajiPokok': gajiPokok,
                'tunjanganMakan': tunjanganMakan,
                'tunjanganPulsa': tunjanganPulsa,
                'bonusKaryawan': bonusKaryawan,
                'totalTerima': totalTerima
            },
            success: function(data) {
                console.log(data);
                alert("Data Berhasil Di Edit !");
                window.location = "../laporanGaji";
            }
        });
        return false;
    });
});