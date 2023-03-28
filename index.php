<?php
require('/usr/local/lib/php/Smarty/Smarty.class.php');
//Create new Smarty
$smarty = new Smarty();

//Clear cache, it disturbs my development >:v
$smarty->clearAllCache();

//Set dirs
$smarty->setTemplateDir('./web/templates');
$smarty->setCompileDir('./web/templates_c');
$smarty->setCacheDir('./web/cache');
$smarty->setConfigDir('./web/configs');
$content = "home.tpl";
$smarty->assign("name", "Title");
//Assign content and template to samrty
$smarty->assign("content", $content);
$smarty->display($template);
?>
