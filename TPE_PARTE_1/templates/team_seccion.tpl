{include file="header.tpl"}
        <div class="container text-center">
                    {{foreach from=$teams item=$team}}
                        <div class="row " >
                                <div class="col mt-5 mb-5">
                                    <div class="card text-center" >
                                            <div class="card-body text-center">
                                                <h5 class='card-title'>Equipo: {{$team->Team}}</h5>
                                                <p class='card-text'>Anillos: {{$team->Rings}}</p>
                                                <p class='card-text'>Ciudad: {{$team->City}}</p>
                                                <a href='form_admi' class='btn btn-primary'type='button'>Agregar</a>
                                                <a href='showUpdateTeam/{$team->Team_id}' class='btn btn-primary'type='button'>Editar</a>
                                                <a href='deleteTeam/{$team->Team_id}' type="button" class="btn btn-danger">Eliminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    {{/foreach}}
                        </div>
{include file="footer.tpl"}