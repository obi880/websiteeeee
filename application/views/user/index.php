  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Mahasiswa</h1>
    <hr class="sidebar-divider ">
    <div class="col-lg-10">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header font-weight-bold h5">
              <?= $user['nis'] ?> - <?= $user['nama']; ?> 
            </div>
            <div class="card-body">
              <p class="font-weight-bold">Akun Mahasiswa</p>
              <hr class="sidebar-divider">
              <div class="col-lg-6">  
                <table class="table table-borderless ">
                  <tr>
                      <td scope="row">Username</td>
                      <td>:</td>
                      <td><?= $user['username']; ?></td>
                     </tr> 
                </table>
              </div>  
              <p class="font-weight-bold">Profil Mahasiswa</p>
              <hr class="sidebar-divider"> 
                <div class="col-lg-6">  
                  <table class="table table-borderless">
                    <tr>
                        <td scope="row">NIM</td>
                        <td>:</td>
                        <td><?= $user['nis']; ?></td>
                </tr>
                <tr>
                        <td scope="row">Nama</td>
                        <td>:</td>
                        <td><?= $user['nama']; ?></td>
                </tr>
                <tr>
                        <td scope="row">Jurusan</td>
                        <td>:</td>
                        <td><?= $user['kelas']; ?></td>
                </tr>
                <tr>
                        <td scope="row">Pembimbing</td>
                        <td>:</td>
                        <td><?= $user['pembimbing']; ?></td>
                </tr>
                <tr>
                  <td scope="row">Status Laporan</td>
                  <td>:</td>
                  <td><?php if ($user['status']) echo '<a class="badge badge-success text-white" href="#" data-toggle="modal" data-target="#confirmOKModal">Disetujui</a>'; 
                        else echo '<a class="badge badge-danger" href="#" data-toggle="modal" data-target="#confirmKOModal">Belum Disetujui</a>' ?>
                  </td>
                </tr>
                  </table>
                </div>  
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->