<?php include 'modules/site/widgets/header.php';
$artigo = new modules\admin\artigos\model\DBArtigos;
$fn = new libs\functions;

$art = $artigo->getArtigoById($id);
?>
<style type="text/css">
    body{ overflow-x: hidden;
    }
    .img-header{
        overflow-y: hidden;
        height:300px;
    }
    .content-text{
        padding: 0 100px 100px;
    }
    </style>

<body>
<?php include 'modules/site/widgets/menu.php';?>

<!-- Main Featured Slider -->


<!-- Main Featured End -->
<div class="row">
    <div class="col-md-12">
        <div class="img-header" style="background: url(<?= $endereco ?>includes/img/projects/<?= $art['img'] ?>) no-repeat center / cover"></div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="text-center" style="margin:100px 0;">
            <h3><b><?=$art['title']?></b></h3>
        </div>
        <div class="content-text">
            <p>asdkjosid asud sdasdghsiayd asyd aydg gdyasgd auysd asyg dausgd asydag dayudg akydgay d</p>
        </div>
    </div>
</div>
<!-- Main Content Start -->

<?php include 'modules/site/widgets/footer.php';?>
