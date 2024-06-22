
<div class="contenedor-flex">
    <div class="contenedor-pelicula">
        <div>
            <img class="imagen-pelicula" src="{$peli->url_img}" alt="">
        </div>
        <div class="info-peliculas">
            <h1 class="home-titulo-pelicula"><a href="pelicula/{$peli->id}">{$peli->name} </h1>
            <h2>Categoria: {$peli->categorie}</h2>
            <h4 class="descripcion">Descripcion:   {$peli->description}</h4>
        </div>  

    </div>

</div>    