
$( document ).ready(function() {
	
	$('#btn_popularbuy').click(function(){
		validCheckPopularMusic();
	});
	
});

function validCheckPopularMusic()
{
	var idsCancion="";
	var existPopular=false;
	$('.chk_popular').each(function( index ) {
		if($( this ).is(':checked')){
			existPopular=true;
			if(idsCancion==''){
				idsCancion=$( this ).val();
			}else{
				idsCancion=idsCancion+','+$( this ).val();
			}
		}
	});
	$('#checkedPopular').val(idsCancion);
	if(!existPopular){alert('seleccione almenos una cancion!');}else{$("#frm_musicPopular").submit();}
}