<div class="contenedor-flex">
    <div class="contenedor-pelicula">
        <div>
            <img class="imagen-pelicula" src="{$peli->url_img}" alt="">
        </div>
        <div class="info-peliculas">
            <form method="post" action="modificar/{$peli->id}" enctype="multipart/form-data">
                <label>Nombre de la Pelicula:</label><input value="{$peli->name}" type="text" name="name" required>
                <label>Categoria de la pelicula:</label><select name="categorie">
                {foreach from=$categorias item=$categoria}
                    <option value="{$categoria->categorie}">{$categoria->categorie}</option>
                {/foreach} 
                </select>
                <label>Año de lanzamiento:</label><input value="{$peli->release_date}" type="text" name="release_date" required>
                <div class "espacio"><label>Descripcion:</label><input id="input-categorie" value="{$peli->description}" type="text" name="description" required></div>
                <input type="submit">
                </form>
        </div>  

    </div>

</div>    