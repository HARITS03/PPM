                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Petugas</h1>

                    <hr>

                    <!-- kategori -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <div class="d-flex align-item-center">
                                <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <?= $this->session->flashdata('kategori') ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr role="row">
                                            <th width="5%">No</th>
                                            <th width='20%'>Username</th>
                                            <th>Nama</th>
                                            <th>Telepon</th>
                                            <th>Level</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th width='20%'>Username</th>
                                            <th>Nama</th>
                                            <th>Telepon</th>
                                            <th>Level</th>
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