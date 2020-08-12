(function ($) {
	$("#firstname").keyup(function(){
		//alert($('#lastname').val());
		var val = $(this).val();
		//alert(val);
		if (val.match(/[^a-zA-Z]/g)) //you matched an invalid character
		{
			alert("First Name is invalid");
			this.value = this.value.replace(/[^a-zA-Z]/g, '');			
			return false;
		}
	});
	$("#lastname").keyup(function(){
		//alert($('#lastname').val());
		var val = $(this).val();
		
		if (val.match(/[^a-zA-Z]/g)) //you matched an invalid character
		{
			alert("Last Name is invalid");
			this.value = this.value.replace(/[^a-zA-Z]/g, '');
			//return false;
		}
	  //$("lastname").css("background-color", "yellow");
	});
	$("#age").keyup(function(){
		var value = $(this).val();
		//alert(val);
            if (this.value.match(/[^0-9]/g)) {
                alert("Only Numerical Values allowed");
				this.value = this.value.replace(/[^0-9]/g, '');
            }
			if (value < 0 || value >15){
				alert("Out Of Range");
				$('#age').val("");
			}
	});	
	$("#height").keyup(function(){
		var value = $(this).val();
		//alert(val);
            if (this.value.match(/[^0-9\.]/g)) {
                alert("Only Numerical Values allowed");
				this.value = this.value.replace(/[^0-9\.]/g, '');
            }
	});		
	$("#weight").keyup(function(){
		var value = $(this).val();
		//alert(val);
            if (this.value.match(/[^0-9\.]/g)) {
                alert("Only Numerical Values allowed");
				this.value = this.value.replace(/[^0-9\.]/g, '');
            }
	});
	$("#address").keyup(function(){
		//alert($('#lastname').val());
		var val = $(this).val();
		
		if (val.match(/[^a-zA-Z0-9\,.]/g)) //you matched an invalid character
		{
			alert("Address is invalid");
			this.value = this.value.replace(/[^a-zA-Z0-9\,.]/g, '');
		}
			//$("#address").css("background-color", "red");
	  //$("lastname").css("background-color", "yellow");
	});
	$("#state").keyup(function(){
		//alert($('#state').val());
		var val = $(this).val();
		
		if (val.match(/[^a-zA-Z]/g)) //you matched an invalid character
		{
			alert("State/Country is invalid");
			this.value = this.value.replace(/[^a-zA-Z]/g, '');
		}
	});
	$("#pcode").keyup(function(){
		var value = $(this).val();
		//alert(val);
            if (this.value.match(/[^0-9]/g)) {
                alert("Only Numerical Values allowed");
				this.value = this.value.replace(/[^0-9]/g, '');
            }
	});
	$("#pfirstname").keyup(function(){
		//alert($('#lastname').val());
		var val = $(this).val();
		//alert(val);
		if (val.match(/[^a-zA-Z]/g)) //you matched an invalid character
		{
			alert("First Name is invalid");
			this.value = this.value.replace(/[^a-zA-Z]/g, '');			
			return false;
		}
	});	
	$("#plastname").keyup(function(){
		//alert($('#lastname').val());
		var val = $(this).val();
		//alert(val);
		if (val.match(/[^a-zA-Z]/g)) //you matched an invalid character
		{
			alert("First Name is invalid");
			this.value = this.value.replace(/[^a-zA-Z]/g, '');			
			return false;
		}
	});		
})(jQuery);

/***************************************************************************/