$(document).ready( function() {
	$(".upload-click").click(function(e){ 
		$('#input-file-upload').trigger('click');
	});
	
	$("#input-file-upload").change(function(){
		var loaded = false;
		if(window.File && window.FileReader && window.FileList && window.Blob){
			if($(this).val()){ //check empty input filed
				oFReader = new FileReader(), rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;
				if($(this)[0].files.length === 0){return}
				

				var oFile = $(this)[0].files[0];
				var fsize = $(this)[0].files[0].size; //get file size
				var ftype = $(this)[0].files[0].type; // get file type

				 oFReader.onload=function(e){
			        $("#sorc").attr("src",e.target.result);
			     }
			    
			      oFReader.readAsDataURL(oFile);

				
				if(!rFilter.test(oFile.type)) 
				{
					alert('Unsupported file type!');
					return false;
				}
					
				var allowed_file_size = 2194304;	
							
				if(fsize>allowed_file_size)
				{
					alert('File too big! Allowed size 2 MB');
					return false;
				}
				
				$(".upload-image").show();
				$(".upload-click").hide();
				
				var mdata = new FormData();
				mdata.append('upl',true);
				mdata.append('image_data', $(this)[0].files[0]);
				
				jQuery.ajax({
					type: "POST", // HTTP method POST or GET
					processData: false,
					contentType: false,
					url: "Update.php", //Where to make Ajax calls
					data: mdata, //Form variables
					//dataType: 'json',
					success:function(response){
						
						$(".upload-image").hide();
						$(".upload-click").show();
						/*
						if(response.type == 'success'){	
							$("#server-response").html('<div class="success">' + response.msg + '</div>');
						
						}else{
							$("#server-response").html('<div class="error">' + response.msg + '</div>');
						}*/
					}
				});
				
			}
			
		}else{
			alert("Can't upload! Your browser does not support File API! Try again with modern browsers like Chrome or Firefox.</div>");
			return false;
		}
		
	});
});