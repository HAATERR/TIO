{include file="header.tpl"}
        
       
            
<div class="container text-center">
      
        <div class="col-sm-6 mt-5 mb-5">
       
         
        
                 <div class="card text-center ">
                     <div class="card-body text-center">
                     
                         <h5 class='card-title'>Nombre: {$player->Player_Name}</h5>
                         <p class='card-text'>Posicion: {$player->Position}</p>
                         <p class='card-text'>Equipo: {$player->Team}</p>
                         <p class='card-text'>Numero: {$player->Number}</p>
                         <a href='form_admi' class='btn btn-primary'type='button'>Agregar</a>
                         <a href='showUpdatePlayer/{{$player->Players_id}}' class='btn btn-primary'type='button'>Editar</a>
                         <a  href='deletePlayer/{{$player->Players_id}}'  type="button" class="btn btn-danger">Eliminar</a>
                         </div>
                     </div>
                 </div>
                </div>
                
     {include file="footer.tpl"}