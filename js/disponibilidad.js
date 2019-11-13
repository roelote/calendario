$(document).ready(function(){
    today = new Date();
    curr_year = 2019;
    curr_month = today.getMonth()+1;
    ruta = 101;
    parametros = { 'anho':curr_year, 'mes':curr_month, 'ruta':ruta };
    $.ajax({
        url  : 'source/calendario.php',
        type : 'POST',
        data : parametros
    }).done (function (data) {
        $('#ikx').html(data);
    });
});

$(document).ready(function(){
	$('#formConsult').submit(function(event){
		event.preventDefault();
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data){
                //Cuando la interacción sea exitosa, se ejecutará esto.
                $('#ikx').html(data);
			},
			error: function(data){
				//Cuando la interacción retorne un error, se ejecutará esto.
			}
		})
	})
});
