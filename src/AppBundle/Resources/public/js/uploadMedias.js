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

  //Variables para Subir Imagen de Portada

  var btn = document.getElementById('btnUploadImagePortada'),
  progressBar = document.getElementById('progressBarPortada'),
  progressOuter = document.getElementById('progressOuterPortada'),
  //imgContainer = document.getElementById('imgContainer'),
  msgBox = document.getElementById('msgBoxPortada');

  var btn2 = document.getElementById('uploadBtnFotos'),
    progressBar2 = document.getElementById('progressBar2'),
    progressOuter2 = document.getElementById('progressOuter2'),
    //videoContainer = document.getElementById('videoContainer'),
    msgBox2 = document.getElementById('msgBoxFotos');

    var btnUploadImgAlbum = document.getElementById('uploadAlbumImg'),
        progressBarAlbum = document.getElementById('progressBarAlbum'),
        progressOuterAlbum = document.getElementById('progressOuterAlbum'),
    //imgContainer = document.getElementById('imgContainer'),
        msgBoxAlbum = document.getElementById('msgBoxAlbum');

    var btnUploadMusic = document.getElementById('uploadMusic'),
        progressBarMusic = document.getElementById('progressBarMusic'),
        progressOuterMusic = document.getElementById('progressOuterMusic'),
    //imgContainer = document.getElementById('imgContainer'),
        msgBoxMusic = document.getElementById('msgBoxMusic');


  //Uploader de imagen de portada
  var uploaderImagenPortada = new ss.SimpleUpload({
    button: btn,
    url: $("#img-upload-path").val(),
    name: 'uploadfile',
    responseType: 'json',
    allowedExtensions: ['jpg', 'jpeg', 'png', 'gif'],
    maxSize: 536870912, // kilobytes
    hoverClass: 'hover',
    focusClass: 'focus',
    startXHR: function() {
      progressOuter.style.display = 'block'; // make progress bar visible
      this.setProgressBar( progressBar );
    },
    onSubmit: function() {
      msgBox.innerHTML = ''; // empty the message box
      btn.innerHTML = 'Cargando...'; // change button text to "Uploading..."
      //this.setFileSizeBox(sizeBox); // designate this element as file size container
      this.setProgressBar(progressBar); // designate as progress bar
    },
    onComplete: function( filename, response ) {

      btn.innerHTML = 'Cambiar imagen';
      btn.removeAttribute("disabled");
      progressOuter.style.display = 'none'; // hide progress bar when upload is completed

      if ( !response ) {
        msgBox.innerHTML = 'No se pudo subir el fichero';
        return;
      }

      if ( response.success === true ) {
        var imagesRoute=$('#img-route').val();
        //var imageIndex=$('#image-index').val();

        var img =
            '<img class="img-responsive"  id="'+filename+'"  data-title="'+filename.split('.')[0]+'-title" data-alt="'+filename.split('.')[0]+'-alt" data-target="'+filename+'"  src="'+imagesRoute+escapeTags(filename)+'"> '
            ;


        $('#imgContainerPortada').html($(img));

        $('#btnUploadImagePortada').addClass('mt20');

          $('#imgPortada').val(filename);

          //var selector3="#container-radio-"+imageIndex;
          //
          //$(selector3).attr('style','top:85px;position:absolute;display: inline-block');


        //$("#post_imagen_destacada").val(filename);

      } else {
        if ( response.msg )  {
          msgBox.innerHTML = escapeTags( response.msg );

        } else {
          msgBox.innerHTML = 'An error occurred and the upload failed.';
        }
      }
    },
    onError: function() {
      progressOuter.style.display = 'none';
      msgBox.innerHTML = 'Unable to upload file';
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

                var imgItem = '<li onclick="" class="item col-sm-3 col-xs-6"><div class="border">';
                imgItem+='<div class="view image-hover-1"><img src="'+imagesRoute+filename+'" class="img-responsive" /><div class="mask">';
                imgItem+='<div class="image-hover-content">';
                imgItem+='<a href="#" class="info btn-eliminar-image-temp" data-target="'+filename+'"><div class="image-icon-holder"><span class="ion-ios7-trash image-icons"></span></div></a>';
                imgItem+='</div></div></div></div>';
                imgItem+='<input type="hidden" name="fotos[]" value="'+filename+'"></li>';

                $('ul#fotos-container').append($(imgItem));




            } else {
                if ( response.msg )  {
                    msgBox2.innerHTML = escapeTags( response.msg );

                } else {
                    msgBox2.innerHTML = 'An error occurred and the upload failed.';
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

                var imgItem = '<li onclick="" class="item col-sm-3 col-xs-6"><div class="border">';
                imgItem+='<div class="view image-hover-1"><img src="'+imagesRoute+filename+'" class="img-responsive" /><div class="mask">';
                imgItem+='<div class="image-hover-content"><a href="'+imagesRoute+filename+'" class="info image-zoom-link"><div class="image-icon-holder"><span class="ion-ios7-search image-icons"></span></div></a>';
                imgItem+='<a href="#" class="info btn-eliminar-image-temp" data-target="'+filename+'"><div class="image-icon-holder"><span class="ion-ios7-trash image-icons"></span></div></a>';
                imgItem+='</div></div></div></div>';
                imgItem+='<input type="hidden" name="fotos[]" value="'+filename+'"></li>';

                $('ul#fotos-container').append($(imgItem));
            }
            else{
                progressOuter2 = 'none';
                msgBox2.innerHTML = 'Unable to upload file';
            }


        }
    });

    //Uploader de imagen de album

    var uploaderAlbum = new ss.SimpleUpload({
        button: btnUploadImgAlbum,
        url: $("#img-album-upload-path").val(),
        name: 'uploadfile2',
        responseType: 'json',
        allowedExtensions: ['jpg', 'png', 'gif','jpeg'],
        maxSize: 536870912, // kilobytes
        hoverClass: 'hover',
        focusClass: 'focus',
        startXHR: function() {
            progressOuterAlbum = document.getElementById('progressOuterAlbum');
            progressOuterAlbum.style.display = 'block'; // make progress bar visible
            this.setProgressBar( progressBarAlbum );


        },
        onSubmit: function() {
            btnUploadImgAlbum.innerHTML = 'Cargando...'; // change button text to "Uploading..."
            this.setProgressBar(progressBarAlbum); // designate as progress bar

        },
        onComplete: function( filename, response ) {

            btnUploadImgAlbum.innerHTML = 'Cambiar imagen del álbum';
            //btn2.removeAttribute("disabled");
            progressOuterAlbum.style.display = 'none'; // hide progress bar when upload is completed

            if ( !response ) {
                msgBoxAlbum.innerHTML = 'No se ha podido cargar el fichero';
                return;
            }

            if ( response.success === true ) {
                var imagesRoute=$('#img-route').val();

                var imgName=imagesRoute+filename;

                $('#imgAlbumContainer').attr('src',imgName);

                $('#imgAlbum').val(filename);


            } else {
                if ( response.msg )  {
                    msgBoxAlbum.innerHTML = escapeTags( response.msg );

                } else {
                    msgBoxAlbum.innerHTML = 'An error occurred and the upload failed.';
                }
            }
        },
        onError: function() {
            progressOuterAlbum.style.display = 'none';
            msgBoxAlbum.innerHTML = 'No se ha podido cargar el fichero';
        }

    });

    //Uploader musica
    var uploaderMusc = new ss.SimpleUpload({
        button: btnUploadMusic,
        url: $("#music-upload-path").val(),
        name: 'uploadfile2',
        responseType: 'json',
        allowedExtensions: ['mp3'],
        maxSize: 536870912, // kilobytes
        hoverClass: 'hover',
        focusClass: 'focus',
        startXHR: function() {
            progressOuterMusic = document.getElementById('progressOuterMusic');
            progressOuterMusic.style.display = 'block'; // make progress bar visible
            this.setProgressBar( progressBarMusic );


        },
        onSubmit: function() {
            //btnUploadMusic.children('span').innerHTML = 'Cargando...'; // change button text to "Uploading..."
            $('#uploadMusic').children('span').innerHTML='Cargando...';
            this.setProgressBar(progressBarMusic); // designate as progress bar

            //reinicar el indice si no hay musica
            if($('ul#musicContainer li').length==0){
                $('#indexMusic').val(1);
            }

            //eliminar todas las urls entradas de perfiles de muscia en los otros tabs

            $('.music-profile').each(function(){
                $(this).val("");
            });

        },
        onComplete: function( filename, response ) {

            $('#uploadMusic').children('span').children('span').innerHTML = 'Añadir otro tema';
            //btn2.removeAttribute("disabled");
            progressOuterMusic.style.display = 'none'; // hide progress bar when upload is completed

            if ( !response ) {
                msgBoxMusic.innerHTML = 'No se ha podido cargar el fichero';
                $('#uploadMusic').children('span').innerHTML = 'Seleccionar canción';
                return;
            }

            if ( response.success === true ) {

                filename=escapeTags(filename);

                var index=$('#indexMusic').val();
                var imgItem = '<li data-index="'+index+'"><span class="itemNumber">'+index+'</span>. '+filename+' <a class="delete-music" data-index="'+index+'" data-name="'+filename+'" href="#"><i class="fa fa-trash-o"></i></a></li><input class="itemMusicName" data-index="'+index+'" type="hidden" name="music[]" value="'+filename+'">';


                $('ul#musicContainer').append($(imgItem));

                index++;
                $('#indexMusic').val(index);

            } else {
                if ( response.msg )  {
                    msgBoxMusic.innerHTML = escapeTags( response.msg );

                } else {
                    msgBoxMusic.innerHTML = 'Ha ocurrido un error y no se ha podido subir el fichero';
                }
            }
        },
        onError: function(filename, response) {

            if(response == 'parseerror'){

                $('#uploadMusic').children('span').innerHTML = 'Añadir otro tema';
                //btn2.removeAttribute("disabled");
                progressOuterMusic.style.display = 'none'; // hide progress bar when upload is completed

                if ( !response ) {
                    msgBoxMusic.innerHTML = 'No se ha podido cargar el fichero';
                    $('#uploadMusic').children('span').innerHTML='Seleccionar canción';
                    return;
                }

                filename=escapeTags(filename);

                var index=$('#indexMusic').val();
                var imgItem = '<li data-index="'+index+'"><span class="itemNumber">'+index+'</span>. '+filename+' <a class="delete-music" data-index="'+index+'" data-name="'+filename+'" href="#"><i class="fa fa-trash-o"></i></a></li><input class="itemMusicName" data-index="'+index+'" type="hidden" name="music[]" value="'+filename+'">';

                $('ul#musicContainer').append($(imgItem));


                index++;
                $('#indexMusic').val(index);
            }
            else{
                progressOuterMusic = 'none';
                msgBoxMusic.innerHTML = 'No se ha podido cargar el fichero';
                $('#uploadMusic').children('span').innerHTML='Seleccionar canción';
            }


        }
    });

};