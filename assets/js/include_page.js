$(document).ready(function(){
	$(document).on('click','#btn_menu_datos',function(e){
		e.preventDefault();
		page_name = $(this).attr('href');
		if(page_name===undefined){
			page_name = $(this).val();
		}
		console.log(page_name);
		add_page(page_name);		
	});

	$(document).on('click','#btn_add_new',function(){

	});
});

function add_page(pagina){
	$.post(base_url+'index.php/clinica/c_clinica/pagina',{pagina:pagina},
		function(htmlResponse){
			$("#add_page").html(htmlResponse);			
		}
	);
}
