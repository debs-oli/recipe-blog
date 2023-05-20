<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="styles/home.css" />
    <title>Dashboard: Home</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sidebarNavigation" data-sidebarClass="navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Foodie On The Move</a>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Recipes</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section
      class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark"
      style="height: 75vh; background-size: cover; background-image: url(imagens/header.jpg)"
    >
      <div class="container-fluid">
        <div class="row justify-content-center align-items-center d-flex text-center h-100">
          <div class="col-12 col-md-8 h-50">
            <h1 class="display-2 text-light mb-2 mt-5"><strong>Simple Recipes</strong></h1>
            <p class="lead text-light mb-5">less stress & more joy</p>
          </div>
        </div>
      </div>
    </section>
        <section class="pt-5 pb-5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-12 col-md-6 mt-4 mt-md-0 order-md-1 order-2">
            <img alt="image" class="img-fluid" src="imagens/home1.jpg" />
          </div>
          <div class="col-12 col-md-4 order-1 order-md-2">
            <h2>First, we eat...</h2>
            <p class="text-h3 mt-3">...Then, we do everything else.</p>
          </div>
        </div>
        <div class="row align-items-center justify-content-center pt-5 pb-2">
          <div class="col-12 col-md-4 offset-md-1">
            <h2>Delicious recipes everyday!</h2>
            <p class="text-h3 mt-3">One thousand flavors in one place.</p>
          </div>
          <div class="col-12 col-md-6 mt-4 mt-md-0">
            <img alt="image" class="img-fluid" src="imagens/home2.jpg" />
          </div>
        </div>
      </div>
    </section>
    <section class="pt-3 pb-5">
      <div class="container">
        <h1 class="text-center font-weight-bold pb-3">Categories</h1>
<?php
    foreach($categories as $category) {
        echo '
            <div class="row d-flex equal">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0">
                        <div class="card-img-top">
                            <img
                            src="/imagens/' .$category["image"]. '"
                            class="img-fluid mx-auto d-block"
                            alt="Card image cap"
                            />
                         </div>
                    <div class="card-body text-center">
                        <h2 class="card-titl">
                            <a href="/recipes/' .$category["category_id"]. '" class="font-weight-bold text-dark text-capitalize small">' .$category["name"]. '</a>
                        </h2>
                    </div>
                </div>
              </div>
            </div>
        ';
    }
?>
      </div>
    </section>
    <footer class="bg-dark text-center text-lg-start">
      <div class="text-light text-center p-3">&#169; 2023 Copyright: Debora Oliveira</div>
    </footer>
  </body>
</html>