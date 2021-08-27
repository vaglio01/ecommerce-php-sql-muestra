

        
        
                <div id="mainPanel">    
                    <div class="continer_Art">
                    {foreach $articulos as $articulo} 
                       <div class ="arti"> 
                        <h5>{$articulo.nombre}</h5> 
                        <span>Precio: ${$articulo.precio}</span> 
                        <span>Stock: {$articulo.stock}</span>
                        </div>
                    {/foreach}
                    
                    </div>
                </div> 
            </div> {*seccion con el aside *} 
            </section> {*seccion del menu *}   
   