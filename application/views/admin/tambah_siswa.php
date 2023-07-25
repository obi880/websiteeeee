  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Mahasiswa</h1>
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


  <p class="font-weight-bold">Akun Mahasiswa</p>
  <hr class="sidebar-divider">
  <form action="<?php echo base_url('admin/tambah_siswa'); ?>" method="post">
    <div class="form-group form-control-sm row">
      <label for="username" class="col-sm-2 col-form-label">Username </label>
      <div class="col-sm-8">
        <input type="text" name="username" class="form-control" id="username" placeholder="Berisi NIM MAHASISWA" value="<?php echo set_value('username'); ?>"  >
      </div>
    </div>
    
    <div class="form-group form-control-sm row">
      <label for="password" class="col-sm-2 col-form-label">Password </label>
      <div class="col-sm-8">
        <input type="password" name="password" class="form-control" id="password">
    </div>
    </div>
    
    <p class="font-weight-bold">Profil Siswa</p>
    <hr class="sidebar-divider"> 
      <div class="form-group form-control-sm row">
      <label for="nama" class="col-sm-2 col-form-label">Nama </label>
      <div class="col-sm-8">
        <input type="text" name="nama" class="form-control" id="nama" value="<?php echo set_value('nama'); ?>" >
      </div>
      </div>
    
      <div class="form-group form-control-sm row">
      <label for="nis" class="col-sm-2 col-form-label">NIM </label>
      <div class="col-sm-8">
        <input type="text" name="nis" class="form-control" id="nis" value="<?php echo set_value('nis'); ?>" >
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
          <option value="" selected> Dosen Pembimbing </option>
          <option value="1" <?php echo set_select('pembimbing', '1'); ?> >Rahman Iman</option>
          <option value="2" <?php echo set_select('pembimbing', '2'); ?> >Ahmad Sanjaya</option>
          <option value="3" <?php echo set_select('pembimbing', '3'); ?> >Ihwan Ahwan</option>
          <option value="4" <?php echo set_select('pembimbing', '3'); ?> >Bambang Sutejo </option>
          <option value="5" <?php echo set_select('pembimbing', '3'); ?> >Joko</option>
          <option value="6" <?php echo set_select('pembimbing', '3'); ?> >Irwanudin</option>
          <option value="7" <?php echo set_select('pembimbing', '3'); ?> >Imam Sutanto</option>
        </select>
      </div>
      </div>

      <div class="form-group form-control-sm row">
      <label for="nama" class="col-sm-2 col-form-label">Status Laporan </label>
      <div class="custom-control custom-checkbox">
      <div class="col-sm-8 mt-2"> 
        <input type="checkbox" name="status" class="custom-control-input" id="customCheck1" value="Terpenuhi">
        <label class="custom-control-label" for="customCheck1"> Disetujui</label>
      </div>
      </div>
      </div>
      <div class="form-group row pt-2">
        <div class="col-sm 2"></div>
        <div class="col-sm-10 ">
  <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
  </form> 