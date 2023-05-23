<?php
    $data['nama']        = "Arthawan";
    $data['alamat']      = "Jl. Ayani Utara";
    $data['prodi']       = "Teknik Informatika";
    $data['jurusan']     = "Manajemen Data dan Informasi";
    $data['tgl_lahir']   = "2004-03-17";


    echo json_encode($data);
    header("Content-Type: application/json; charset=utf-12");