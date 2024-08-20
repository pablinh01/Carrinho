<?php
session_start();

require 'Cart.php';
require 'Product.php';

$product = [
    1 => ['id' => 1, 'name' => 'Nike SB Dunk Low Pro', 'price'=> 950, 'quantity' => 1 ],
    2 => ['id' => 2, 'name' => 'Tênis Jordan Jumpman MVP Masculino', 'price'=> 1234, 'quantity' => 1 ],
    3 => ['id' => 3, 'name' => 'Tênis Nike Infinity Run 4 Feminino', 'price'=> 969, 'quantity' => 1 ],
    4 => ['id' => 4, 'name' => 'Jordan Nu Retro 1', 'price'=> 855, 'quantity' => 1 ],
    5 => ['id' => 5, 'name' => 'Camiseta Nike Liverpool Dri-FIT Academy Pro Masculina', 'price'=> 332, 'quantity' => 1 ],
    6 => ['id' => 6, 'name' => 'Blusão Nike Barcelona FC Club Fleece Masculino', 'price'=> 436, 'quantity' => 1 ],
    7 => ['id' => 7, 'name' => 'Camisa Nike Corinthians I 2024/25 Torcedor Pro Masculina', 'price'=> 332, 'quantity' => 1 ],
    8 => ['id' => 8, 'name' => 'Camisa Nike Brasil I 2024/25 Torcedor Pro Masculina', 'price'=> 332, 'quantity' => 1 ],
];

if (isset($_GET['id'])) {
    $id = strip_tags($_GET['id']);
    if (isset($product[$id])) {
        $productInfo = $product[$id];
        $productObj = new Product();
        $productObj->setId($productInfo['id']);
        $productObj->setName($productInfo['name']);
        $productObj->setPrice($productInfo['price']);
        $productObj->setQuantity($productInfo['quantity']);

        $cart = new Cart();
        $cart->add($productObj);

        header('Location: lista.php');
        exit();
    }
}
?>




<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./index.css">
</head>

<body style=" background-color:#000000" ;>
  <!-- header(cabeçario)/ adicionas os link -->
  <header style="background-color: #626060;">
    <div class="logo" style="display: flex; margin: 0 auto;">
      <img src="/img/StyleCourt__1_-removebg-preview.png" alt="" style="height: 170px;">
    </div>
    <div class="icone-perfil" style="margin-top: 70px; margin-right: 25px;">
      <a href="./lista.php"><img src="./img/carrinhoIcon.png" alt=""> </a>
    </div>
  </header>
  <!-- fim do do header(cabeçario) -->

  <!-- comeco dos slides/ colocar as imagens-->
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://static.netshoes.com.br/bnn/l_netshoes/2024-07-26/8206_f1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://static.netshoes.com.br/bnn/l_netshoes/2024-07-25/185_f2.png" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://static.netshoes.com.br/bnn/l_netshoes/2024-07-30/3793_1920x504_Oli_nova.gif"
          class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- fim dos slides -->
  <!-- Começo do meu terror -->
  <ul>
    <div style="display: flex; justify-content: center; margin-top: 50px; background-color:#000000">
      <li>
        <div class="card" style="width: 18rem; background-color: #f1f1f1; margin: 12px;">
          <img id="card1" src="https://imgnike-a.akamaihd.net/360x360/027804ID.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title">Nike SB Dunk Low Pro</h4>
            <h6>R$ 949,99 no Pix</h6>
            <p style="font-size: x-small;">ou R$ 999,99 em até 9x sem juros</p>
            <a href="?id=1">Go somewhere</a>
          </div>
        </div>
      </li>
      <li>
        <div class="card" style="width: 18rem; background-color: #f1f1f1; margin: 12px;">
          <img id="card2" src="https://imgnike-a.akamaihd.net/768x768/027068IDA8.jpg" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title">Tênis Jordan Jumpman MVP Masculino</h4>
            <h6>R$ 1234,99 no Pix 5% off</h6>
            <p style="font-size: x-small;">ou R$ 1299,99 em até 10x sem juros</p>
            <a href="?id=2" >Go somewhere</a>
          </div>
        </div>
      </li>
      <li>
        <div class="card" style="width: 18rem;background-color: #f1f1f1; margin: 12px;">
          <img id="card3" src="https://imgnike-a.akamaihd.net/768x768/029448IDA13.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title">Tênis Nike Infinity Run 4 Feminino</h4>
            <h6>R$ 968,99 no Pix 19% off</h6>
            <p style="font-size: x-small;">ou R$ 1019,99 em até 10x sem juros</p>
            <a href="?id=3" >Go somewhere</a>
          </div>
        </div>
      </li>
      <li>
        <div class="card" style="width: 18rem;background-color: #f1f1f1; margin: 12px; ">
          <img id="card4" src="https://imgnike-a.akamaihd.net/768x768/027211BPA8.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title">Jordan Nu Retro 1</h4>
            <h6>R$ 854,99 no Pix 5% off</h6>
            <p style="font-size: x-small;">ou R$ 899,99 em até 8x sem juros</p>
            <a href="?id=4" >Go somewhere</a>
          </div>
        </div>
    </div>
    </li>
    <div style="display: flex; justify-content: center; margin-top: 10px; background-color:#000000; margin-bottom:35px; ">
      <li>
        <div class="card" style="width: 18rem; background-color: #f1f1f1; margin: 12px;">
          <img id="card5" src="https://imgnike-a.akamaihd.net/768x768/029054NXA1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Camiseta Nike Liverpool Dri-FIT Academy Pro Masculina</h5>
            <h6>R$ 332,49 no Pix 5% off</h6>
            <p style="font-size: x-small;">ou R$ 349,99 em até 3x sem juros</p>
            <a href="?id=5">Go somewhere</a>
          </div>
        </div>
      </li>
      <li>
        <div class="card" style="width: 18rem; background-color: #f1f1f1; margin: 12px;">
          <img id="card6" src="https://imgnike-a.akamaihd.net/360x360/02654551.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Blusão Nike Barcelona FC Club Fleece Masculino</h5>
            <h6>R$ 436,99 no Pix 27% off</h6>
            <p style="font-size: x-small;">ou R$ 459,99 em até 4x sem juros 23% off</p>
            <a href="?id=6">Go somewhere</a>
          </div>
        </div>
      </li>
      <li>
        <div class="card" style="width: 18rem;background-color: #f1f1f1; margin: 12px;">
          <img id="card7" src="https://imgnike-a.akamaihd.net/360x360/02872151.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Camisa Nike Corinthians I 2024/25 Torcedor Pro Masculina</h5>
            <h6>R$ 332,49 no Pix 5% off</h6>
            <p style="font-size: x-small;">ou R$ 349,99 em até 3x sem juros</p>
            <a href="?id=7">Go somewhere</a>
          </div>
        </div>
      </li>
      <li>
        <div class="card" style="width: 18rem;background-color: #f1f1f1; margin: 12px; ">
          <img id="card8" src="https://imgnike-a.akamaihd.net/360x360/0285640L.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Camisa Nike Brasil I 2024/25 Torcedor Pro Masculina</h5>
            <h6>R$ 332,49 no Pix 5% off</h6>
            <p style="font-size: x-small;">ou R$ 349,99 em até 3x sem juros</p>
            <a href="?id=8">Go somewhere</a>
          </div>
        </div>
      </li>
    </div>
    <!-- fim do card -->
  </ul>
  <!-- inicio do arcordiao -->
  <div style="background-color:rgb(12, 12, 12)">
    <br>
    <br>
    <br>
    <br>


  </div>
  <?php
  echo ' <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script>
        var card1 = document.getElementById("card1");
card1.addEventListener("mouseenter", cad1);
card1.addEventListener("mouseleave", cad1sair);
var card2 = document.getElementById("card2");
card2.addEventListener("mouseenter", cad2);
card2.addEventListener("mouseout", cad2sair);
var card3 = document.getElementById("card3");
card3.addEventListener("mouseenter", cad3);
card3.addEventListener("mouseleave", cad3sair);
var card4 = document.getElementById("card4");
card4.addEventListener("mouseenter", cad4);
card4.addEventListener("mouseleave", cad4sair);
var card5 = document.getElementById("card5");
card5.addEventListener("mouseenter", cad5);
card5.addEventListener("mouseleave", cad5sair);
var card6 = document.getElementById("card6");
card6.addEventListener("mouseenter", cad6);
card6.addEventListener("mouseleave", cad6sair);
var card7 = document.getElementById("card7");
card7.addEventListener("mouseenter", cad7);
card7.addEventListener("mouseleave", cad7sair);
var cd8 = document.getElementById("card8");
cd8.addEventListener("mouseenter", cad8);
cd8.addEventListener("mouseleave", cad8sair);

function cad1() {
    card1.style.boxShadow = " 2px 3px 90px rgba(244, 244, 244,10), 2px 2px rgba(244, 244, 244,0.4)";
}
function cad1sair() {
    card1.style.boxShadow = "";
}

function cad2() {
    card2.style.boxShadow = " 2px 3px 90px rgba(244, 244, 244,10), 2px 2px rgba(244, 244, 244,0.4)";
}
function cad2sair() {
    card2.style.boxShadow = "";
}
function cad3() {
    card3.style.boxShadow = " 2px 3px 90px rgba(244, 244, 244,10), 2px 2px rgba(244, 244, 244,0.4)";
}
function cad3sair() {
    card3.style.boxShadow = "";
}

function cad4() {
    card4.style.boxShadow = " 2px 3px 90px rgba(244, 244, 244,10), 2px 2px rgba(244, 244, 244,0.4)";
}
function cad4sair() {
    card4.style.boxShadow = "";
}
function cad5() {
    card5.style.boxShadow = " 2px 3px 90px rgba(244, 244, 244,10), 2px 2px rgba(244, 244, 244,0.4)";
}
function cad5sair() {
    card5.style.boxShadow = "";
}
function cad6() {
    card6.style.boxShadow = " 2px 3px 90px rgba(244, 244, 244,10), 2px 2px rgba(244, 244, 244,0.4)";
}
function cad6sair() {
    card6.style.boxShadow = "";
}
function cad7() {
    card7.style.boxShadow = " 2px 3px 90px rgba(244, 244, 244,10), 2px 2px rgba(244, 244, 244,0.4)";
}
function cad7sair() {
    card7.style.boxShadow = "";
}
function cad8() {
    cd8.style.boxShadow = " 2px 3px 90px rgba(244, 244, 244,10), 2px 2px rgba(244, 244, 244,0.4)";
}
function cad8sair() {
    cd8.style.boxShadow = "";
}
        </script> '

    ?>

</body>

</html>