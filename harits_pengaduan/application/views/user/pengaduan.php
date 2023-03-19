                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Riwayat Pengaduan Masyarakat</h1>

                    <hr>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <div class="d-flex align-item-center">
                                <h6 class="m-0 font-weight-bold text-primary mt-2">Data Pengaduan</h6>
                                <a type="sumbit" href="<?= base_url('pengaduan2') ?>" class="btn btn-primary btn-round ml-auto btn-sm"><i class="fa fa-plus fa-sm"></i> Pengaduan</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <?= $this->session->flashdata('pengaduan') ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr role="row">
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Kategori</th>
                                            <th width="50%">Isi</th>
                                            <th width="15%">Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Kategori</th>
                                            <th>Isi</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $c = 0;
                                        foreach ($joinpengaduan as $p) {
                                            $c = $c + 1; ?>
                                            <tr>
                                                <td><?= $c ?></td>
                                                <td><?= $p['tgl_pengaduan'] ?></td>
                                                <td><?= $p['kategori'] ?></td>
                                                <td><?= $p['isi_laporan'] ?></td>
                                                <td>
                                                    <a href="<?= base_url('pengaduandetail/') . $p['id_pengaduan'] ?>" class="
                                                    btn <?php if ($p['status'] == 'segera') {
                                                            echo "btn-dark";
                                                        } else if ($p['status'] == "proses") {
                                                            echo 'btn-warning';
                                                        } else {
                                                            echo 'btn-success';
                                                        } ?> btn-block btn-xs btn-sm"> <?= $p['status'] ?> </a>
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