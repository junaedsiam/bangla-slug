<?php 
$text = 'পৃথিবীর শেষ প্রান্তে দাঁড়িয়ে হারিয়েছি পথ ! ';
function make_slug($string = null, $separator = "-") {
    if (is_null($string)) {
        return "";  
    }
    //for unique url , you can use this line. 
    //If you do not want such functionality, remove it
    $string = $string.time();
    // Lower case everything 
    $string = mb_strtolower($string, "UTF-8");;

    // Make alphanumeric (removes all other characters)
    // this makes the string safe especially when used as a part of a URL
    // this keeps latin characters and arabic charactrs as well
    $string = preg_replace("/[^a-z0-9অআইঈউঊঋঌএঐওঔকখগঘঙচছজঝঞটঠডঢণতথদধনপফবভমযরলশষসহাি  ী ু ূ ৃ ৄ ে ৈ ো ৌ ্ৎ ৗড়ঢ়য়ৠ০১২৩৪৫৬৭৮৯৳ ঁ]/u", "", $string);
    // Remove spaces from the beginning and from the end of the string
     $string = trim($string);
    // Remove multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);

    // Convert whitespaces and underscore to the given separator
    $string = preg_replace("/[\s_]/", $separator, $string);
    return $string;
}

$slug = make_slug($text);

echo $slug;