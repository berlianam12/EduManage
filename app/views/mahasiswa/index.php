<div class="mt-5">
  <div class="row">
    <div class="col-lg-6 ms-5">
      <?php Flasher::flash();?>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahData ms-5" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Data Mahasiswa
      </button>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL;?>/mahasiswa/cari" method="post">
        <div class="input-group ms-5">
          <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword" autocomplete="off">
          <button class="btn btn-outline-secondary" type="submit" id="tombolCari">Cari</button>
        </div>
      </form>
    </div>
  </div>

  <!-- tampil -->
  <div class="row">
    <div class="col-lg-6">
      <h3 class="ms-5">Daftar Mahasiswa</h3>
      <ul class="list-group">
      <?php foreach($data['mhs'] as $mhs) : ?>
      <li class="list-group-item ms-5"><?= $mhs['nama']; ?>
      <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge rounded-pill text-bg-info ms-1">Detail</a>
      <a href="<?= BASEURL;?>/mahasiswa/edit/<?= $mhs['id']; ?>" class="badge rounded-pill text-bg-warning ms-1 tampilFormEdit" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id'];?>">Edit</a>
      <a href="<?= BASEURL;?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge rounded-pill text-bg-danger ms-1" onclick="return confirm('yakin?');">Delete</a>
      </li>
      <?php endforeach;?>
    </ul>
    </div>
  </div>
</div>

    
<div>
  <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?= BASEURL;?>/mahasiswa/create" method="post">
          <input type="hidden" name="id" id="id">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim">
            </div>
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                    <option selected>Jurusan</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Sains Data">Sains Data</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

