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
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="col-lg-6">
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/9KrKst8IX8U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                <div class="embed-responsive embed-responsive-4by3">
                    <video class="embed-responsive-item" src="<?= base_url('./assets/video/video-01.mp4') ?>" controls></video>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="embed-responsive embed-responsive-4by3">
                    <video class="embed-responsive-item" src="<?= base_url('./assets/video/video-02.mp4') ?>" controls></video>
                </div>
            </div>
            
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
