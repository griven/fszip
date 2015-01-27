<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" xml:lang="ru">
<head>
	<title>Дампер Ф.CMS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="../admin/assets/ext3/resources/css/ext-all-notheme-min.css" />
	<link rel="stylesheet" type="text/css" href="../admin/templates/default/css/modx-min.css" />
	<link rel="stylesheet" type="text/css" href="assets/style.css" />
</head>
<body>
<div id="install-div">

	<div class="x-panel-tl">
		<div class="x-panel-tr">
			<div class="x-panel-tc">
				<div class="x-panel-header x-unselectable">
					<span class="x-panel-header-text">Дампер Ф.CMS</span>
				</div>
			</div>
		</div>
	</div>
	<div class="x-panel-bwrap">
		<div class="x-panel-ml">
			<div class="x-panel-mr">
				<div class="x-panel-mc">
				<?if(!$ready){?>
					<form id="modx-login-form" action="" method="post">
						<div class="x-form-item">
							<label for="db-pass" class="x-form-item-label">Имя файла</label>
							<div class="x-form-element">
								<input type="text" id="db-pass" name="filename" tabindex="1" autocomplete="on" value="<?=$filename?>" class="x-form-text x-form-field" />.sql
								<button style="margin: 5px 50px 0px 0px" class="x-btn-text" name="login" type="submit" value="1" id="modx-login-btn" tabindex="4">Создать дамп</button>
							</div>
							<div class="x-form-clear-left"></div>
						</div>
						<div style="clear: both;"></div>
					</form>
				<?}else{?>
					<h2>Дамп <?=$_POST["filename"]?>.sql успешно создан</h2>
				<?}?>
					<br class="clear" />
				</div>
			</div>
		</div>
	</div>				
</div>
</body>
</html>
