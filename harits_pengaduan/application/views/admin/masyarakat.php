                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Masyarakat</h1>

                    <hr>

                    <!-- kategori -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <div class="d-flex align-item-center">
                                <h6 class="m-0 font-weight-bold text-primary">Data Masyarakat</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <?= $this->session->flashdata('masyarakat') ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr role="row">
                                            <th width="5%">No</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Telepon</th>
                                            <th width='11%'>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Telepon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $c = 0;
                                        foreach ($masyarakat as $m) {
                                            $c = $c + 1; ?>
                                            <tr>
                                                <td><?= $c ?></td>
                                                <td><?= $m['nik'] ?></td>
                                                <td><?= $m['nama'] ?></td>
                                                <td><?= $m['username'] ?></td>
                                                <td><?= $m['telp'] ?></td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit<?= $m['id'] ?>"><i class="fa fa-edit"></i></button>
                                                    <a href="<?= base_url('adminbanmasy/') . $m['id'] ?>" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i></a>
                                                    <a href="<?= base_url('admindelmasy/') . $m['id'] ?>" type="submit" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
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

                <!-- edit Modal-->
                <?php foreach ($masyarakat as $m) { ?>
                    <div class="modal fade" id="edit<?= $m['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="edit">Edit Data Masyarakat</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('admineditmasy/') . $m['id'] ?>" method="post">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="">Nama</label>
                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $m['nama'] ?>">

                                            </div>
                                            <div class="col-lg-6">
                                                <label for="">NIK</label>
                                                <input type="number" class="form-control" name="nik" id="nik" value="<?= $m['nik'] ?>">
                                            </div>
                                        </div>
                                        <label class="mt-3">Telepon</label>
                                        <input type="number" class="form-control" name="telp" id="telp" value="<?= $m['telp'] ?>">
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="radio" name="active" id="active">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Aktifasi Akun
                                            </label>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-primary" type="submit">Update</a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>