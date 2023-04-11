<?php

include 'function.php';

// Tambah Pendonor
if (isset($_POST['tambah_pendonor'])) {
    if (db_insert('pendonor', [
        'nama' => $_POST['nama'],
        'alamat' => $_POST['alamat'],
        'tanggal_lahir' => $_POST['tanggal_lahir'],
        'status' => $_POST['status'],
        'jenis_kelamin' => $_POST['jenis_kelamin'],
        'golongan_darah' => $_POST['golongan_darah'],
        'riwayat_penyakit' => $_POST['riwayat_penyakit'],
        'fakultas' => $_POST['fakultas'],
    ])) {
        setFlash("Berhasil menambahkan 1 pendonor baru");
        redirectBack();
    } else {
        setFlash("Gagal menambahkan data pendonor baru");
        redirectBack();
    }
}

// Tambah Permohonan
if (isset($_POST['tambah_permohonan'])) {
    if (db_count('pengguna', ['username' => $_POST['username']])) {
        setFlash('Username sudah pernah digunakan');
        redirectBack();
    }
    if (db_insert('permohonan', [
        'nama_pasien' => $_POST['nama_pasien'],
        'umur' => $_POST['umur'],
        'rumah_sakit' => $_POST['rumah_sakit'],
        'golongan_darah' => $_POST['golongan_darah'],
        'kuota' => $_POST['kuota'],
        'nama_wali' => $_POST['nama_wali'],
        'no_telp' => $_POST['no_telp'],
        'hubungan' => $_POST['hubungan'],
        'tanggal' => date("Y-m-d"),
    ])) {
        setFlash("Berhasil mengirim permohonan");
        setFlash("Silahkan tunggu balasan dari Mae Donor Lewat Nomor Telepon/Whatsapp anda");
        redirectBack();
    } else {
        echo 'gagal';
        die;
        setFlash("Gagal mengirim permohonan");
        redirectBack();
    }
}

// Proses Login
if (isset($_POST['login'])) {
    if (db_count('pengguna', ['username' => $_POST['username']]) && db_count('pengguna', ['password' => $_POST['password']])) {
        $_SESSION['login_maedonor'] = db_find('pengguna', ['username' => $_POST['username']])->id;
        redirect('admin');
    }
    redirectBack();
}


// Daftar Pendonor
if (isset($_POST['daftar_pendonor'])) {
    if (db_insert('daftar', [
        'nama' => $_POST['nama'],
        'alamat' => $_POST['alamat'],
        'tempat_lahir' => $_POST['tempat_lahir'],
        'tanggal_lahir' => $_POST['tanggal_lahir'],
        'status' => $_POST['status'],
        'jenis_kelamin' => $_POST['jenis_kelamin'],
        'golongan_darah' => $_POST['golongan_darah'],
        'riwayat_penyakit' => $_POST['riwayat_penyakit'],
        'no_telp' => $_POST['no_telp'],
        'fakultas' => $_POST['fakultas'],
    ])) {
        setFlash("Berhasil mengirimkan permohonan pendonor baru");
        redirectBack();
    } else {
        setFlash("Gagal mengirimkan permohonan pendonor baru");
        redirectBack();
    }
}
