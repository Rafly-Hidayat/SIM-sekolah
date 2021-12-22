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

                                    <a href="<?= site_url('jurusan/') ?>"><i class="fas fa-arrow-left"></i>
                                        Back</a>
                                </div>
                                <div class="card-body">

                                    <form action="<?= site_url('jurusan/update'); ?>" method="post" enctype="multipart/form-data">

                                        <input type="hidden" name="kode" value="<?= $jurusan->kd_jurusan ?>" />

                                        <div class="form-group">
                                            <label for="kd_jurusan">Kode Jurusan</label>
                                            <input class="form-control <?= form_error('kd_jurusan') ? 'is-invalid' : '' ?>" type="text" readonly name="kd_jurusan" min="0" placeholder="Masukan kode jurusan*" value="<?= $jurusan->kd_jurusan ?>" />
                                            <div class="invalid-feedback">
                                                <?= form_error('kd_jurusan') ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="nama_jurusan">Nama Jurusan</label>
                                            <input class="form-control <?= form_error('nama_jurusan') ? 'is-invalid' : '' ?>" type="text" name="nama_jurusan" min="0" placeholder="Masukan nama jurusan*" value="<?= $jurusan->nama_jurusan ?>" />
                                            <div class="invalid-feedback">
                                                <?= form_error('nama_jurusan') ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="kd_dosen">Nama Dosen</label>
                                            <select class="form-control <?= form_error('kd_dosen') ? 'is-invalid' : '' ?>" name="kd_dosen">
                                                <?php foreach ($dosens as $dosen) : ?>
                                                    <option value="<?= $dosen->kd_dosen; ?>"><?= $dosen->nama_dosen; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?= form_error('kd_dosen') ?>
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