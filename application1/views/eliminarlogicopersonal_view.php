<br>
<br>
<br>
<div class="container">
	<table>
		
		<?php
		$indice=1;
		foreach ($socio->result() as $row)
		{
			?>
			<tr>
				<td><?php echo $indice; ?></td>
				<td><?php echo $row->ci; ?></td>
				<td><?php echo $row->licencia; ?></td>
				<td><?php echo $row->categoria; ?></td>
				<td><?php echo $row->apellidoPaterno; ?>&nbsp;<?php echo $row->apellidoMaterno; ?>&nbsp;<?php echo $row->nombres; ?></td>
				<td><?php echo $row->sexo; ?></td>
				<td><?php echo $row->fechaRegistro; ?></td>
			</tr>
			<?php    
			$indice++;
		}
		?>
	</table>
	</div>