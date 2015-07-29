
 
 <div class="table-responsive">
  <table class="table table-bordered">
    <tr class="text-danger text-center" style="font-size: 1.2em;font-weight: 600;">
            <td class="col-sm-1 ">#</td>
            <td class="col-sm-1">Name</td>
            <td class="col-sm-1">Allotment</td>
            <td class="col-sm-1">Duration</td>
            <td class="col-sm-1">Cost</td>
            <td class="col-sm-1">&nbsp;</td>
            
    </tr>
    <?php foreach($allDataPass as $eachDataPass): ?>
    <tr class="text-muted" style="font-size: 1em;">
            <td class="col-sm-1 text-center"><?= $eachDataPass->id; ?></td>
            <td class="col-sm-1 text-center"><?= $eachDataPass->name; ?></td>
            <td class="col-sm-1 text-center"><?= $eachDataPass->allotment; ?></td>
            <td class="col-sm-1 text-center"><?= $eachDataPass->duration; ?></td>
            <td class="col-sm-1 text-center"><?= $eachDataPass->cost; ?></td>
            <td class="col-sm-1 text-center text-success" style="text-decoration: none; font-weight: 700;"><a href="<?=  base_url("index.php/configuration/editDataPass/{$eachDataPass->id}"); ?>">Edit</a></td>
            
    </tr>
    <?php endforeach; ?>
  </table>
</div>