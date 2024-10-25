console.log("Hi");

jQuery(document).ready(function ($) {

    // var cities = {
    //     "USA": ["New york", "Loss Angels", "Chikago"],
    //     "Canada": ["Montreal", "Quebec", "Vancubar"],
    //     "UK": ["London", "Manchaster", "Birmingham"]
    // };

    var my_cities = {
        "US": {
            "New York" : [ "Brooklyn", "Queens", "Manhattan"],
            "New Jersey" : ["Middlesex", "Morris", "Sussex"],
            "California" : ["Stockton", "Modesto", "Merced"]
        },
        "CA": {
            "Quebec" : ["Ahuntsic", "Nouveau-Bordeaux", "Cartierville"],
            "Vancouver": ["Kitsilano", "West End", "Stanley Park"],
            "Ottawa" : ["Parliament Hill", "Metcalfe", "Fallowfield"]
        },
        "UK": {
            "London": ["Acton", "Barnes", "Greenwich"],
            "Manchaster": ["Salford", "Castlefield", "Ancoats"],
            "Birmingham": ["Trussville", "Leeds", "Irondale"]
        }
    };

    $('#country').change(function () {

        var selectCountry = $(this).val();
        var cityDropdown = $('#city');
        var subDropdown = $('#suburb');
        var cityContainer = $('#city-container');
        var sububContainer = $('#suburb-container');
        cityDropdown.empty().hide();
        subDropdown.empty().hide();
        

        if (selectCountry !== "") {
            $.each(my_cities[selectCountry], function (city, suburb) {
                cityDropdown.append($('<option></option>').val(city).text(city));
            });  

            cityDropdown.show();
            cityContainer.show();

        }else{
            cityContainer.hide();
            sububContainer.hide();
            subDropdown.hide();
        }
    });

    $('#city').change(function() {
        var selectCountry = $('#country').val();
        var selectedCity = $(this).val();
        var subDropdown = $('#suburb');
        var sububContainer = $('#suburb-container');

        subDropdown.empty().hide();
        sububContainer.hide();
        if(selectedCity !== ""){
            $.each(my_cities[selectCountry][selectedCity], function(index, suburb){
                subDropdown.append($('<option></option>').val(suburb).text(suburb))
            });

            subDropdown.show();
            sububContainer.show();
        }else{
            subDropdown.hide();
            sububContainer.hide();
        }
    });

    $('input[name="available"]').change(function(){
        var selectedValue = $(this).val();
        if(selectedValue === "yes") {
            $('#date-container').show();            
        }else{
            $('#date-container').hide();
        }
    });
});