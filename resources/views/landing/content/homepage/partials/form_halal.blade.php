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
                              <input type="text" name="nama_usaha" id="nama_usaha" class="form-control" required>
                              <label class="form-label" for="nama_usaha">Nama Usaha<sup class="text-danger">*</sup></label>
                            </div>
                          </div>
                          <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 pb-4">
                            <div class="form-outline">
                              <input type="text" name="alamat_usaha" id="alamat_usaha" class="form-control" required>
                              <label for="alamat_usaha" class="form-label">Alamat Usaha<sup class="text-danger">*</sup></label>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pb-4">
                            <div class="form-outline">
                              <input type="text" name="jenis_usaha" id="jenis_usaha" class="form-control" required>
                              <label class="form-label" for="jenis_usaha">Jenis Usaha<sup class="text-danger">*</sup></label>
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
                              <input type="text" name="bahan_cleaning_agent" id="bahan_cleaning_agent" class="form-control" required>
                              <label for="bahan_cleaning_agent" class="form-label">Bahan Cleaning Agent<sup class="text-danger">*</sup></label>
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
                  <div class="row" id="row_product">
                    <input type="hidden" name="row_product_length" id="row_product_length">
                    <input type="hidden" name="index_card" id="index_card">
                    <div class="col-lg-6 pb-4">
                      <div class="card bg-secondary bg-opacity-25">
                        <div class="card-header">Produk 1<sup class="text-danger">*</sup></div>
                        <div class="p-4 pb-2">
                          <div class="card" style="height: 16rem; max-width: 20rem;">
                            <div class="card-body">
                              <div class="card-text">
                                <label class="form-label" for="">Foto Produk</label>
                              </div>
                              <div class="bg-image hover-overlay ripple pb-2" data-mdb-ripple-color="light">
                                  <img id="output1" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-thumbnail" style="height: 9rem; width: auto;">
                              </div>
                              <div class="badge rounded-pill text-bg-primary ">
                                  <label class="form-label text-primary m-1" for="foto_produk_1">Upload Foto<sup class="text-danger">*</sup></label>
                                  <input type="file" class="form-control d-none" name="foto_produk_1" id="foto_produk_1" accept="image/*" onchange="loadFile(event, this.parentNode.parentNode.childNodes[3].childNodes[1].id)" required>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="card-text">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-4">
                                <div class="form-floating">
                                  <input type="text" name="nama_produk_1" id="nama_produk_1" class="form-control" required>
                                  <label for="nama_produk_1">Nama Produk<sup class="text-danger">*</sup></label>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-4">
                                <div class="form-floating">
                                  <input type="text" class="form-control" name="bahan_kemasan_1" id="bahan_kemasan_1" required>
                                  <label for="bahan_kemasan_1">Bahan Kemasan<sup class="text-danger">*</sup></label>
                                </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-4">
                                <div class="form-floating">
                                  <textarea class="form-control" name="bahan_produk_1" id="bahan_produk_1" rows="2" required></textarea>
                                  <label for="bahan_produk_1">Bahan Produk<sup class="text-danger">*</sup></label>
                                </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-4">
                                <div class="form-floating">
                                  <textarea class="form-control" name="proses_pembuatan_1" id="proses_pembuatan_1" rows="2" required></textarea>
                                  <label for="proses_pembuatan_1">Proses Pembuatan<sup class="text-danger">*</sup></label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button id="add_product_card" onclick="addProduct()" class="btn btn-outline-primary" type="button"><i class="fa-duotone fa-plus fa-xl"></i> Add Product</button>
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

<script>

    var amount_card_product = 1;
    var max_amount_card_product = 10;

    var row_product = document.getElementById('row_product');

    document.getElementById('row_product_length').value = row_product.children.length;
    
    var index_card = [];
    document.getElementById('index_card').value = index_card;

    // script for img-preview
    var loadFile = function(event, id_prev) {
        // console.log(id_prev);
        var output = document.getElementById(id_prev);
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };

    // script for add card product
    function addProduct() {

        if (row_product.children.length <= max_amount_card_product){
            amount_card_product++;
            var new_product = document.createElement('div');
            new_product.setAttribute('class', 'col-lg-6 pb-4');
            new_product.setAttribute('id', 'card-product-' + amount_card_product);

            new_product.innerHTML =
            '<div class="card bg-secondary bg-opacity-25"><div class="card-header">Produk ' + amount_card_product + '<button type="button" class="btn-close" style="float:right;" onclick="deleteProduct(this.parentNode.parentNode.parentNode.id)"></button></div><div class="p-4 pb-2"><div class="card" style="height: 16rem; max-width: 20rem;"><div class="card-body" id="initt"><div class="card-text"><label class="form-label" for="">Foto Produk</label></div><div class="bg-image hover-overlay ripple pb-2" data-mdb-ripple-color="light" id="cc"><img id="output' + amount_card_product + '" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-thumbnail" style="height: 9rem; width: auto;"></div><div class="badge rounded-pill text-bg-primary "><label class="form-label text-primary m-1" for="foto_produk_' + amount_card_product + '">Upload Foto<sup class="text-danger">*</sup></label><input type="file" class="form-control d-none" name="foto_produk_' + amount_card_product + '" id="foto_produk_' + amount_card_product + '" accept="image/*" onchange="loadFile(event, this.parentNode.parentNode.childNodes[1].childNodes[0].id)" /></div></div></div></div><div class="card-body"><div class="card-text"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-4"><div class="form-floating"><input type="text" name="nama_produk_' + amount_card_product + '" id="nama_produk_' + amount_card_product + '" class="form-control" /><label class="form-label" for="nama_produk_' + amount_card_product + '">Nama Produk<sup class="text-danger">*</sup></label></div></div><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-4"><div class="form-floating"><input type="text" name="bahan_kemasan_' + amount_card_product + '" id="bahan_kemasan_' + amount_card_product + '" class="form-control"><label for="bahan_kemasan_' + amount_card_product + '" class="form-label">Bahan Kemasan<sup class="text-danger">*</sup></label></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-4"><div class="form-floating"><textarea class="form-control" name="bahan_produk_' + amount_card_product + '" id="bahan_produk_' + amount_card_product + '" rows="2"></textarea><label class="form-label" for="bahan_produk_' + amount_card_product + '">Bahan Produk<sup class="text-danger">*</sup></label></div></div><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-4"><div class="form-floating"><textarea class="form-control" name="proses_pembuatan_' + amount_card_product + '" id="proses_pembuatan_' + amount_card_product + '" rows="2"></textarea><label class="form-label" for="proses_pembuatan_' + amount_card_product + '">Proses Pembuatan<sup class="text-danger">*</sup></label></div></div></div></div></div></div>';

            row_product.appendChild(new_product);

            index_card.push(amount_card_product)

            document.getElementById('row_product_length').value = row_product.children.length;
        } else {
            alert('Maksimal penambahan produk adalah ' + max_amount_card_product);
            document.getElementById("add_product_card").disabled = "disabled";
        }
    };

    // script for delete card product
    function deleteProduct(id) {
        const el = document.getElementById(id);
        var el_id = el.id;
        // console.log(el_id.replace("card-product-", ""));
        index_card.splice(index_card.indexOf(el_id.replace("card-product-", "")));
        el.remove();
        if (row_product.children.length <= max_amount_card_product) {
            document.getElementById("add_product_card").disabled = false;
        }
        document.getElementById('row_product_length').value = row_product.children.length;
    }

    // console.log(document.getElementById('row_product_length').value);
</script>
