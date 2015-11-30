<?php
include "modules/admin/widgets/header.php";
?>


<!--link href="http://314.bl.ee/modules/admin/login/css/style.css" rel="stylesheet"-->
		<!-- Wide card with share menu button -->
<style>
	.demo-card-wide.mdl-card {
        padding:0;
	}
	.demo-card-wide > .mdl-card__title {
        color: #fff;
        height: 176px;
        background: url('<?= $endereco ?>includes/img/logopl.png') no-repeat;
        background-position: center;
        background-color:#F44336;
	}
	.demo-card-wide > .mdl-card__menu {
	  color: #fff;
	}
</style>
</head>

<body>

<div id="wrapper">

    <form action="<?=$endereco?>../login" method='post' class="form-login col-md-6 col-md-offset-3" style="margin-top:100px">
		<div class="demo-card-wide mdl-card mdl-shadow--2dp col-md-8 col-md-offset-2" >
		  <div class="mdl-card__title">
			<!--h2 class="mdl-card__title-text">Welcome!!</h2-->
		  </div>
		  <div class="mdl-card__supporting-text">
		   		<div class="row">
					<div class="col-md-6">
						<input name="name" class='col-md-12' style='border:none;' type="text" required="" placeholder="Usuário">
					</div>
					<div class="col-md-6">
						<input name="pass" type="password" style='border:none;' class='col-md-12' required="" placeholder="Senha">
					</div>
			  	</div>
		  </div>
		  <div class="mdl-card__actions mdl-card--border">
			<button type="submit" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
			  LOGIN
			</button>
		  </div>
		  <div class="mdl-card__menu">
		</div>
    </form>
</div>

<script>

    <?php if(isset($notAceppt) && $notAceppt){?>
        $(function(){notification.error('Senha ou E-mail inválido');});
    <?php } ?>

</script>

</body>
<?php
include "modules/admin/widgets/rodape.php";
?>