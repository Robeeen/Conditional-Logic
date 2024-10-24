console.log("Hi");

jQuery(document).ready(function($){

    var cities = {
        "USA" : ["New york", "Loss Angels", "Chikago"],
        "Canada": ["Montreal", "Quebec", "Vancubar"],
        "UK": ["London", "Manchaster", "Birmingham"]
    };

    $('#country').change(function(){
        var selectCountry = $(this).val();
        if(selectCountry !== ""){
            var cityDropdown = $('$city');
            cityDropdown.empty();
        }
    })

})