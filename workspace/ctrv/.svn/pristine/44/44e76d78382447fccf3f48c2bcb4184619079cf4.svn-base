/**
 * Retourne la liste des utilisateurs selon la page spécifié
 */
function loadUserConnected (urlAction,ppage,container) {
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
 * Supprime un utilisateur
 */
function deleteUserConnected (urlAction, tr_elem) {
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