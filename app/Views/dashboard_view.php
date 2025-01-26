
<?=$this->extend("innerlayout/base") ?>

 


<?=$this->section("navprofile")?>
      <li><a class="dropdown-item" href="#" readonly><?=ucfirst($userdata->username)?></a></li>
      <li><a class="dropdown-item" href="#" style="font-size:10px" readonly><?=ucfirst($userdata->email)?></a></li>
<?=$this->endSection()?>

<!-- -<= 12 / count($rowColumns) -->
 
<?= $this->section("monitor") ?>

    <?php
    $rows = $_SESSION['rows'] ?? [];
    $columns = $_SESSION['columns'] ?? [];
    foreach ($rows as $rowIndex => $rowColumns): ?>
        <div class="row g-0"> 
            <?php foreach ($rowColumns as $colIndex => $content): ?>
                <div class="col-md">
                    <?php if (!empty($content)): ?>
                        <?= $content; ?>
                    <?php else: ?>
                        <div class="bg-dark h-100 w-100 text-center text-light border border-light">R <?= $rowIndex + 1 ?>, C <?= $colIndex + 1 ?></div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>

    
    
<?= $this->endSection() ?>

 


<?=$this->section("componentlist")?>
    
        <?php 
        $cont = session()->get('cont');

        if ($cont && is_file(APPPATH . 'Views/components/' . $cont . '.php')) {
            echo $this->include("components/" . $cont);
        } else {
            echo $this->include("components/navbar");
        }
        ?>

<?=$this->endSection()?>




<?=$this->section("userprofile")?>
    
        <?= $this->include("others/userprofile")?>

<?=$this->endSection()?>




<?=$this->section("content")?>
    
        <?php 
        $conts = session()->get('conts');

        if ($conts && is_file(APPPATH . 'Views/contents/' . $conts . '.php')) {
            echo $this->include("contents/" . $conts);
        } else {
            echo $this->include("contents/table");
        }
        ?>

<?=$this->endSection()?>