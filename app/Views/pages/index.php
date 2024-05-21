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
            <?php if (session()->get('isLoggedIn')) : ?>

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
                                <form action="hasil-lab/search" method="post">
                                    <input type="text" name="keyword" placeholder="Search..">
                                    <button type="submit">Search</button>
                                </form>
                            </div> -->
                                </div>
                            </div>

                            <div>

                                <!-- Table daftar permintaan wynacom -->
                                <div class="table-responsive-sm">
                                    <table class="table table-striped table-bordered" id="myTable" class="display" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Order Date System</th>
                                                <th>Order Number</th>
                                                <!-- <th>Visit Number</th> -->
                                                <th>MRN</th>
                                                <th>Nama Pasien</th>
                                                <th>Diagnose Name</th>
                                                <th>Physician Name</th>
                                                <th>Ruangan</th>
                                                <th>Kelas</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($hasil_lab as $hasil) : ?>
                                                <tr>
                                                    <td><?= $hasil['orderDateSystem'] ?></td>
                                                    <td><?= $hasil['orderNumber'] ?></td>
                                                    <td><?= $hasil['patientId'] ?></td>
                                                    <td><?= $hasil['patientName'] ?></td>
                                                    <td><?= $hasil['diagnoseName'] ?></td>
                                                    <td><?= $hasil['physicianName'] ?></td>
                                                    <td><?= $hasil['roomName'] ?></td>
                                                    <td><?= $hasil['className'] ?></td>
                                                    <td><?= $hasil['hasil'] == '1' ? 'Sudah Keluar' :  'Belum Keluar' ?></td>
                                                    <td>
                                                        <button onclick="loadLabResults('<?= $hasil['orderNumber']; ?>')" class="btn btn-primary responsive-button">Details</button>

                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End of Table daftar permintaan wynacom -->
                            </div>
                        </div>

                    </div>
                    <!-- add your table to view detail lab results -->

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Detail Lab Results</h6>
                        </div>
                        <div class="card-body">

                            <!-- <h2 class="text-center mb-4 mt-4">Lab Results List</h2> -->


                            <!-- <div> -->

                            <!-- Table daftar permintaan wynacom -->
                            <div class="table-responsive-sm">
                                <table class="table table-striped table-bordered" class="display" width="100%" cellspacing="0" id="labResultsTable">
                                    <thead>
                                        <tr>
                                            <!-- <th>id</th> -->
                                            <th>Order Date System</th>
                                            <th>Visit Number</th>
                                            <th>No. RM</th>
                                            <th>Nama Pasien</th>
                                            <th>Physician Name</th>
                                            <th>Test Name</th>
                                            <th>Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Detail Lab Results -->
                                    </tbody>

                                </table>

                                <script>
                                    function loadLabResults(orderNumber) {

                                        $.ajax({
                                            url: '<?= site_url('hasil-lab/getLabResults/') ?>' + orderNumber,
                                            type: 'GET',
                                            dataType: 'json',
                                            success: function(data) {
                                                var tableBody = $('#labResultsTable tbody');
                                                tableBody.empty();
                                                if (data.length > 0) {
                                                    $.each(data, function(index, result) {
                                                        var row = '<tr>' +
                                                            // '<td>' + result.id + '</td>' +
                                                            '<td>' + result.orderDateSystem + '</td>' +
                                                            '<td>' + result.visitNumber + '</td>' +
                                                            '<td>' + result.patientId + '</td>' +
                                                            '<td>' + result.patientName + '</td>' +
                                                            '<td>' + result.physicianName + '</td>' +
                                                            '<td>' + result.TestName + '</td>' +
                                                            '<td>' + result.Result + '</td>' +
                                                            '</tr>';
                                                        tableBody.append(row);
                                                    });
                                                } else {
                                                    tableBody.append('<tr><td colspan="8" class="text-center">Oopss.. No lab results found.</td></tr>');
                                                }
                                            },
                                            error: function() {
                                                alert('Gagal Fetch Data Detail Lab');
                                            }
                                        });
                                    }
                                </script>

                            </div>
                            <!-- End of Table daftar permintaan wynacom -->
                            <!-- </div> -->
                        </div>

                    </div>
                    <!-- End of Detail -->


                </div>
                <!-- /.container-fluid -->
            <?php endif; ?>
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
                <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah anda yakin ingin Keluar?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection('content'); ?>