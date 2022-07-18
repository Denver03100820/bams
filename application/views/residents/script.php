<script type="text/javascript">

$(document).ready(function(){
	$(document).on('change','#resident_img',function(e){
		console.log(e)
		let image = document.getElementById('id_view');
		image.src = URL.createObjectURL(e.target.files[0]);
	})

	$(document).on("click","#btnsave_resident",function(e){

	  e.preventDefault();
      let form_data = $('#frm_resident')[0]
      let form_url = $('#frm_resident').attr('action')
      ajx(form_url,new FormData(form_data));
	})

	
});

function ajx($url,$data,$type ="POST")
{
  var myMdSucces = new bootstrap.Modal(document.getElementById('mdlsuccess'), {
    keyboard: false
  })
  
  $("#frm_error_msg").html("")
  $.ajax({
    type: $type,
    url: $url,
    data: $data,
    dataType:"json",
    processData: false,
    contentType: false,
    success: function(data) {
      console.log(data)
      if (data.error) 
      {
        console.log(data)
        $("#frm_error_msg").html(data.msg)
      }
      else
      {
        console.log(data)
        $("#success").html(data.msg)
        myMdSucces.show();
      }
    }
  });
}

</script>