                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Petugas</h1>

                    <hr>

                    <!-- petugas -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <div class="d-flex align-item-center">
                                <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
                                <a type="sumbit" href="" class="btn btn-primary btn-round ml-auto btn-sm" data-toggle="modal" data-target="#tambahpetugas"><i class="fa fa-plus fa-sm"></i> Petugas</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <?= $this->session->flashdata('petugas') ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr role="row">
                                            <th width="5%">No</th>
                                            <th width='20%'>Username</th>
                                            <th>Nama</th>
                                            <th>Telepon</th>
                                            <th>Level</th>
                                            <th width='11%'>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th width='20%'>Username</th>
                                            <th>Nama</th>
                                            <th>Telepon</th>
                                            <th>Level</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $c = 0;
                                        foreach ($petugas as $p) {
                                            $c = $c + 1; ?>
                                            <tr>
                                                <td><?= $c ?></td>
                                                <td><?= $p['username'] ?></td>
                                                <td><?= $p['nama_petugas'] ?></td>
                                                <td><?= $p['telp'] ?></td>
                                                <td><?= $p['level'] ?></td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editpetugas<?= $p['id_petugas'] ?>"><i class="fa fa-edit"></i></button>
                                                    <a href="<?= base_url('adminbanpetugas/') . $p['id_petugas'] ?>" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i></a>
                                                    <a href="<?= base_url('admindelpetugas/') . $p['id_petugas'] ?>" type="submit" class="btn btn-warning btn-sm" onclick="return confirm('Yakin ingin hapus?')"><i class="fa fa-trash"></i></a>
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

                <!-- tambah petugas Modal-->
                <div class="modal fade" id="tambahpetugas" tabindex="-1" role="dialog" aria-labelledby="tambahpetugas" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahpetugas">Tambah Data Petugas</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('adminregis') ?>" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Username</label>
                                                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Telepon</label>
                                                <input type="number" class="form-control" id="telepon" name="telepon" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Level</label>
                                                <select name="level" id="level" class="form-control">
                                                    <option selected value="">- Pilih -</option>
                                                    <option>Admin</option>
                                                    <option>Petugas</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- edit petugas Modal-->
                <?php foreach ($petugas as $p) { ?>
                    <div class="modal fade" id="editpetugas<?= $p['id_petugas'] ?>" tabindex="-1" role="dialog" aria-labelledby="editpetugas" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editpetugas">Edit Data Petugas</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('admineditpetugas/') . $p['id_petugas'] ?>" method="post">
                                        <div class="mb-3">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" value="<?= $p['nama_petugas'] ?>">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Telepon</label>
                                                    <input type="number" class="form-control" id="telepon" name="telepon" aria-describedby="emailHelp" value="<?= $p['telp'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Level</label>
                                                    <select name="level" id="level" class="form-control">
                                                        <option selected value="<?= $p['level'] ?>"><?= $p['level'] ?></option>
                                                        <option>Admin</option>
                                                        <option>Petugas</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>