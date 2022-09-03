<?php


function get ($route, $path_to_include){
route($route,$path_to_include);
}
function any ($route,$path_to_include){
route($route,$path_to_include); 
}

function route ($route, $path_to_include){
  $request=$_SERVER['REQUEST_URI'];

 $current ="/". basename(getcwd());
 
$router=str_replace($current,'',$request);

    
    if ($router==$route) {
    include($path_to_include);
  }elseif ($router==$route) {
  include($path_to_include);
  }
  


}
?>