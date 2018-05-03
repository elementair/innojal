function filterSelection(grupo_id) {
  location.href = './productos.php?grupo_id='+grupo_id;
}

 $('.searchbar').keyup(function (){
 	$(".filterDiv").hide();
   	var valor = $(this).val().toUpperCase();

   	$(".filterDiv:contains('"+valor+"')").show();


 });