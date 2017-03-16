
//This will detect the scanner and will make an API call to the link embedded in the QR code

$(window).ready(function() {

    //$("#bCode").scannerDetection();

    $(window).scannerDetection();
    $(window).bind('scannerDetectionComplete', function (e, data) {
    console.log('complete ' + data.string);

    $.getJSON(data.string, function (obj) {

        if(obj!=null){
            alert("DATA Fetched!");

            //Here you get the data from the json and You can use it in any way.
        }
        $.each(obj,function (key,value) {


            //This is just an example of how you can use the data
            $("ul").append("<li>"+value.name+"</li>");
            $("ul").append("<li>"+value.phone+"</li></br>");

        });
    });
})
    .bind('scannerDetectionError', function (e, data) {
        //console.log('detection error ' + data.string);
    })
    .bind('scannerDetectionReceive', function (e, data) {
        //console.log('Recieve');
        //console.log(data.evt.which);
    })

//$(window).scannerDetection('success');
});