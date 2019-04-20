/**
 * Retourne la liste des agendas selon la page spécifié
 */
function loadAgenda (urlAction,ppage,container) {
	container.html('<div class="ctrv-loader"></div>');
	
	$.post(urlAction,
		      {
				page:ppage
		      },
		      function (data) {
		    	  container.html(data);
		      },
		      'html'
		  ); 
}

/**
 * Supprime un agenda
 */
function deleteAgenda (urlAction, tr_elem) {
	$.post(urlAction,
	      {
	      },
	      function (data) {
	    	  if(data.result){
	    		  tr_elem.remove();
	    	  }
	      },
	      'json'
	); 
}