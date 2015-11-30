<?php
?>

<!-- Sidebar -->
<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
                MENU
            </a>
        </li>
        <?php foreach($action->makeMenu() as $k){
            if($k['acessLevel'] == $_SESSION['user']['id_tipo']){?>
            <li>
                <a href="<?=$k['url'] ?>" class="title"><?=$k['title']?></a>
            <?php foreach($k['submenu'] as $v){
            if($_SESSION['user']['id_tipo'] == $k['acessLevel']){?>
                <li>
                    <a href="<?php if (!empty($v['url'])) echo $endereco.$v['url'] ?> " data-toggle="offcanvas"><?=$v['title']?></a>
                </li>
            <?} }?>

            </li>
        <?php } }?>
        <li><a href="<?=$endereco?>logout" class="title">Sair</a></li>
    </ul>
</nav>


