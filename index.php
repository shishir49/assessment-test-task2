<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-2</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a4c00a89bc.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
</head>
<body>
    <section class="header">
        <div class="py-2 container">
            <div class="pb-1 d-flex justify-content-end align-items-center gap-4">
                <div class="mailing"><i class="fa fa-envelope"></i> ks.azim@yahoo.com</div>
                <div class="dropdown">
                    <button class="btn btn-sm btn-warning dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        EN
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="#">AR</a></li>
                        <li><a class="dropdown-item" href="#">BN</a></li>
                        <li><a class="dropdown-item" href="#">TR</a></li>
                    </ul>
                </div>
            </div>

            <div class="header-contents d-flex gap-4 align-items-center">
                <div class="logo">
                    <img src="./assets/images/logo.png" width="150" alt="">
                </div>
                <div class="cats dropdown">
                    <button class="btn btn-secondary" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bars"></i> Category
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </div>
                <div class="filter input-group">
                    <input type="text" class="form-control" placeholder="Search Here" aria-label="Search Here" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="button-addon2">Search</button>
                    </div>
                </div>
                <button type="button" class="heart btn btn-light"><i class="fa fa-heart"></i></button>
                <button type="button" class="cart btn btn-light"><i class="fa fa-shopping-cart"></i></button>
                <button type="button" class="user btn btn-light">User</button>
                <button onclick="myFunction(this)" type="button" class="mobile-menu btn btn-light pull-right"><i class="fa fa-bars"></i></button>
            </div>
        </div>
    </section>

    <section class="mobile-dropdown display-none p-4">
        <div class="filter input-group">
            <input type="text" class="form-control" placeholder="Search Here" aria-label="Search Here" aria-describedby="button-addon2">
            <div class="input-group-append">
            <button class="btn btn-primary" type="button" id="button-addon2">Search</button>
            </div>
        </div>
        <div class="d-flex justify-content-between pt-4">
            <div class="cats dropdown">
                <button class="btn btn-secondary" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bars"></i> Category
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item active" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </div>
            <button type="button" class="btn btn-light"><i class="fa fa-heart"></i></button>
            <button type="button" class="btn btn-light"><i class="fa fa-shopping-cart"></i></button>
            <button type="button" class="user btn btn-light">User</button>
        </div>
    </section>

    

    <section class="py-4 content-body">
        <div class="container">
            <div class="categories">
                <h4>Categories</h4>

                <div class="list">
                    <div class="card p-2">
                        <img src="./assets/images/products/pr-1.png" alt="">
                        <div class="card-body">
                            <h5 class="position-absolute bottom-0 card-title">Card title</h5>
                        </div>
                    </div>
                    <div class="card p-2">
                        <img src="./assets/images/products/pr-2.png" alt="">
                        <div class="card-body">
                            <h5 class="position-absolute bottom-0 card-title">Card title</h5>
                        </div>
                    </div>
                    <div class="card p-2">
                        <img src="./assets/images/products/pr-3.png" alt="">
                        <div class="card-body">
                            <h5 class="position-absolute bottom-0 card-title">Card title</h5>
                        </div>
                    </div>
                    <div class="card p-2">
                        <img src="./assets/images/products/pr-4.png" alt="">
                        <div class="card-body">
                            <h5 class="position-absolute bottom-0 card-title">Card title</h5>
                        </div>
                    </div>
                    <div class="card p-2">
                        <img src="./assets/images/products/pr-5.png" alt="">
                        <div class="card-body">
                            <h5 class="position-absolute bottom-0 card-title">Card title</h5>
                        </div>
                    </div>
                    <div class="card p-2">
                        <img src="./assets/images/products/pr-6.png" alt="">
                        <div class="card-body">
                            <h5 class="position-absolute bottom-0 card-title">Card title</h5>
                        </div>
                    </div>
                    <div class="card p-2">
                        <img src="./assets/images/products/pr-7.png" alt="">
                        <div class="card-body">
                            <h5 class="position-absolute bottom-0 card-title">Card title</h5>
                        </div>
                    </div>
                    <div class="card p-2">
                        <img src="./assets/images/products/pr-8.png" alt="">
                        <div class="card-body">
                            <h5 class="position-absolute bottom-0 card-title">Card title</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 best-sells">
                <h4>Best Selling Laptops</h4>

                <div class="best-selling">
                    <div class="card p-2">
                        <div class="d-flex justify-content-center position-relative">
                            <img src="./assets/images/products/pr-1.png" alt="">
                            <span class="position-absolute p-2 top-10 start-10 translate-middle badge rounded bg-danger">
                                Top Sale
                            </span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                    <div class="card p-2">
                        <div class="d-flex justify-content-center position-relative">
                            <img src="./assets/images/products/pr-2.png" alt="">
                            <span class="position-absolute p-2 top-10 start-10 translate-middle badge rounded bg-warning">
                                Popular
                            </span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                    <div class="card p-2">
                        <div class="d-flex justify-content-center">
                            <img src="./assets/images/products/pr-3.png" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                    <div class="card p-2">
                        <div class="d-flex justify-content-center position-relative">
                            <img src="./assets/images/products/pr-4.png" alt="">
                            <span class="position-absolute p-2 top-10 start-10 translate-middle badge rounded bg-warning">
                                Popular
                            </span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                    <div class="card p-2">
                        <div class="d-flex justify-content-center">
                            <img src="./assets/images/products/pr-5.png" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                    <div class="card p-2">
                        <div class="d-flex justify-content-center">
                            <img src="./assets/images/products/pr-6.png" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                    <div class="card p-2">
                        <div class="d-flex justify-content-center">
                            <img src="./assets/images/products/pr-7.png" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                    <div class="card p-2">
                        <div class="d-flex justify-content-center position-relative">
                            <img src="./assets/images/products/pr-8.png" alt="">
                            <span class="position-absolute p-2 top-10 start-10 translate-middle badge rounded bg-warning">
                                Popular
                            </span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                    <div class="card p-2">
                        <div class="d-flex justify-content-center position-relative">
                            <img src="./assets/images/products/pr-8.png" alt="">
                            <span class="position-absolute p-2 top-10 start-10 translate-middle badge rounded bg-warning">
                                Popular
                            </span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                    <div class="card p-2">
                        <div class="d-flex justify-content-center position-relative">
                            <img src="./assets/images/products/pr-8.png" alt="">
                            <span class="position-absolute p-2 top-10 start-10 translate-middle badge rounded bg-warning">
                                Popular
                            </span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                </div>
            </div>

            <div class="card my-4 rounded-6">
                <div class="card-body text-center text-secondary">
                    <strong>Load more</strong>
                </div>
            </div>

            <div class="featured">
                <h4>Best Selling Laptops</h4>

                <div class="owl-carousel owl-theme owl-loaded">
                    <div class="card col p-2">
                        <div class="d-flex justify-content-center position-relative">
                            <img src="./assets/images/products/pr-1.png" class="slider-img" alt="">
                            <span class="position-absolute p-2 top-10 start-10 translate-middle badge rounded bg-danger">
                                Top Sale
                            </span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                    <div class="card col p-2">
                        <div class="d-flex justify-content-center position-relative">
                            <img src="./assets/images/products/pr-2.png" class="slider-img" alt="">
                            <span class="position-absolute p-2 top-10 start-10 translate-middle badge rounded bg-warning">
                                Popular
                            </span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                    <div class="card col p-2">
                        <div class="d-flex justify-content-center">
                            <img src="./assets/images/products/pr-3.png" class="slider-img" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                    <div class="card col p-2">
                        <div class="d-flex justify-content-center position-relative">
                            <img src="./assets/images/products/pr-4.png" class="slider-img" alt="">
                            <span class="position-absolute p-2 top-10 start-10 translate-middle badge rounded bg-warning">
                                Popular
                            </span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                    <div class="card col p-2">
                        <div class="d-flex justify-content-center">
                            <img src="./assets/images/products/pr-5.png" class="slider-img" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                    <div class="card col p-2">
                        <div class="d-flex justify-content-center">
                            <img src="./assets/images/products/pr-6.png" class="slider-img" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                    <div class="card col p-2">
                        <div class="d-flex justify-content-center">
                            <img src="./assets/images/products/pr-7.png" class="slider-img" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                    <div class="card col p-2">
                        <div class="d-flex justify-content-center position-relative">
                            <img src="./assets/images/products/pr-8.png" class="slider-img" alt="">
                            <span class="position-absolute p-2 top-10 start-10 translate-middle badge rounded bg-warning">
                                Popular
                            </span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p>Apple Macbook Pro 
                                13" 2.4 2019 Intel core i5 
                                DDR3 8 GB SSD 256 GB  </p>
                            <p class="text-secondary">230 to buyutrama</p>
                            <div class="d-flex gap-2 align-items-center justify-content-between">
                                <button class="btn btn-primary">Buy Now </button>
                                <i class="fa fa-shopping-cart text-secondary h4"></i>
                            </div>
                        </div>
                        <i class="gradiant-color fa fa-heart-o position-absolute top-0 end-0 p-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="row">
                        <div class="col-4">
                            <h6>Hujjatlar</h6>
                            <p>Random Text</p>
                            <p>Random Text</p>
                            <p>Random Text</p>
                            <p>Random Text</p>
                        </div>

                        <div class="col-4">
                            <h6>Hujjatlar</h6>
                            <p>Random Text</p>
                            <p>Random Text</p>
                            <p>Random Text</p>
                            <p>Random Text</p>
                        </div>

                        <div class="col-4">
                            <h6>Hujjatlar</h6>
                            <p>Random Text</p>
                            <p>Random Text</p>
                            <p>Random Text</p>
                            <p>Random Text</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h6>Sample Text</h6>
                    <p>contact@gmail.com</p>
                    <p>+ 9165745465464</p>
                    <p>+ 9165745465464</p>
                    <p>Purana Paltan, South khilji road, Dhaka, Bnagladesh</p>

                    <div class="socials d-flex justify-content-start gap-3 pb-2">
                        <img src="./assets/images/icons/fb.png" alt="">
                        <img src="./assets/images/icons/inst.png" alt="">
                        <img src="./assets/images/icons/tel.png" alt="">
                        <img src="./assets/images/icons/tktk.png" alt="">
                    </div>
                </div>
            </div>
            <div class="gradiant-border"></div>
            <div class="d-flex justify-content-between py-2">
                <span>2022 Nextstore.com</span>
                <span>Powered by</span>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true,
                        dots: false
                    },
                    600:{
                        items:3,
                        nav:true,
                        dots: false
                    },
                    1000:{
                        items:5,
                        nav:true,
                        dots: false
                    },
                    1400:{
                        items:5,
                        nav:true,
                        dots: false
                    }
                }
            })
        })

        function myFunction(x) {
            x.classList.toggle("change");
            $(".mobile-dropdown").toggleClass("display-none", 800, "easeOutQuint");
        };

    </script>
</body>
</html>