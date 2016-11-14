<!--  inicio contenedor -->
<div class="wrapper wrapper-content">
   <div class="ibox float-e-margins" id="middle">
       <div class="ibox-content">
          <div class="row">
            <div id="grafico_pie" style="float:left" class ="col-lg-6"></div>  
            <div id="grafico_pie2" style="float:left" class ="col-lg-6"></div>         
          </div>
          <div class="row">               
            <div onclick="modal_info();" class="widget lazur-bg" style="cursor: pointer;background-color: #FFF;color:#7CB5EC;margin: 0px;">
            <div class="row vertical-align">
               <div class="col-xs-3">
                  <i class="fa fa-users fa-3x"></i>
               </div>
               <div class="col-xs-9 text-right">
                  <h2 class="font-bold">Ingresar / Actualizar / Eliminar Información</h2>
               </div>
            </div>
         </div>            
          </div>
       </div>
   </div>
   <!-- Ver datos gestionables -->
   <div class="modal inmodal" id="gestion_datos" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content animated bounceInRight">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
               <i class="fa fa-laptop modal-icon"></i>
               <h4 class="modal-title">Gestión de datos</h4>
               <small class="font-bold">Gracias a este módulo podrá agregar, editar o eliminar información del sistema.</small>
            </div>
            <div class="modal-body" id="modal-data">
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
               <button type="button" class="btn btn-primary" onclick="mostrar_opciones();" id="bto_opciones">Continuar</button>
            </div>
         </div>
      </div>
   </div>
   <!-- Mostrar opciones -->
   <div class="modal inmodal" id="crud_datos" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content animated bounceInRight">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
               <i class="fa fa-laptop modal-icon"></i>
               <h4 class="modal-title">¿Qué desea hacer?</h4>
            </div>
            <div class="modal-body" id="modal-data-sm">
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
               <button type="button" class="btn btn-primary" id="bto_crud">Continuar</button>
            </div>
         </div>
      </div>
   </div>
   <!-- Mostrar / Editar datos -->
   <div class="modal inmodal" id="mod_ver_datos" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content animated bounceInRight">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
               <i class="fa fa-laptop modal-icon"></i>
               <h4 class="modal-title"><span id="mod_title"></span></h4>
            </div>
            <div class="modal-body">
               <form id="mod_ver_datos_body">               
               </form>
            </div>
            <div class="modal-footer">
               <input type="hidden" name="inp_tipo" id="inp_tipo">
               <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
               <button type="button" class="btn btn-primary" id="bto_actualizar_datos" style="display:none" onclick="actualizar_datos()">Actualizar</button>
            </div>
         </div>
      </div>
   </div>
   <!-- Content -->
   <div id="ibox-wrapper" style="display: none;">
	   <div class="ibox-title" >
	      <h5>Gestión de Datos <small> <span id="spntipo"></span> </small></h5>	 
         <div class="ibox-tools">            
             <a onclick="window.location.reload();" >
                 <i class="fa fa-plus"></i> <b>Gestionar más datos</b>
             </a>
         </div>    
	   </div>
	   <div class="ibox-content">
	      <div class="row">          
	   	 <div id="alergias"></div>
		    <div id="patologias"></div>
		    <div id="medicamentos"></div>
		    <div id="vacunas"></div>
		    <div id="tratamientos"></div>
		    <div id="diagnosticos"></div>	     
	      </div>
	   </div>
   </div>


   
</div>