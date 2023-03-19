                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Detail Pengaduan Masyarakat</h1>

                    <hr>

                    <?php foreach ($joinpengaduan2 as $d) { ?>

                        <div class="row">
                            <!-- detail pengaduan -->
                            <div class="col-xl-6">
                                <div class="card shadow">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Detail Pengaduan</h6>
                                    </div>
                                    <div class="card-body">
                                        <p>tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<?= $d['tgl_pengaduan'] ?></p>
                                        <hr>
                                        <p>kategori &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<?= $d['kategori'] ?></p>
                                        <hr>
                                        <p>subkategori &nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<?= $d['subkategori'] ?></p>
                                        <hr>
                                        <p>Isi Laporan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?= $d['isi_laporan'] ?></p>
                                        <hr>
                                        <p>status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<?= $d['status'] ?></p>
                                        <hr>
                                    </div>
                                </div>
                            </div>

                            <!-- gambar detail pengaduan -->
                            <div class="col-xl-6">
                                <div class="card shadow">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Gambar laporan</h6>
                                    </div>
                                    <div class="card-body">
                                        <img src="<?= base_url('assets/upload/') . $d['foto'] ?>" style="height:285px;">
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                    <!-- Riwayat -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <div class="d-flex align-item-center">
                                <h6 class="m-0 font-weight-bold text-primary">Riwayat Laporan Pengaduan</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr role="row">
                                            <th width="10%">No</th>
                                            <th width="20%">Tanggal</th>
                                            <th>Tanggapan</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Tanggapan</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $c = 0;
                                        foreach ($tanggapan as $t) {
                                            $c = $c + 1; ?>

                                            <tr>
                                                <td><?= $c ?></td>
                                                <td><?= $t['tgl_tanggapan'] ?></td>
                                                <td><?= $t['tanggapan'] ?></td>
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