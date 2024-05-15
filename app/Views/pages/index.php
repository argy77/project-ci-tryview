<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div id="wrapper">

    <!-- Sidebar -->
    <?= $this->include('layout/sidebar'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?= $this->include('layout/topbar'); ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <!-- <h1 class="h3 mb-4 text-gray-800">Lab Results</h1> -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Lab Results List</h6>
                    </div>
                    <div class="card-body">

                        <!-- <h2 class="text-center mb-4 mt-4">Lab Results List</h2> -->
                        <div class="row mb-2">

                            <div class="col d-flex justify-content-start">

                                <form action="<?= base_url('hasil-lab/showAllData') ?>" method="get">
                                    <button type="submit" class="btn btn-primary responsive-button mr-2">Show All</button>
                                </form>
                                <?php echo anchor('hasil-lab/', 'Show Today', 'class="btn btn-secondary responsive-button"'); ?>
                            </div>

                            <div class="col-lg-9">
                                <!-- <div class="float-right">
                                <form action="<?= base_url() ?>hasil-lab/search" method="post">
                                    <input type="text" name="keyword" placeholder="Search..">
                                    <button type="submit">Search</button>
                                </form>
                            </div> -->
                            </div>
                        </div>

                        <div>

                            <div class="table-responsive-sm">
                                <table class="table table-striped table-bordered" id="myTable" class="display">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Order Date System</th>
                                            <th>Visit Number</th>
                                            <th>HIS Reg No.</th>
                                            <th>Test Name</th>
                                            <th>Result</th>
                                            <!-- <th>HIS Test ID Order</th> -->
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($hasil_lab as $hasil) : ?>
                                            <tr>
                                                <td><?= $hasil['id'] ?></td>
                                                <td><?= $hasil['orderDateSystem'] ?></td>
                                                <td><?= $hasil['visitNumber'] ?></td>
                                                <td><?= $hasil['HisRegNo'] ?></td>
                                                <td><?= $hasil['TestName'] ?></td>
                                                <td><?= $hasil['Result'] ?></td>
                                                <td><?= $hasil['TransferFlag'] = '1' ? 'Sudah Keluar' : 'Belum'; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

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
                    <span>Copyright &copy; Sisfo RSPPN <?= date('Y'); ?></span>
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
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection('content'); ?>