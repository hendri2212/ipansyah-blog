<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Noor Ipansyah</title>

        <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/clean-blog.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        

		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-2586125774271995",
                enable_page_level_ads: true
            });
		</script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="./">Noor Ipansyah</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?= base_url(); ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?= base_url('blog/semuaPost'); ?>">Semua Post</a>
                        </li>
                        <li>
                            <a href="<?= base_url('blog-admin'); ?>">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?= $contentnya; ?>
        <hr>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <ul class="list-inline text-center">
                            <li>
                                <a href="#">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <p class="fixed text-center text-center text-muted small pt-4">Powered By <a href="https://wa.me/6285746080544?text=Assalamualaikum%2C%20salam%20kenal%20HENDRI%20ARIFIN%2C%20S.Kom%20%F0%9F%98%81">Hendri Arifin, S.Kom</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/jqBootstrapValidation.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/contact_me.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/clean-blog.min.js') ?>"></script>
    </body>
</html>