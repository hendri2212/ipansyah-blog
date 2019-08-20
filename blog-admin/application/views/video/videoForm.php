
<section class="section">
          <div class="section-header">
            <h1>Form Video</h1>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">

                <div class="card-header">
                  <h4>Add Video</h4>
                </div>
                  <div class="card-body">
                      <?php echo form_open_multipart('Welcome/simpan_video');?>
                 
                    <div class="row">
                      <div class="col-12">
                      <?php
                        if (isset($info)) {
                          echo $info;
                        }
                       ?>
                      <div class="form-group">
                        <label>video</label>
                        <input type="file" name="nama_video" class="form-control" >
                        <input type="text" name="tes" class="form-control" >
                      </div>
                      <div class="form-group">
                      </div>
                    <div class="form-group text-right">
                      <button type="submit" name="submit" class="btn btn-info mr-1">simpan </button>
                      <a href="<?=site_url('Welcome'); ?>"> <button type="button" class="btn btn-danger" name="batal">Kembali</button></a>
                    </div>
                      </div>
                  </div>
                  <?php echo form_close(); ?>
          </div>
        </div>

              </div>
            </div>
        </section>
