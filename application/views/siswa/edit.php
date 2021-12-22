<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('layout/head'); ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <?php $this->load->view('layout/sidebar'); ?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <?php $this->load->view('layout/navbar'); ?>

                <!-- End of Topbar -->

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <a href="<?= site_url('siswa/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                                </div>
                                <div class="card-body">

                                    <form action="<?= site_url('siswa/update'); ?>" method="post" enctype="multipart/form-data">

                                        <input type="hidden" name="id" value="<?= $siswa->nis ?>" />

                                        <div class="form-group">
                                            <label for="nis">NIS</label>
                                            <input class="form-control <?= form_error('nis') ? 'is-invalid' : '' ?>" type="text" readonly name="nis" min="0" placeholder="Masukan nis*" value="<?= $siswa->nis ?>" />
                                            <div class="invalid-feedback">
                                                <?= form_error('nis') ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="nama_siswa">Nama Siswa</label>
                                            <input class="form-control <?= form_error('nama_siswa') ? 'is-invalid' : '' ?>" type="text" name="nama_siswa" min="0" placeholder="Masukan nama siswa*" value="<?= $siswa->nama_siswa ?>" />
                                            <div class="invalid-feedback">
                                                <?= form_error('nama_siswa') ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="kd_jurusan">Nama Jurusan</label>
                                            <select class="form-control <?= form_error('kd_jurusan') ? 'is-invalid' : '' ?>" name="kd_jurusan">
                                                <?php foreach ($jurusans as $jurusan) : ?>
                                                    <option value="<?= $jurusan->kd_jurusan; ?>"><?= $jurusan->nama_jurusan; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= form_error('kd_jurusan') ?>
                                            </div>
                                        </div>

                                        <input class="btn btn-outline-success" type="submit" name="btn" value="Edit" />
                                    </form>

                                </div>

                                <div class="card-footer small text-muted">
                                    * required fields
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view('layout/footer'); ?>
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
    <?php $this->load->view('layout/modal'); ?>

    <?php $this->load->view('layout/js'); ?>

</body>

</html>