<?php


include 'data.php';

// if(isset($_GET["themes"]) && $_GET["themes"]!='')
// {

//     $theme = $_GET["themes"];
//     if (file_exists('themes/'.$theme.'-themes/template.php')){

//         require 'themes/'.$theme.'-themes/template.php';
//     }
//     else
//     {
//         echo "le theme désiré est inexistant !";
//     }
// }else {
//     include 'themes/eljadids-themes/template.php';
// }

function printName()
{
    echo $GLOBALS['tab']['profile']['firstname']." ".$GLOBALS['tab']['profile']['lastname'] ;
}


 
$theme = isset($_GET['theme']) && $_GET['theme'] !=''? $_GET['theme'] :'eljadids';
$page=isset($_GET['page']) && $_GET['page']!=''? 'template-'. $_GET['page'] : 'template';

if(file_exists('themes/'.$theme.'-themes/'.$page.'.php')){
    require 'themes/'.$theme.'-themes/'.$page.'.php';


}else
{
echo "cette page n'existe pas"; 
}
?>


