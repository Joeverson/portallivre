<?php include 'modules/site/widgets/header.php';
$artigo = new modules\admin\artigos\model\DBArtigos;
$fn = new libs\functions;
?>
    <style type="text/css">
        .fb_hidden{ position:absolute;
            top:-10000px;
            z-index:10001
        }
        .cp-post-content{

        }
    </style>

    <body>
<?php include 'modules/site/widgets/menu.php'; ?>

    <!-- Main Featured Slider -->

    <div class="cp-featured-news-slider owl-slider-principal">
        <?php foreach($artigo->getLast('all',4) as $slArt){?>
            <div class="item">
                <div class="cp-post-content">
                    <div class="catname"><a class="btn btn-lorange waves-effect waves-button" href="<?=$site?>artigo/<?=$slArt['id_artigo']?>"><?=$slArt['category']?></a> </div>
                    <h1><a href="<?=$site?>artigo/<?=$slArt['id_artigo']?>" style="line-height: 30px;"><?=$slArt['title']?></a></h1>
                    <ul class="cp-post-tools">
                        <li><i class="icon-1"></i> <?=$fn->dateTimeStampConsertAndOrganize($slArt['date'])?></li>
                        <li><i class="icon-2"></i> <?=$slArt['name']?></li>
                        <li><i class="icon-3"></i> <?=$slArt['category']?></li>
                    </ul>
                </div>
                <div class="cp-post-thumb" style="height:400px;overflow: hidden;background: url(<?= $endereco ?>includes/img/projects/<?= $slArt['img'] ?>) no-repeat center / cover"></div>
            </div>
        <?php }?>
    </div>
    <script>
        $(function(){
            $(".owl-slider-principal").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items : 2,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [979,3]

            });
        });
    </script>
    <!-- Main Featured End -->



    <!-- Main Content Start -->

    <div class="main-content">
        <div class="container">
            <div class="row">
                <!-- Left Content Area Start -->
                <div class="col-md-10 col-md-offset-1">
                    <!-- Grid Style 1 Start -->
                    <div class="cp-news-grid-style-1">
                        <div class="section-title blue-border">
                            <h2>Destaque</h2>
                            <small>Vejá os ultimos artigos adicionados</small> </div>
                        <div class="row">
                            <ul class="grid">
                                <?php foreach($artigo->getLast('all', 4) as $art){?>
                                    <li class="col-md-6 col-sm-6">
                                        <div class="cp-news-post-excerpt">
                                            <div class="cp-thumb" style="height: 180px;"><img src="<?=$endereco?>includes/img/projects/<?=$art['img']?>" alt=""></div>
                                            <div class="cp-post-content">
                                                <div class="catname"><a class="catname-btn btn-purple waves-effect waves-button" href="<?=$endereco?>/artigo/<?=$art['id_artigo']?>"><?=$art['category']?></a></div>
                                                <h3 style="height: 70px;">
                                                    <a href="<?=$site?>artigo/<?=$art['id_artigo']?>">
                                                        <?=$art['title']?>
                                                    </a>
                                                </h3>
                                                <ul class="cp-post-tools">
                                                    <li><i class="icon-2"></i> <?=$art['name']?></li>
                                                    <li><i class="icon-4"></i> 57 Comments</li>
                                                    <li><i class="icon-1"></i> <?=$fn->dateTimeStampConsertAndOrganize($art['date'])?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                    <!-- Grid Style 1 End -->

                    <!-- Colunistas -->
                    <div class="cp-news-grid-style-2 m20">
                        <div class="section-title green-border">
                            <h2>Colunistas</h2>
                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing</small>
                        </div>
                        <div class="row">
                            <!--ul class="small-grid">
                                <li class="col-md-6 col-sm-6">
                                    <div class="small-post">
                                        <div class="cp-thumb"><img src="./CrunchPress Material Mag_files/pgthumb-6.jpg" alt=""></div>
                                        <div class="cp-post-content">
                                            <h3><a href="http://html.crunchpress.com/materialmag/single-post.html">Morbi iaculis eros eget urna blandit</a></h3>
                                            <ul class="cp-post-tools">
                                                <li><i class="icon-1"></i> May 10, 2015</li>
                                                <li><i class="icon-2"></i> Roy Miller</li>
                                                <li><i class="icon-4"></i> 57 Comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6 col-sm-6">
                                    <div class="small-post">
                                        <div class="cp-thumb"><img src="./CrunchPress Material Mag_files/pgthumb-5.jpg" alt=""></div>
                                        <div class="cp-post-content">
                                            <h3><a href="http://html.crunchpress.com/materialmag/single-post.html">Morbi iaculis eros eget urna blandit</a></h3>
                                            <ul class="cp-post-tools">
                                                <li><i class="icon-1"></i> May 10, 2015</li>
                                                <li><i class="icon-2"></i> Roy Miller</li
                                                <li><i class="icon-4"></i> 57 Comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul-->

                            <ul class="row">
                                <li class="col-md-4 col-sm-4">
                                    <div class="cp-thumb"><img src="" alt=""></div>
                                </li>
                                <li class="col-md-8 col-sm-8">
                                    <div class="cp-post-content">
                                        <h3><a href="http://html.crunchpress.com/materialmag/single-post.html">Fusce rhoncus sem sed est placerat, quis sollicitudin nulla pharetra.</a></h3>
                                        <ul class="cp-post-tools">
                                            <li><i class="icon-1"></i> May 10, 2015</li>
                                            <li><i class="icon-2"></i> Nelson Doe</li>
                                            <li><i class="icon-4"></i> 57 Comments</li

                                            <li><a href="http://html.crunchpress.com/materialmag/#"><i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-10"></i></a></li>
                                        </ul>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Grid Style 2 End -->



                    <!-- Videos -->


                    <div class="cp-news-grid-style-3 m20">
                        <div class="section-title purple-border">
                            <h2>PodCasts</h2>
                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing</small> </div>
                        <div class="grid-holder">
                            <div class="row">
                                <ul class="cp-load-newsgrid">
                                    <li class="col-md-4 col-sm-4 cp-news-post">
                                        <div class="cp-thumb"><img src="./CrunchPress Material Mag_files/ls1.jpg" alt=""></div>
                                        <h3><a href="http://html.crunchpress.com/materialmag/single-post.html">Proin id diam in nulla sagittis
                                                tempor nec eu ipsum.</a></h3>
                                    </li>
                                    <li class="col-md-4 col-sm-4 cp-news-post">
                                        <div class="cp-thumb"><img src="./CrunchPress Material Mag_files/ls2.jpg" alt=""></div>
                                        <h3><a href="http://html.crunchpress.com/materialmag/single-post.html">Proin id diam in nulla sagittis
                                                tempor nec eu ipsum.</a></h3>
                                    </li>
                                    <li class="col-md-4 col-sm-4 cp-news-post">
                                        <div class="cp-thumb"><img src="./CrunchPress Material Mag_files/ls3.jpg" alt=""></div>
                                        <h3><a href="http://html.crunchpress.com/materialmag/single-post.html">Proin id diam in nulla sagittis
                                                tempor nec eu ipsum.</a></h3>
                                    </li>
                                </ul>
                                <div class="load-more loadmore-holder"> <a href="<?=$site?>videos" class="loadmore waves-effect waves-button">Load More <i class="icon-8"></i></a> </div>
                            </div>
                        </div>
                    </div
                        <!-- Grid Style 3 End -->

                        <!-- Grid Style 4 Start -->

                    <div class="cp-news-grid-style-4 m50">
                        <div class="section-title orange-border">
                            <h2>Entreterimento</h2>
                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing</small> </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cp-fullwidth-news-post-excerpt">
                                    <div class="cp-thumb"><img src="./CrunchPress Material Mag_files/fashion1.jpg" alt=""></div>
                                    <div class="cp-post-content">
                                        <div class="cp-post-rating"><a href="http://html.crunchpress.com/materialmag/#"><i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-10"></i></a></div>
                                        <h3><a href="http://html.crunchpress.com/materialmag/single-post.html">Maecenas scelerisque massa sit amet tellus commodo vel</a></h3>
                                        <ul class="cp-post-tools">
                                            <li><i class="icon-1"></i> Few Minuts Ago</li>
                                            <li><i class="icon-2"></i> Roy Miller</li>
                                            <li><i class="icon-3"></i> Lifestyle</li>
                                            <li><i class="icon-4"></i> 57 Comments</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <ul class="grid">
                                        <li class="col-md-6 col-sm-6">
                                            <div class="cp-post">
                                                <div class="cp-thumb"><img src="./CrunchPress Material Mag_files/fashion2.jpg" alt=""></div>
                                                <div class="cp-post-content">
                                                    <div class="cp-post-rating"><a href="http://html.crunchpress.com/materialmag/#"><i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-10"></i></a></div>
                                                    <h3><a href="http://html.crunchpress.com/materialmag/single-post.html">Proin id diam in nulla sagittis</a></h3>
                                                    <ul class="cp-post-tools">
                                                        <li><i class="icon-1"></i> May 7, 2015</li>
                                                        <li><i class="icon-4"></i> 57 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-md-6 col-sm-6">
                                            <div class="cp-post">
                                                <div class="cp-thumb"><img src="./CrunchPress Material Mag_files/fashion3.jpg" alt=""></div>
                                                <div class="cp-post-content">
                                                    <div class="cp-post-rating"><a href="http://html.crunchpress.com/materialmag/#"><i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-10"></i></a></div>
                                                    <h3><a href="http://html.crunchpress.com/materialmag/single-post.html">Proin id diam in nulla sagittis</a></h3>
                                                    <ul class="cp-post-tools">
                                                        <li><i class="icon-1"></i> May 7, 2015</li>
                                                        <li><i class="icon-4"></i> 57 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-md-6 col-sm-6">
                                            <div class="cp-post">
                                                <div class="cp-thumb"><img src="./CrunchPress Material Mag_files/fashion4.jpg" alt=""></div>
                                                <div class="cp-post-content">
                                                    <div class="cp-post-rating"><a href="http://html.crunchpress.com/materialmag/#"><i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-10"></i></a></div>
                                                    <h3><a href="http://html.crunchpress.com/materialmag/single-post.html">Proin id diam in nulla sagittis</a></h3>
                                                    <ul class="cp-post-tools">
                                                        <li><i class="icon-1"></i> May 7, 2015</li>
                                                        <li><i class="icon-4"></i> 57 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-md-6 col-sm-6">
                                            <div class="cp-post">
                                                <div class="cp-thumb"><img src="./CrunchPress Material Mag_files/fashion5.jpg" alt=""></div>
                                                <div class="cp-post-content">
                                                    <div class="cp-post-rating"><a href="http://html.crunchpress.com/materialmag/#"><i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-10"></i></a></div>
                                                    <h3><a href="http://html.crunchpress.com/materialmag/single-post.html">Proin id diam in nulla sagittis</a></h3>
                                                    <ul class="cp-post-tools">
                                                        <li><i class="icon-1"></i> May 7, 2015</li>
                                                        <li><i class="icon-4"></i> 57 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Grid Style 4 End -->

                    <!-- Grid Style 5 Start -->
                    <div class="cp-news-grid-style-5 m20">
                        <div class="section-title orange-border">
                            <h2>Sports</h2>
                            <small>Lorem ipsum dolor sit amet, consectetur adipiscing</small> </div>
                        <div>
                            <!-- News Start -->
                            <div class="cp-news-list">
                                <ul class="row">
                                    <li class="col-md-6 col-sm-6">
                                        <div class="cp-thumb"><img src="./CrunchPress Material Mag_files/sports1.jpg" alt=""></div>
                                    </li>
                                    <li class="col-md-6 col-sm-6">
                                        <div class="cp-post-content">
                                            <h3><a href="http://html.crunchpress.com/materialmag/single-post.html">Duis tristique tellus egestas est aliquam nisl finibus vehicula it.</a></h3>
                                            <ul class="cp-post-tools">
                                                <li><i class="icon-1"></i> May 10, 2015</li>
                                                <li><i class="icon-2"></i> Nelson Doe</li>
                                                <li><i class="icon-4"></i> 57 Comments</li>
                                                <li><a href="http://html.crunchpress.com/materialmag/#"><i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-10"></i></a></li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- News End -->
                            <!-- News Start -->
                            <div class="cp-new-list">

                                <ul class="row">
                                <li class="col-md-6 col-sm-6">
                                    <div class="cp-thumb"><img src="./CrunchPress Material Mag_files/sports2.jpg" alt=""></div>
                                </li>
                                <li class="col-md-6 col-sm-6">
                                    <div class="cp-post-content">
                                        <h3><a href="http://html.crunchpress.com/materialmag/single-post.html">Fusce rhoncus sem sed est placerat, quis sollicitudin nulla pharetra.</a></h3>
                                        <ul class="cp-post-tools">
                                            <li><i class="icon-1"></i> May 10, 2015</li>
                                            <li><i class="icon-2"></i> Nelson Doe</li>
                                            <li><i class="icon-4"></i> 57 Comments</li

                                            <li><a href="http://html.crunchpress.com/materialmag/#"><i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-10"></i></a></li>
                                        </ul>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis.</p>
                                    </div>
                                </li>
                                </ul>
                            </div>
                            <!-- News End -->
                            <!-- News Start -->
                            <div class="cp-news-list">
                                <ul class="row">
                                    <li class="col-md-6 col-sm-6">
                                        <div class="cp-thumb"><img src="./CrunchPress Material Mag_files/sports3.jpg" alt=""></div>
                                    </li>
                                    <li class="col-md-6 col-sm-6">
                                        <div class="cp-post-content">
                                            <h3><a href="http://html.crunchpress.com/materialmag/single-post.html">Nullam consectetur ante sed dolor pellentesque, vitae rutrum nibh placerat.</a></h3>
                                            <ul class="cp-post-tools">
                                                <li><i class="icon-1"></i> May 10, 2015</li>
                                                <li><i class="icon-2"></i> Nelson Doe</li>
                                                <li><i class="icon-4"></i> 57 Comments</li>
                                                <li><a href="http://html.crunchpress.com/materialmag/#"><i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-10"></i></a></li>
                                            </ul>
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- News End -->
                            <!-- News Start -->
                            <div class="cp-news-list">
                                <ul class="row">
                                    <li class="col-md-6 col-sm-6">
                                        <div class="cp-thumb"><img src="./CrunchPress Material Mag_files/sports4.jpg" alt=""></div>
                                    </li>
                                    <li class="col-md-6 col-sm-6">

                                    <div class="cp-post-content">
                                        <h3><a href="http://html.crunchpress.com/materialmag/single-post.html">Curabitur vel magna varius, fringilla ante at fringilla leo.</a></h3>
                                        <ul class="cp-post-tools">
                                        <li><i class="icon-1"></i> May 10, 2015</li>
                                        <li><i class="icon-2"></i> Nelson Doe</li>
                                        <li><i class="icon-4"></i> 57 Comments</li>
                                        <li><a href="http://html.crunchpress.com/materialmag/#"><i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-9"></i> <i class="icon-10"></i></a></li>
                                </ul>
                                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non.</p>
                            </div>
                            </li>
                            </ul>
                        </div>
                        <!-- News End -->


                        <!-- pagination Start -->
                        <!--div class="pagination-holder">
                            <nav>
                                <ul class="pagination">
                                    <li> <a href="http://html.crunchpress.com/materialmag/#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left"></i></span> </a> </li>
                                    <li class="active"><a href="http://html.crunchpress.com/materialmag/#">1 <span class="sr-only">(current)</span></a></li>
                                    <li><a href="http://html.crunchpress.com/materialmag/#">2</a></li>
                                    <li><a href="http://html.crunchpress.com/materialmag/#">3</a></li>
                                    <li> <a href="http://html.crunchpress.com/materialmag/#" aria-label="Next"> <span aria-hidden="true"><i class="fa fa-angle-right"></i></span> </a> </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- pagination End -->
                    </div>
                </div>
                <!-- Grid Style 5 End -->
            </div>
        </div>
    </div>
    </div>

    <!-- Main Content End -->
<?php include 'modules/site/widgets/footer.php';?>