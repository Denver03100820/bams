<script type="text/javascript">

$(document).ready(function(){
	$(document).on('change','#resident_img',function(e){
		console.log(e)
		let image = document.getElementById('id_view');
		image.src = URL.createObjectURL(e.target.files[0]);
	})
});

</script>