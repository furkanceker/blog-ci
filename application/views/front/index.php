<?php $this->load->view('front/include/header'); ?>        
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?= base_url('assets/front/')?>assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>MyBlog</h1>
                            <span class="subheading">En güncel blogları aşağıda bulabilirsiniz.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="<?= base_url('blog/1') ?>">
                            <h2 class="post-title">Blog Başlık</h2>
                            <h3 class="post-subtitle">Blog Açıklama</h3>
                        </a>
                        <p class="post-meta">
                            <a href="<?= base_url('hakkimizda') ?>">Yazar</a>
                            Tarafından <br>
                            Tarih
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                </div>
            </div>
        </div>
<?php $this->load->view('front/include/footer'); ?>        
