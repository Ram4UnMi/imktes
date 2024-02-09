<!-- untuk mengambil header -->
<?php include("../umum/inc_headerO.php") ?>

<section>
    <div class="container-sm mt-5">
        <!-- awal rol -->
        <div class="row">
            <div class="col-sm-10">
                <h1 class="fs-3 fw-normal">Selamat Datang, (Owner)</h1>
                <h1 class="fs-2">DASHBOARD</h1>
            </div>
            <div class="col">
                <a href="transaksi_input.php">
                    <input type="button" class="btn btn-primary" value="+ORDER BARU">
                </a>
            </div>
        </div>
        <!-- awal col -->
        <div class="col-sm-12 mx-auto mt-5">
            <div class="card bg-light">

                <div class="header">

                </div>
                <div class="card-body">
                    <table class="table table-striped text-center">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">NO ORDER</th>
                                <th scope="col">TGL ORDER</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">JENIS</th>
                                <th scope="col">BERAT</th>
                                <th scope="col">HARGA</th>
                                <th scope="col-2">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>C123</td>
                                <td>01/01/2024</td>
                                <td>Ucok</td>
                                <td>Celana Dalam</td>
                                <td>10Kg</td>
                                <td>Rp.11.000</td>
                                <td>
                                    <input type="button" class="btn btn-primary" value="Detail">
                                    <input type="button" class="btn btn-primary" value="Hapus">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>C123</td>
                                <td>01/01/2024</td>
                                <td>Ucok</td>
                                <td>Celana Dalam</td>
                                <td>10Kg</td>
                                <td>Rp.11.000</td>
                                <td>
                                    <input type="button" class="btn btn-primary" value="Detail">
                                    <input type="button" class="btn btn-primary" value="Hapus">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>C123</td>
                                <td>01/01/2024</td>
                                <td>Ucok</td>
                                <td>Celana Dalam</td>
                                <td>10Kg</td>
                                <td>Rp.11.000</td>
                                <td>
                                    <input type="button" class="btn btn-primary" value="Detail">
                                    <input type="button" class="btn btn-primary" value="Hapus">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>


</section>
<?php include("../umum/inc_footerO.php") ?>