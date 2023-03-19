<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profil User</h1>

    <hr>

    <div class="row">
        <div class="col-lg-3">
            <div class="card shadow" style="width: 310px;">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Icon User</h6>
                </div>
                <div class="card-body">
                    <img src="<?= base_url() ?>assets/sb-admin/img/undraw_profile.svg" style="width: 250px;height:250px;margin-left:10px;">
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Biodata</h6>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('profil') ?>
                    <p>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $get['nama'] ?></p>
                    <p>Username &nbsp;&nbsp;: <?= $get['username'] ?></p>
                    <p>NIK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $get['nik'] ?></p>
                    <p>Telepon &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $get['telp'] ?></p>

                    <hr>
                    <button class="btn btn-primary btn-sm" data-target="#edit<?= $get['id'] ?>" data-toggle="modal"><i class="fa fa-edit"></i> Edit Profil</button>
                    <button class="btn btn-danger btn-sm" data-target="#resetpw<?= $get['id'] ?>" data-toggle="modal"><i class="fa fa-sync"></i> Reset Password</button>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Pelaporan Pengaduan Masyarakat 2023</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih Logout untuk keluar dari sesi</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- edit user Modal-->
<div class="modal fade" id="edit<?= $get['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit">Edit data user</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('editprofilmas/') . $get['nik'] ?>" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <label>NIK</label>
                            <input type="number" name="nik" id="nik" class="form-control" disabled placeholder="<?= $get['nik'] ?>">
                        </div>

                        <div class="col-lg-6">
                            <label>Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="<?= $get['username'] ?>" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mt-3 col-lg-6">
                            <label>Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="<?= $get['nama'] ?>">
                        </div>
                        <div class="mt-3 col-lg-6">
                            <label>Telepon</label>
                            <input type="number" name="telp" id="telp" class="form-control" value="<?= $get['telp'] ?>">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- reset pw user Modal-->
<div class="modal fade" id="resetpw<?= $get['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit">Edit data user</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('resetpasswordms/') . $get['nik'] ?>" method="post">
                    <label>New Password</label>
                    <div class="input-group">
                        <input type="password" id="password" name="password" class="form-control">
                        <div class="input-group-append">
                            <span id="mybutton" onclick="change()" class="input-group-text">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <p class="mt-1" style="color:#FF6543;"><i class=" fa fa-exclamation-circle fa-sm"></i> Password wajib diingat !!</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>