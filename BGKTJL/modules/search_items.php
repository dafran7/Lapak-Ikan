<?php

include_once("connect.php");
include_once("functions.php");

//add product to session or create new one
if(isset($_POST["search"]) && $_POST["search"]!='')
{
    if(isset($_SESSION["search_products"])){
        unset($_SESSION["search_products"]);
    }
    $search_terms = sanitizeone($_POST["search"],"plain");
    $search_terms = strip_word_html($search_terms);

    $search_terms = explode(' ',$search_terms);
    $searchBits = array();
    foreach ($search_terms as $term){
        $term = trim($term);
        if(!empty($term)) {
            $searchBits[] = "nama_item LIKE '%$term%'";
        }
    }

    $search = $mysqli->prepare("SELECT * FROM item WHERE ".implode(' AND ', $searchBits));
    $search->execute();
    $temp = $search->get_result();

        while ($row = $temp->fetch_assoc()) {
            $getItems["nama_item"] = $row['nama_item'];
            $getItems["item_id"] = $row['item_id'];
            $getItems["gambar_item"] = $row['gambar_item'];
            $getItems["harga"] = $row['harga'];
            $_SESSION["search_products"][$getItems["item_id"]] = $getItems;
        }
    if(count($_SESSION["search_products"])==0) $_SESSION["search_products"] = 'fail';
}

$return = (isset($_POST["home"]))?urldecode($_POST["home"]):''; //return url
header('Location:'.$return);

?>