<?php

include 'function.php';

// Tambah Pendonor
if (isset($_POST['tambah_pendonor'])) {
    if (db_insert('pendonor', [
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
        setFlash("Berhasil menambahkan 1 pendonor baru");
        redirectBack();
    } else {
        setFlash("Gagal menambahkan data pendonor baru");
        redirectBack();
    }
}

// Ubah Pendonor
if (isset($_POST['ubah_pendonor'])) {
    if (db_update('pendonor', ['id' => $_GET['id']], [
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
        setFlash("Berhasil mengubah data pendonor");
        redirectBack();
    } else {
        setFlash("Gagal mengubah data pendonor");
        redirectBack();
    }
}

// Hapus Pendonor
if (isset($_GET['hapus_pendonor'])) {
    if (db_delete('pendonor', ['id' => $_GET['hapus_pendonor']])) {
        setFlash("Berhasil menghapus data pendonor");
        redirectBack();
    } else {
        setFlash("Gagal menghapus data pendonor");
        redirectBack();
    }
}

// Ubah Status Permohonan
if (isset($_POST['ubah_status'])) {
    if (db_update('permohonan', ['id' => $_POST['id']], ['status' => $_POST['ubah_status']])) {
        setFlash("Berhasil mengubah 1 status permohonan");
        redirectBack();
    } else {
        setFlash("Gagal mengubah status permohonan");
        redirectBack();
    }
}

// Tulis Artikel
if (isset($_POST['tulis_artikel'])) {
    if (db_insert('artikel', [
        'judul' => $_POST['judul'],
        'isi' => $_POST['isi'],
        'tanggal' => date("Y-m-d"),
    ])) {
        setFlash("Berhasil menambahkan 1 artikel baru");
        redirectBack();
    } else {
        setFlash("Gagal menambahkan artikel baru");
        redirectBack();
    }
}

// Ubah Artikel
if (isset($_POST['ubah_artikel'])) {
    if (db_update('artikel', ['id' => $_GET['id']], [
        'judul' => $_POST['judul'],
        'isi' => $_POST['isi'],
        'tanggal' => date("Y-m-d"),
    ])) {
        setFlash("Berhasil mengubah artikel");
        redirectBack();
    } else {
        setFlash("Gagal mengubah artikel");
        redirectBack();
    }
}

// Hapus Artikel
if (isset($_GET['hapus_artikel'])) {
    if (db_delete('artikel', ['id' => $_GET['hapus_artikel']])) {
        setFlash("Berhasil menghapus 1 artikel");
        redirectBack();
    } else {
        setFlash("Gagal menghapus 1 artikel");
        redirectBack();
    }
}


// Tambah Artikel Aktif
if (isset($_POST['tambah_artikel_aktif'])) {
    if (db_update('artikel', ['id' => $_GET['id']], [
        'title' => $_POST['title'],
        'deskripsi' => $_POST['deskripsi'],
        'status' => '1',
    ])) {
        setFlash("Berhasil mengubah status artikel");
        redirectBack();
    } else {
        setFlash("Gagal mengubah status artikel");
        redirectBack();
    }
}

// Hapus Artikel Aktif
if (isset($_GET['nonaktifkan_artikel'])) {
    if (db_update('artikel', ['id' => $_GET['nonaktifkan_artikel']], [
        'status' => 0,
    ])) {
        setFlash("Berhasil menonaktifkan status artikel");
        redirectBack();
    } else {
        setFlash("Gagal menonaktifkan status artikel");
        redirectBack();
    }
}


// Hapus Permohonan Pendonor
if (isset($_GET['hapus_permohonan_pendonor'])) {
    if (db_delete('daftar', ['id' => $_GET['hapus_permohonan_pendonor']])) {
        setFlash("Berhasil menghapus data permohonan pendonor");
        redirectBack();
    } else {
        setFlash("Gagal menghapus data permohonan pendonor");
        redirectBack();
    }
}

// Tambah Permohonan Pendonor
if (isset($_GET['tambah_permohonan_pendonor'])) {
    $p = db_find('daftar', ['id' => $_GET['tambah_permohonan_pendonor']]);
    if (db_insert('pendonor', [
        'nama' => $p->nama,
        'alamat' => $p->alamat,
        'tempat_lahir' => $p->tempat_lahir,
        'tanggal_lahir' => $p->tanggal_lahir,
        'status' => $p->status,
        'jenis_kelamin' => $p->jenis_kelamin,
        'golongan_darah' => $p->golongan_darah,
        'riwayat_penyakit' => $p->riwayat_penyakit,
        'no_telp' => $p->no_telp,
        'fakultas' => $p->fakultas,
    ])) {
        setFlash("Berhasil menambahkan 1 data pendonor baru");
        if (db_delete('daftar', ['id' => $p->id])) {
            setFlash("Berhasil menghapus data permohonan pendonor");
        } else {
            setFlash("Gagal menghapus data permohonan pendonor");
        }
        redirectBack();
    } else {
        setFlash("Gagal menambahkan data pendonor baru");
        redirectBack();
    }
}

// Tambah Pengguna
if (isset($_POST['tambah_pengguna'])) {
    if (db_insert('pengguna', [
        'nama' => $_POST['nama'],
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'role' => $_POST['role'],
    ])) {
        setFlash('Berhasil Menambahkan Pengguna Baru');
        redirectBack();
    } else {
        setFlash('Gagal Menambahkan Pengguna Baru');
        redirectBack();
    }
}

// Hapus Pengguna
if (isset($_GET['hapus_pengguna'])) {
    if (db_delete('pengguna', ['id' => $_GET['hapus_pengguna']])) {
        setFlash('Berhasil menghapus 1 Pengguna');
        redirectBack();
    } else {
        setFlash('Gagal menghapus 1 Pengguna');
        redirectBack();
    }
}

// Reset Password Pengguna
if (isset($_GET['reset_password_pengguna'])) {
    $p = db_find('pengguna', ['id' => $_GET['reset_password_pengguna']]);
    if (db_update('pengguna', ['id' => $p->id], ['password' => $p->username])) {
        setFlash('Berhasil mereset password 1 Pengguna');
        setFlash('Password baru adalah : ' . $p->username);
        redirectBack();
    } else {
        setFlash('Gagal mereset password 1 Pengguna');
        redirectBack();
    }
}

// Ubah Profil
if (isset($_POST['ubah_profil'])) {
    if (user()->password != $_POST['old_password']) {
        setFlash('Password lama tidak sesuai');
        redirectBack();
    }

    if (empty($_POST['password'])) {
        $password = user()->password;
    } else {
        $password = $_POST['password'];
    }

    if (db_update('pengguna', ['id' => user()->id], [
        'nama' => $_POST['nama'],
        'password' => $password,
    ])) {
        setFlash('Berhasil mengubah profil');
        redirectBack();
    } else {
        setFlash('Gagal mengubah profil');
        redirectBack();
    }
}
