@extends('home')

@section('content')
    <div class="card m-5">
        <div class="card-header">
            <h3>Layanan Antar Barang Bukti</h3>
        </div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col">        
                        <div class="mb-3">
                            <label for="" class="form-label">No. Registrasi Barang Bukti</label>
                            <input type="email" name="noreg" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Status Penerima BB</label>
                            <select class="form-select" name="statuspenerima" aria-label="Default select example">
                                <option selected>Pilih</option>
                                <option value="1">Keluarga Korban</option>
                                <option value="2">KeluargaTerpidana</option>
                                <option value="3">Korban</option>
                              </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Alamat Lengkap</label>
                            <textarea class="form-control" name="alamat" id="validationTextarea" placeholder="Required example textarea"></textarea>
                        </div>
                    </div>
                    <div class="col" colspan="2">    
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Pemilik BB</label>
                            <input type="email" name="namapemilikbb" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nomor Tlp/WA</label>
                            <input type="email" name="notelp" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Keterangan BB</label>
                            <textarea class="form-control" name="keteranganbb" id="validationTextarea" placeholder="Required example textarea"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              <!-- Tombol yang memicu modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSaya">
    Klik Saya
  </button>
  
  <!-- Contoh Modal -->
  <div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalSayaLabel">Judul Modal Di Sini</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Halo, ini modal sederhana.
          <br/>
          Seri Tutorial Bootstrap 4 lengkap dari dasar sampai mahir.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary">Oke</button>
        </div>
      </div>
    </div>
  </div>
        </div>
    </div>
@endsection