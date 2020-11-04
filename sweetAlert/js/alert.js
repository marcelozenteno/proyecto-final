(function(){
	$("tr td #delete").click(function(ev){
		ev.preventDefault();
		
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
			if (result.isConfirmed) {
				//ajax
				$.ajax({
					type: 'POST',
					url: '/usuarios/eliminarlogicobd',
					data: {'id':id},
					success: function(){
						Swal.fire(
					'Eliminado!',
					'El registro a sido desabilitado',
					'success'
					)
					}
				});
			}
		})
	})
})();
