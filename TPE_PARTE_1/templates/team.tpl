{include file="header.tpl"}

        
                        <div class="row " >
                                <div class="col-sm-6 mt-5 mb-5">
                                     <div class="card text-center" >
                                            <div class="card-body text-center">
                                                <h5 class='card-title'>Equipo: {{$team->Team}}</h5>
                                                <p class='card-text'>Anillos: {{$team->Rings}}</p>
                                                <p class='card-text'>Ciudad: {{$team->City}}</p>
                                                {foreach from=$playerid item=$player }
                                                    <p class='card-text'>Jugador del Equipo: {{$player->Player_Name}}</p>
                                                {/foreach}
                                                {if isset($smarty.session.USER_ID)}
                                                        <a href='form_admi' class='btn btn-primary'type='button'>Agregar</a>
                                                        <a href='showUpdateTeam/{$team->Team_id}' class='btn btn-primary'type='button'>Editar</a>
                                                        <a href='deleteTeam/{$team->Team_id}' type="button" class="btn btn-danger">Eliminar</a>
                                                          
                                                    {{/if}}
                                                </div>
                                            </div>
                                        </div>
                                    

{include file="footer.tpl"}