<!--  inicio contenedor -->
<div class="wrapper wrapper-content">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox float-e-margins">
            <div class="ibox-title">
               <h5>
                Historia Clínica ID# N° <?=$id_historia_med;?>&nbsp;&nbsp;/&nbsp;&nbsp; 
                Fecha Creación: <?=$info_hc["fecha_creacion"];?> &nbsp;&nbsp;/&nbsp;&nbsp;  
                Fecha Ultima Edición: <?=$info_hc["fecha_modificacion"];?> </h5>
               <div class="ibox-tools">
               </div>
            </div>
            <div class="ibox-content">
                <form name="form_ficha_clinica" id="form_ficha_clinica" class="form-horizontal">
                  <input type="hidden" id="id_data_usuario" name="id_usuario" value="<?=$paciente["id_usuario"];?>">
                  <input type="hidden" id="id_paciente" name="id_paciente" value="<?=$paciente["id_usuario"];?>">
                  <input type="hidden"  id="id_historia_med" name="id_historia_med" value="<?=$id_historia_med;?>">
                  <div class="form-group">
                     <!--<div class="col-sm-2" style="text-align:justify;">
                        <a href="#" class="thumbnail">
                        <img src="<?=base_url();?>img/sin-foto.png" class="img-thumbnail" alt="imagen usuario">
                        </a>                         
                        <hr>
                        </span>
                        </div>-->
                     <div class="col-sm-12">
                         <div class="row">
                             
                             <div class="col-sm-3">
                                <a href="#" class="thumbnail">
                                    <img src="<?=  base_url();?>img/pacientes/<?=$paciente["imagen"];?>" class="img-thumbnail" alt="imagen usuario">
                                </a>
                             </div>
                             <div class="col-sm-9">
                                 <div class="col-sm-4">
                                    <?php $genero = $paciente["genero"] == "M" ?  'Masculino' : 'Femenino';?>
                                    <p><strong>R.U.T:</strong> <?=$paciente["rut"];?></p>
                                    <p><strong>Nombre:</strong> <?=ucfirst($paciente["primer_nombre"]);?> <?=ucfirst($paciente["segundo_nombre"]);?> <?=ucfirst($paciente["apellido_paterno"]);?> <?=ucfirst($paciente["apellido_materno"]);?></p>
                                    <p><strong>Genero:</strong> <?=$genero?></p>
                                    <p><strong>Telefono (fijo):</strong> <?=$paciente["telefono"];?></p>
                                    <p><strong>Telefono celular:</strong> <?=$paciente["celular"];?></p>
                                    <p><strong>Correo:</strong> <?=$paciente["email"];?></p>
                                    <p><strong>Estado Civil:</strong> <?=ucfirst($paciente["estado_civil"]);?></p>
                                 </div>
                                 <div class="col-sm-4">
                                     <p><strong>Fecha Nac.:</strong> <?=$paciente["fecha_nac"];?></p>
                                     <p><strong>Lugar de Nac.:</strong> <?=ucfirst($paciente["lugar_nac"]);?></p>
                                     <p><strong>Religión:</strong> <?=ucfirst($paciente["religion"]);?></p>
                                     <p><strong>País de residencia:</strong> <?=ucfirst(strtolower($paciente["pais"]));?></p>
                                     <p><strong>Prev. Médica::</strong> <?=ucfirst($paciente["prevision"]);?></p>
                                     <p><strong>Ocupación:</strong> <?=ucfirst(strtolower($paciente["ocupacion"]));?></p>
                                 </div>
                                 <div class="col-sm-4">
                                     <p><strong>Niv. Estudios:</strong> <?=ucfirst($paciente["nivel_estudio"]);?></p>
                                     <p><strong>Grupo Sanguíneo:</strong> <?=$paciente["grupo_sanguineo"];?></p>
                                     <p><strong>Factor RH:</strong> <?=ucfirst($paciente["factor_rh"]);?></p>
                                     <p><strong>Residencia Actual:</strong> <?=ucfirst($paciente["calle"]);?>, <?=ucfirst($paciente["comuna"]);?>, <?=ucfirst($paciente["provincia"]);?>, <?=ucfirst($paciente["region"]);?> </p>
                                 </div>
                             </div>
                         </div>
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="panel blank-panel">
                                 <div class="panel-heading">
                                    <div class="panel-options">
                                       <ul class="nav nav-tabs">
                                          <li class="active"><a data-toggle="tab" href="#tab-2">Antecedentes Familiares</a></li>
                                          <li class=""><a data-toggle="tab" href="#tab-3">Antecedentes Sociales y Personales</a></li>
                                          <li class=""><a data-toggle="tab" href="#tab-4">Personas de Contacto</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="panel-body">
                                    <div class="tab-content">
                                       <div id="tab-2" class="tab-pane active">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <textarea 
                                                   name="ant_familiares" 
                                                   placeholder="En esta sección se precisan enfermedades que presenten o hayan presentado familiares cercanos como los padres y hermanos, por la posibilidad que algunas de ellas tengan transmisión por herencia. Es este sentido es importante investigar la presencia de hipertensión, diabetes mellitus, alteraciones de los lípidos, antecedentes de enfermedades coronarias, cánceres de distinto tipo (p.ej.: de mama o colon), enfermedades cerebrovasculares, alergias, asma, trastornos psiquiátricos, enfermedades genéticas y otras (gota, hemofilia, etc.)."
                                                   id="ant_familiares" 
                                                   class="form-control" 
                                                   cols="92" 
                                                   rows="10" ><?=$info_hc["ant_familiares"];?></textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="tab-3" class="tab-pane">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <textarea 
                                                   name="ant_soc_personales" 
                                                   placeholder="En esta sección se investigan aspectos personales del paciente que permitan conocerlo mejor. La intención es evaluar y comprender cómo su enfermedad lo afecta y qué ayuda podría llegar a necesitar en el plano familiar, de su trabajo, de su previsión, de sus relaciones interpersonales."
                                                   id="ant_soc_personales" 
                                                   class="form-control" 
                                                   cols="92" 
                                                   rows="10" ><?=$info_hc["ant_sociales_personales"];?></textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="tab-4" class="tab-pane">
                                           <div class="re" >
                                               
                                           </div>
                                            <div class="col-md-12">
                                                <table class="table table-striped ">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Nombres</th>
                                                            <th>Apellidos</th>
                                                            <th>Parentesco</th>
                                                            <th>Telefono</th>
                                                            <th>Correo</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                        
                                                        if(count($paciente["personas_contacto"]) > 0){
                                                        
                                                        foreach($paciente["personas_contacto"] as $contacto){ ?>
                                                            
                                                        <td><?=$contacto["id_persona_contacto"];?></td>
                                                        <td><?=$contacto["nombres"];?></td>
                                                        <td><?=$contacto["apellidos"];?></td>
                                                        <td><?=$contacto["parentesco"];?></td>
                                                        <td><?=$contacto["telefono"];?></td>
                                                        <td><?=$contacto["correo"];?></td>
                                                            
                                                        <?php } }else{ ?>
                                                         
                                                        <td colspan="6">No se encontraron resultados.</td>
                                                            
                                                       <?php  } ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="panel-heading">
                                    <!--<div class="row">
                                       <div class="col-md-12">
                                          <h4>Antecedentes Clinicos Del Paciente</h4>
                                       </div>
                                    </div>-->
                                    <div class="panel-options">
                                       <ul class="nav nav-tabs">
                                          <li class="active"><a data-toggle="tab" href="#tab-m">Antecedentes Morbidos</a></li>
                                          <li class=""><a data-toggle="tab" href="#tab-g">Antecedentes Ginecoobstetricos</a></li>
                                          <li class=""><a data-toggle="tab" href="#tab-h">Habitos</a></li>
                                          <li class=""><a data-toggle="tab" href="#tab-med">Medicamentos</a></li>
                                          <li class=""><a data-toggle="tab" href="#tab-a">Alergias</a></li>
                                          <li class=""><a data-toggle="tab" href="#tab-i">Inmunizaciones</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="panel-body">
                                    <div class="tab-content">
                                       <div id="tab-m" class="tab-pane active">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <textarea 
                                                   name="ant_morbidos" 
                                                   placeholder="En esta parte se deben precisar las enfermedades, operaciones y traumatismos que el paciente ha tenido a lo largo de su vida. Por supuesto, se precisarán aquellas patologías que sean más significativas."
                                                   id="ant_morbidos" 
                                                   class="form-control" 
                                                   cols="92" 
                                                   rows="10" ><?=$info_hc["morbidos"];?></textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="tab-g" class="tab-pane">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <textarea 
                                                   name="annt_ginecoobstetricos" 
                                                   placeholder="En las mujeres se debe precisar: Edad de la primera menstruación espontánea (menarquia), Edad en la que la mujer dejó en forma natural de menstruar (menopausia), Características de las menstruaciones, Presencia de otros flujos vaginales, Información de los embarazos, Métodos anticonceptivos y Otras informaciones."
                                                   id="annt_ginecoobstetricos" 
                                                   class="form-control" 
                                                   cols="92" 
                                                   rows="10" ><?=$info_hc["ginecoobstetricos"];?></textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="tab-h" class="tab-pane">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <textarea 
                                                   name="habitos" 
                                                   placeholder="Entre los hábitos que se investigan destacan: El hábito de fumar (tabaquismo), La ingesta de bebidas alcohólicas, Tipo de alimentación y Uso de drogas no legales"
                                                   id="habitos" 
                                                   class="form-control" 
                                                   cols="92" 
                                                   rows="10" ><?=$info_hc["habitos"];?></textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="tab-med" class="tab-pane">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <textarea 
                                                   name="medicamentos" 
                                                   placeholder="Es importante identificar qué medicamentos está tomando el paciente y en qué cantidad. En algunos casos, también se deben indicar los fármacos que el paciente recibió en los días o semanas anteriores."
                                                   id="medicamentos" 
                                                   class="form-control" 
                                                   cols="92" 
                                                   rows="10" ><?=$info_hc["medicamentos"];?></textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="tab-a" class="tab-pane">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <textarea 
                                                   name="alergias" 
                                                   placeholder="El tema de las alergias es muy importante ya que puede tener graves consecuencias para la persona. Entre los alergenos, que son las sustancias ante las cuales se desencadenan las respuestas alérgicas, hay varios que se deben investigar: Medicamentos, Alimentos, Sustancias que entran en contacto con la piel y Picaduras de insectos."
                                                   id="alergias" 
                                                   class="form-control" 
                                                   cols="92" 
                                                   rows="10" ><?=$info_hc["alergias"];?></textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="tab-i" class="tab-pane">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <textarea 
                                                   name="inmunizaciones" 
                                                   placeholder="Según el cuadro clínico que presente el paciente puede ser importante señalar las inmunizaciones que el paciente ha recibido."
                                                   id="inmunizaciones" 
                                                   class="form-control" 
                                                   cols="92" 
                                                   rows="10" ><?=$info_hc["inmunizaciones"];?></textarea>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="panel-heading">
                                    <div class="panel-options">
                                       <ul class="nav nav-tabs">
                                          <li class="active"><a data-toggle="tab" href="#tab-cm">Histórico Consultas Médicas</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="panel-body">
                                    <div class="tab-content">
                                       <div id="tab-cm" class="tab-pane active">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="table-responsive">
                                                   <table id="consultas_medicas" class="table table-striped table-hover dataTables-example" >
                                                      <thead>
                                                         <tr>
                                                            <th style="width:5%">N°</th>
                                                            <th style="width:5%">Fecha</th>
                                                            <th style="width:50%">Motivo Consulta</th>
                                                            <!--<th style="width:40%">Anamnesis Próxima</th>-->
                                                            <th style="width:40%">acciones</th>
                                                         </tr>
                                                      </thead>
                                                   </table>
                                                </div>
                                                 <!-- SECCION QUE PERMITIRA CARGAR DETALLE DE 
                                                 CONSULTA MÉDICA , REVISIÓN POR SISTEMAS O EXAMEN FÍSICO -->
                                                <div id="info_detalle" ></div>  
                                                
                                                
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="hr-line-dashed"></div>
                                 &nbsp
                                 <div class="row">
                                    <div class="col-md-6">
                                       <button class="btn btn-white" type="button">Mis pacientes</button>
                                       &nbsp;&nbsp;
                                       <button class="btn btn-primary"  id="guardar_cambios" type="submit">Guardar Cambios</button>
                                    </div>
                                    <div class="col-md-6">&nbsp;</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<a name='Ancla'></a>