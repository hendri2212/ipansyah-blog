<header class="intro-header" style="background-image: url('<?php echo base_url('assets/img/home-bg.jpg') ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Blog Pribadi</h1>
                    <hr class="small">
                    <span class="subheading">Create by Noor Ipansyah</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="row">
    <?php foreach ($video as $Dvideo): ?>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/9KrKst8IX8U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        <div class="embed-responsive embed-responsive-4by3" data-toggle="modal" data-target="#<?php echo $Dvideo->nama_modal ?>">
            <video class="embed-responsive-item" src="<?= base_url('./assets/video/'.$Dvideo->nama_video) ?>"></video>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="<?php echo $Dvideo->nama_modal ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-4by3" data-toggle="modal" data-target="#myModal">
                        <video class="embed-responsive-item" src="<?= base_url('./assets/video/'.$Dvideo->nama_video) ?>" controls></video>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php foreach ($posts as $post): ?>
            <div class="post-preview">
                <a href="<?= base_url('blog/post/'.$post->seo_url.'/'); ?>">
                    <h2 class="post-title">
                        <?= $post->judul ?>
                    </h2>
                    <h3 class="post-subtitle">
                        <?= substr($post->isi, 0, 50); ?> ...
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#"><?= $post->nama ?></a> on <?= $post->tgl_publish ?></p>
            </div>
            <hr>
            <?php endforeach; ?>
            <ul class="pager">
                <?php if (!@$semua): ?>
                <li class="next">
                    <a href="<?= base_url('blog/semuaPost'); ?>">Lihat Semua Post &rarr;</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
