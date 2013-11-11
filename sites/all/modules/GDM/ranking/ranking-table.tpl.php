<div id="ranking">
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th><?php print t('Nombre'); ?></th>
				<th><?php print t('TJ'); ?></th>
				<th><?php print t('PJ'); ?></th>
				<th><?php print t('PG'); ?></th>
				<th><?php print t('P TOP'); ?></th>
				<th><?php print t('P MULTI'); ?></th>
				<th><?php print t('T WIN'); ?></th>
				<th><?php print t('TOTAL'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($ranking as $r): ?>
			<tr>
				<td><?php print $r->name ?></td>
				<td class="text-center"><?php print $r->tj ?></td>
				<td class="text-center"><?php print $r->pj ?></td>
				<td class="text-center"><?php print $r->pg ?></td>
				<td class="text-center"><?php print $r->p_top ?></td>
				<td class="text-center"><?php print $r->p_multi ?></td>
				<td class="text-center"><?php print $r->t_win ?></td>
				<td class="text-center"><?php print $r->total ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>