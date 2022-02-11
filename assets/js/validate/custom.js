 var notyf = new Notyf({
            duration: 2e3,
            position: { x: "right", y: "bottom" },
            types: [
                { type: "warning", background: themeColors.warning, icon: { className: "fas fa-hand-paper", tagName: "i", text: "" } },
                { type: "info", background: themeColors.info, icon: { className: "fas fa-info-circle", tagName: "i", text: "" } },
                { type: "primary", background: themeColors.primary, icon: { className: "fas fa-car-crash", tagName: "i", text: "" } },
                { type: "accent", background: themeColors.accent, icon: { className: "fas fa-car-crash", tagName: "i", text: "" } },
                { type: "purple", background: themeColors.purple, icon: { className: "fas fa-check", tagName: "i", text: "" } },
                { type: "blue", background: themeColors.blue, icon: { className: "fas fa-check", tagName: "i", text: "" } },
                { type: "green", background: themeColors.green, icon: { className: "fas fa-check", tagName: "i", text: "" } },
                { type: "orange", background: themeColors.orange, icon: { className: "fas fa-check", tagName: "i", text: "" } },
            ],
        });







/* $('#loginbtn').on('click', function (e) {*/


$('#admin_login').validate({
	submitHandler: function(e) {
	   $('.someBlock').preloader();
		var action = $('#admin_login').attr('action');
		
		$.ajax({
			type: "POST",
			url: action,
			data: $('#admin_login').serialize(),
			dataType: "json",
			success: function(data) {
			    $('.someBlock').preloader('remove');
				if(data.status == 1) {

					toastr.success(data.msg, "Login Authentication", {
					timeOut: "1800"
					});
					setTimeout(function(){ window.location.href = data.redirect_url; }, 2000);
				}else if(data.status == 0) {
					 toastr.error(data.msg, "Login Authentication", "Oops!", {
					timeOut: "1800"
					});
					setTimeout(function(){ window.location.href = data.redirect_url; }, 2000);
				}
			}
		})
		return false;
	}
});

/*});*/

// $('#update_password_submit').on('click', function (e) {

$('.validate_form_v1').validate({
  submitHandler: function(form) {
  	
	var myform = $('#'+$(form).attr('id'))[0];
	var formData = new FormData(myform);

	var action = $(form).attr('action');
    
    $.ajax({
      type: "POST",
      enctype: 'multipart/form-data',
      url: action,
      data: formData,
      processData: false,
      contentType: false,
      cache: false,
      dataType: "json",
      success: function(data) {

        if(data.status == 1) {

          notyf.success(data.msg, "Success", {
          timeOut: "1800"
          });
          setTimeout(function(){ window.location.href = data.redirect_url; }, 2000);
        }else if(data.status == 0) {
           notyf.error(data.msg, "Failed", "Oops!", {
          timeOut: "1800"
          });
          setTimeout(function(){ window.location.href = data.redirect_url; }, 2000);
        }
      }
    })
    return false;
  }
});



 function delete_data(id){


  var action = $("#branch_"+id).attr("data-href");

                     swal({
                      title: 'Are you sure?',
                      text: "You won't be able to revert this!",
                      type: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#0CC27E',
                      cancelButtonColor: '#FF586B',
                      confirmButtonText: 'Yes, delete it!',
                      cancelButtonText: 'No, cancel!',
                      confirmButtonClass: 'button h-button is-primary',
                      cancelButtonClass: 'button h-button is-danger',
                      buttonsStyling: false
                  }).then(function (res) {


              if(res.value == true){ alert(action);

                    $.ajax({
                        url: action,
                        method: "POST",
                        dataType: 'json',
                        success: function(result) {
                             
                            if(result){

                                swal('Deleted!',result.msg, 'success');

                            }
                            else{
                                swal('Cancelled', result.msg, 'error');

                            }

                            setTimeout(function(){   window.location.reload(); }, 2000);
                        }
                    });
}
else{
   
}



                }, function (dismiss) {

                });



              }
