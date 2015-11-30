<?php
include "modules/admin/widgets/header.php";
include "modules/admin/widgets/sidebar.php";

$db = new modules\admin\artigos\model\DBArtigos;

?>

<!-- Square card -->
<style>
    .demo-card-square.mdl-card {
        width: 320px;
        height: 320px;
    }
    .demo-card-square > .mdl-card__title {
        color: #fff;
        background:url('<?=$endereco ?>includes/img/lendo.jpg') bottom right 15% no-repeat #46B6AC;
    }
    .demo-card-wide.mdl-card {
        width: 512px;
    }
    .demo-card-wide > .mdl-card__title {
        color: #fff;
        height: 176px;
        background: url('../assets/demos/welcome_card.jpg') center / cover;
    }

    .mdl-card__title input, .mdl-card__title textarea{
        color: #1c1c1c;
    }

    .demo-card-wide > .mdl-card__menu {
        color: #fff;
    }
    .mdl-card__supporting-text{
        background-color: #ffffff;
    }
    .green{
        color:#8BC34A;
    }
</style>

<div class="container" style="margin-top: 30px;">
    <div class="row">
        <!--criaçao de novos projetos-->
        <form id="form" class="form-glass urlForm" data-url="<?=$endereco?>admin/category/controller/save.category.php">
            <div class="col-md-6 col-md-offset-3">
                <!-- Wide card with share menu button -->
                <div class="mdl-card mdl-shadow--2dp col-md-12 card-create-project">
                    <h3 class="text-center text-capitalize">Criar nova Categoria</h3>
                    <div class="mdl-card__title">
                        <div class="col-md-12">
                            <div class="row">
                                <input class="col-md-12" type="text" name="category" placeholder="De um nome a nova categoria..." style="margin:30px 0;"/>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <button type="submit" class=" mdl-button mdl-js-button mdl-js-ripple-effect btn-success">
                                    Salvar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        $(function(){
            //click para abrir a imagem
            $('.btn-click-img').on("click", function(){
                $('#input-img').trigger('click').imgBG(".img-show");
            });
        });
    </script>

    <?php include "modules/admin/widgets/rodape.php"; ?>
