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
                msgBox2.innerHTML = 'No se ha podido cargar el fichero';
            }


        }
    });


};