    {include file="header.tpl"}

                 
        <div class="container text-center">
        <h2>Jugadores</h2>    
        <div class="row" >
                 <div class="col mt-5 mb-5">
                   {foreach from=$players item=$player}
                    
                      
                            <div class="card text-center ">
                                <div class="card-body text-center">
                                    <h5 class='card-title'>Nombre: {{$player->Player_Name}}</h5>
                                    <p class='card-text'>Posicion: {{$player->Position}}</p>
                                    <p class='card-text'>Equipo: {{$player->Team}}</p>
                                    <p class='card-text'>Numero: {{$player->Number}}</p>
                                    {if isset($smarty.session.USER_ID)}
                                        <a href='form_admi' class='btn btn-primary'type='button'>Agregar</a>
                                        <a href='showUpdatePlayer/{{$player->Players_id}}' class='btn btn-primary'type='button'>Editar</a>
                                        <a  href='deletePlayer/{{$player->Players_id}}'  type="button" class="btn btn-danger">Eliminar</a>
                                            
                                        
                                    {/if}
                                    </div>
                                </div>
                            </div>
                            {/foreach} 
                        </div>
                    </div>    
                    <div class="container text-center">
                        <h2 class="mt-5">Equipos</h2>     
                            <div class="row" >
                                    <div class="col mt-5 mb-5">
                                    {foreach from=$teams item=$team}
                                                <div class="card text-center mt-5 mb-5" >
                                                <div class="card-body text-center mt-5 mb-5">
                                                    <h5 class='card-title'>Equipo: {{$team->Team}}</h5>
                                                    <p class='card-text'>Anillos: {{$team->Rings}}</p>
                                                    <p class='card-text'>Ciudad: {{$team->City}}</p> 
                                                {if isset($smarty.session.USER_ID)}
                                                    <a href='form_admi' class='btn btn-primary'type='button'>Agregar</a>
                                                    <a href='showUpdateTeam/{$team->Team_id}' class='btn btn-primary'type='button'>Editar</a>
                                                    <a href='deleteTeam/{$team->Team_id}' type="button" class="btn btn-danger">Eliminar</a>
                                                    <div class="alert alert-danger mt-3">
                                                    {$error}
                                                     </div>
                                                {/if} 
                                                    </div>
                                                </div>
                                            </div>
                                        {/foreach}
                        </div> 
                    </div>
            {include file="footer.tpl"}  