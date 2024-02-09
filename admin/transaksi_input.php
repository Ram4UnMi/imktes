 <?php include("../umum/inc_headerA.php") ?>
 <div class="container col-sm-6 py-3">
      <h1>Transaksi</h1>
 </div>


 <div class="container col-sm-6">
      <div class="row">
           <div class="card">
                <div class=" card-body mx-auto">
                     <form action="">


                          <div class="py-1">
                               Nama Pelanggan
                               <!-- </div> -->
                               <div class="input-group py-1">
                                    <input type="text" class="form-control" id="berat" placeholder="Example" required>
                               </div>
                          </div>

                          <div class="py-1">
                               No. Order
                               <div class="input-group py-1">
                                    <input type="text" class="form-control" id="berat" placeholder="Example" required>
                               </div>
                          </div>

                          <div class="py-1">
                               Tanggal Order
                               <div class="input-group py-1">
                                    <input type="date" class="form-control" id="berat" placeholder="Example" required>
                               </div>
                          </div>

                          <div class="py-1">
                               <label for="nomorHP" class="form-label">Nomor HP:</label>
                               <div class="input-group">
                                    <span class="input-group-text" id="kodeNegara">+62</span>
                                    <input type="text" class="form-control" id="nomorHP" placeholder="Nomor HP" aria-label="Nomor HP" aria-describedby="kodeNegara">
                               </div>
                          </div>

                          <div class="py-1">
                               Jenis
                               <div class="py-1">
                                    <select class="form-select" id="" aria-describedby="" required>
                                         <option selected disabled value="">Pilih
                                         </option>
                                         <option value="">contoh1</option>
                                         <option value="">contoh2</option>
                                         <option value="">contoh3</option>
                                    </select>
                               </div>
                          </div>

                          <div class="py-1">
                               Berat
                               <div class="inpput-group py-1 d-flex">

                                    <input type="number" class="form-control" id="berat" placeholder="Example" required>
                                    <div class="input-group-append">
                                         <span class="input-group-text">KG</span>
                                    </div>
                               </div>
                          </div>

                          <div class="row mt-3">
                               <div class="col-sm">
                                    <label for="harga" class="form-label">Harga</label>
                                    <div class="input-group d-flex">
                                         <div class="input-group-append">
                                              <span class="input-group-text">Rp.</span>
                                         </div>
                                         <input type="text" class="form-control" id="harga" placeholder="Example" required>
                                    </div>
                               </div>
                               <div class="col-sm">
                                    <label for="harga" class="form-label">Total Harga</label>
                                    <div class="input-group d-flex">
                                         <div class="input-group-append">
                                              <span class="input-group-text">Rp.</span>
                                         </div>
                                         <input type="text" class="form-control" id="harga" placeholder="Example" required>
                                    </div>
                               </div>
                          </div>

                          <div class="row d-flex py-5">
                               <div class="col-sm">
                                    <button class="btn btn-danger w-90" type="reset">Reset form</button>
                               </div>
                               <div class="col-sm">

                               </div>
                               <div class="col-sm">
                                    <button class="btn btn-primary w-90 float-end" type="submit">Submit form</button>
                               </div>
                          </div>
                     </form>


                </div>
           </div>
      </div>
 </div>




 <div class="modal bg" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
                <div class="modal-body text-center">
                     <form action="" method="post">
                          <table class="mx-auto">
                               <tr>
                                    <td>
                                         hyy
                                    </td>
                                    <td>
                                         <input type="text" class="form-control" size="25">
                                    </td>
                               </tr>
                               <tr>
                                    <td>
                                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </td>
                                    <td>
                                         <button type="button" class="btn btn-primary float-end">Submit</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>



 <!-- <div class=" row">
                                              <div class="col-sm-10">
                                                   <h1 class="fs-2">Transaksi</h1>
                                              </div>
                                              <div class="col-sm-10 mx-auto">
                                                   <div class="card-body col-sm-10 bg-light">
                                                        <form action="">
                                                             <div class="row mb-3">
                                                                  <label for="name" class="form-label col-md-4">Nama</label>
                                                                  <div class="col-md-8">
                                                                       <input type="text" class="form-control" id="name" placeholder="Example" required>
                                                                  </div>
                                                             </div>
                                                             <div class="row mb-3">
                                                                  <label for="noOrder" class="form-label col-md-4">No. Order</label>
                                                                  <div class="col-md-8">
                                                                       <input type="text" class="form-control" id="noOrder" placeholder="Example" required>
                                                                  </div>
                                                             </div>
                                                             <div class="row mb-3">
                                                                  <label for="tglOrder" class="form-label col-md-4">Tanggal Order</label>
                                                                  <div class="col-md-8">
                                                                       <input type="date" class="form-control" id="tglOrder" placeholder="Example" required>
                                                                  </div>
                                                             </div>
                                                             <div class="row mb-3">
                                                                  <label for="no.hp" class="form-label col-md-4">No.Hp</label>
                                                                  <div class="col-md-8">
                                                                       <input type="text" class="form-control" id="no.hp" placeholder="Example" required>
                                                                  </div>
                                                             </div>
                                                             <div class="row mb-3">
                                                                  <label for="" class="form-label col-md-4">Jenis Paket</label>
                                                                  <div class="col-md-8">
                                                                       <select class="form-select" required>
                                                                            <option selected disabled value="">Pilih</option>
                                                                            <option value="">contoh1</option>
                                                                            <option value="">contoh2</option>
                                                                            <option value="">contoh3</option>
                                                                       </select>
                                                                  </div>
                                                             </div>
                                                             <div class="row mb-3">
                                                                  <label for="berat" class="form-label col-md-4">Berat</label>
                                                                  <div class="col-md-8">
                                                                       <div class="input-group">
                                                                            <input type="number" class="form-control" id="berat" placeholder="Example" required>
                                                                            <div class="input-group-append">
                                                                                 <span class="input-group-text">KG</span>
                                                                            </div>
                                                                       </div>
                                                                  </div>
                                                             </div>
                                                             <div class="row mb-3 row-cols-2">
                                                                  <label for="harga" class="form-label col-md-4">Harga</label>
                                                                  <div class="col-md-8">
                                                                       <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                 <span class="input-group-text">Rp.</span>
                                                                            </div>
                                                                            <input type="text" class="form-control" id="harga" placeholder="Example" required>
                                                                       </div>
                                                                  </div>
                                                                  <label for="totalharga" class="form-label col-md-4">Total Harga</label>
                                                                  <div class="col-md-8">
                                                                       <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                 <span class="input-group-text">Rp.</span>
                                                                            </div>
                                                                            <input type="text" class="form-control" id="totalharga" placeholder="Example" required>
                                                                       </div>
                                                                  </div>
                                                             </div>
                                                             <div class="row mt-5">
                                                                  <div class="col-md-4"></div>
                                                                  <div class="col-md-8 col-lg-3">
                                                                       <button class="btn btn-primary w-100" type="submit">Submit form</button>
                                                                  </div>
                                                                  <div class="col-md-8 col-lg-3">
                                                                       <button class="btn btn-danger w-100 mt-md-0 mt-2" type="reset">Reset form</button>
                                                                  </div>
                                                                  <div class="col-md-4"></div>
                                                             </div>
                                                        </form>
                                                   </div>
                                              </div>
                </div> -->

                <?php include("../umum/inc_footerA.php") ?>