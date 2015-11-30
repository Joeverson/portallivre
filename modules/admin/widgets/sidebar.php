<?php
$name = $_SESSION['user']['name'];
?>
<!--top menu-->
<!-- Uses a transparent header that draws on top of the layout's background -->
<style>
    .layout-transparent {
        background: linear-gradient(RGBA(28, 28, 28, 0.45), RGBA(28, 28, 28, 0.45)), url('<?=$endereco ?>includes/img/tumblr_static_img_3868.jpg') center / cover;
    }
    .layout-transparent .mdl-layout__header,
    .layout-transparent .mdl-layout__drawer-button {
        background-color: RGBA(28, 28, 28, 0.9 );
        color: white;
    }
</style>
<div class="layout-transparent mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header--transparent">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">
                <a href="<?= $endereco ?>../admin"><img src="<?= $endereco ?>includes/img/logopl.png" width="40" alt=""/></a>
            </span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>

            <!-- nome do usuario coisinha lá de cima -->
            <div style="margin:0 30px;">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
                    <label class="mdl-button mdl-js-button mdl-button--icon"
                           for="nm-user">
                        <i class="material-icons">person_pin</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                        <p id='mn-user'>
                            <?=$_SESSION['user']['name']?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="mdl-navigation">

                <a class="mdl-navigation__link" href="<?=$endereco?>../logout">SAIR</a>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">
            <a href="<?= $endereco ?>../admin"><img src="<?= $endereco ?>includes/img/logopl.png" width="40" alt=""/></a>
        </span>
        <nav class="mdl-navigation">
            <?php foreach($action->makeMenu() as $k){ ?>
                <?php if(!empty($k['submenu'])){?>
                    <!-- Left aligned menu below button -->
                    <button id="demo-menu-lower-left" class="mdl-button">
                        <?=$k['title']?>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left">
                        <?php foreach($k['submenu'] as $v){?>
                            <li>
                                <a href="<?php if (!empty($v['url'])) echo $endereco.$v['url'] ?> " class="mdl-navigation__link"><?=$v['title']?></a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php }else{?>
                    <a href="<?=$endereco.'../'.$k['url'] ?>" class="mdl-navigation__link link-pretty"><?=$k['title']?></a>
            <?php }
            }?>
        </nav>
    </div>

