$("#adress").autocomplete({
	source: function (request, response) {
		$.ajax({
			url: "https://api-adresse.data.gouv.fr/search/?name="+$("input[name='adress']").val(),
			data: { q: request.term },
			dataType: "json",
			success: function (data) {
				response($.map(data.features, function (item) {
						return { label: item.properties.name + " - " + item.properties.postcode + " - " + item.properties.city, 
								 city: item.properties.city,
                                 postcode: item.properties.postcode,
								 value: item.properties.name
						};    
				}));
			}
		});
	},
    select: function(event, ui) {
		$('#city').val(ui.item.city);
        $('#zipcode').val(ui.item.postcode);
	},
    

});


                    
$("#zipcode").autocomplete({
	source: function (request, response) {
		$.ajax({
			url: "https://api-adresse.data.gouv.fr/search/?postcode="+$("input[name='zipcode']").val(),
			data: { q: request.term },
			dataType: "json",
			success: function (data) {
				var postcodes = [];
				response($.map(data.features, function (item) {
					// Ici on est obligé d'ajouter les CP dans un array pour ne pas avoir plusieurs fois le même
					if ($.inArray(item.properties.postcode, postcodes) == -1) {
						postcodes.push(item.properties.postcode);
						return { label: item.properties.postcode + " - " + item.properties.city, 
								 city: item.properties.city,
								 value: item.properties.postcode
						};
					}
				}));
			}
		});
	},
	// On remplit aussi la ville
	select: function(event, ui) {
		$('#city').val(ui.item.city);
	}
});
$("#city").autocomplete({
	source: function (request, response) {
		$.ajax({
			url: "https://api-adresse.data.gouv.fr/search/?city="+$("input[name='city']").val(),
			data: { q: request.term },
			dataType: "json",
			success: function (data) {
				var cities = [];
				response($.map(data.features, function (item) {
					// Ici on est obligé d'ajouter les villes dans un array pour ne pas avoir plusieurs fois la même
					if ($.inArray(item.properties.postcode, cities) == -1) {
						cities.push(item.properties.postcode);
						return { label: item.properties.postcode + " - " + item.properties.city, 
								 postcode: item.properties.postcode,
								 value: item.properties.city
						};
					}
				}));
			}
		});
	},
	// On remplit aussi le CP
	select: function(event, ui) {
		$('#zipcode').val(ui.item.postcode);
	}
});
