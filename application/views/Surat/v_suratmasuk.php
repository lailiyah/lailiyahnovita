<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">ARSIP SURAT MASUK</h3><br>
        <a class="btn btn-success btn-sm mb-1 mt-2" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i>Add</a>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nomor Surat</th>
              <th class="text-center">Kode Surat</th>
              <th class="text-center">Perihal</th>
              <th class="text-center">Tanggal Surat</th>
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($daftar_surat as $surat) { ?>
              <tr>
                <td class="text-center"><?= $no++; ?></td>
                <td class="text-center"><?= $surat->no_surat  ?></td>
                <td class="text-center"><?= $surat->kode_surat; ?></td>
                <td class="text-center"><?= $surat->perihal; ?></td>
                <td class="text-center"><?= $surat->tgl_surat; ?></td>
                <td class="">
                  <!-- Modal Edit -->
                  <section class="content">
                    <div class="modal fade" id="modal-edit<?= $surat->id_surat; ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Surat Masuk</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form name="frmproduk" method="post" enctype="multipart/form-data" action="<?php base_url() ?>/surat/simpan_edit">
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="">Nomor Surat</label>
                                  <input type="text" class="form-control" id="" value="<?= $surat->no_surat; ?>" name="no_surat" placeholder="Masukan Nomor Surat" required>
                                </div>
                                <div class="form-group">
                                  <label for="">Kode Surat</label>
                                  <input type="text" class="form-control" id="" value="<?= $surat->kode_surat; ?>" name="kode_surat" placeholder="Masukan Kode Surat" required>
                                </div>
                                <div class="form-group">
                                  <label for="">Perihal</label>
                                  <input type="text" class="form-control" id="" value="<?= $surat->perihal; ?>" name="perihal" placeholder="Perihal Surat" required>
                                </div>
                                <div class="form-group">
                                  <label for="">Tanggal Surat</label>
                                  <input type="text" class="form-control" id="" value="<?= $surat->tgl_surat; ?>" name="tgl_surat" placeholder="dd-mm-yy" required>
                                </div>

                                <!-- /.card-body -->
                                <div class="box-footer col-12 pb-3 d-flex justify-content-between float-right">

                                  <button id="simpan" type="submit" class="btn  btn-primary mr-3"><i class="fa fa-save"></i> Simpan</button>
                                </div>
                            </form>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                  </section>
                  <div class="text-center">
                    <a href="" data-toggle="modal" data-target="#modal-edit<?= $surat->id_surat; ?>" class="btn btn-warning btn-sm edit"><i class="fa fa-edit" title="Edit"></i>Edit </a>
                    <a href="surat/hapus/<?php echo $surat->id_surat; ?>" onclick="return confirm('Hapus <?php echo $surat->no_surat; ?> ?')" class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash">Hapus</i> </a>
                  </div>
                </td>

              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<!-- /.row -->

<!-- Modal Tambah -->
<section class="content">
  <div class="modal fade" id="modal-tambah">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Surat Masuk</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form name="frmproduk" method="post" enctype="multipart/form-data" action="<?php base_url() ?>/surat/simpan">
            <div class="card-body">
              <div class="form-group">
                <label for="">Nomor Surat</label>
                <input type="text" class="form-control" id="" name="no_surat" placeholder="Masukan Nomor Surat" required>
              </div>
              <div class="form-group">
                <label for="">Kode Surat</label>
                <input type="text" class="form-control" id="" name="kode_surat" placeholder="Masukan Kode Surat" required>
              </div>
              <div class="form-group">
                <label for="">Perihal</label>
                <input type="text" class="form-control" id="" name="perihal" placeholder="Perihal Surat" required>
              </div>
              <div class="form-group">
                <label for="">Tanggal Surat</label>
                <input type="text" class="form-control" id="" name="tgl_surat" placeholder="dd-mm-yy" required>
              </div>

              <!-- /.card-body -->
              <div class="box-footer col-12 pb-3 d-flex justify-content-between float-right">

                <button id="simpan" type="submit" class="btn  btn-primary mr-3"><i class="fa fa-save"></i> Simpan</button>
              </div>
          </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
</section>