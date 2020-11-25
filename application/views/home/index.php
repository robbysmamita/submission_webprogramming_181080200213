<main>
        <section id="landing">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-12 my-auto">
                        <h1 class="font-weight-700 text-dark">Nyegerin dan bikin melek!</h1>
                        <p class="open-sans text-24 text-dark">Kopi Cold Brew dengan rasa yang unik, enak, rendah
                            asam,dan lembut</p>
                        <a href="<?=base_url('home/order')?>">
                            <button type="button"
                                class="btn button coklat text-white open-sans text-20 font-weight-700 btn btn-dark">Pesan
                                Sekarang</button>
                        </a>
                    </div>
                    <div class="d-flex justify-content-center col-sm-4 col-12">
                        <img class="img-fluid animate__animated animate__shakeY animate__infinite animate__slowerss"
                            src="<?=base_url() ?>assets/img/cold-whites.png" alt="tiga botol cold brew">
                    </div>
                </div>
            </div>
        </section>

        <section id="products">
            <div class="container">

                <h2 class="text-left text-dark mb-3">Product</h2>
                <div class="row">
                    <div class="col-md-3 col-12 h-100 mb-3 col-sm-6">
                        <div class="shadow card bg-light">
                            <div class="mx-auto pt-4"><img
                                    class="card-img-top img-responsive card-img-top mx-auto rounded"
                                    src="<?=base_url() ?>assets/img/cold-whites.png" alt="Kopi Cold White Kafeins"></div>
                            <div class="text-dark card-body">
                                <h3 class="open-sans text-24 font-weight-700 mb-1">Cold White</h3>
                                <span class="badge badge-pill badge-dark">Kopi + Susu + Gula</span>
                                <p class="mt-2">Menggunakan biji kopi pilihan dengan susu dan gula aren.Bikin Melek!</p>
                                <a href="<?=base_url() ?>/coffee/cold-white" class="btn btn-dark">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 h-100 mb-3 col-sm-6">
                        <div class="shadow card bg-light">
                            <div class="mx-auto pt-4"><img
                                    class="card-img-top img-responsive card-img-top mx-auto rounded"
                                    src="<?=base_url() ?>assets/img/cold-whites.png" alt="Kopi Cold White Kafeins"></div>
                            <div class="text-dark card-body">
                                <h3 class="open-sans text-24 font-weight-700 mb-1">Cold Black</h3>
                                <span class="badge badge-pill badge-dark">Kopi + Gula</span>
                                <p class="mt-2">Menggunakan biji kopi pilihan dan gula aren</p>
                                <a href="/coffee/cold-black" class="btn btn-dark">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 h-100 mb-3 col-sm-6">
                        <div class="shadow card bg-light">
                            <div class="mx-auto pt-4"><img
                                    class="card-img-top img-responsive card-img-top mx-auto rounded"
                                    src="<?=base_url() ?>assets/img/cold-whites.png" alt="Kopi Cold White Kafeins"></div>
                            <div class="text-dark card-body">
                                <h3 class="open-sans text-24 font-weight-700 mb-1">Thai Tea</h3>
                                <span class="badge badge-pill badge-dark">Thai Tea + Krimer</span>
                                <p class="mt-2">Menggunakan teh asli dari Thailand dengan krimer. Dijamin enak!</p>
                                <a href="/coffee/thai-tea" class="btn btn-dark">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 h-100 mb-3 col-sm-6">
                        <div class="shadow card bg-light">
                            <div class="mx-auto pt-4"><img
                                    class="card-img-top img-responsive card-img-top mx-auto rounded"
                                    src="<?=base_url() ?>assets/img/cold-whites.png" alt="Kopi Cold White Kafeins"></div>
                            <div class="text-dark card-body">
                                <h3 class="open-sans text-24 font-weight-700 mb-1">Coklat</h3>
                                <span class="badge badge-pill badge-dark">Bubuk Coklat + Krimer</span>
                                <p class="mt-2">Menggunakan bubuk coklat asli dengan krimer</p>
                                <a href="/coffee/chocolate" class="btn btn-dark">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-5">
        <section id="order">
            <div class="container">
                <h2 class="text-left text-dark mb-3">Order</h2>
                <form method="POST" action="#">
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                required="required">
                            <!-- <small id="email" class="form-text text-danger">Email Wajib diisi
                        </small> -->
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" aria-describedby="namaHelp"
                                required="required">
                            <!-- <small id="nama" class="form-text text-danger">Nama Lengkap wajib diisi
                        </small> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_produk">Jenis Produk</label>
                        <div class="row">

                            <form action="#" method="POST">
                                <div class="col-md-3 col-12 h-100 mb-3 col-sm-6">
                                    <label class="card">
                                        <input name="plan" class="radio" type="radio" value="Cold White" checked>

                                        <span class="plan-details">
                                            <img src="<?=base_url() ?>assets/img/cold-whites.png" class="img-fluid" alt="" srcset="">
                                            <h3 class="">Cold White</h3>
                                            <h5 class="">Rp. 15.000,00-</h5>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-md-3 col-12 h-100 mb-3 col-sm-6">
                                    <label class="card">
                                        <input name="plan" class="radio" type="radio" value="Cold Black">

                                        <span class="plan-details">
                                            <img src="<?=base_url() ?>assets/img/cold-whites.png" class="img-fluid" alt="" srcset="">
                                            <h3 class="">Cold Black</h3>
                                            <h5 class="">Rp. 15.000,00-</h5>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-3 h-100 mb-3">
                                    <label class="card">
                                        <input name="plan" class="radio" type="radio" value="Thai Tea">

                                        <span class="plan-details">
                                            <img src="<?=base_url() ?>assets/img/cold-whites.png" class="img-fluid" alt="" srcset="">
                                            <h3 class="">Thai Tea</h3>
                                            <h5 class="">Rp. 15.000,00-</h5>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-3 h-100 mb-3">
                                    <label class="card">
                                        <input name="plan" class="radio" type="radio" value="Coklat">

                                        <span class="plan-details">
                                            <img src="<?=base_url() ?>assets/img/cold-whites.png" class="img-fluid" alt="" srcset="">
                                            <h3 class="">Coklat</h3>
                                            <h5 class="">Rp. 15.000,00-</h5>
                                        </span>
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jml">Jumlah Produk</label>
                        <input type="text" class="form-control" name="jml" id="jml" aria-describedby="jmlHelp"
                            required="required">
                        <!-- <small id="jml" class="form-text text-danger">Jumlah Produk wajib diisi
                        </small> -->
                    </div>
                    <!-- <div class="form-group form-check"> <input type="checkbox"
                        class="form-check-input" id="exampleCheck1"> <label class="form-check-label"
                        for="exampleCheck1">Order now</label> </div> -->
                    <button type="submit" class="btn btn-dark">Order now</button>
                </form>
            </div>
        </section>

        
    </main>