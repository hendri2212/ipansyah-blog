<section class="section">
      <div class="section-header">
        <h1>Video List</h1>
      </div>

      <div class="section-body">
        <div class="row">
            <div class="col-12">
              <?php if (@$_GET['status'] == 'deleted'): ?>
                <div class="alert alert-success"><p><strong>Berhasil hapus video!</strong></p></div>
              <?php endif; ?>
              <div class="card">
                <div class="card-header">
                  <h4>Video</h4>
                  <div class="card-header-action"><a href="<?php echo site_url('Welcome/tambah_video/'); ?>"><button class="btn btn-lg btn-info" type="submit"><i class="fas fa-plus"></i> Tambah Baru</button></a></div>
                </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">No</th>
                        <th>Nama</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                 <?php
                    $no = 1;
                    foreach ($video as $data) {
                 ?>
                      <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><video width="320" height="240" src="<?= base_url('../assets/video/'.$data->nama_video) ?>" controls></video></td>
                        <td>
                          <div class="btn-group mb-3 btn-group-sm" role="group" aria-label="Basic example">
                           <a href="<?php echo site_url('user/ubah/'.$data->id_video);?>" class="btn btn- btn-primary btn-action" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                           <a href="<?= site_url('user/hapus/'.$data->id_video); ?>" class="btn btn-danger btn-action" onclick="return confirm('User ini akan dihapus?')" data-toggle="tooltip" title="Trash"><i class="fas fa-trash"></i></a>
                         </div>
                        </td>
                      </tr>
                    <?php
                        }
                  ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
