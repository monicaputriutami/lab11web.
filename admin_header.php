<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
    <div id="container">
    <header>
        <h1>Admin Portal Berita</h1>
 </header>
 <nav>
    <a href="<?= base_url('/');?>">DASHBOARD</a>
    <a href="<?= base_url('/artikel');?>">ARTIKEL</a>
    <a href="<?= base_url('/admin/artikel/add');?>">TAMBAH ARTIKEL</a>
 </nav>
 <section id="wrapper">
    <section id="main">