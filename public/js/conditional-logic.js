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

        cityDropdown.empty().hide();
        subDropdown.empty().hide();

        if (selectCountry !== "") {
            $.each(my_cities[selectCountry], function (index, city) {
                cityDropdown.append($('<option></option>').val(city).text(city));
            });  

            cityDropdown.show();
        } 
    });

    $('#city').change(function() {
        var selectCountry = $('#country');
        var selectedCity = $(this).val();
        var subDropdown = $('#suburb');

        subDropdown.empty();

        if(selectedCity !== ""){
            $.each(my_cities[selectCountry][selectedCity], function(index, suburb){
                subDropdown.append($('<option></option>').val(suburb.text(suburb)))
            });

            subDropdown.show();
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