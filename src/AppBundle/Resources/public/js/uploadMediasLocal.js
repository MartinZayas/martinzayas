function escapeTags( str ) {
    return String( str )
        .replace( /&/g, '&amp;' )
        .replace( /"/g, '&quot;' )
        .replace( /'/g, '&#39;' )
        .replace( /</g, '&lt;' )
        .replace( />/g, '&gt;' );
}

window.onload = function() {


    //$(".delete-slider-image").click(function(){
    //    $(this).parent().remove();
    //});

    //Variables para Subir Fotos de Concierto



    var btn2 = document.getElementById('uploadBtnFotos'),
        progressBar2 = document.getElementById('progressBar2'),
        progressOuter2 = document.getElementById('progressOuter2'),
        //videoContainer = document.getElementById('videoContainer'),
        msgBox2 = document.getElementById('msgBoxFotos');

    var btn = document.getElementById('uploadBtnPortada'),
        progressBar = document.getElementById('progressBarPortada'),
        progressOuter = document.getElementById('progressOuterPortada'),
        //videoContainer = document.getElementById('videoContainer'),
        msgBox = document.getElementById('msgBoxPortada');


    //Uploader de portada
    var uploaderPortada = new ss.SimpleUpload({
        button: btn,
        url: $("#img-upload-path").val(),
        name: 'uploadfile',
        responseType: 'json',
        allowedExtensions: ['jpg', 'png', 'gif','jpeg'],
        maxSize: 536870912, // kilobytes
        hoverClass: 'hover',
        focusClass: 'focus',
        startXHR: function() {
            progressOuter = document.getElementById('progressOuterPortada');
            progressOuter.style.display = 'block'; // make progress bar visible
            this.setProgressBar( progressBar );

        },
        onSubmit: function() {
            btn.innerHTML = 'Cargando...'; // change button text to "Uploading..."
            this.setProgressBar(progressBar); // designate as progress bar

        },
        onComplete: function( filename, response ) {

            btn.innerHTML = 'Cambiar Imagen';
            //btn2.removeAttribute("disabled");
            progressOuter.style.display = 'none'; // hide progress bar when upload is completed

            if ( !response ) {
                msgBox.innerHTML = 'No se ha podido cargar la imagen';
                return;
            }

            if ( response.success === true ) {
                var imagesRoute=$('#img-route').val();

                var page=$('#page').val();

                if(page!=null && page=='editarLocal'){

                    var style="height: 300px;background-image:url('"+imagesRoute+filename+"'); background-color: #272727;";
                    $('.header-parallax').attr('style',style);

                    $('#imgPortada').val(filename);
                    $('#isLocal').val(0);
                }
                else{
                    $('#imgPortadaContainer').empty();
                    var imgItem = '<img class="img-responsive" src="'+imagesRoute+filename+'">';

                    var input='<input type="hidden" name="imgPortada" id="imgPortada" value="'+filename+'"><input type="hidden" name="isLocal" id="isLocal" value="0">';

                    $('#imgPortadaContainer').append(imgItem);
                    $('#imgPortadaContainer').append(input);

                    $('#imgPortada').val(filename);

                    $('#btnShowModalUploadPortada').empty();
                    $('#btnShowModalUploadPortada').append('Cambiar imagen');
                }


                $('#modalAddImagenPortada').modal('hide');


            } else {
                if ( response.msg )  {
                    msgBox.innerHTML = escapeTags( response.msg );
                } else {
                    msgBox.innerHTML = 'Ha ocurrido un error y no se ha podido cargar la imagen.';
                }
            }
        },
        onError: function(filename, response) {

            if(response == 'parseerror'){

                btn.innerHTML = 'Cambiar Imagen';
                //btn2.removeAttribute("disabled");
                progressOuter.style.display = 'none'; // hide progress bar when upload is completed

                if ( !response ) {
                    msgBox.innerHTML = 'No se ha podido cargar la imagen';
                    return;
                }

                var imagesRoute=$('#img-route').val();

                var page=$('#page').val();

                if(page!=null && page=='editarLocal'){
                    var style="height: 300px;background-image:url('"+imagesRoute+filename+"'); background-color: #272727;";
                    $('.header-parallax').attr('style',style);

                    $('#imgPortada').val(filename);
                    $('#isLocal').val(0);
                }
                else{
                    $('#imgPortadaContainer').empty();
                    var imgItem = '<img class="img-responsive" src="'+imagesRoute+filename+'">';

                    var input='<input type="hidden" name="imgPortada" id="imgPortada" value="'+filename+'"><input type="hidden" name="isLocal" id="isLocal" value="0">';

                    $('#imgPortadaContainer').append(imgItem);
                    $('#imgPortadaContainer').append(input);

                    $('#imgPortada').val(filename);

                    $('#btnShowModalUploadPortada').empty();
                    $('#btnShowModalUploadPortada').append('Cambiar imagen');
                }



                $('#modalAddImagenPortada').modal('hide');
            }
            else{
                progressOuter = 'none';
                msgBox.innerHTML = 'No se ha podido cargar la imagen';
            }


        }
    });

    //Uploader de otras fotos
    var uploaderFotos = new ss.SimpleUpload({
        button: btn2,
        url: $("#img-upload-path").val(),
        name: 'uploadfile2',
        responseType: 'json',
        allowedExtensions: ['jpg', 'png', 'gif','jpeg'],
        maxSize: 536870912, // kilobytes
        hoverClass: 'hover',
        focusClass: 'focus',
        startXHR: function() {
            progressOuter2 = document.getElementById('progressOuter2');
            progressOuter2.style.display = 'block'; // make progress bar visible
            this.setProgressBar( progressBar2 );
        },
        onSubmit: function() {
            btn2.innerHTML = 'Cargando...'; // change button text to "Uploading..."
            this.setProgressBar(progressBar2); // designate as progress bar

        },
        onComplete: function( filename, response ) {

            btn2.innerHTML = 'Añadir imagen';
            //btn2.removeAttribute("disabled");
            progressOuter2.style.display = 'none'; // hide progress bar when upload is completed

            if ( !response ) {
                msgBox2.innerHTML = 'No se ha podido cargar el fichero';
                return;
            }

            if ( response.success === true ) {
                var imagesRoute=$('#img-route').val();

                var page=$('#page').val();

                var imgItem="";

                if(page!=null && page=='editarEvento'){
                    imgItem = '<li onclick="" class="item col-xs-6"><div class="border">';
                }
                else{
                    imgItem = '<li onclick="" class="item col-sm-3 col-xs-6"><div class="border">';
                }


                imgItem+='<div class="view image-hover-1"><img src="'+imagesRoute+filename+'" class="img-responsive" /><div class="mask">';
                imgItem+='<div class="image-hover-content">';
                imgItem+='<a href="#" class="info btn-eliminar-image-temp" data-target="'+filename+'"><div class="image-icon-holder"><span class="ion-ios7-trash image-icons"></span></div></a>';
                imgItem+='</div></div>';
                imgItem+='</div></div>';
                imgItem+='<div class="caption"><p>Foto de Perfil <input type="radio" class="flat" name="fotoPerfil" value="'+filename+'"> </p></div>';
                imgItem+='<input type="hidden" name="fotos[]" value="'+filename+'"></li>';

                $('ul#fotos-container').append($(imgItem));

                $('#noImagesNotification').hide();

                var $indexImage=$('#indexImagen');

                $indexImage.val(parseInt($indexImage.val())+1);

                if($indexImage!=null && parseInt($indexImage.val())%2==0){
                    $('ul#fotos-container').append($('<li class="clearfix"></li>'));
                }

            } else {
                if ( response.msg )  {
                    msgBox2.innerHTML = escapeTags( response.msg );

                } else {
                    msgBox2.innerHTML = 'Ha ocurrido un error y no se ha podido cargar la imagen';
                }
            }
        },
        onError: function(filename, response) {

            if(response == 'parseerror'){

                btn2.innerHTML = 'Añadir imagen';
                //btn2.removeAttribute("disabled");
                progressOuter2.style.display = 'none'; // hide progress bar when upload is completed

                if ( !response ) {
                    msgBox2.innerHTML = 'No se ha podido cargar el fichero';
                    return;
                }

                var imagesRoute=$('#img-route').val();

                var page=$('#page').val();

                var imgItem="";

                if(page!=null && page=='editarEvento'){
                    imgItem = '<li onclick="" class="item col-xs-6"><div class="border">';
                }
                else{
                    imgItem = '<li onclick="" class="item col-sm-3 col-xs-6"><div class="border">';
                }

                imgItem+='<div class="view image-hover-1"><img src="'+imagesRoute+filename+'" class="img-responsive" /><div class="mask">';
                imgItem+='<div class="image-hover-content"><a href="'+imagesRoute+filename+'" class="info image-zoom-link"><div class="image-icon-holder"><span class="ion-ios7-search image-icons"></span></div></a>';
                imgItem+='<a href="#" class="info btn-eliminar-image-temp" data-target="'+filename+'"><div class="image-icon-holder"><span class="ion-ios7-trash image-icons"></span></div></a>';
                imgItem+='</div></div></div></div>';
                imgItem+='<input type="hidden" name="fotos[]" value="'+filename+'"></li>';

                $('ul#fotos-container').append($(imgItem));

                $('#noImagesNotification').hide();

                var $indexImage=$('#indexImagen');

                $indexImage.val(parseInt($indexImage.val())+1);

                if($indexImage!=null && parseInt($indexImage.val())%2==0){
                    $('ul#fotos-container').append($('<li class="clearfix"></li>'));
                }
            }
            else{
                progressOuter2 = 'none';
                msgBox2.innerHTML = 'No se ha podido cargar el fichero';
            }


        }
    });


};
