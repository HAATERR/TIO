            {include file="header.tpl"}

                 

            <div class="row" >
                 <div class="col-sm-6 mt-5 mb-5">
                   {foreach from=$players item=$player}
                    
                      
                            <div class="card">
                                <div class="card-body">
                                    <h5 class='card-title'>Nombre: {{$player->Player_Name}}</h5>
                                    <p class='card-text'>Posicion: {{$player->Position}}</p>
                                    <p class='card-text'>Equipo: {{$player->Team}}</p>
                                    <p class='card-text'>Numero: {{$player->Number}}</p>
                                    <a href='form_admi' class='btn btn-primary'type='button'>Agregar</a>
                                    <a href='form_admi' class='btn btn-primary'type='button'>Editar</a>
                                    <a  href='deletePlayer/{{$player->Player_id}}'  type="button" class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                           </div> 
                        {/foreach} 
       
       
       
       
       
       
       
       
       
       <div class="row" >
                     <div class="col-sm-6 mt-5 mb-5">
                       {foreach from=$teams item=$team}
                                <div class="card" >
                                <div class="card-body">
                                     <h5 class='card-title'>Equipo: {{$team->Team}}</h5>
                                    <p class='card-text'>Anillos: {{$team->Rings}}</p>
                                    <p class='card-text'>Ciudad: {{$team->City}}</p>
                                    <a href='form_admi' class='btn btn-primary'type='button'>Agregar</a>
                                    <a href='form_admi' class='btn btn-primary'type='button'>Editar</a>
                                    <a href='deleteTeam/{$team->Team_id_fk}' type="button" class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        {/foreach}


            {include file="footer.tpl"}  