<!-- Main Wrapper Start -->
<div id="wrapper" class="wrapper">
    <!-- Header Start -->
    <div id="cp-header" class="cp-header">
        <!-- Topbar Start -->
        <div class="cp-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!--ul class="toplinks">
                            <li class="waves-effect waves-button"><a href="http://html.crunchpress.com/materialmag/index.html">Home</a></li>
                            <li class="waves-effect waves-button"><a href="http://html.crunchpress.com/materialmag/#">News</a></li>
                            <li class="waves-effect waves-button"><a href="http://html.crunchpress.com/materialmag/#">FAQ’s</a></li>
                            <li class="waves-effect waves-button"><i class="fa fa-phone"></i> + 800 123 4567</li>
                            <li class="waves-effect waves-button"><i class="fa fa-envelope-o"></i> <a href="mailto:info@materialmag.com">info@materialmag.com</a></li>
                        </ul-->
                    </div>
                    <div class="col-md-6">
                        <div class="cp-toptools pull-right">
                            <ul>
                                <li class=""><a href="<?=$site?>admin"><i class="fa fa-lock"></i> Entrar</a></li>
                                <!--li class="waves-effect"><a href="http://html.crunchpress.com/materialmag/register.html"><i class="fa fa-sign-in"></i></a></li>
                                <li class="waves-effect"><a href="http://html.crunchpress.com/materialmag/#"><i class="fa fa-cart-arrow-down"></i></a></li-->
                            </ul>
                        </div>
                        <div class="cp-topsocial pull-right">
                            <ul>
                                <li class="waves-effect"><a href="http://html.crunchpress.com/materialmag/#"><i class="fa fa-twitter"></i></a></li>
                                <li class="waves-effect"><a href="http://html.crunchpress.com/materialmag/#"><i class="fa fa-facebook"></i></a></li>
                                <li class="waves-effect"><a href="http://html.crunchpress.com/materialmag/#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->



        <!-- Logo row Start -->
        <div class="cp-logo-row" >
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo"><a href="<?=$site?>home"><img width="80" src="<?= $endereco."includes/img/logopl.png"?>" alt=""></a></div>
                    </div>
                    <!-- propagandas -->
                    <div class="col-md-8">
                        <div class="cp-advertisement waves-effect"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Logo row Start -->


        <!-- Mega Menu Start -->
        <div class="cp-megamenu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cp-mega-menu">
                            <label for="mobile-button"> <i class="fa fa-bars"></i> </label>
                            <!-- mobile click button to show menu -->
                            <input id="mobile-button" type="checkbox">
                            <ul class="collapse main-menu">
                                <li class="slogo"><a href="<?=$site?>home"><img src="<?= $endereco."includes/img/logopl.png"?>" alt=""></a></li>
                                <li><a href="<?=$site?>home">Home</a></li>
                                <li> <a href="<?=$site?>#">Notícias</a>
                                    <ul class="drop-down full-width col-4 hover-expand">

                                        <!-- full width drop down with 5 columns + images -->
                                        <li>
                                            <ul class="sub-menu">
                                                <li> <a href="<?=$site?>politica">Política</a> </li>
                                                <li> <a href="<?=$site?>policial">Policial</a> </li>
                                                <li> <a href="<?=$site?>cotidiano">Cotidiano</a> </li>
                                                <li> <a href="<?=$site?>economia">Economia</a> </li>
                                                <li> <a href="<?=$site?>saude">Saúde</a> </li>
                                            </ul>
                                        </li>
                                        <!-- ultimas noticias -->
                                        <?php foreach($artigo->getLast('all', 3) as $rt){?>
                                            <li>
                                                <a href="<?=$site?>artigo/<?=$rt['id_artigo']?>">
                                                    <img src="<?=$endereco?>includes/img/projects/<?=$rt['img']?>" style='widht:60px; height:180px' alt="">
                                                    <h3><?=$rt['title']?></h3>
                                                </a>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </li>
                                <li> <a href="http://html.crunchpress.com/materialmag/#">Educação</a>
                                    <ul class="drop-down full-width col-5 hover-expand">
                                        <!-- full width drop down with 5 columns + images -->
                                        <li class="validation">
                                            <h2 class="mm-title">Educação</h2>
                                        </li>
                                        <!-- ultimos 3 noticias sobre -->
                                        <li><img src="./CrunchPress Material Mag_files/mm-1.jpg" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-4.html">Proin id diam in nulla sagit tempor nec eu ipsum.</a></h3>
                                        </li>
                                        <li><img src="./CrunchPress Material Mag_files/mm-2.jpg" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-4.html">Sed pulvinar quam non ultricies lacinia.</a></h3>
                                        </li>
                                        <li><img src="./CrunchPress Material Mag_files/mm-3.jpg" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-4.html">Nullam tincidunt lorem sit amet imperdiet sollicit.</a></h3>
                                        </li>
                                        <li><img src="./CrunchPress Material Mag_files/mm-4.jpg" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/#">Sed pulvinar quam non ultricies lacinia.</a></h3>
                                        </li>
                                        <li><img src="./CrunchPress Material Mag_files/mm-5.jpg" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-4.html">Nullam tincidunt lorem sit amet imperdiet sollicitu.</a></h3>                                        </li>
                                    </ul>
                                </li>
                                <li> <a href="http://html.crunchpress.com/materialmag/#">Tecnologia</a>
                                    <ul class="drop-down full-width col-5 hover-expand">
                                        <!-- full width drop down with 5 columns + images -->
                                        <li class="validation">
                                            <h2 class="mm-title">Tecnologia</h2>
                                        </li>
                                        <!-- ultimos 3 noticias sobre -->
                                        <li><img src="./CrunchPress Material Mag_files/mm-1.jpg" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-4.html">Proin id diam in nulla sagit tempor nec eu ipsum.</a></h3>
                                        </li>
                                        <li><img src="./CrunchPress Material Mag_files/mm-2.jpg" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-4.html">Sed pulvinar quam non ultricies lacinia.</a></h3>
                                        </li>
                                        <li><img src="./CrunchPress Material Mag_files/mm-3.jpg" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-4.html">Nullam tincidunt lorem sit amet imperdiet sollicit.</a></h3>
                                        </li>
                                        <li><img src="./CrunchPress Material Mag_files/mm-4.jpg" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/#">Sed pulvinar quam non ultricies lacinia.</a></h3>
                                        </li>
                                        <li><img src="./CrunchPress Material Mag_files/mm-5.jpg" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-4.html">Nullam tincidunt lorem sit amet imperdiet sollicitu.</a></h3>                                        </li>
                                    </ul>
                                </li>

                                <li> <a href="http://html.crunchpress.com/materialmag/#">Esportes</a>

                                    <ul class="drop-down full-width col-5 hover-expand">
                                        <!-- full width drop down with 5 columns + images -->
                                        <li class="validation">
                                            <h2 class="mm-title">Esportes</h2>
                                        </li>
                                        <li><img src="./CrunchPress Material Mag_files/mm-1.jpg" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-3.html">Proin id diam in nulla sagit tempor nec eu ipsum.</a></h3>
                                        </li>
                                        <li><img src="./CrunchPress Material Mag_files/mm-2.jpg" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-3.html">Sed pulvinar quam non ultricies lacinia.</a></h3>
                                        </li>
                                        <li><img src="./CrunchPress Material Mag_files/mm-3.jpg" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-3.html">Nullam tincidunt lorem sit amet imperdiet sollicit.</a></h3>
                                        </li>
                                        <li><img src="./CrunchPress Material Mag_files/mm-4.jpg" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-3.html">Sed pulvinar quam non ultricies lacinia.</a></h3>
                                        </li>
                                        <li><img src="./CrunchPress Material Mag_files/mm-5.jpg" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-3.html">Nullam tincidunt lorem sit amet imperdiet sollicitu.</a></h3>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a href="http://html.crunchpress.com/materialmag/#">Entretenimento</a>
                                    <ul class="drop-down full-width col-4 hover-expand">

                                        <!-- full width drop down with 5 columns + images -->
                                        <li>
                                            <ul class="sub-menu">
                                                <li> <a href="<?=$site?>#">Moda</a> </li>
                                                <li> <a href="<?=$site?>#">Cinema</a> </li>
                                                <li> <a href="<?=$site?>#">Agenda de shows</a> </li>
                                                <li> <a href="<?=$site?>#">Cultura</a> </li>
                                            </ul>
                                        </li>
                                        <!-- ultimas noticias -->
                                        <li><img src="#" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-2.html">Sed pulvinar quam non ultricies lacinia.</a></h3>
                                        </li>
                                        <li><img src="#" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-2.html">Nullam tincidunt lorem sit amet imperdiet sollicit.</a></h3>
                                        </li>
                                        <li><img src="#" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-2.html">Sed pulvinar quam non ultricies lacinia.</a></h3>
                                        </li>
                                    </ul>
                                </li>

                                <li> <a href="http://html.crunchpress.com/materialmag/#">Especial</a>
                                    <ul class="drop-down full-width col-4 hover-expand">

                                        <!-- full width drop down with 5 columns + images -->
                                        <li>
                                            <ul class="sub-menu">
                                                <li> <a href="<?=$site?>#">Entrevistas</a> </li>
                                                <li> <a href="<?=$site?>#">Histórias que inspiram</a> </li>
                                                <li> <a href="<?=$site?>#">Carta-denúncia</a> </li>
                                            </ul>
                                        </li>
                                        <!-- ultimas noticias -->
                                        <li><img src="#" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-2.html">Sed pulvinar quam non ultricies lacinia.</a></h3>
                                        </li>
                                        <li><img src="#" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-2.html">Nullam tincidunt lorem sit amet imperdiet sollicit.</a></h3>
                                        </li>
                                        <li><img src="#" alt="">
                                            <h3><a href="http://html.crunchpress.com/materialmag/category-layout-2.html">Sed pulvinar quam non ultricies lacinia.</a></h3>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="http://html.crunchpress.com/materialmag/author-archives-sidebar.html">Colunistas</a></li>
                                <li> <a href="http://html.crunchpress.com/materialmag/#">Podcasts</a></li>
                                <li><a href="http://html.crunchpress.com/materialmag/contact.html">Vídeos</a></li>
                                <!--li class="random"><a href="http://html.crunchpress.com/materialmag/random.html"><i class="icon-6"></i></a></li-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mega Menu End -->
    </div>
    <!-- Header End -->

