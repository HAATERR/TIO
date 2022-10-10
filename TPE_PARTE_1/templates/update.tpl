        
       {include file="header.tpl"} 
        <h2>Editar Equipos</h2>

        <form class="row g-3 mt-5 mb-5" action="updateTeam" method="POST" >
            <div class="col-md-4">
                <label for="validationServer01" class="form-label">Nombre de Equipo</label>
                <input type="text" class="form-control is-valid" id="validationServer01" name="team" required>
            </div>
            <div class="col-md-4">
                <label for="validationServer02" class="form-label">Cantidad de Anillos</label>
                <input type="text" class="form-control is-valid" id="validationServer02" name="rings" required>
            </div>
            <div class="col-md-4">
                <label for="validationServer02" class="form-label">Ciudad del Equipo</label>
                <input type="text" class="form-control is-valid" id="validationServer02" name="city" required>
                <div class="col-md-3">
                </div>
            </div>
            </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
        {include file="footer.tpl"}