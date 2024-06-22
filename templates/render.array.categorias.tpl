{include file="templates/header.php"}

<h1>{$titulo}</h1>
{if $user == 1}
    <a href="agregarcategoriaview"><button>Agregar una nueva categoria</button></a>
{/if}

{foreach from=$categorias item=categoria}
    <div class="contenedor-categoria">
        <a href="categoria/{$categoria->categorie}" class="nav-link"><h1>{$categoria->categorie}</h1></a>
        {if $user == 1}
            <a href="eliminarcategoria/{$categoria->categorie}" class="nav-link"><button>Borrar</button> <h6 class="aviso">la funcion "Borrar", borra todas las Peliculas de la categoria</h6></a>  
            <form method="post" action="modificarcategoria/{$categoria->categorie}" enctype="multipart/form-data">
                    <label>Cambiar-Titulo:</label><input type="text" name="titulocategoria" required>
                    <input type="submit">
        {/if}
    </div>    
    </form>
{/foreach}

{include file="templates/footer.html"}
