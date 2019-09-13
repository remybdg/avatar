

<svg width="400" height="400" viewBox="0 0 <?=$matrix->getSize();?> <?=$matrix->getSize();?>">

    <?php  foreach($result as $x => $column): ?>
        <?php foreach($column as $y => $squareColor): ?>
            <rect x="<?=$x;?>" y="<?=$y;?>" width="1" height="1" fill="<?= $squareColor; ?>" />
        <?php endforeach; ?>
    <?php endforeach; ?>

</svg> 

<!-- <svg width="400" height="400" viewBox="0 0 <?=$casesNumber;?> <?=$casesNumber;?>">

    <?php  foreach($avatarSquare as $x => $column): ?>
        <?php foreach($column as $y => $squareColor): ?>
            <rect x="<?=$x;?>" y="<?=$y;?>" width="1" height="1" fill="<?= $squareColor; ?>" />
        <?php endforeach; ?>
    <?php endforeach; ?>

</svg>  -->
