/**
 * Retourne la liste des utilisateurs selon le nom ou prénom spécifié
 */ 
function loadSearchedUsers (urlAction, p_searchText, p_etat, ppage, container_id ) {
	$('#'+container_id).html('<div class="ctrv-loader"></div>');
	
	$.post(urlAction,
		      {
				searchText:p_searchText,
				etat: p_etat,
				page:ppage
				
		      },
		      function (data) {
		    	  $('#'+container_id).html(data);
		      },
		      'html'
		  ); 
}


/**
 * Désactiver un utilisateur
 */
function desactiveUser (urlAction, tr_elem) {
	$.post(urlAction,
	      {
	      },
	      function (data) {
	    	  if(data.result){
	    		  tr_elem.append();
	    	  }
	      },
	      'json'
	); 
}