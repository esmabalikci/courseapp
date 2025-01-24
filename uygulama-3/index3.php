<?php

const title="Popüler Kurslar";

$kategoriler=array("Programlama","Web Geliştirme","Veri Analizi","Ofis Uygulamaları");

sort($kategoriler);

$kurslar=array(
    "1"=> array(
        "baslik"=>"Php Kursu",
        "altbaslik"=>"Sıfırdan ileri seviye php ile web geliştirme",
        "resim"=> "1.png",
        "yayıntarihi"=>"01.01.2023",
        "yorumsayısı"=>"100",
        "beğenisayısı"=>"300"

    ),
    "2"=> array(
        "baslik"=>"Python Kursu",
        "altbaslik"=>"Sıfırdan ileri seviye Python programlama",
        "resim"=> "2.png",
        "yayıntarihi"=>"03.03.2023",
        "yorumsayısı"=>"200",
        "beğenisayısı"=>"400"

    ),
    "3"=> array(
        "baslik"=>"Node.js Kursu",
        "altbaslik"=>"Sıfırdan ileri seviye Node.js ile web geliştirme",
        "resim"=> "3.png",
        "yayıntarihi"=>"05.05.2023",
        "yorumsayısı"=>"300",
        "beğenisayısı"=>"500"

    ),

);

$yeni_kurs=array(
    "baslik"=>"Django Kursu",
    "altbaslik"=>"Sıfırdan ileri seviye Django programlama",
    "resim"=> "1.png",
    "yayıntarihi"=>"01.01.2023",
    "yorumsayısı"=>"100",
    "beğenisayısı"=>"200"


);

$kurslar["4"]=$yeni_kurs;

$kurs1_altbaslik=ucfirst(strtolower($kurslar["1"]["altbaslik"]));
$kurs2_altbaslik=ucfirst(strtolower($kurslar["2"]["altbaslik"]));
$kurs3_altbaslik=ucfirst(strtolower($kurslar["3"]["altbaslik"]));

$kurs1_altbaslik=substr($kurs1_altbaslik,0,50)."...";
$kurs2_altbaslik=substr($kurs2_altbaslik,0,50)."...";
$kurs3_altbaslik=substr($kurs3_altbaslik,0,50)."...";

$kurs1_url=str_replace([""],["-"],strtolower($kurslar["1"]["baslik"]));
$kurs2_url=str_replace([""],["-"],strtolower($kurslar["2"]["baslik"]));
$kurs3_url=str_replace([""],["-"],strtolower($kurslar["3"]["baslik"]));
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
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group item-action"><?php echo $kategoriler[0]; ?></a>
                    <a href="#" class="list-group-item list-group item-action"><?php echo $kategoriler[1]; ?></a>
                    <a href="#" class="list-group-item list-group item-action"><?php echo $kategoriler[2]; ?></a>
                    <a href="#" class="list-group-item list-group item-action"><?php echo $kategoriler[3]; ?></a>
                </div>
            </div>
            <div class="col-9">
                <h1 class="mb-3"><?php echo title; ?></h1>
                <p class="lead">
                    <?php echo count($kategoriler); ?> kategoride <?php echo count($kurslar);?> kurs listelenmiştir.
                </p>

                <div class="card mb-3">
                <div class="row">
                <div class="col-4">
                    <img src="img/<?php echo $kurslar["1"]["resim"]; ?>" alt="Görsel" class="img-fluid rounded-start ">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs1_url; ?>">
                                <?php echo $kurslar["1"]["baslik"]; ?>
                            </a> 
                        </h5>
                        <p class="card-text"><?php echo $kurslar["1"]["altbaslik"]; ?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni:<?php echo $kurslar["1"]["beğenisayısı"]; ?>
                            </span>
                        
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum:<?php echo $kurslar["1"]["yorumsayısı"]; ?>
                            </span>
                        
                        </p>
                    </div>
                </div>
                </div>
                </div>    
                <div class="card mb-3">
                <div class="row">
                <div class="col-4">
                    <img src="img/<?php echo $kurslar["2"]["resim"]; ?>" alt="Görsel" class="img-fluid rounded-start ">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs2_url; ?>">
                                <?php echo $kurslar["2"]["baslik"]; ?>
                            </a>
                        </h5>
                        <p class="card-text"><?php echo $kurslar["2"]["altbaslik"]; ?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni:<?php echo $kurslar["2"]["beğenisayısı"]; ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum:<?php echo $kurslar["2"]["yorumsayısı"]; ?>
                            </span>
                        </p>
                    </div>
                </div>
                </div>
                </div>
                <div class="card mb-3">
                <div class="row">
                <div class="col-4">
                    <img src="img/<?php echo $kurslar["3"]["resim"]; ?>" alt="Görsel" class="img-fluid rounded-start">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs3_url; ?>">
                                <?php echo $kurslar["3"]["baslik"]; ?>
                            </a>
                            
                        </h5>
                        <p class="card-text"><?php echo $kurslar["3"]["altbaslik"]; ?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni:<?php echo $kurslar["3"]["beğenisayısı"]; ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum:<?php echo $kurslar["3"]["yorumsayısı"]; ?>
                            </span>
                        </p>
                    </div>
                </div>
                </div>
                </div>
                <div class="card mb-3">
                <div class="row">
                <div class="col-4">
                    <img src="img/<?php echo $kurslar["4"]["resim"]; ?>" alt="Görsel" class="img-fluid rounded-start">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs3_url; ?>">
                                <?php echo $kurslar["4"]["baslik"]; ?>
                            </a>
                            
                        </h5>
                        <p class="card-text"><?php echo $kurslar["4"]["altbaslik"]; ?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni:<?php echo $kurslar["4"]["beğenisayısı"]; ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum:<?php echo $kurslar["4"]["yorumsayısı"]; ?>
                            </span>
                        </p>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
        
        
    </div>
        

</body>
</html>