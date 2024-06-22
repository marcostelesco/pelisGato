
    <h1>{$titulo}</h1>
  {foreach from=$pelis item=$peli}
    
    
<div class="contenedor-pelicula">
    <div>
      <img class="imagen-pelicula" src="{$peli->url_img}" alt="">
    </div>
    <div class="info-peliculas">
    {if $user == 1}
      <a href="eliminar/{$peli->id}" class="nav-link"><button>Borrar</button></a> 
      <a href="modificarview/{$peli->id}" class="nav-link"><button>Modificar</button></a> 
    {/if}
      <h1 class="home-titulo-pelicula"><a href="pelicula/{$peli->id}">{$peli->name}</a></h1>
      <h2>Categoria: {$peli->categorie}</h2>
      <h4 class="descripcion">Descripcion:   {$peli->description}</h4>
    </div>
</div>
{/foreach} 
{if $user == 1}
  <div class="contenedor-agregar-pelicula">
    <h2 class="">Agregar un pelicula a la lista!</h2>
    <form class="formulario-agregar-peli" method="post" action="createPeli" enctype="multipart/form-data">
      <label>Nombre de la Pelicula:</label><input type="text" name="name" required>
      <label>Categoria de la pelicula:</label><select name="categorie">
      {foreach from=$categorias item=$categoria}
          <option value="{$categoria->categorie}">{$categoria->categorie}</option>
      {/foreach}   
      </select>
      <label>Año de lanzamiento:</label><input type="text" name="release_date" required>
      <label>Descripcion:</label><input type="text" name="description" required>
      <label>Adjuntar imagen resolucion estandar 300x445:</label><input type="file" name="img">
      <input type="submit" value="Agregar">
    </form>
  </div>
{/if}

            