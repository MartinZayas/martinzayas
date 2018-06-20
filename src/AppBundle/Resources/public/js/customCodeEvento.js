$(document).ready(function(){

    //Handler del adicionar artista

    $('#btnAdicionarArtista').on('click',function(e){
        e.preventDefault();
        var nombre=$('#nombre-artista').val();

        if(nombre!=""){
            $('tr.no-artist').remove();
            var tr='<tr><td> '+nombre+' </td><td class="remove-artist"><a class="remove-artist-btn" href="#"><i class="fa fa-times-circle"></i></a></td><input type="hidden" name="artistas[]" value="'+nombre+'"></tr>';
            $('#artistas-seleccionados tbody').append($(tr));

            $('#nombre-artista').val("");
        }
    });

    //Handler del select de los artistas

    $('#artistas').on('change',function(){
        var nombre=$(this).val();
        if(nombre!=""){
            $('tr.no-artist').remove();
            var tr='<tr><td> '+nombre+' </td><td class="remove-artist"><a class="remove-artist-btn" href="#"><i class="fa fa-times-circle"></i></a></td><input type="hidden" name="artistas[]" value="'+nombre+'"></tr>';
            $('#artistas-seleccionados tbody').append($(tr));
        }
    });

    //Handler del eliminar artista

    $('#artistas-seleccionados').on('click','.remove-artist-btn',function(e){
        e.preventDefault();
        $(this).closest('tr').remove();
    });

    //Handler del filtro de eventos

    $('#btnFiltroLocal').on('click',function(e){
        e.preventDefault();

        wait('#filtroLocalContainer');

        $form=$('#formFiltroLocal');

        $.ajax($form.attr('action'),{
            type:'post',
            dataType:'json',
            data:$form.serialize()
        }).done(function(response){
            endWait('#filtroLocalContainer');
            if(response[0] && response[1]!=null){
                var items=response[1];
                var imgRoute=$('#img-route-public').val();
                //actualizar la lista de resultados
                $('#localesResultContainer').empty();

                for(var i=0;i<=items.length;i++){
                    var item=items[i];

                    var row='<div class="row mb40 list-item-local-row bg-shadow"><div class="col-md-12"><div class="row">';
                    row+='<div class="col-md-4"><img class="img-responsive" src="'+imgRoute+item['img']['url']+'" alt="'+item['img']['alt']+'"></div>';
                    row+='<div class="col-md-4"><h3><a href="#">'+item['nombre']+'</a></h3><hr class="mt15 mb10" style="width: 50px;" align="left">';
                    row+='<ul class="posted-info"><li><i class="fa fa-group"></i> Aforo: '+item['aforo']+' personas</li>';
                    row+='<li><i class="fa fa-map-marker"></i> '+item['direccion']+'</li>';
                    row+='<li><i class="ion-map"></i> Medidas Escenario: '+item['medidaEscenario']+' mts cuadrados</li></ul></div>';
                    row+='<div class="col-md-4" data-id="'+item['id']+'" data-step="2" style="text-align: center;"><a class="btn btn-custom-orange btn-lg btn-submit-evento" href="#">Seleccionar Local</a></div>';
                    row+='</div></div></div>';

                    $('#localesResultContainer').append($(row));
                }



            }
            else if(response[0] && response[1]==null){
                //TODO: mostrar mensaje de no results
                $('#localesResultContainer').empty();

                var itemMessage='<div class="row mt20"><div class="col-md-12 without-padding-right without-padding-left">';
                itemMessage+='<div class="alert alert-info alert-info-rw alert-dismissible" role="alert">';
                itemMessage+='<b>No hay resultados que coincidan con su búsqueda.</b></div></div></div>';

                $('#localesResultContainer').append($(itemMessage));

            }


        });

    });
});

