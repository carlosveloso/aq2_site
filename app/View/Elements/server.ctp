<?
if($status == 'Online') {
    $class = 'ok-sign';
    $label = 'success';
} else {
    $class = 'ban-circle';
    $label = 'important';
    $serverInfo['gq_hostname'] = $server;
    $serverInfo['players'] = 0;
    $serverInfo['maxclients'] = 0;    
}
?>
<p>
    <span class="label label-inverse">
        <i class="icon-eye-open icon-white"></i> <span style="color:#A4A4A4;">Server:</span> <?=$serverInfo['gq_hostname'];?>
    </span>            
    <span class="label label-inverse">
        <i class="icon-tasks icon-white"></i> <span style="color:#A4A4A4;">Ip:</span> <?=$serverInfo['gq_address'];?>
    </span>            
    <span class="label label-inverse">
        <i class="icon-road icon-white"></i> <span style="color:#A4A4A4;">Port:</span> <?=$serverInfo['gq_port'];?>
    </span>
    <br />
    <span class="label label-inverse">
        <i class="icon-map-marker icon-white"></i> <span style="color:#A4A4A4;">Map:</span> <?=$serverInfo['gq_mapname'];?>
    </span>            
    <span class="label label-inverse">
        <i class="icon-user icon-white"></i> <span style="color:#A4A4A4;">Players:</span> <?=count($serverInfo['players']);?>/<?=$serverInfo['maxclients'];?>
    </span>
    <span class="label label-<?=$label?>">
        <i class="icon-<?=$class?> icon-white"></i> Status: <?=$status?> 
    </span>
</p>