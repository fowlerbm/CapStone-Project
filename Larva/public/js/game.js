/**
 * Created by domcu on 2016-04-13.
 */

//Javascript for things like getting achievements and rating system, etc.

$(document).ready(function () {
    var gameId = $('#gameId').val().trim();


    $(document).on("click", "#demo1 .stars", function () {

        $.post('/rating/' + gameId,{rate:$(this).val()},function(d){
            if(d>0)
            {
                alert('You already rated');
            }else{
                alert('Thanks For Rating');
            }
        });
        $(this).attr("checked");
    });
});