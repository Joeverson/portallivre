<?php include 'modules/site/widgets/header.php';
$artigo = new modules\admin\artigos\model\DBArtigos;
$fn = new libs\functions;

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

<!-- Main Featured End -->

<div class="row">
    <div style="margin-top:50px;" class="col-md-10 col-md-offset-1">
        <div class="section-title orange-border">
            <h2>Policial</h2>
            <small>Lorem ipsum dolor sit amet, consectetur adipiscing</small>
        </div>
        <!-- contents e pagination-->
        <div>
            <div class="cp-news-list lhama-father">

            </div>


            <!-- pagination Start -->
            <div class="pagination-holder">
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
</div>

<script>
    var lhama = new lhama(".lhama-father","<?=$endereco?>/admin/artigos/controller/get.articles.php", 10);
    lhama.plus("<?=$page?>");
</script>
<!-- Main Content Start -->

<?php include 'modules/site/widgets/footer.php';?>
