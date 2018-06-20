$(document).ready(function(){

    //Accion del boton de adicionar video

    $('#step-3-container').on('keyup','.urlVideo',function(){
        if($(this).val()==""){
            $('#btnAddVideo').addClass('disabled');
        }
        else{
            $('#btnAddVideo').removeClass('disabled');
        }
    });


    $('#btnAddVideo').on('click',function(e){
        e.preventDefault();

        var indice=$('#indice-video').val();

        var itemVideo='<div class="col-md-12">';
        itemVideo+='<div class="form-group"><div class="input-group"><div class="input-group-addon"><i class="fa fa-globe"></i></div>';
        itemVideo+='<input name="urlVideo[]" placeholder="Copia la URL de tu video de Youtube o Vimeo" class="form-control urlVideo" type="text"></div></div>';
        itemVideo+='</div>';

        indice++;

        $('#indice-video').val(indice);

        $('#videos-container').append($(itemVideo));

        $(this).addClass('disabled');

    });

    //submit del adicionar Album

    $('#btnSubmitAlbum').on('click',function(e){
        e.preventDefault();

        //Validar el form
        if(validatorAlbum.form()){
            $(this).text("Adicionando album...");

            $('#submitLoading').show();

            var $form=$('#formAddAlbum');

            $.ajax($form.attr('action'),{
                type:'post',
                dataType:'json',
                data:$form.serialize()
            }).done(function(response){

                $(this).text("Aceptar");

                $('#submitLoading').hide();

                if(response[0]){
                    //generar html

                    var album=response['album'];

                    var itemAlbum='<div class="row mb40 list-item-local-row"><div class="col-md-12"><div class="row">';
                    if(album['imagen']!=null && album['imagen']!=""){
                        itemAlbum+='<div class="col-md-4"><img class="img-responsive" src="'+$('#img-album-route').val()+album['imagen']+'"  /></div>';
                    }
                    else{
                        itemAlbum+='<div class="col-md-4"><img class="img-responsive" src="'+$('#directorioImagenesPublic').val()+'no_image.jpg"  /></div>';
                    }
                    itemAlbum+='<div class="col-md-4"><h3><a href="#">'+album['titulo']+'</a></h3><hr align="left" class="mt15 mb10" style="width:50px;">';
                    itemAlbum+='<ul style="list-style: none;margin-left: -40px;" class="posted-info"><li><i style="margin-bottom: 10px;" class="fa fa-user"></i> '+album['autor']+'</li><li><i class="fa fa-calendar"></i> '+album['anno']+'</li></ul>';
                    itemAlbum+='<p class="mb30">';
                    for(var i=0;i<=album['estilos'].length;i++){
                        itemAlbum+='<a href="#" class="btn btn-rw btn-primary tags btn-sm">'+album['estilos'][i]+'</a>';
                    }
                    itemAlbum+='</p>';

                    if(album['enlaces']!=null && album['enlaces'].length>0){
                        itemAlbum+='<h4 class="mt20">Enlaces de venta</h4><ul>';

                        for(var i=0;i<=album['enlaces'].length;i++){
                            itemAlbum+='<li><i class="fa fa-globe"></i> <a href="'+album['enlaces'][i]['url']+'">'+album['enlaces'][i]['nombre']+'</a></li>';
                        }

                        itemAlbum+='</u>';
                    }


                    itemAlbum+='</div>';

                    itemAlbum+='<div class="col-md-4">';

                    if(album['canciones']!=null && album['canciones'].length>0){
                        itemAlbum+='<h3><i class="fa fa-music"></i> Canciones ('+album['canciones'].length+')</h3>';
                        itemAlbum+='<table class="table table-hover"><tbody>';

                        for(var i=0;i<=album['canciones'].length;i++){
                            var index=i+1;
                            itemAlbum+='<tr><td>'+index+'.</td><td>'+album['canciones'][i]+'</td></tr>';
                        }

                        itemAlbum+='</tbody></table>';
                    }

                    itemAlbum+='<div class="row mt40"><div class="col-md-12" style="text-align:right;"><a href="#" class="btn btn-primary"><i class="fa fa-edit"></i> Editar álbum</a>&nbsp;&nbsp;<a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar álbum</a></div></div>';

                    itemAlbum+='</div>';

                    itemAlbum+='</div></div></div>';

                    $('#modalAddAlbum').modal('hide');

                    $('#albumsContainer').append($(itemAlbum)).fadeIn();

                }
                else if(!response[0]){
                    var errores=response[1];

                    for(var i=0;i<=errores.length;i++){
                        var selector='#'+errores[i]['id'];

                        var error='<p style="color:red;font-weight: bold;">'+errores[i]['error']+'</p>';

                        if($(selector).parent().hasClass('input-group')){
                            $(selector).parent().parent().append($(error));
                        }
                        else{
                            $(selector).parent().append($(error));
                        }

                    }

                }
                else{
                    alert(response[1]);
                }
            });
        }

    });

    //Action del boton de Adicionar enlace de venta

    $('#btnAddEnlace').on('click', function (e) {
        e.preventDefault();

        var index=$('#indexEnlaceVenta').val();
        index++;

        var itemFormGroup='<div class="form-group" id="enlaceVenta-'+index+'">';
        itemFormGroup+='<div class="input-group"><div class="input-group-addon"><i class="fa fa-check-circle"></i></div><input class="form-control" type="text" name="nombresVenta[]" placeholder="Nombre del sitio web"></div>';
        itemFormGroup+='<div class="input-group mt10"><div class="input-group-addon"><i class="fa fa-globe"></i></div><input class="form-control" type="text" name="enlacesVenta[]" placeholder="URL del sitio web"></div>';
        itemFormGroup+='</div>';

        $('#enlacesContainer .panel-body').append($(itemFormGroup));

        $('#indexEnlaceVenta').val(index);

    });

    //Action del boton de adicionar titulo de cancion

    $('#addTituloCancion').on('click',function(e){
        e.preventDefault();

        var titulo=$('#tituloCancion').val();

        var index=$('#index-titulo-cancion').val();

        var tr='<tr><td>'+index+'.'+'</td><td>'+titulo+'</td></tr>';
        tr+='<input type="hidden" name="titulosCanciones[]" value="'+titulo+'">';

        $('#titulosContainer tbody').append($(tr));

        index++;

        $('#index-titulo-cancion').val(index);

        $('#tituloCancion').val("");
    });

    //eventos del apartado de enlaces de canciones de muestra

    $('.music-profile').on('keyup',function(){
        var type=$(this).attr('data-type');

        $('.music-profile').each(function(){
            if($(this).attr('data-type')!=type){
                $(this).val("");
            }
        });

        $('ul#musicContainer').empty();
    });

    //btn eliminar cancion

    $('#musicContainer').on('click','.delete-music',function(e){
        e.preventDefault();

        var nombre=$(this).attr('data-name');
        var index=$(this).attr('data-index');

        $.ajax($('#delete-music-path'),{
            type:'post',
            dataType:'json',
            data:{
                nombre:nombre
            }
        }).done(function(response){
            $('#musicContainer li').each(function(){
                if($(this).attr('data-index')==index){
                    $(this).fadeOut();
                    $(this).remove();
                }
                else if($(this).attr('data-index')>index){
                    var aux=$(this).attr('data-index');

                    aux--;

                    $(this).attr('data-index',aux);
                    $(this).children('a').attr('data-index',aux);

                }

            });

            //eliminar el input con el nombre de la cancion

            $('.itemMusicName').each(function(){
                if($(this).attr('data-index')==index){
                    $(this).remove();
                }
                else if($(this).attr('data-index')>index){
                    var aux=$(this).attr('data-index');

                    aux--;

                    $(this).attr('data-index',aux);
                }
            });

            var totalIndex=$('#indexMusic');

            if(totalIndex>1){
                totalIndex--;
                $('#indexMusic').val(totalIndex);
            }

            //update the index in the list of items

            $('#musicContainer .itemNumber').text(function(index){
                var newIndex=index+1;
                return newIndex;

            });
        });
    });

    //Btn Update de los eventos

    $('.btn-save').on('click',function(e){
        e.preventDefault();

        var item=$(this).attr('data-day');

        var selectorForm="#formSetEvent-"+item;

        var $form=$(selectorForm);
        var urlJson=$('#urlJSonEvents').val();

        var planificacion="#planificacion-"+item;

        wait(planificacion);

        $.ajax($form.attr('action'),{
            type:'post',
            dataType:'json',
            data:$form.serialize()
        }).done(function(response){
            if(response[0]){
                cleanCalendar('#mycalendar');
                initCalendar('#mycalendar',urlJson);

                //modificar el titulo del panel
                var estado='#estado-'+item;

                var dia='Lunes';

                switch (item){
                    case "1":
                        dia='Lunes';
                        break;
                    case "2":
                        dia='Martes';
                        break;
                    case "3":
                        dia='Miércoles';
                        break;
                    case "4":
                        dia='Jueves';
                        break;
                    case "5":
                        dia='Viernes';
                        break;
                    case "6":
                        dia='Sábado';
                        break;
                    case "7":
                        dia='Domingo';
                        break;
                }

                var listadoHorarios='#horarios-'+item+'-container .horarios';

                var titleHeader='#planificacion-'+item+'-container .panel-heading a';

                var fullContent=dia+' '+$(estado).val();

                $(listadoHorarios).each(function(index){
                    var horas=$(this).val().split(',');
                    if(index>0){
                        fullContent+=',';
                    }
                    fullContent+=' De '+horas[0]+' a '+horas[1]
                });

                $(titleHeader).text(fullContent);

                showSavedMessage(item);



            }

            endWait(planificacion);
        });

        //$('.estadoDias').each(function(){
        //    var item=$(this).attr('data-day');
        //    var selector="#abiertos-"+item;
        //    var events=[];
        //    if($(selector)){
        //
        //    }
        //});
    });

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