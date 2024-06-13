<div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('templates/sidebar'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php $this->load->view('templates/topbar'); ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Laporan Tenaga Pendidik</h1>
                <div class="card card-success">
                    <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                        <div class="row">
                                <div class="col-md-3">
                                    <button class="btn btn-primary btn-flat btn-block" data-toggle="modal" data-target="#addLaporan"><i class="fas fa-plus"></i> Tambah data </button>
                                </div>
                            
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Laporan</th>
                                        <th>Tingkat Sekolah</th>
                                        <th>Nama Sekolah</th>
                                        <th>Tanggal</th>               
                                        <th>Keterangan</th>
                                        <th>Berkas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach ($laporan_tendik as $lp) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $lp->nama_laporan; ?></td>
                                            <td><?= $lp->tingkat_sekolah; ?></td>
                                            <td><?= $lp->nama_sekolah; ?></td>
                                            <td><?php $date = date_create($lp->tanggal);
                                                echo date_format($date, 'd/m/Y'); ?></td>                                    
                                            <td><?= $lp->keterangan; ?></td>
                                            <td><a href="<?php if ($lp->berkas != "") {
                                                                echo base_url('admin/download/laporan_tendik/' . $lp->berkas);
                                                            } elseif ($lp->berkas == "") {
                                                                echo '#';
                                                            }  ?>" class="text-success"><i class="fas fa-download"></i></a></i></a></td>
                                            
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#ubahlp" data-id-laporan="<?= $lp->id_laporantendik ?>"><span class="badge badge-primary d-block">edit</span></a>
                                                    <div class="modal fade" id="ubahlp">
                                                        <div class="modal-dialog modal-lg">
                                                            <div id="dataubahlaporan"></div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <a href="#" data-id-laporan="<?php echo $lp->id_laporantendik; ?>" data-nama-laporan="<?php echo $lp->nama_laporan; ?>" data-toggle="modal" data-target="#hapuslp"><span class="badge badge-danger d-block">Hapus</span></a>
                                                </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        <!-- modal tambah -->
        <?php $this->load->view('admin/ekstra/modal_laporan'); ?>
        <!-- Footer -->
        <?php $this->load->view('templates/copyright') ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>