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

                <!-- DataTables -->
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card mb-3">
                                <div class="card-header d-flex align-items-center">
                                    <a href="<?= site_url('dosen/create') ?>"><i class="fas fa-plus"></i> Add New</a>
                                </div>
                                <div class="card-body">
                                    <?php if ($this->session->has_userdata('success')) : ?>
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <button class="close" data-dismiss="alert">&times;</button>
                                            <?= $this->session->flashdata('success'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="table-responsive">
                                        <table class="display table table-striped table-hover" id="dataTable" width="80%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Kode Dosen</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Mapel</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($dosens as $dosen) : ?>
                                                    <tr>
                                                        <td>
                                                            <?= $dosen->kd_dosen ?>
                                                        </td>
                                                        <td>
                                                            <?= $dosen->nama_dosen ?>
                                                        </td>
                                                        <td>
                                                            <?= $dosen->alamat_dosen ?>
                                                        </td>
                                                        <td>
                                                            <?= $dosen->nama_mapel ?>
                                                        </td>
                                                        <td class="align-middle" width="250">
                                                            <a href="<?= site_url('dosen/edit/' . $dosen->kd_dosen) ?>" class="btn btn-outline-info mr-2"><i class="fas fa-edit"></i> Edit</a>
                                                            <a onclick="deleteConfirm('<?= site_url('dosen/delete/' . $dosen->kd_dosen) ?>')" href="#!" class="btn btn-outline-danger"><i class="fas fa-trash ml-2"></i> Hapus</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>

                                            </tbody>
                                        </table>
                                    </div>
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

    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>

    <?php $this->load->view('layout/js'); ?>

</body>

</html>