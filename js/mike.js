function ajaxFunction(){
	var ajaxRequest;  // The variable that makes Ajax possible!
	
	if(window.XMLHttpRequest){
		// Opera 8.0+, Firefox, Safari, Chrome
		ajaxRequest = new XMLHttpRequest();
	}else{
		ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
		}

	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4 && ajaxRequest.status==200){
		
			console.log(ajaxRequest.responseText);
			document.getElementById('lga').innerHTML = ajaxRequest.responseText;
		}
	}
	var lgas = document.getElementById('state').value;
	var queryString = "?lgas=" + lgas;
	ajaxRequest.open("GET", "get_lgas_of_selected_state" + queryString, true);
	ajaxRequest.send(null); 

	}