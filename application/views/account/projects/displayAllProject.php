<?php if(isset($allProjectData)): ?>
    <?php foreach($allProjectData as $eachProject): ?>    
    <div class="panel panel-default">
      <div class="panel-heading text-navbar-header-option"><?= $eachProject['title']?><span class="pull-right"><a href=<?= base_url("index.php/projects/edit/{$eachProject['id']}");?>>Edit</a></span></div>
      <div class="panel-body text-menu-1">
        <?= $eachProject['description']; ?>
      </div>
    </div>
    <?php endforeach; ?>
<?php endif; ?>