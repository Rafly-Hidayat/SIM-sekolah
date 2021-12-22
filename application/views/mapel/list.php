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
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <a href="<?= site_url('mapel/create') ?>"><i class="fas fa-plus"></i> Add New</a>
                                </div>
                                <div class="card-body">
                                    <?php if ($this->session->has_userdata('success')) : ?>
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <button class="close" data-dismiss="alert">&times;</button>
                                            <?= $this->session->flashdata('success'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="table-responsive">
                                        <table class="display table table-striped table-hover" id="basic-dataTable" width="80%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Kode Mapel</th>
                                                    <th>Nama Mapel</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($mapels as $mapel) : ?>
                                                    <tr>
                                                        <td>
                                                            <?= $mapel->kd_mapel ?>
                                                        </td>
                                                        <td>
                                                            <?= $mapel->nama_mapel ?>
                                                        </td>
                                                        <td width="250">
                                                            <a href="<?= site_url('mapel/edit/' . $mapel->kd_mapel) ?>" class="btn btn-outline-info mr-2"><i class="fas fa-edit"></i> Edit</a>
                                                            <a onclick="deleteConfirm('<?= site_url('mapel/delete/' . $mapel->kd_mapel) ?>')" href="#!" class="btn btn-outline-danger ml-2"><i class="fas fa-trash"></i> Hapus</a>
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