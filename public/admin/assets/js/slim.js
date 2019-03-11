 jQuery.ajaxSetup({

 	headers: {

 		'X-CSRF-TOKEN': jQuery( 'z[name="csrf-token"]' ).attr( 'content' )

 	}

 });


 jQuery('#createcustomer').submit(function(event) { 
 	event.preventDefault();
    $("#myButton").html('Please wait...');
    document.getElementById("myButton").disabled = true;
 	var fname = $('input[name="fname"]').val();
 	var lname = $('input[name="lname"]').val();
 	var email = $('input[name="email"]').val();
 	var bvn = $('input[name="bvn"]').val();
 	var phone = $('input[name="phone"]').val();
 	var accountno = $('input[name="account"]').val();
 	var bank = $("select[name=bank] option:selected").val();

 	jQuery.ajax({
 	  url: '/createcustomer',
 	  type: 'POST',
 	  dataType: 'json',
 	  data: {fname: fname, lname: lname, email:email, bvn: bvn, phone: phone, bank: bank, accountno: accountno},
 	  
 	  success: function(data) {
 	    if(data['code'] == 200){

 	    	var getdata = data['data'];

   			 document.getElementById("myButton").disabled = false;
 	    	 $("#createcustomer")[0].reset();
			 $("#myButton").html('submit');
			 toastr.options.progressBar = true;
 			toastr.options.showMethod = 'slideDown';
 			toastr.success("User Added Successfully");
 			 $('#success').show(); 
 			setTimeout(function(){  $('#success').hide(); ;}, 3000);

 			var fullname = getdata.firstname+" "+getdata.lastname;

 			var newRowContent = "<tr><td class='user-avatar'>"+fullname+"</td><td>"+getdata.email+"</td><td>"+getdata.phone+"</td><td>"+getdata.bvn+"</td><td>"+getdata.bank+"</td><td>"+getdata.accountno+"</td><td class='actions'><a href='/record/"+getdata.customerId+"' class='btn btn-space btn-primary' type='button'>View Financial Record</a></td><td class='actions'><a href='/statement/"+getdata.customerId+"' class='btn btn-space btn-warning' type='button'>View Credit Record</a></td></tr>";
			$("#append tbody").append(newRowContent);
 	    	 
 	    }else if(data['code'] == 419){
 	    	document.getElementById("myButton").disabled = false;
 	    	 $("#myButton").html('submit');
 	        toastr.options.progressBar = true;
 			toastr.options.showMethod = 'slideDown';
 			toastr.error("Invalid Bvn");
 			$('#dangerotp').show();
 			setTimeout(function(){ $('#dangerotp').hide(); }, 3000);

 	    }
 	    else if(data['code'] == 307){
 	    	document.getElementById("myButton").disabled = false;
 	    	 $("#myButton").html('submit');
 	        toastr.options.progressBar = true;
 			toastr.options.showMethod = 'slideDown';
 			toastr.info("User Added successful, But no credit History");
 			
 			var newRowContent = "<tr><td class='user-avatar'>"+fullname+"</td><td>"+getdata.email+"</td><td>"+getdata.phone+"</td><td>"+getdata.bvn+"</td><td>"+getdata.bank+"</td><td>"+getdata.accountno+"</td><td class='actions'><a href='/record/"+getdata.customerId+"' class='btn btn-space btn-primary' type='button'>View Financial Record</a></td><td class='actions'><a href='/statement/"+getdata.customerId+"' class='btn btn-space btn-warning' type='button'>View Credit Record</a></td></tr>";
			$("#append tbody").append(newRowContent);
			$('#info').show();
 			setTimeout(function(){ $('#info').hide(); }, 3000);

 	    }

 	    else{
 	    	document.getElementById("myButton").disabled = false;
 	    	 $("#createcustomer")[0].reset();
			 $("#myButton").html('submit');
 	        toastr.options.progressBar = true;
 			toastr.options.showMethod = 'slideDown';
 			toastr.error("Customer Exist in our database");
 			$('#danger').show();
 			setTimeout(function(){ $('#danger').hide(); }, 3000);
 			
 	    }
 	  }
 	 
 	});
 	



 });
 