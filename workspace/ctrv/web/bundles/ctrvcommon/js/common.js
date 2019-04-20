function setCitySession (urlAction,city_id,container) {
	container.html('<div class="ctrv-loader"></div>');
	$.post(urlAction,
      {
		city_id:city_id
      },
      function(data) {
	  	//on recharge la page
    	if(data.result==true)
    		location.reload();
      },
      'json'
	); 
}
