<?php
// if文
// function redirectionUrl(string $language): string{
//     $url = "www.example.org/";

//     if($language == "English") $url .= "en";
//     else if($language == "Japanese") $url .= "ja";
//     else if($language == "Spanish") $url .= "es";
//     else if($language == "Russian") $url .= "ru";
//     else $url;

//     return $url;
// }


// switch文
function redirectionUrl(string $language){
  $url = "www.example.org/";

  switch ($language) {
    case "English":
      $url .= "en";
      break;
    case "Japanese":
      $url .= "ja";
      break;
    case "Spanish":
      $url .= "es";
      break;
    case "Russian":
      $url .= "ru";
      break;
    default :
    $url;
  }
  return $url;
}

echo redirectionUrl("English") . PHP_EOL;
