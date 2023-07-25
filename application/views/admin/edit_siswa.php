<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Edit Data Mahasiswa</h1>
  <hr class="sidebar-divider ">

  <!-- Profile -->
  <div class="col-lg-10 ">
    <div class="row">
      <div class="col">
      <?php echo validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>', '</div>') ?>
      </div>
    </div>
    <div class="row">
      <div class="col">

<form action="<?php echo base_url('admin/siswa_edit'); ?>" method="post">
  <p class="font-weight-bold">Profil Mahasiswa</p>
  <hr class="sidebar-divider"> 
    <input type="hidden" name="id" value="<?= $user['id']; ?>">
  
    <div class="form-group form-control-sm row">
    <label for="nis" class="col-sm-2 col-form-label">NIM </label>
    <div class="col-sm-8">
      <input type="text" name="nis" class="form-control" readonly id="nis" value="<?= $user['nis']; ?>" >
    </div>
    </div>

    <div class="form-group form-control-sm row">
    <label for="nama" class="col-sm-2 col-form-label">Nama </label>
    <div class="col-sm-8">
      <input type="text" name="nama" class="form-control" id="nama" value="<?= $user['nama']; ?>" >
    </div>
    </div>
    
    <div class="form-group form-control-sm row">
  <label class="col-sm-2 col-form-label">Jurusan</label>
  <div class="col-sm-8 mt-2">
    <select class="form-select" name="kelas">
      <option value="Sistem Informasi" <?php echo set_select('kelas', 'Sistem Informasi'); ?>>Sistem Informasi</option>
      <option value="Teknik Informatika" <?php echo set_select('kelas', 'Teknik Informatika'); ?>>Teknik Informatika</option>
    </select>
  </div>
</div>


    <div class="form-group form-control-sm row">
    <label for="nama" class="col-sm-2 col-form-label">Pembimbing </label>
    <div class="col-sm-8">
      <select class="custom-select" name="pembimbing">
        <option value="" >-- Dosen Pembimbing --</option>
        <option value="1" <?php if($user['id_pembimbing']== 1) echo 'selected = "selected"';?> >Rahman Iman</option>
        <option value="2" <?php if($user['id_pembimbing']== 2) echo 'selected = "selected"';?> >Ahmad Sanjaya</option>
        <option value="3" <?php if($user['id_pembimbing']== 3) echo 'selected = "selected"';?> >Ihwan Ahwan/option>
        <option value="4" <?php if($user['id_pembimbing']== 4) echo 'selected = "selected"';?> >Bambang Sutejo </option>
        <option value="5" <?php if($user['id_pembimbing']== 5) echo 'selected = "selected"';?> >Joko</option>
        <option value="6" <?php if($user['id_pembimbing']== 6) echo 'selected = "selected"';?> >Irwanudin</option>
        <option value="6" <?php if($user['id_pembimbing']== 7) echo 'selected = "selected"';?> >Imam Sutanto</option>
      </select>
    </div>
    </div>

    <div class="form-group form-control-sm row">
    <label for="nama" class="col-sm-2 col-form-label">Status Laporan </label>
    <div class="custom-control custom-checkbox">
    <div class="col-sm-8 mt-2"> 
      <input type="checkbox" name="status" class="custom-control-input" id="customCheck1" value="Terpenuhi" 
      <?php if($user['status']) echo 'checked = "checked"';?>>
      <label class="custom-control-label" for="customCheck1"> Disetujui</label>
    </div>
    </div>
    </div>
    <div class="form-group row pt-2">
      <div class="col-sm 2"></div>
      <div class="col-sm-10 ">
<button type="submit" class="btn btn-primary">Submit</button>
      </div>
       <div class="p small pt-3 pl-3">
         *Jika Terdapat kesalahan pada NIS siswa, hapus data ini!
       </div>
    </div>
</form> 

