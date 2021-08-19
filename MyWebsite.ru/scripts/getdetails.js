$("#form1").on("submit", function(){
    let mobphone = $('#mobphone').val();
	$.ajax({
		url: 'scripts/details.php',
		method: 'post',
		data: {mphone:mobphone},
		success: function(result){
            $("#name").html(result['name']);
            $("#surname").html(result['surname']);
		}
	});
});