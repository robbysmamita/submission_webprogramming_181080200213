<main>
        <section id="order">
            <div class="container">
                <h2 class="text-center text-dark pt-5 mt-5">Order Now</h2>
                <hr>
                <div class="row-md-5 col-12">
                    <div class="col">
                        <h2 class="text-left text-dark mb-3">Order</h2>
                        <form method="POST" action="">
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
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        aria-describedby="namaHelp" required="required">
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
                                                <input name="plan" class="radio" type="radio" value="Cold White"
                                                    checked>

                                                <span class="plan-details">
                                                    <img src=" <?=base_url() ?>assets/img/cold-whites.png" class="img-fluid" alt=""
                                                        srcset="">
                                                    <h3 class="">Cold White</h3>
                                                    <h5 class="">Rp. 15.000,00-</h5>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-12 h-100 mb-3 col-sm-6">
                                            <label class="card">
                                                <input name="plan" class="radio" type="radio" value="Cold Black">

                                                <span class="plan-details">
                                                    <img src="<?=base_url() ?>assets/img/cold-whites.png" class="img-fluid" alt=""
                                                        srcset="">
                                                    <h3 class="">Cold Black</h3>
                                                    <h5 class="">Rp. 15.000,00-</h5>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-3 h-100 mb-3">
                                            <label class="card">
                                                <input name="plan" class="radio" type="radio" value="Thai Tea">

                                                <span class="plan-details">
                                                    <img src="<?=base_url() ?>assets/img/cold-whites.png" class="img-fluid" alt=""
                                                        srcset="">
                                                    <h3 class="">Thai Tea</h3>
                                                    <h5 class="">Rp. 15.000,00-</h5>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-sm-3 h-100 mb-3">
                                            <label class="card">
                                                <input name="plan" class="radio" type="radio" value="Coklat">

                                                <span class="plan-details">
                                                    <img src="<?=base_url() ?>assets/img/cold-whites.png" class="img-fluid" alt=""
                                                        srcset="">
                                                    <h3 class="">Coklat</h3>
                                                    <h5 class="">Rp. 15.000,00-</h5>
                                                </span>
                                            </label>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="jml">Jumlah Produk</label>
                                    <input type="text" class="form-control" name="jml" id="jml"
                                        aria-describedby="jmlHelp" required="required">
                                    <!-- <small id="jml" class="form-text text-danger">Jumlah Produk wajib diisi
                                            </small> -->
                                </div>
                                <button type="submit" class="btn btn-dark">Order now</button>
                        </form>
                    </div>
                </div>
            </div>


            <!-- <div class="form-group form-check"> <input type="checkbox"
                        class="form-check-input" id="exampleCheck1"> <label class="form-check-label"
                        for="exampleCheck1">Order now</label> </div> -->
            </form>
            </div>
        </section>
    </main>