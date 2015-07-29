
 
 <div class="table-responsive">
  <table class="table table-bordered">
    <tr class="text-danger text-center" style="font-size: 1.2em;font-weight: 600;">
            <td class="col-sm-1 ">#</td>
            <td class="col-sm-1">Name</td>
            <td class="col-sm-6">Description</td>
            <td class="col-sm-1">Speed</td>
            <td class="col-sm-1">Duration</td>
            <td class="col-sm-1">Cost</td>
            <td class="col-sm-1">&nbsp;</td>
            
    </tr>
    <?php foreach($allTurboBoost as $eachTurboBoost): ?>
    <tr class="text-muted" style="font-size: 1em;">
            <td class="col-sm-1 text-center"><?= $eachTurboBoost->id; ?></td>
            <td class="col-sm-1"><?= $eachTurboBoost->name; ?></td>
            <td class="col-sm-6"><?= $eachTurboBoost->description; ?></td>
            <td class="col-sm-1"><?= $eachTurboBoost->speed; ?></td>
            <td class="col-sm-1 text-center"><?= $eachTurboBoost->duration; ?></td>
            <td class="col-sm-1 text-center"><?= $eachTurboBoost->cost; ?></td>
            <td class="col-sm-1 text-center text-success" style="text-decoration: none; font-weight: 700;"><a href="<?=  base_url("index.php/configuration/editTurboboost/{$eachTurboBoost->id}"); ?>">Edit</a></td>
            
    </tr>
    <?php endforeach; ?>
  </table>
</div>