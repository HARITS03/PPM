                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Detail Pengaduan Masyarakat</h1>

                    <hr>

                    <!-- detail pengaduan -->
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pengaduan</h6>
                        </div>
                        <div class="card-body">
                            <?php foreach ($pengaduan as $p) { ?>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <label>Pelapor</label>
                                        <input type="text" class="form-control" value="<?= $p['nama'] ?>" disabled>
                                        
                                        <label class="mt-2">Tangal</label>
                                        <input type="text" class="form-control" value="<?= $p['tgl_pengaduan'] ?>" disabled>
                                        
                                        <label class="mt-2">Kategori</label>
                                        <input type="text" class="form-control" value="<?= $p['kategori'] ?>" disabled>
                                        
                                        <label class="mt-2">Sub Kategori</label>
                                        <input type="text" class="form-control" value="<?= $p['subkategori'] ?>" disabled>
                                    </div>
                                    <div class="col-xl-2">
                                        <label>Foto Pengaduan</label>
                                        <img src="<?=base_url('assets/upload/'). $p['foto']?>"height="285">
                                    </div>
                                </div>
                                <label>Isi Pengaduan</label>
                                <textarea type="text" class="form-control" disabled><?= $p['isi_laporan'] ?></textarea>
                            <?php } ?>
                        </div>
                    </div>


                    <!-- data tanggapan -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <div class="d-flex align-item-center">
                                <div class="d-flex align-item-center">
                                    <h6 class="m-0 font-weight-bold text-primary mt-1">Data Pengaduan</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <?= $this->session->flashdata('tindakan') ?>
                            <?php foreach ($pengaduan as $p) { ?>
                                <a type="sumbit" class="
                                <?php
                                if ($p['status'] == 'segera') {
                                    echo 'btn btn-primary btn-sm mb-3';
                                } else if ($p['status'] == 'proses') {
                                    echo 'btn btn-primary btn-sm mb-3';
                                } else {
                                    echo '';
                                }
                                ?>
                                " data-toggle="modal" data-target="#tanggapi<?= $p['id_pengaduan'] ?>">
                                    <?php
                                    if ($p['status'] == 'segera') {
                                        echo '<i class="fa fa-plus fa-sm"></i> Tanggapi';
                                    } else if ($p['status'] == 'proses') {
                                        echo '<i class="fa fa-plus fa-sm"></i> Tanggapi';
                                    } else {
                                        echo '';
                                    }
                                    ?>
                                </a>
                            <?php } ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr role="row">
                                            <th width="10%">No</th>
                                            <th width="20%">Tanggal</th>
                                            <th>Tanggapan</th>
                                            <th>Petugas</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Tanggapan</th>
                                            <th>Petugas</th>
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
                                                <td><?= $t['nama_petugas'] ?></td>
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

                <!-- tanggapan Modal-->
                <?php foreach ($pengaduan as $p) { ?>
                    <div class="modal fade" id="tanggapi<?= $p['id_pengaduan'] ?>" tabindex="-1" role="dialog" aria-labelledby="tanggapi" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tanggapi">Respon Tanggapan</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('adminpengaduanrespon/') . $p['id_pengaduan'] ?>" method="post">
                                        <div class="mt-3">
                                            <label for="">Tanggal Tanggapan</label>
                                            <input type="date" name="tgl_tanggapan" id="tgl_tanggapan" class="form-control" value="<?= date('Y-m-d') ?>" disabled>
                                        </div>
                                        <div class="mt-3">
                                            <label for="">Status</label>
                                            <select name="status" id="status" class="form-control">
                                                <option selected>-Pilih-</option>
                                                <option>Proses</option>
                                                <option>Selesai</option>
                                            </select>
                                        </div>
                                        <div class="mt-3">
                                            <label for="">Respon Tanggapan</label>
                                            <textarea type="text" name="tanggapan" id="tanggapan" class="form-control"></textarea>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>