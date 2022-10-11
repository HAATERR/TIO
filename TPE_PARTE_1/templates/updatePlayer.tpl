        
{include file="header.tpl"} 
        
        <h2 class="mt-5">Jugadores</h2>

        <form class="row g-3 mt-5 mb-5" action="updatePlayer/{$player->Player_id}" method="POST">
            <div class="col-md-4">
                <label for="validationServer01" class="form-label">Numero de Camiseta</label>
                <input type="text" class="form-control is-valid" id="validationServer01" name="player_name" required>
            </div>
            <div class="col-md-4">
                <label for="validationServer02" class="form-label">Posicion</label>
                <input type="text" class="form-control is-valid" id="validationServer02" name="number" required>
            </div>
            <div class="col-md-4">
                <label for="validationServer02" class="form-label">Nombre de Jugador</label>
                <input type="text" class="form-control is-valid" id="validationServer02" name="position" required>

                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Equipo</label>
                    <select class="form-select" id="validationCustom04" name="team" required>
                        {foreach from=$teams item=$team }


                            <option selected disabled value="{{$team->Team_id_fk}}"></option>
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