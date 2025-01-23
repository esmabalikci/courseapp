<?php

const title="Popüler Kurslar";

$kurs1_başlık="Php Kursu";
$kurs1_altbaslik="Sıfırdan ileri seviye php ile web geliştirme";
$kurs1_resim="1.png";
$kurs1_yayıntarihi="01.01.2023";
$kurs1_yorumsayısı="100";
$kurs1_beğenisayısı="300";


$kurs2_başlık="Python Kursu";
$kurs2_altbaslik="Sıfırdan ileri seviye Python programlama";
$kurs2_resim="2.png";
$kurs2_yayıntarihi="03.03.2023";
$kurs2_yorumsayısı="200";
$kurs2_beğenisayısı="400";


$kurs3_başlık="Node.js Kursu";
$kurs3_altbaslik="Sıfırdan ileri seviye Node.js ile web geliştirme";
$kurs3_resim="3.png";
$kurs3_yayıntarihi="05.05.2023";
$kurs3_yorumsayısı="300";
$kurs3_beğenisayısı="500";

$kurs1_altbaslik=ucfirst(strtolower($kurs1_altbaslik));
$kurs2_altbaslik=ucfirst(strtolower($kurs2_altbaslik));
$kurs3_altbaslik=ucfirst(strtolower($kurs3_altbaslik));

$kurs1_altbaslik=substr($kurs1_altbaslik,0,50)."...";
$kurs2_altbaslik=substr($kurs2_altbaslik,0,50)."...";
$kurs3_altbaslik=substr($kurs3_altbaslik,0,50)."...";

$kurs1_url=str_replace([""],["-"],strtolower($kurs1_başlık));
$kurs2_url=str_replace([""],["-"],strtolower($kurs2_başlık));
$kurs3_url=str_replace([""],["-"],strtolower($kurs3_başlık));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <title>Document</title>
  
</head>
<body>
    <div class="container my-3">
        <h1 class="mb-3"><?php echo title; ?></h1>
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs1_resim; ?>" alt="Görsel" class="img-fluid rounded-start ">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs1_url; ?>">
                                <?php echo $kurs1_başlık; ?>
                            </a> 
                        </h5>
                        <p class="card-text"><?php echo $kurs1_altbaslik; ?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni:<?php echo $kurs1_beğenisayısı; ?>
                            </span>
                        
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum:<?php echo $kurs1_yorumsayısı; ?>
                            </span>
                        
                        </p>
                    </div>
                </div>
            </div>
        </div>    
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs2_resim; ?>" alt="Görsel" class="img-fluid rounded-start ">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs2_url; ?>">
                                <?php echo $kurs2_başlık; ?>
                            </a>
                        </h5>
                        <p class="card-text"><?php echo $kurs2_altbaslik; ?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni:<?php echo $kurs2_beğenisayısı; ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum:<?php echo $kurs2_yorumsayısı; ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs3_resim; ?>" alt="Görsel" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs3_url; ?>">
                                <?php echo $kurs3_başlık; ?>
                            </a>
                            
                        </h5>
                        <p class="card-text"><?php echo $kurs3_altbaslik; ?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni:<?php echo $kurs3_beğenisayısı; ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum:<?php echo $kurs3_yorumsayısı; ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        

</body>
</html>