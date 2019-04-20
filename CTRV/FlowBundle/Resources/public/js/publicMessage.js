/**
 * Retourne la liste des publicMessage selon la page spécifié
 */
function loadPublicMessage (urlAction,ppage,container) {
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
 * Supprime un publicMessage
 */
function deletePublicMessage (urlAction, tr_elem) {
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