/**
 * Created by chhatwani on 2/2/2017.
 */
//This was created to make a API call by clicking on the button
$("#getValue").click(function () {

    $.getJSON("json_data.json", function (obj) {

        $.each(obj,function (key,value) {

            $("ul").append("<li>"+value.name+"</li>");
            $("ul").append("<li>"+value.phone+"</li>");


        });
    });
});