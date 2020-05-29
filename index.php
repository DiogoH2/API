<?php
    include_once ('filme.php');
    $address = getFilme();

?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta  name = "viewport"  content = " width = largura do dispositivo, escala inicial = 1.0 " >
    <title>FilmesON</title>
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="Bootstrap/bootstrap.min.css">

</head>

<body onload = "carregar()">
<div class="container">
    <header>
        <div class="text-center">
            <h1 class="Titulo">FilmesON</h1>
        </div><br>
    </header>
<article>
    

        <form action="." method="POST">
        
        <div class="form-group ">
            <input type="text" class="form-control" id="Filme" aria-describedby="SearchFilm" placeholder="Digite o nome Do Filme ou Série"name="nomefilme">
        </div>
        <button type="submit" id="botao" class="btn btn-primary">Procurar</button><br><br>
        <div class="col-4">
            <img src="<?php echo $address->Search[0]->Poster ?? '' ?>" width="140px">
        </div>
        <div class="form-group col-4">
           <p class="p_article"><span style="color:white; font-size: 18px;"><?php echo $address->Search[0]->Title ?? '';?></span> </p>
        </div>
        
        <div class="form-group col-4">
           <p class="p_article"><span style="color:white; font-size: 18px;"><?php echo $address->Search[0]->Year ?? ''?></span></p>
        </div>

        <div class="form-group col-4">
        <p class="p_article"> <span style="color:white; font-size: 18px;"><?php echo $address->Search[0]->Type ?? '' ?></span></p>
        </div>
        </form>
    

</article>
</div>
</body>
</html>
