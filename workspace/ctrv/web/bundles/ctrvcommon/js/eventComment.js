/**
 * Retourne la liste des commentaires de la page spécifiée
 */
function loadEventComment (urlAction,ptypeEntity,ppage,container) {
	container.html('<div class="ctrv-loader"></div>');
	
	$.post(urlAction,
		      {
				typeEntity:ptypeEntity,
				page:ppage
		      },
		      function (data) {
		    	  container.html(data);
		      },
		      'html'
		  ); 
}

/**
 * Supprime un commentaires
 */
function deleteEventComment (urlAction, tr_elem) {
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