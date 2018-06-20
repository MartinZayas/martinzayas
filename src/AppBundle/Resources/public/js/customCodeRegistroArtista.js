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
        itemVideo+='<div class="form-group"><div class="input-group"><div class="input-group-addon"><span class="button-wrap"><button type="button" class="button button-circle btnFavorito" data-toggle="tooltip" title="Marca este video como Destacado para que aparezca al inicio de tu perfil"><i class="fa fa-star"></i></button></span></div>';
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

                $(this).html("Aceptar");

                $('#submitLoading').hide();

                if(response[0]){
                    //generar html

                    var album=response['album'];

                    var itemAlbum='<div class="row mb40 list-item-local-row"><div class="col-md-12"><div class="row">';
                    if(album['imagen']!=null && album['imagen']!=""){
                        var onerror="this.src='"+$('#directorioImagenesPublic').val()+"no_image.jpg'";
                        itemAlbum+='<div class="col-md-4"><img onerror="'+onerror+'" class="img-responsive" src="'+$('#img-album-route').val()+album['imagen']+'"  /></div>';
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

                        for(var i=0;i<album['enlaces'].length;i++){
                            itemAlbum+='<li><i class="fa fa-globe"></i> <a href="'+album['enlaces'][i]['url']+'">'+album['enlaces'][i]['nombre']+'</a></li>';
                        }

                        itemAlbum+='</u>';
                    }


                    itemAlbum+='</div>';

                    itemAlbum+='<div class="col-md-4">';

                    if(album['canciones']!=null && album['canciones'].length>0){
                        itemAlbum+='<h3><i class="fa fa-music"></i> Canciones ('+album['canciones'].length+')</h3>';
                        itemAlbum+='<table class="table table-hover"><tbody>';

                        for(var i=0;i<album['canciones'].length;i++){
                            var index=i+1;
                            itemAlbum+='<tr><td>'+index+'.</td><td>'+album['canciones'][i]+'</td></tr>';
                        }

                        itemAlbum+='</tbody></table>';
                    }

                    itemAlbum+='<div class="row mt40"><div class="col-md-12" style="text-align:right;"><a href="#" class="btn btn-primary"><i class="fa fa-edit"></i> Editar álbum</a>&nbsp;&nbsp;<a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar álbum</a></div></div>';

                    itemAlbum+='</div>';

                    itemAlbum+='</div></div></div>';

                    $('#modalAddAlbum').modal('hide');

                    resetFormAddAlbum();

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

    // Handler para el boton de marcar video destacadoo

    $('#videos-container').on('click','.btnFavorito',function(){
        //desmarcar todos los botones
        $('.btnFavorito').each(function(){
            if($(this).hasClass('button-raised')){
                $(this).removeClass('button-raised');
            }

            if($(this).hasClass('button-primary')){
                $(this).removeClass('button-primary');
            }
        });


        //obtener url

        var urlVideo= $(this).parent().parent().siblings('.urlVideo').val();

        if(urlVideo!=""){
            $('#videoDestacado').val(urlVideo);
        }

        $(this).addClass('button-raised button-primary');
    });

    //Handler para la imagen de portada

    $('.imgPortadaLocal').on('click',function(e){
        e.preventDefault();
        var img=$(this).attr('data-img');

        //var page=$('#page').val();
        //
        //if(page!=null && page=='editarEvento'){
        //    var background=$('#local-img-route').val()+img;
        //    var style="height: 300px;background-image:url('"+background+"'); background-color: #272727;";
        //    $('.header-parallax').attr('style',style);
        //
        //    $('#imgPortada').val(img);
        //    $('#isLocal').val(1);
        //}
        //else{
            $('#imgPortadaContainer').empty();

            var newImg='<img class="img-responsive" src="'+$('#local-img-route').val()+img+'">';

            var input='<input type="hidden" name="imgPortada" id="imgPortada" value="'+img+'"><input type="hidden" name="isLocal" id="isLocal" value="1">';

            $('#imgPortadaContainer').append(newImg);
            $('#imgPortadaContainer').append(input);

            $('#btnShowModalUploadPortada').empty();
            $('#btnShowModalUploadPortada').append('Cambiar imagen');
        //}

        $('#modalAddImagenPortada').modal('hide');
    });

});

function resetFormAddAlbum(){
    $('#formAddAlbum .form-control').each(function(){
        if($(this).attr('id')!='autorAlbum'){
            $(this).val("");
        }
    });

    $('#formAddAlbum #titulosContainer tbody').empty();

    var noImage=$('#directorioImagenesPublic').val()+'no_image.jpg';

    $('#formAddAlbum #imgAlbumContainer').attr('src',noImage);

    $('#index-titulo-cancion').val(1);

    $('#fechaAlbum').select2();
    $('#idEstilosAlbum').select2();
}



