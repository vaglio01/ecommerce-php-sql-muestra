<div class="bbb"> 
    <aside  class="border-end" id="leftMenu">
        <p>Categortia de Productos </p>
        <ul>               
            <li><a href="index.php?">Mostrar Todo</a></li> 
            {foreach $categorias as $categoria} 
                <li><a href="index.php?action=productos&id={$categoria.id}">{$categoria.nombre}</a></li> 
        {/foreach}
        </ul>
    </aside>