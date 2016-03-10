<div class="hoteles view">
<h2><?php echo __('Hotele'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotele['Hotele']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($hotele['Hotele']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ubicacion'); ?></dt>
		<dd>
			<?php echo h($hotele['Hotele']['ubicacion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotele'), array('action' => 'edit', $hotele['Hotele']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotele'), array('action' => 'delete', $hotele['Hotele']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hotele['Hotele']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Hoteles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotele'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel Id'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clientes'); ?></h3>
	<?php if (!empty($hotele['hotel_id'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pais Id'); ?></th>
		<th><?php echo __('Idioma Id'); ?></th>
		<th><?php echo __('Hotel Id'); ?></th>
		<th><?php echo __('Agencia Id'); ?></th>
		<th><?php echo __('Circustancias Medica Id'); ?></th>
		<th><?php echo __('Fecha Alta'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Edad'); ?></th>
		<th><?php echo __('Correo Electronico'); ?></th>
		<th><?php echo __('Habitacion'); ?></th>
		<th><?php echo __('Firma'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotele['hotel_id'] as $hotelId): ?>
		<tr>
			<td><?php echo $hotelId['id']; ?></td>
			<td><?php echo $hotelId['pais_id']; ?></td>
			<td><?php echo $hotelId['idioma_id']; ?></td>
			<td><?php echo $hotelId['hotel_id']; ?></td>
			<td><?php echo $hotelId['agencia_id']; ?></td>
			<td><?php echo $hotelId['circustancias_medica_id']; ?></td>
			<td><?php echo $hotelId['fecha_alta']; ?></td>
			<td><?php echo $hotelId['nombre']; ?></td>
			<td><?php echo $hotelId['apellidos']; ?></td>
			<td><?php echo $hotelId['edad']; ?></td>
			<td><?php echo $hotelId['correo_electronico']; ?></td>
			<td><?php echo $hotelId['habitacion']; ?></td>
			<td><?php echo $hotelId['firma']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clientes', 'action' => 'view', $hotelId['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clientes', 'action' => 'edit', $hotelId['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clientes', 'action' => 'delete', $hotelId['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hotelId['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel Id'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
