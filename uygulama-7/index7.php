<?php

const title="Popüler Kurslar";

$kategoriler=array(
array("kategori_adi" => "Programlama","aktif"=>true),    
array("kategori_adi" => "Web Geliştirme","aktif"=>false),
array("kategori_adi" => "Veri Analizi","aktif"=>false),
array("kategori_adi" => "Ofis Uygulamaları","aktif"=>false),
array("kategori_adi" => "Mobil Uygulamalar","aktif"=>false)

);
$kurslar=array(
    "1"=> array(
        "baslik"=>"Php Kursu",
        "altbaslik"=>"Sıfırdan ileri seviye php ile web geliştirme ",
        "resim"=> "1.png",
        "yayıntarihi"=>"01.01.2023",
        "yorumsayısı"=> 0,
        "beğenisayısı"=>10,
        "onay"=>true

    ),
    "2"=> array(
        "baslik"=>"Python Kursu",
        "altbaslik"=>"Sıfırdan ileri seviye Python programlama",
        "resim"=> "2.png",
        "yayıntarihi"=>"03.03.2023",
        "yorumsayısı"=>10,
        "beğenisayısı"=>0,
        "onay"=>true

    ),
    "3"=> array(
        "baslik"=>"Node.js Kursu",
        "altbaslik"=>"Sıfırdan ileri seviye Node.js ile web geliştirme",
        "resim"=> "3.png",
        "yayıntarihi"=>"05.05.2023",
        "yorumsayısı"=>10,
        "beğenisayısı"=>20,
        "onay"=>true

    ),
    "4"=>array(
        "baslik"=>"Django Kursu",
        "altbaslik"=>"Sıfırdan ileri seviye Django programlama",
        "resim"=> "1.png",
        "yayıntarihi"=>"01.01.2023",
        "yorumsayısı"=>0,
        "beğenisayısı"=>5,
        "onay"=>false
    )

);

function kursEkle(&$kurslar,string $baslik,string $altbaslik,string $resim ,string $yayıntarihi,
int $yorumsayısı=0 ,int $beğenisayısı=0 ,bool $onay=true){
    $yeni_kurs[count($kurslar)+1] = array(
        "baslik"=>$baslik,
        "altbaslik"=>$altbaslik,
        "resim"=> $resim,
        "yayıntarihi"=>$yayıntarihi,
        "yorumsayısı"=>$yorumsayısı,
        "beğenisayısı"=>$beğenisayısı,
        "onay"=>$onay

    );
    
    $kurslar=array_merge($kurslar,$yeni_kurs); //dizileri birleştirmek için kullanılan fonksiyon


}

kursEkle($kurslar,"C Kursu","Sıfırdan ileri seviye C programlama","4.png","01.04.2024",5,8);

function urlDuzenle($altbaslik){
    return str_replace([""],["-"],strtolower($kurslar["baslik"]));
}


function kısaAcıklama($altbaslik){
    if (strlen($altbaslik)>50){
        return substr($altbaslik,0,50)."..." ;
    }else{
        return $altbaslik;
    }
        
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <title>Kurslar</title>
  
</head>
<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <?php for($i=0;$i<count($kategoriler);$i++): ?>
                    <a 
                        href="#" class="list-group-item list-group item-action <?php echo ($kategoriler[$i]["aktif"]) ? "active": ""?>">
                        <?php echo $kategoriler[$i]["kategori_adi"]; ?>
                    </a>
                    <?php endfor ?>
                </div>
            </div>
            <div class="col-9">
                <h1 class="mb-3"><?php echo title; ?></h1>
                <p class="lead">
                    <?php echo count($kategoriler); ?> kategoride <?php echo count($kurslar);?> kurs listelenmiştir.
                </p>
                <?php foreach($kurslar as $key=>$kurs): ?>
                <?php  if($kurs["onay"]):?>
                <div class="card mb-3">
                <div class="row">
                <div class="col-4">
                    <img src="img/<?php echo $kurs["resim"]; ?>" alt="Görsel" class="img-fluid rounded-start ">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo urlDuzenle($kurs["baslik"]); ?>">
                                <?php echo $kurs["baslik"]; ?>
                            </a> 
                        </h5>
                        <p class="card-text">
                            <?php echo kısaAcıklama($kurs["altbaslik"]) ?>
                        </p>
                        <p>
                            <?php if($kurs["beğenisayısı"]> 0): ?>
                            <span class="badge rounded-pill text-bg-primary">
                                <?php echo $kurs["beğenisayısı"]; ?> Beğeni
                            </span>
                            <?php endif ?>

                            <?php if($kurs["yorumsayısı"]> 0): ?>
                            <span class="badge rounded-pill text-bg-danger">
                                <?php echo $kurs["yorumsayısı"]; ?> Yorum
                            </span>
                            <?php else: ?>
                                <span class="badge rounded-pill text-bg-warning">
                                    İlk yorumu sen yap.
                                </span>
                            <?php endif ?>
                        
                        </p>
                    </div>
                </div>
                </div>
                </div>
                <?php endif ?>

                <?php endforeach ?>

               

               
                
                
                
            </div>
        </div>
        
        
    </div>
        

</body>
</html>