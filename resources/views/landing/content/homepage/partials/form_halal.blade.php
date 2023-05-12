<!-- start form-halal section -->
<section id="form-halal" class="about pt-0">

    <div class="container" data-aos="fade-up">

      <div class="row gx-0">
        <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <div class="text-center pb-2">
                <h1 style="color:purple;"><strong>HALAL SELF DECLARE ASSESSMENT</span></strong></h1>
                <h5 style="color: black;">Gratis untuk 1.000.000 Produk</h5>
            </div>
            <h3 style="color: black;">Silahkan mengisi Data Usaha dan Data Produk yang akan diajukan Sertifikasi Halal berikut ini dan Konsultan Halal SWAKARTA® akan melakukan verifikasi dan validasi dalam waktu 24 jam untuk proses Sertifikasi Halal Self Declare.</h3>
            <form action="{{ url('submit-form') }}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="row p-4 pb-0">
                <div class="card p-4">
                  <div class="card-title">
                    <h2>
                      Data Pelaku Halal<sup class="text-danger">*</sup>
                    </h2>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="card-body">
                        <div class="card-text">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-4">
                              <div class="form-outline">
                                <input type="text" name="name" id="name" class="form-control" required>
                                <label class="form-label" for="name">Nama Lengkap<sup class="text-danger">*</sup></label>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-4">
                              <div class="form-outline">
                                <input type="text" name="nik" id="nik" class="form-control" required>
                                <label for="nik" class="form-label">NIK<sup class="text-danger">*</sup></label>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-4">
                              <div class="form-outline">
                                <input type="email" name="email" id="email" class="form-control" required>
                                <label class="form-label" for="email">Email<sup class="text-danger">*</sup></label>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-4">
                              <div class="form-outline">
                                <input type="text" name="no_telp" id="no_telp" class="form-control" required>
                                <label class="form-label" for="no_telp">No. Telpon / Whatsapp<sup class="text-danger">*</sup></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row p-4 pb-0">
                <div class="card p-4">
                  <div class="card-title">
                    <h2>
                      Data Usaha<sup class="text-danger">*</sup>
                    </h2>
                  </div>
                  <div class="row">
                    <div class="card-body">
                      <div class="card-text">
                        <div class="row">
                          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pb-4">
                            <div class="form-outline">
                              <input type="text" name="nama-usaha" id="nama-usaha" class="form-control" required>
                              <label class="form-label" for="nama-usaha">Nama Usaha<sup class="text-danger">*</sup></label>
                            </div>
                          </div>
                          <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 pb-4">
                            <div class="form-outline">
                              <input type="text" name="alamat-usaha" id="alamat-usaha" class="form-control" required>
                              <label for="alamat-usaha" class="form-label">Alamat Usaha<sup class="text-danger">*</sup></label>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pb-4">
                            <div class="form-outline">
                              <input type="text" name="jenis-usaha" id="jenis-usaha" class="form-control" required>
                              <label class="form-label" for="jenis-usaha">Jenis Usaha<sup class="text-danger">*</sup></label>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pb-4">
                            <div class="form-outline">
                              <input type="text" name="nib" id="nib" class="form-control">
                              <label for="nib" class="form-label">NIB <sup class="text-muted">(jika sudah memiliki)</sup></label>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pb-4">
                            <div class="form-outline">
                              <input type="text" name="bahan-cleaning-agent" id="bahan-cleaning-agent" class="form-control" required>
                              <label for="bahan-cleaning-agent" class="form-label">Bahan Cleaning Agent<sup class="text-danger">*</sup></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row p-4 pb-0">
                <div class="card p-4">
                  <div class="card-title">
                    <h2>
                      Data Produk<sup class="text-danger">*</sup>
                    </h2>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 pb-4">
                      <div class="card bg-secondary bg-opacity-25">
                        <div class="card-header">Produk 1<sup class="text-danger">*</sup></div>
                        <div class="p-4">
                          <div class="card" style="height: 16rem; max-width: 20rem;">
                            <div class="card-body">
                              <div class="card-text">
                                <label class="form-label" for="">Foto Produk</label>
                              </div>
                              <div class="bg-image hover-overlay ripple pb-2" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-thumbnail" style="height: auto; width: 14rem;">
                                <a href="javascript:void(0)" class="text-decoration-none">
                                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                    <div class="badge badge-light">
                                        <label class="form-label text-muted m-1" for="customFile1">Change Photo</label>
                                        <input type="file" class="form-control d-none" id="customFile1" />
                                    </div>
                                  </div>
                                </a>
                              </div>
                              <div class="badge rounded-pill text-bg-primary ">
                                  <label class="form-label text-primary m-1" for="customFile1">Upload Foto<sup class="text-danger">*</sup></label>
                                  <input type="file" class="form-control d-none" id="customFile1" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="card-text">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-4">
                                <div class="form-outline">
                                  <input type="text" name="nama-produk" id="nama-produk" class="form-control" />
                                  <label class="form-label" for="nama-produk">Nama Produk<sup class="text-danger">*</sup></label>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-4">
                                <div class="form-outline">
                                  <input type="text" name="bahan-kemasan" id="bahan-kemasan" class="form-control">
                                  <label for="bahan-kemasan" class="form-label">Bahan Kemasan<sup class="text-danger">*</sup></label>
                                </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-4">
                                <div class="form-outline">
                                  <textarea class="form-control" name="bahan-produk" id="bahan-produk" rows="2"></textarea>
                                  <label class="form-label" for="bahan-produk">Bahan Produk<sup class="text-danger">*</sup></label>
                                </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-4">
                                <div class="form-outline">
                                  <textarea class="form-control" name="proses-pembuatan" id="proses-pembuatan" rows="2"></textarea>
                                  <label class="form-label" for="proses-pembuatan">Proses Pembuatan<sup class="text-danger">*</sup></label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 pb-4">
                      <div class="card bg-secondary bg-opacity-25">
                        <div class="card-header">Produk 2</div>
                        <div class="p-4">
                          <div class="card" style="height: 16rem; max-width: 20rem;">
                            <div class="card-body">
                              <div class="card-text">
                                <label class="form-label" for="">Foto Produk</label>
                              </div>
                              <div class="bg-image hover-overlay ripple pb-2" data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-thumbnail" style="height: auto; width: 14rem;">
                                <a href="#!" class="text-decoration-none">
                                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                    <div class="badge badge-light">
                                      <label class="form-label text-muted m-1" for="customFile1">Change Photo</label>
                                      <input type="file" class="form-control d-none" id="customFile1" />
                                    </div>
                                  </div>
                                </a>
                              </div>
                              <div class="badge rounded-pill text-bg-primary">
                                <label class="form-label text-primary m-1" for="customFile1">Upload Foto</label>
                                <input type="file" class="form-control d-none" id="customFile1" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="card-text">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-4">
                                <div class="form-outline">
                                  <input type="text" name="nama-produk" id="nama-produk" class="form-control" />
                                  <label class="form-label" for="nama-produk">Nama Produk</label>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-4">
                                <div class="form-outline">
                                  <input type="text" name="bahan-kemasan" id="bahan-kemasan" class="form-control">
                                  <label for="bahan-kemasan" class="form-label">Bahan Kemasan</label>
                                </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-4">
                                <div class="form-outline">
                                  <textarea class="form-control" name="bahan-produk" id="bahan-produk" rows="2"></textarea>
                                  <label class="form-label" for="bahan-produk">Bahan Produk</label>
                                </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-4">
                                <div class="form-outline">
                                  <textarea class="form-control" name="proses-pembuatan" id="proses-pembuatan" rows="2"></textarea>
                                  <label class="form-label" for="proses-pembuatan">Proses Pembuatan</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row p-4">
                <div class="col">
                  <div class="d-flex justify-content-end pt-5">
                    <button type="button" onclick="this.form.reset();" class="btn btn-outline-danger btn-lg">Reset all</button>
                    <button type="submit" class="btn btn-primary btn-lg ms-2">Submit form</button>
                    {{-- <button type="button" onclick="location.href='/'" class="btn btn-primary btn-lg ms-2">Submit form</button> --}}
                  </div>
                </div>
              </div>

            </form>
          </div>
        </div>

      </div>
    </div>

  </section>
  <!-- end form-halal section -->
