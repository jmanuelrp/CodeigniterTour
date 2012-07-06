

$(document).ready(function() {

	$("#titulo").keypress(function(e){
		if (e.which == 13) 
		{
			$("#enlace").focus();
		};
	});

	$("#enlace").keypress(function(e){
		if (e.which == 13) 
		{
			$("#send-info").focus();
		};
    });

    $('#send-info').click(function() {
		addelement();
	});

	function addelement () {
		title = $("#titulo").val();
		link = $("#enlace").val();
		if(title.length>0 && link.length>0)
		{
			element = '<li class="active"><a href="'+link+'">'+title+'</a></li>';
			$('li.active').removeClass('active');
			$('#main-menu').append(element);
			$('#formulario').each(function(){
				this.reset();
			});
		}
		else
		{
			element  = '<p class="alert alert-error">';
			element += '	<button class="close" data-dismiss="alert">×</button>';
			element += '	<b>Error</b>: No se pudo crear el elemento, hay campos vacios.';
			element += '</p>';
			$('#alert-messages').append(element);
		}
		console.log(element);
	}

});