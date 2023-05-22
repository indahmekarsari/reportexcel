<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM SISWA BARU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {
            color: #FF0000;
        }
        body {
            padding-top: 7%;
            padding-left: 28%;
            background: #393E41;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    DATA SISWA BARU
                </div>
                <div class="card-body">
                    <form method="post" action="simpansiswa.php">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" id="Nama" class="form-control class=" warning">
                            </div>
                            </div> <br>
                            <div class="form-group row">
                        <label for="jkelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="radio" name="jkelamin" value="Laki Laki">Laki-Laki</label>
                            <input type="radio" name="jkelamin" value="Perempuan">Perempuan</label> 
                            
                        </div>
                        </div> <br>
                        <div class="form-group row">
                            <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-10">
                                <input type="text" name="nisn" id="nisn" class="form-control class=" warning">
                            </div>
                            </div> <br>
                        <div class="form-group row">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" name="nik" id="nik" class="form-control class=" warning">
                            </div>
                            </div> <br>
                        <div class="form-group row">
                            <label for="tempattgllahir" class="col-sm-2 col-form-label">Tempat Tgl Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" name="tempattgllahir" id="tempattgllahir" class="form-control class=" warning">
                            </div>
                        </div> <br>
                        <div class="form-group row">
                            <label for="Agama" class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="agama">
                            <option value=""></option>
                            <option value="Islam"> Islam </option>
                            <option value="Kristen/Protestan"> Kristen/Protestan </option>
                            <option value="Katholik"> Katholik </option>
                            <option value="Hindu"> Hindu </option>
                            <option value="Budha"> Budha </option>
                            <option value="Konghucu"> Konghucu </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                    </div> <br> <br>
                    <div class="form-group row">
                            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                                <input type="text" name="kelas" id="kelas" class="form-control class=" warning">
                            </div>
                            </div> <br> <br>    
                        <div class="form-group row"> 
                            <label for="nohp" class="col-sm-2 col-form-label">Nomor Hp</label>
                            <div class="col-sm-10">
                                <input type="text" name="nohp" id="nohp" class="form-control class=" warning">
                            </div>
                        </div> <br> <br>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label"> Email Pribadi</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" id="email" class="form-control class=" warning">
                            </div>
                        </div> <br> <br>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" id="alamat" class="form-control class=" warning">
                            </div>
                        </div> <br> <br>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                <span><a href="cetakdata.php" class="btn btn-danger">Batal</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>