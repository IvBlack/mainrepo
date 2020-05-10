<?php  require_once 'inc/functions.php'; ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie-edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
   
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<section class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="card">
                  <img src="https://via.placeholder.com/300x200C/O https://placeholder.com/" class="card-img-top">
                  <div class="card-body">
                  <h5 class="card-title">Товар 1</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <p class="price text-danger">100 UAH</p>
                  <a href="#" class="btn btn-primary buy" data-price="100" data-product="Товар 1">Купить</a>
                  </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="card">
                  <img src="https://via.placeholder.com/300x200C/O https://placeholder.com/" class="card-img-top">
                  <div class="card-body">
                  <h5 class="card-title">Товар 2</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <p class="price text-danger">110 UAH</p>
                  <a href="#" class="btn btn-primary buy" data-price="110" data-product="Товар 2">Купить</a>
                  </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="card">
                  <img src="https://via.placeholder.com/300x200C/O https://placeholder.com/" class="card-img-top">
                  <div class="card-body">
                  <h5 class="card-title">Товар 3</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <p class="price text-danger">120 UAH</p>
                  <a href="#" class="btn btn-primary buy" data-price="120" data-product="Товар 3">Купить</a>
                  </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="card">
                  <img src="https://via.placeholder.com/300x200C/O https://placeholder.com/" class="card-img-top">
                  <div class="card-body">
                  <h5 class="card-title">Товар 4</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <p class="price text-danger">130 UAH</p>
                  <a href="#" class="btn btn-primary buy" data-price="130" data-product="Товар 4">Купить</a>
                  </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="card">
                  <img src="https://via.placeholder.com/300x200C/O https://placeholder.com/" class="card-img-top">
                  <div class="card-body">
                  <h5 class="card-title">Товар 5</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <p class="price text-danger">140 UAH</p>
                  <a href="#" class="btn btn-primary buy" data-price="140" data-product="Товар 5">Купить</a>
                  </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="card">
                  <img src="https://via.placeholder.com/300x200C/O https://placeholder.com/" class="card-img-top">
                  <div class="card-body">
                  <h5 class="card-title">Товар 6</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <p class="price text-danger">150 UAH</p>
                  <a href="#" class="btn btn-primary buy" data-price="150" data-product="Товар 6">Купить</a>
                  </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="card">
                  <img src="https://via.placeholder.com/300x200C/O https://placeholder.com/" class="card-img-top">
                  <div class="card-body">
                  <h5 class="card-title">Товар 7</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <p class="price text-danger">160 UAH</p>
                  <a href="#" class="btn btn-primary buy" data-price="160" data-product="Товар 7">Купить</a>
                  </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>

<div class="modal fade" id="cart">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Оформление заказа</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form id="buy" method="post">
          <div class="form-group">
            <label for="name">Ваше имя</label>
            <input type="name" name="name" class="form-control" id="name" placeholder="Ваше имя" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="email" required>
          </div>
          <div class="form-group">
            <label for="product">Выбранный товар</label>
            <input type="text" name="product" class="form-control" id="product" readonly>
          </div>
          <div class="form-group">
            <label for="price">Цена</label>
            <input type="text" name="price" class="form-control" id="price" readonly>
          </div>
          <button type="submit" class="btn btn-primary">Купить</button>
</form>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>


