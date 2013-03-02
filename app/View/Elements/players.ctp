<table class="table table-bordered table-condensed">
    <thead>
        <tr>
            <th>#</th>
            <th><i class="icon-user icon-white"></i> Nick</th>
            <th><i class="icon-fire icon-white"></i> Frags</th>
            <th><i class="icon-signal icon-white"></i> Ping</th>
        </tr>
    </thead>
    <tbody>
        <? foreach($players as $k=>$p): ?>
        <tr>
            <td><?=$k?></td>
            <td><?=$p['nick']?></td>
            <td><?=$p['frags']?></td>
            <td><?=$p['ping']?></td>
        </tr>
        <? endforeach;?>
    </tbody>
</table>