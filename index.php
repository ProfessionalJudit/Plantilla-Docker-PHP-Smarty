<?php
require('/usr/local/lib/php/Smarty/Smarty.class.php');
//Create new Smarty
$smarty = new Smarty();

//Clear cache, i disturbs my development >:v
$smarty->clearAllCache();

//Set dirs
$smarty->setTemplateDir('./web/templates');
$smarty->setCompileDir('./web/templates_c');
$smarty->setCacheDir('./web/cache');
$smarty->setConfigDir('./web/configs');

//Name page
$smarty->assign('name', 'YES');

//Switch subpages
if (empty($_GET["page"])) {
    //Set template to be used and content to be inserted
    $template = "index.tpl";
    $content = "home.tpl";
} else {
    $page = $_GET["page"];
    switch ($page) {
        case "home":
            //Set template to be used and content to be inserted
            $template = "index.tpl";
            $content = "home.tpl";
            break;
        default:
            //Set template to be used and content to be inserted
            $template = "404.tpl";
            break;
    }
}
//Assign content and template to samrty
$smarty->assign("content", $content);
$smarty->display($template);
?>