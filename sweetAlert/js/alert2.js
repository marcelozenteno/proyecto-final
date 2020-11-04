(function(){
	$("tr td #delete").click(function(ev){
		ev.preventDefault();
		var nombre=$(this).parents('tr').find('td:first').text();
		var id=$(this).attr('data-id');
		var nom=$(this).attr('data-nom');
		Swal.fire({
			title: 'Estas seguro de desabilitar a '+id+'?',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Si',
			cancelButtonText: 'No',
		}).then((result) => {
			if (result.value) {
				//ajax
				$.ajax({
					url: '<?php echo base_url(); ?>index.php/usuarios/inicio',
					type: 'post',
					data: {'id':id},
					success: function(){
						Swal.fire(
							'Eliminado!',
							'El registro a sido desabilitado',
							'success'
							)
					},statusCode: {
						400: function(){

						}
					}
				});
			}
		})
	})
})();
