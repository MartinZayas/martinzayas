function setEvent(data,session){
    var route=$('#calendarSetEventRoute').val();

    $.ajax(route,{
        dataType:'json',
        type:'post',
        data:{
            data:data,
            session:session
        }
    }).done(function(response){
        if(response[0]){
            return true;
        }
        else{
            alert(response[1]);
        }
    });
}

function initCalendar(calendar, urlJson){
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    $(calendar).monthly({
        mode: 'event',
        dataType: 'json',
        jsonUrl: urlJson,
        weekStart: 'Mon'
    });
}

function cleanCalendar(calendar){
    $(calendar).empty();
}