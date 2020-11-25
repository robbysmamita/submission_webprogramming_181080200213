<nav class="navbar navbar-fixed fixed-top shadow-sm navbar-expand-lg navbar-light bg-light">

        <div class="container">
            <a class="navbar-brand" href="<?=base_url('home') ?>"><img src="<?= base_url() ?>assets/img/logo.png" height="32"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=base_url('home')?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?=base_url('home/detail') ?>">Cold White</a>
                            <a class="dropdown-item" href="<?=base_url('home/detail') ?>">Cold Black</a>
                            <a class="dropdown-item" href="<?=base_url('home/detail') ?>">Thai Tea</a>
                            <a class="dropdown-item" href="<?=base_url('home/detail') ?>">Chocolate</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('home/gallery') ?>">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-dark text-white nav-link" href="<?=base_url('home/order')?>">Order</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>