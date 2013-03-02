<div id="serverMenu">
		<? if(!empty($results)): ?>
			<? foreach($results as $k=>$r): ?>
		   		<?if(!empty($r['gq_mapname'])):?>
		    	<span class="label label-success"><?=$k?>
			        <i class="icon-ok-sign icon-white"></i> <?=$r['gq_address']?>:<?=$r['gq_port']?>
			    </span>
				<? else:?>
				<span class="label label-important">
			        <i class="icon-ban-circle icon-white"></i> <?=$r['gq_address']?>:<?=$r['gq_port']?>
			    </span>
		    	<? endif;?>
			<? endforeach;?>
		<? endif;?>
	<br />
</div>