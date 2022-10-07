{include file="header.tpl"}


                        <div class="row " >
                                <div class="col-sm-6 mt-5 mb-5">
                                {foreach from=$teams item=$team}
                                            <div class="card" >
                                            <div class="card-body">
                                                <h5 class='card-title'>Equipo: {{$team->Team}}</h5>
                                                <p class='card-text'>Anillos: {{$team->Rings}}</p>
                                                <p class='card-text'>Ciudad: {{$team->City}}</p>
                                                <a href='form_admi' class='btn btn-primary'type='button'>Editar o Agregar</a>
                                                <a href='deleteTeam/{$team->Team_id_fk}' type="button" class="btn btn-danger">Eliminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    {/foreach}

{include file="footer.tpl"}