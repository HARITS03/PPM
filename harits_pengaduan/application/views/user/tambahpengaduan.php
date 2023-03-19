                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Pengaduan Masyarakat</h1>

                    <hr>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pengaduan</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('usertambahpengaduan') ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Pilih Kategori</label>
                                        <select class="form-select form-control" name="kategori" id="kategori">
                                            <option selected>- Pilih -</option>
                                            <?php foreach ($kategori as $k) { ?>
                                                <option value="<?= $k['id_kategori'] ?>"><?= $k['kategori'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Pilih Sub Kategori</label>
                                        <select class="form-select form-control" name="subkategori" id="subkategori">
                                            <option selected>- Pilih -</option>

                                        </select>
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label">Pilih Tanggal</label>
                                        <input type="date" name="tgl_pengaduan" id="tgl_pengaduan" class="form-control" value="<?= date('Y-m-d') ?>" disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-8 mb-3">
                                        <label for="isi" class="form-label">Isi laporan</label>
                                        <textarea class="form-control" id="isi" name="isi" rows="3"></textarea>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="formFile" class="form-label">Tambahkan foto</label>
                                        <input class="form-control" type="file" id="foto" name="foto">
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary">Laporkan</button>
                                <a type="button" href="<?= base_url('pengaduan2') ?>" class="btn btn-danger">Reset</a>
                        </div>
                        </form>
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