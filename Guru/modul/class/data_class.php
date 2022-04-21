<div class="content-wrapper">
    <h4>
        Class
    </h4>
    <hr>
    <?php
    if (empty($class['id_kelas'])) {
    ?>
        <div class="row purchace-popup">
            <div class="col-md-12">
                <span class="d-flex alifn-items-center">
                    <p>Saat ini Anda belum mempunyai Kelas Apapun. Tambah Untuk Menampilkan Kelas</p>
                    <!-- href="?page=perangkat&act=add" -->
                    <a data-toggle="modal" data-target="#myModal" class="btn ml-auto purchase-button"> <i class="fa fa-plus"></i> Tambah Kelas</a>
                    <i class="mdi mdi-close popup-dismiss"></i>
                </span>
            </div>
        </div>

    <?php
    } else {
    ?>
        <div class="row purchace-popup">
            <div class="col-md-12">
                <span class="d-flex alifn-items-center">
                    <!-- <h4><b>Home</b> > Perangkat Pembelajaran</h4> -->

                    <a data-toggle="modal" data-target="#myModal" class="btn btn-dark"> <i class="fa fa-plus"></i> Add Class</a>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Kelas</h4>
                        <p class="card-description">

                        </p>
                        <div class="table-responsive">
                            <table class="table table-condensed table-hover" id="data">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kelas</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;

                                    $sqlrole = mysqli_query($con, "SELECT * FROM tb_master_kelas
                      INNER JOIN tb_roleguru ON tb_master_kelas.id_kelas=tb_roleguru.id_kelas

                      
                     WHERE tb_roleguru.id_guru='$sesi' ORDER BY id_kelas DESC ");
                                    echo 'sql role' . $sqlrole;

                                    foreach ($sqlrole as $row) { ?>

                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $row["kelas"]; ?></td>
                                            <td>

                                                <a href="?page=perangkat&act=edit&ID=<?= $row['id_perangkat'] ?>" class="btn btn-dark"><i class="fa fa-edit"></i> Edit </a>
                                                <a href="?page=perangkat&act=del&ID=<?= $row['id_perangkat'] ?>" onclick="return confirm('Yakin Hapus Data ?')" class="btn btn-dark text-danger"><i class="fa fa-trash"></i></a>
                                            </td>

                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>



        </div>

    <?php

    }
    ?>




</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h4 class="modal-title" id="myModalLabel">Model Perangkat</h4> -->
            </div>
            <div class="modal-body">
                <center>

                    <a href="?page=perangkat&act=add&TYPE=Manual" class="btn btn-dark btn-lg">
                        <!-- <img src="../vendor/images/ck.png" width="300"> -->
                        <i class="fa fa-file-text-o"></i>BY CKEDITOR
                    </a>
                    <a href="?page=perangkat&act=add&TYPE=Upload" class="btn btn-success btn-lg"><i class="fa fa-upload"></i>UPLOAD FILE</a>
                </center>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->

            </div>
        </div>
    </div>
</div>