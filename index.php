<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
  <!-- Custom Styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Shopee</title>
</head>
<body>
  <!-- Header -->
  <header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
      <p class="font-raleway font-12 text-black-50 m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, repellat.</p>
      <div class="font-raleway font-14">
        <a href="#" class="px-3 border-right border-left text-dark">Login</a>
        <a href="#" class="px-3 border-right text-dark">Wishlist (0)</a>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-color-secondary">
      <a class="navbar-brand" href="#">Shopee</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto font-rubik">
          <li class="nav-item active">
            <a class="nav-link transition-500" href="#">On Sale</a>
          </li>
          <li class="nav-item">
            <a class="nav-link transition-500" href="#">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link transition-500" href="#">Products <i class="fas fa-chevron-down"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link transition-500" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link transition-500" href="#">Coming Soon</a>
          </li>
        </ul>
        <form action="#" class="font-14 font-raleway">
          <a href="#" class="py-2 rounded-pill bg-color-primary">
            <span class="font-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
            <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
          </a>
        </form>
      </div>
    </nav>
  </header>
  
  <!-- Main -->
  <main id="main-site">
    <!-- Owl-Carousel -->
    <section id="banner">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="assets/images/Banner1.png" alt="Banner1">
        </div>
        <div class="item">
          <img src="assets/images/Banner2.png" alt="Banner2">
        </div>
      </div>
    </section>

    <!-- Top Sale -->
    <section id="top-sale">
      <div class="container py-5">
        <h4 class="font-rubik font-20">Top Sale</h4>
        <hr>
        <div class="owl-carousel owl-theme">
          <div class="item py-2">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/1.png" alt="Product1" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy 10</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/2.png" alt="Product2" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Note 10</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/3.png" alt="Product3" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy 10</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/4.png" alt="Product4" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Note S10</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/5.png" alt="Product5" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy J7</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/6.png" alt="Product6" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy J5</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/7.png" alt="Product7" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Note 9</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/8.png" alt="Product8" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy S9</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/9.png" alt="Product9" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Note A70</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/10.png" alt="Product10" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy A51</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Special Price -->
    <section id="special-price">
      <div class="container">
        <h4 class="font-rubik font-20">Special Price</h4>
        <hr>
        <div class="button-group text-right font-20 font-jost" id="filters">
          <button class="btn is-checked" data-filter="*">All Brands</button>
          <button class="btn" data-filter=".Apple">Apple</button>
          <button class="btn" data-filter=".Samsung">Samsung</button>
          <button class="btn" data-filter=".Readmi">Readmi</button>
        </div>
        <div class="grid">
          <div class="grid-item Apple border">
            <div class="item py-2" style="width: 200px;">
              <div class="product font-raleway">
                <a href="#"><img src="assets/images/products/11.png" alt="Product11" class="img-fluid"></a>
                <div class="text-center">
                  <h6>iPhone X</h6>
                  <div class="rating text-warning font-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Samsung border">
            <div class="item py-2" style="width: 200px;">
              <div class="product font-raleway">
                <a href="#"><img src="assets/images/products/7.png" alt="Product7" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Galaxy S6</h6>
                  <div class="rating text-warning font-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Readmi border">
            <div class="item py-2" style="width: 200px;">
              <div class="product font-raleway">
                <a href="#"><img src="assets/images/products/5.png" alt="Product5" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Readmi 7</h6>
                  <div class="rating text-warning font-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Apple border">
            <div class="item py-2" style="width: 200px;">
              <div class="product font-raleway">
                <a href="#"><img src="assets/images/products/11.png" alt="Product11" class="img-fluid"></a>
                <div class="text-center">
                  <h6>iPhone X</h6>
                  <div class="rating text-warning font-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Samsung border">
            <div class="item py-2" style="width: 200px;">
              <div class="product font-raleway">
                <a href="#"><img src="assets/images/products/7.png" alt="Product7" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Galaxy S6</h6>
                  <div class="rating text-warning font-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Readmi border">
            <div class="item py-2" style="width: 200px;">
              <div class="product font-raleway">
                <a href="#"><img src="assets/images/products/5.png" alt="Product5" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Readmi 7</h6>
                  <div class="rating text-warning font-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Apple border">
            <div class="item py-2" style="width: 200px;">
              <div class="product font-raleway">
                <a href="#"><img src="assets/images/products/11.png" alt="Product11" class="img-fluid"></a>
                <div class="text-center">
                  <h6>iPhone X</h6>
                  <div class="rating text-warning font-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Samsung border">
            <div class="item py-2" style="width: 200px;">
              <div class="product font-raleway">
                <a href="#"><img src="assets/images/products/7.png" alt="Product7" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Galaxy S6</h6>
                  <div class="rating text-warning font-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Readmi border">
            <div class="item py-2" style="width: 200px;">
              <div class="product font-raleway">
                <a href="#"><img src="assets/images/products/5.png" alt="Product5" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Readmi 7</h6>
                  <div class="rating text-warning font-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item Apple border">
            <div class="item py-2" style="width: 200px;">
              <div class="product font-raleway">
                <a href="#"><img src="assets/images/products/11.png" alt="Product11" class="img-fluid"></a>
                <div class="text-center">
                  <h6>iPhone X</h6>
                  <div class="rating text-warning font-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$152</span>
                  </div>
                  <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Banner Ads -->
    <section id="ads">
      <div class="container text-center py-5">
        <img src="assets/images/banner1-cr-500x150.jpg" alt="Ad1" class="img-fluid shadow mx-2">
        <img src="assets/images/banner2-cr-500x150.jpg" alt="Ad2" class="img-fluid shadow mx-2">
      </div>
    </section>

    <!-- New Phones -->
    <section id="new-phones">
      <div class="container py-5">
        <h4 class="font-rubik font-20">New Phones</h4>
        <hr>
        <div class="owl-carousel owl-theme">
          <div class="item py-2 bg-light">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/1.png" alt="Product1" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy 10</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/2.png" alt="Product2" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Note 10</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/3.png" alt="Product3" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy 10</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/4.png" alt="Product4" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Note S10</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/5.png" alt="Product5" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy J7</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/6.png" alt="Product6" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy J5</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/7.png" alt="Product7" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Note 9</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/8.png" alt="Product8" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy S9</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/9.png" alt="Product9" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Note A70</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
          <div class="item py-2 bg-light">
            <div class="product font-raleway">
              <a href="#"><img src="assets/images/products/10.png" alt="Product10" class="img-fluid"></a>
              <div class="text-center">
                <h6>Samsung Galaxy A51</h6>
                <div class="rating text-warning font-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning rounded-0 font-12 font-bold">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog -->
    <section id="blog">
      <div class="container py-4">
        <h4 class="font-20 font-rubik">Latest Blogs</h4>
        <hr>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="card border-0 font-raleway mr-5" style="width: 18rem;">
              <h5 class="card-title font-16">Upcoming Mobiles</h5>
              <img src="assets/images/blog/blog1.jpg" alt="Blog1" class="card-img-top">
              <p class="card-text font-14 text-black-50">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem consequuntur reiciendis asperiores veniam quos minima facere reprehenderit quidem nemo temporibus.</p>
              <a href="#" class="color-secondary text-left transition-500 text-decoration-none">Read More</a>
            </div>
          </div>
          <div class="item">
            <div class="card border-0 font-raleway mr-5" style="width: 18rem;">
              <h5 class="card-title font-16">What about new 2020 mobiles</h5>
              <img src="assets/images/blog/blog2.jpg" alt="Blog2" class="card-img-top">
              <p class="card-text font-14 text-black-50">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem consequuntur reiciendis asperiores veniam quos minima facere reprehenderit quidem nemo temporibus.</p>
              <a href="#" class="color-secondary text-left transition-500 text-decoration-none">Read More</a>
            </div>
          </div>
          <div class="item">
            <div class="card border-0 font-raleway mr-5" style="width: 18rem;">
              <h5 class="card-title font-16">Are newer mobiles better?</h5>
              <img src="assets/images/blog/blog3.jpg" alt="Blog3" class="card-img-top">
              <p class="card-text font-14 text-black-50">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem consequuntur reiciendis asperiores veniam quos minima facere reprehenderit quidem nemo temporibus.</p>
              <a href="#" class="color-secondary text-left transition-500 text-decoration-none">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer id="footer" class="bg-dark text-white py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-12">
          <h4 class="font-rubik font-20">Shopee</h4>
          <p class="font-raleway font-14 text-white-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi exercitationem ipsam repellendus, ducimus aliquam harum.</p>
        </div>
        <div class="col-lg-4 col-12">
          <h4 class="font-rubik font-20">Newsletter</h4>
          <form action="#" class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="johndoe@mail.com">
            </div>
            <div class="col">
              <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
            </div>
          </form>
        </div>
        <div class="col-lg-2 col-12">
          <h4 class="font-rubik font-20">Information</h4>
          <div class="d-flex flex-column flex-wrap">
            <a href="#" class="font-raleway font-14 text-white-50 pb-1">About Us</a>
            <a href="#" class="font-raleway font-14 text-white-50 pb-1">Delivery information</a>
            <a href="#" class="font-raleway font-14 text-white-50 pb-1">Privacy Policy</a>
            <a href="#" class="font-raleway font-14 text-white-50 pb-1">Terms & Conditions</a>
          </div>
        </div>
        <div class="col-lg-2 col-12">
          <h4 class="font-rubik font-20">Account</h4>
          <div class="d-flex flex-column flex-wrap">
            <a href="#" class="font-raleway font-14 text-white-50 pb-1">My Account</a>
            <a href="#" class="font-raleway font-14 text-white-50 pb-1">Order History</a>
            <a href="#" class="font-raleway font-14 text-white-50 pb-1">Wishlist</a>
            <a href="#" class="font-raleway font-14 text-white-50 pb-1">Newsletter</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Copyright -->
  <div class="copyright text-center bg-dark text-white py-2">
    <p class="font-raleway font-14">&copy; Copyright 2020. Created By <a href="#" class="color-secondary transition-500">Ref-Bit</a></p>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>
  <script src="assets/index.js"></script>
</body>
</html>