/**
 * Created by neco on 2/26/2017.
 */

//Validation of Step1 Form

var validator1=$('#step-1-form').validate({
    errorPlacement: function(error, element) {
        // Append error within linked label
        $( element )
            .closest( "form" )
            .find( "label[for='" + element.attr( "id" ) + "']" )
            .append( error );
    },
    errorElement: "span"
});

//Validation of Step2 Form

var validator2=$('#step-2-form').validate({
    errorPlacement: function(error, element) {
        // Append error within linked label
        $( element )
            .closest( "form" )
            .find( "label[for='" + element.attr( "id" ) + "']" )
            .append( error );
    },
    errorElement: "span",
    rules:{

        telefono: {
            number:true
        },
        telefonoAdicional: {
            number:true
        }
    }
});

//Validation of Step3 Form

var validator3=$('#step-3-form').validate({
    errorPlacement: function(error, element) {
        // Append error within linked label
        $( element )
            .closest( "form" )
            .find( "label[for='" + element.attr( "id" ) + "']" )
            .append( error );
    },
    errorElement: "span",
    rules:{

        "urlVideo[]": {
            url:true
        },

        spotify:{
            url:true
        },
        soundcloud:{
            url:true
        },
        deezer:{
            url:true
        }
    }
});



//Validation of AddAlbum Form

var validatorAlbum=$('#formAddAlbum').validate();
