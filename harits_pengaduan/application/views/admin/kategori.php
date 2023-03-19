                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Kategori</h1>

                    <hr>

                    <!-- kategori -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <div class="d-flex align-item-center">
                                <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
                                <a type="sumbit" href="<?= base_url('pengaduan2') ?>" class="btn btn-primary btn-round ml-auto btn-sm" data-toggle="modal" data-target="#tambahkategori"><i class="fa fa-plus fa-sm"></i> Kategori</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <?= $this->session->flashdata('kategori') ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr role="row">
                                            <th width="10%">No</th>
                                            <th>Kategori</th>
                                            <th width="15%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $c = 0;
                                        foreach ($kategori as $k) {
                                            $c = $c + 1; ?>
                                            <tr>
                                                <td><?= $c ?></td>
                                                <td><?= $k['kategori'] ?></td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editkategori<?= $k['id_kategori'] ?>"><i class="fa fa-edit"></i></button>
                                                    <a href="<?= base_url('admindelkategori/') ?><?= $k['id_kategori'] ?>" onclick="return confirm('Yakin ingin dihapus')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>

                                                    <!-- edit -->
                                                    <div class="modal fade" id="editkategori<?= $k['id_kategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="editkategori" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editkategori">Edit Data kategori</h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="<?= base_url('admineditkategori/') . $k['id_kategori'] ?>" method="post">
                                                                        <label for="">Kategori</label>
                                                                        <input type="text" class="form-control" name="kategori" id="kategori" value="<?= $k['kategori'] ?>">
                                                                </div>
                                                                <div class="modal-footer mt-3">
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                    <button class="btn btn-primary" href="login.html">Update</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- sub kategori -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <div class="d-flex align-item-center">
                                <h6 class="m-0 font-weight-bold text-primary">Data Sub Kategori</h6>
                                <button type="sumbit" class="btn btn-primary btn-round ml-auto btn-sm" data-toggle="modal" data-target="#tambahsubkat"><i class="fa fa-plus fa-sm"></i> Sub Kategori</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <?= $this->session->flashdata('subkat') ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="sub" width="100%" cellspacing="0">
                                    <thead>
                                        <tr role="row">
                                            <th width="10%">No</th>
                                            <th>Kategori</th>
                                            <th>Subkategori</th>
                                            <th width="15%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $c = 0;
                                        foreach ($kategori_join as $ks) {
                                            $c = $c + 1; ?>
                                            <tr>
                                                <td><?= $c ?></td>
                                                <td><?= $ks['kategori'] ?></td>
                                                <td><?= $ks['subkategori'] ?></td>
                                                <td>
                                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editsubkat<?= $ks['id_subkategori'] ?>"><i class="fa fa-edit"></i></button>
                                                    <a class="btn btn-danger btn-sm" href="<?= base_url('admindelsubkat/') . $ks['id_subkategori'] ?>" onclick="return confirm('Yakin ingin menghapus')"><i class="fa fa-trash"></i></a>

                                                    <!-- edit -->
                                                    <div class="modal fade" id="editsubkat<?= $ks['id_subkategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="editsubkat" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editsubkat">Edit Data kategori</h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="<?= base_url('admineditsubkat/') . $ks['id_subkategori'] ?>" method="post">
                                                                        <label for="">Kategori</label>
                                                                        <select name="kategori" id="kategori" class="form-control">
                                                                            <?php foreach ($kategori as $k) { ?>
                                                                                <option value="<?= $k['id_kategori'] ?>"><?= $k['kategori'] ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                        <label class="mt-3"> Subkategori </label>
                                                                        <input type="text" class="form-control" name="subkategori" id="subkategori" value="<?= $ks['subkategori'] ?>">
                                                                </div>
                                                                <div class="modal-footer mt-3">
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                                    <button class="btn btn-primary" type="submit">Update</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
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

                <!-- kategori Modal-->
                <div class="modal fade" id="tambahkategori" tabindex="-1" role="dialog" aria-labelledby="tambahkategori" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahkategori">Tambah Data kategori</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admintambahkategori') ?>" method="post">
                                    <label for="">Kategori</label>
                                    <input type="text" class="form-control" name="kategori" id="kategori">
                            </div>
                            <div class="modal-footer mt-3">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" href="login.html">Tambah</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- subkategori tambah -->
                <div class="modal fade" id="tambahsubkat" tabindex="-1" role="dialog" aria-labelledby="tambahsubkat" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahsubkat">Tambah Data Sub kategori</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admintambahsubkat') ?>" method="post">
                                    <div class="mb-3">
                                        <label for="kategori">Kategori</label>
                                        <select name="kategori" id="kategori" class="form-control">
                                            <option selected value="">-pilih-</option>
                                            <?php foreach ($kategori as $k) { ?>
                                                <option value="<?= $k['kategori'] ?>"><?= $k['kategori'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Sub Kategori</label>
                                        <input type="text" class="form-control" name="subkategori" id="subkategori">
                                    </div>
                            </div>
                            <div class="modal-footer mt-3">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" href="login.html">Tambah</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>