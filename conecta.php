<?php



function Post(){
$url = "https://jsonplaceholder.typicode.com/posts/";
 
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$data = json_decode(curl_exec($ch));
return $data;
}

function PostId($id){
    $url = "https://jsonplaceholder.typicode.com/posts/$id";
     
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $data = json_decode(curl_exec($ch));
    return $data;
    }


function PostComentarioId($id){
        $url = "https://jsonplaceholder.typicode.com/posts/$id/comments";
         
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $data = json_decode(curl_exec($ch));
        return $data;
        }
?>