        
{include file="header.tpl"} 
        
        <h2 class="mt-5">Jugadores</h2>

        <form class="row g-3 mt-5 mb-5" action="updatePlayer/{$player->Players_id}" method="POST">
            <div class="col-md-4">
                <label for="validationServer01" class="form-label">Numero de Camiseta</label>
                <input type="text" class="form-control is-valid" id="validationServer01" name="number" required
                {{if isset($player->number)}}
                    value="{{$player->number}}"
                  {{/if}}>
            </div>
            <div class="col-md-4">
                <label for="validationServer02" class="form-label">Posicion</label>
                <input type="text" class="form-control is-valid" id="validationServer02" name="position" required
                {{if isset($player->position)}}
                    value="{{$player->position}}"
                  {{/if}} >
            </div>
            <div class="col-md-4">
                <label for="validationServer02" class="form-label">Nombre de Jugador</label>
                <input type="text" class="form-control is-valid" id="validationServer02" name="player_name" required
                {{if isset($player->player_name)}}
                    value="{{$player->player_name}}"
                  {{/if}}>

                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Equipo</label>
                    <select class="form-select" id="validationCustom04" name="team" required>
                        {foreach from=$teams item=$team }


                            <option selected disabled value="{{$team->Team_id}}"></option>
                            <option>{{$team->Team}}</option>
                        {/foreach}
                    </select>

                </div>
            </div>
            </div>
            </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>

{include file="footer.tpl"}