<div id="text">
    <h1><i class="icon-cog icon-white"></i> Set Up</h1>
    <div>
        <h5>Instaladores</h5>
        <a class="btn btn-inverse" href="http://hifi.iki.fi/quake2/action/install/aq2_progamers_choice_v1.3.zip">Aq2 Progamers Choice <i class="icon-download-alt icon-white"></i></a>
        <br /><br />
        <h5>Clientes</h5>
        <a class="btn btn-inverse" href="http://www-personal.umich.edu/~jimw/q2/aq2_install/aprq2_v1.211.zip">AprQ2 v1.211 <i class="icon-download-alt icon-white"></i></a>
        <a class="btn btn-inverse" href="http://antiche.at/files/r1q2-websetup.exe">R1Q2 <i class="icon-download-alt icon-white"></i></a>
        <br /><br />
        <h5>Anticheat</h5>
        <a class="btn btn-inverse" href="http://antiche.at/files/anticheat.zip">Antiche.at <i class="icon-download-alt icon-white"></i></a> <a class="btn btn-inverse" href="http://antiche.at/"> &nbsp<i class="icon-globe icon-white"></i></a>
        <br /><br />
        <h5><i class="icon-map-marker icon-white"></i> Mapas</h5>
        <a class="btn btn-inverse" href="http://uitto.iki.fi/~hifi/quake2/action/install/mega_mappack_v1.zip">Mega MapPack <i class="icon-download-alt icon-white"></i></a> 
        <a class="btn btn-inverse" href="http://www.lahtela.com/aq2suomi/maps/">Lahtela <i class="icon-globe icon-white"></i></a>
        <br /><br />
    </div>
    <h1><i class="icon-globe icon-white"></i> Servidores</h1>
    <? if(!empty($results)): ?>
        <? foreach($results as $k => $r): ?>
    <h4><?=$k?></h4>
    <div class="well">
            <? if(!empty($r['gq_hostname']) && !empty($r['gq_mapname'])):?>
                <?=$this->element('server', array('status' => 'Online', 'serverInfo' => $r));?>
            <? else:?>
                <?=$this->element('server', array('status' => 'Offline', 'server' => $k,'serverInfo' => $r));?>
            <? endif;?>

            <? if(!empty($r['players'])):?>
                <?=$this->element('players', array('players' => $r['players']));?>
            <? else:?>
                <?=$this->element('players', array('players' => array()));?>
            <? endif;?>
    </div>
        <? endforeach;?>
    <? endif;?>
    <h1><span></span></h1>     
</div>
<div id="image"><img src="img/medio<?=mt_rand(1,7)?>.jpg" alt="medio"/></div>

<div id="footer">
    <p>by <a href="#" title="Pancito">PanConLonga</a></p>
</div>