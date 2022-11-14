<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Web Prog II | Merancang Template sederhana dengan codeigniter</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/stylebuku.css">
    <title>Web Programing II | Merancang templat sederhana</title>
</head>

<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat Template Sederhana dengan CodeIgniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url() ?>web">Home</a></li>
                    <li><a href="<?php echo base_url() ?>web/about">About</a></li>
                    <li><a href="<?php echo base_url() ?>web/galeri">Galeri</a></li>
                    <li><a href="<?php echo base_url() ?>web/lihatBuku">Buku</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>