{include file="header.tpl"}
    <div class="container text-center">
        <div class="col mt-5 mb-5">
        {foreach from=$players item=$player}
         
           
                 <div class="card text-center mt-5 mb-5">
                     <div class="card-body text-center mt-5 mb-5">
                         <h5 class='card-title'>Nombre: {{$player->Player_Name}}</h5>
                         <p class='card-text'>Posicion: {{$player->Position}}</p>
                         <p class='card-text'>Equipo: {{$player->Team}}</p>
                         <p class='card-text'>Numero: {{$player->Number}}</p>
                         <a href='form_admi' class='btn btn-primary'type='button'>Agregar</a>
                         <a href='showUpdatePlayer/{{$player->Players_id}}' class='btn btn-primary'type='button'>Editar</a>
                         <a  href='deletePlayer/{{$player->Players_id}}'  type="button" class="btn btn-danger">Eliminar</a>
                         </div>
                     </div>
                 </div>
             {/foreach} 
    </div>
     {include file="footer.tpl"}