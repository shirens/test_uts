<div class="container mt-4">
  <div class="row">
    <div class="col-lg-6">
      <?php flasher::flash();?>
</div>
</div>
<div class="row">
  <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
  Tambah Data Siswa
</button>
<br><br>
        <h3>Daftar Siswa</h3>
        <ul class="list-group">
        <?php foreach($data['mhs'] as $siswa) : ?>
  <li class="list-group-item">
    <?php echo $siswa['nama']; ?>
    <a href="<?php echo BASEURL; ?>/siswa/hapus/<?php echo $siswa['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');">hapus
        </a>
    <a href="<?php echo BASEURL; ?>/siswa/detail/<?php echo $siswa['id']; ?>" class="badge badge-primary float-right ml-1">detail
        </a>
        </li>
        <?php endforeach; ?>
        </ul>
     </div>
  </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo BASEURL; ?>/siswa/tambah" method="post">
          <input type="hidden" id="id" name="id">
          <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="form-group">
    <label for="nim">NIM</label>
    <input type="text" class="form-control" id="nim" name="nim">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Sistem Informasi">Sistem Informasi</option>
      <option value="Manajemen Informatika">Manajemen Informatika</option>
        </select>
  </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
    </div>
  </div>
</div>
        </form>