<?php 
function getFilme(){


if (isset ($_POST['nomefilme'])){
    $filme = $_POST['nomefilme'];
    
    $address = getFilmeomdbapi($filme);
 
 
}else {
    $address = FilmeEmpty();
   
}

return $address;
}

function FilmeEmpty(){
    return (object)[
        'Title' => '',
        'Year' => '',
        'Type' => '',
        'Poster' => ''
    ];
}



function getFilmeomdbapi(String $filme){
    $url = "https://www.omdbapi.com/?s={$filme}&apikey=7a6ed400";
    return json_decode(file_get_contents($url));

  
}


