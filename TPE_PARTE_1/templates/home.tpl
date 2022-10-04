            {include file="header.tpl"}

                 


       <div class="row">
                     <div class="col-sm-6">
                   {foreach from=$players item=$player}
                    
                      
                            <div class="card">
                                <div class="card-body">
                                    <h5 class='card-title'>Nombre: {$player->Player_Name}</h5>
                                    <p class='card-text'>Posicion: {$player->Position}</p>
                                    <p class='card-text'>Equipo: {$player->Team}</p>
                                    <p class='card-text'>Numero: {$player->Number}</p>
                                    <a href='form_admi.tpl' class='btn btn-primary'type='button'>Editar o Agregar</a>
                                    <a  href='delete/{{$player->id}}'  type="button" class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        {/foreach} 
       
       
       
       
       
       
       
       
       
       <div class="row">
                     <div class="col-sm-6">
                       {foreach from=$teams item=$team}
                                <div class="card" >
                                <div class="card-body">
                                     <h5 class='card-title'>Equipo: {$team->Team}</h5>
                                    <p class='card-text'>Anillos: {$team->Rings}</p>
                                    <p class='card-text'>Ciudad: {$team->City}</p>
                                    <a href='/templates/form_admi.tpl' class='btn btn-primary'type='button'>Editar o Agregar</a>
                                    <a href='delete/{{$team->id}}' type="button" class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        {/foreach}


            {include file="footer.tpl"}  