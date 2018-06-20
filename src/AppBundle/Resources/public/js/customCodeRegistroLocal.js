$(document).ready(function(){
    //Accion del boton de adicionar video
    //Handler del check del estado de apertura de los dias de la semana para el local
    $('.estadoDias').on('ifChecked ifUnchecked', function(event) {
        var item=$(this).attr('data-day');
        var type=$(this).attr('data-type');

        hideSavedMessage(item);

        var session=$('#sessionId').val();

        //crear selectores
        var precioContainer="#precio-"+item+"-container";
        var excepcionesContainer="#excepciones-"+item+"-container";
        var estadoHorarioContainer="#estadoHorario-"+item+"-container";

        var abierto="#abiertos-"+item;
        var cerrado="#cerrados-"+item;

        var estadoItem="";

        var indicadorAbierto='#indicadorAbierto-'+item;
        var indicadorCerrado='#indicadorCerrado-'+item;

        if (event.type == 'ifChecked' && type=='abierto') {
            $(precioContainer).fadeIn();
            $(excepcionesContainer).fadeIn();
            $(estadoHorarioContainer).fadeIn();

            //$(cerrado).iCheck('uncheck');

            estadoItem='#estado-'+item;

            $(estadoItem).val('abierto');

            $(indicadorAbierto).hide();
            $(indicadorCerrado).show();

        }

        else if(event.type=='ifChecked' && type=='cerrado'){
            $(precioContainer).hide();
            $(excepcionesContainer).hide();
            $(estadoHorarioContainer).hide();

            //$(abierto).iCheck('uncheck');

            estadoItem='#estado-'+item;

            $(estadoItem).val('cerrado');

            $(indicadorAbierto).show();
            $(indicadorCerrado).hide();
        }

    });

    //Handler del check de los horarios de apertura del local

    $('.estadoHorario').on('ifChecked ifUnchecked', function(event) {
        var item=$(this).attr('data-day');
        var modalAddHorario="#modalAddHorario-"+item;

        hideSavedMessage(item);

        if (event.type == 'ifUnchecked') {
            $(modalAddHorario).modal('show');
        }
        else{
            //limpiar los horarios

            var horarioContainer="#horarios-"+item+"-container";

            restartHorarios(horarioContainer, horarioContainer);
        }
    });

    //Handler para el campo precio de los eventos de los dias de la semana

    $('.precioEvento').on('keyup',function(){
        var item=$(this).attr('data-item');

        hideSavedMessage(item);
    });

    //Handler para el boton de adicionar horario

    $('.btnAddHorario').on('click',function(e){
        e.preventDefault();

        var item=$(this).attr('data-item');
        var horaDesde="#horaDesde-"+item;
        var minDesde="#minDesde-"+item;

        hideSavedMessage(item);

        var horaHasta="#horaHasta-"+item;
        var minHasta="#minHasta-"+item;

        //adicionar el horario a la tabla

        var $horarioContainer="#horarios-"+item+"-container";
        var $horarioContainerTable="#horarios-"+item+"-container table > tbody";
        $horarioContainer=$($horarioContainer);
        $horarioContainerTable=$($horarioContainerTable);

        var row='<tr>';
        row+='<td>De '+$(horaDesde).val()+':'+$(minDesde).val()+' hr</td>';
        row+='<td>Hasta '+$(horaHasta).val()+':'+$(minHasta).val()+' hr</td>';
        row+='<input type="hidden" class="horarios" data-item="'+item+'" name="horarios[]" value="'+$(horaDesde).val()+':'+$(minDesde).val()+','+$(horaHasta).val()+':'+$(minHasta).val()+'">';
        row+='</tr>';

        //verificar si existen horarios para esta planificacion

        $horarioContainerTable.append($(row));

        $horarioContainer.fadeIn();

        var modalAddHorario="#modalAddHorario-"+item;

        $(modalAddHorario).modal('hide');


    });

    //Handler para el boton de adicionar horario del modal de Excepciones

    $('.btnAdicionarHorarioExcepcion').on('click',function(){

        var horaDesde="#horaDesdeExcepcion";
        var minDesde="#minDesdeExcepcion";

        var horaHasta="#horaHastaExcepcion";
        var minHasta="#minHastaExcepcion";

        //adicionar el horario a la tabla

        var $horarioContainer="#horariosExcepcion-container";
        var $horarioContainerTable="#horariosExcepcion-container table > tbody";
        $horarioContainer=$($horarioContainer);
        $horarioContainerTable=$($horarioContainerTable);

        var row='<tr>';
        row+='<td>De '+$(horaDesde).val()+':'+$(minDesde).val()+' hr</td>';
        row+='<td>Hasta '+$(horaHasta).val()+':'+$(minHasta).val()+' hr</td>';
        row+='<input name="horariosExcepcion[]" type="hidden" class="horariosExcepcion" value="'+$(horaDesde).val()+':'+$(minDesde).val()+','+$(horaHasta).val()+':'+$(minHasta).val()+'">';
        row+='</tr>';

        //verificar si existen horarios para esta planificacion

        $horarioContainerTable.append($(row));

        $horarioContainer.fadeIn();
    });

    //Handler para el check de los estados de horario del modal de Excepciones

    $('.estadoHorarioExcepcion').on('ifChecked ifUnchecked', function(event) {

        var horarioContainer="#horariosFormExcepcionContainer";
        var listadoHorariosContainer='#horariosExcepcion-container';
        if (event.type == 'ifUnchecked') {
            $(horarioContainer).fadeIn();
        }
        else{
            restartHorarios(horarioContainer,listadoHorariosContainer);

        }
    });

    $('.estadoDiasExcepcion').on('ifChecked',function(event){
        $('#estadoExcepcion').val($(this).val());
    });

    //Handler para el boton de cancelar adicionar excepcion

    $('.btnCancelAddExcepcion').on('click',function(e){
        e.preventDefault();

        var modal='#modalAddExcepcion';

        restartFormAddExcepcion(modal);

        showSavedMessage(-1);

        $(modal).modal('hide');

    });

    //Handler para el boton de adicionar excepcion

    $('.btnAddExcepcion').on('click',function(e){
        e.preventDefault();


        //recolectar la info

        var modal='#modalAddExcepcion';

        var form='#formAddExcepcion';

        //enviar la peticion al servidor

        if(validator4.form()){
            $.ajax($(form).attr('action'),{
                type:'post',
                dataType:'json',
                data:$(form).serialize()
            }).done(function(response){
                if(response[0]){

                    var urlJson=$('#urlJSonEvents').val();

                    cleanCalendar('#mycalendar');
                    initCalendar('#mycalendar',urlJson);

                    //actualizar el visual

                    var fecha=modal+' #fechaExcepcion';
                    var precio=modal+' #precioExcepcion';

                    var listadoHorarios=modal+' .horariosExcepcion';

                    var listaExcepciones='#excepcionesListContainer table > tbody';

                    var listaExcepcionesContainer='#excepcionesListContainer';

                    var estado='#estadoExcepcion';
                    var estadoItem="";

                    if($(estado).val()=='cerrado'){
                        estadoItem='Cerrado';
                    }
                    else{
                        estadoItem='Abierto';
                    }


                    var tr='<tr>';
                    tr+='<td>'+$(fecha).val()+'</td>';
                    tr+='<td>'+estadoItem+'</td>';
                    tr+='<td>';

                    var horarios="";

                    $(listadoHorarios).each(function(){
                        var aux=$(this).val().split(',');
                        tr+='<span>De '+aux[0]+' hr Hasta '+aux[1]+' hr</span>';
                        if(horarios!=""){
                            horarios+=',';
                        }
                        horarios+=aux[0]+','+aux[1];
                    });

                    if(horarios==""){
                        tr+="Todo el día";
                    }

                    var eur="";
                    if($(precio).val()!=""){
                        eur="€";
                    }

                    tr+='</td>';
                    tr+='<td>'+$(precio).val()+eur+'</td></tr>';


                    $(listaExcepciones).append($(tr));

                    $(listaExcepcionesContainer).fadeIn();

                    restartFormAddExcepcion(modal);

                    showSavedMessage(-1);

                    $(modal).modal('hide');
                }
                else{
                    alert(response[1]);
                }
            });
        }

    });

    //handler para los horarios del adicionar excepcion

    $('.horarioItem').on('change',function(){
        var wrapper="#horariosFormExcepcionContainer";
        var horaInicio=wrapper+' select.horaInicio';
        var horaFin=wrapper+' select.horaFin';
        var data={
            'horaInicio':horaInicio,
            'horaFin':horaFin,
            'wrapper':wrapper
        };

        validateHorario(data);
    });

    //handler para obtener las ciudades de la provincia seleccionada

    $('#provincia').on('change',function(){
        var idProvincia=$(this).val();

        wait('#step-2-form');

        $.ajax($('#get-ciudades-route').val(),{
            'type':'post',
            'dataType':'json',
            'data':{
                'idProvincia':idProvincia
            }
        }).done(function (response) {
            if(!response[0]){
                alert(response[1]);
            }
            else{

                $('#ciudad').empty();

                $('#ciudad').append($('<option value="">Seleccione una provincia para ver sus ciudades</option>'));

                var ciudades=response[1];

                for(var i=0;i<ciudades.length;i++){
                    var item='<option value="'+ciudades[i][0]+'">'+ciudades[i][1]+'</option>';

                    $('#ciudad').append($(item));
                }

                $('.selectpicker').selectpicker('refresh');
            }
            endWait('#step-2-form');
        });
    });
});

function restartFormAddExcepcion(modal){
    var fecha=modal+' #fechaExcepcion';
    var precio=modal+' #precioExcepcion';
    var estadoHorario=modal+' input.estadoHorarioExcepcion';

    var horarioContainer="#horariosFormExcepcionContainer";
    var listadoHorariosContainer='#horariosExcepcion-container';

    $(fecha).val("");
    $(precio).val("");
    $(estadoHorario).iCheck('check');

    restartHorarios(horarioContainer,listadoHorariosContainer);
}

function restartHorarios(container1, container2){
    var selector1=container1+' select';
    $(selector1).val("");

    var selector2=container2+' table > tbody';
    $(selector2).empty();

    var selectorSelecpicker=container1+' .selectpicker';

    $(selectorSelecpicker).selectpicker('refresh');

    $(container1).hide();
    $(container2).hide();
}

//funcion para validar los horarios

function validateHorario(data){
    var horaInicio=$(data.horaInicio).val();
    var horaFin=$(data.horaFin).val();
    var mensaje=data.wrapper+' p.help-block';
    if(horaInicio!="" && horaFin!="" && horaInicio>=horaFin){

        $(mensaje).show();
    }
    else{
        $(mensaje).hide();
    }
}

function showSavedMessage(item){
    var savedMessage="";
    if(item==-1){
        savedMessage="#saved-message-excepciones";
    }
    else{
        savedMessage="#saved-message-"+item;
    }

    $(savedMessage).fadeIn();
}

function hideSavedMessage(item){
    var savedMessage="";
    if(item==-1){
        savedMessage="#saved-message-excepciones";
    }
    else{
        savedMessage="#saved-message-"+item;
    }

    $(savedMessage).hide();
}