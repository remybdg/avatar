<?php

include 'vendor/autoload.php';
// include 'src/Avatar/AvatarMatrix.php';
// include 'src/Avatar/SvgAvatarFactory.php';
// include 'src/Avatar/SvgAvatarRenderer.php';
// include 'src/Tools/ColorTools.php';
// include 'src/Helpers/FileSystemHelper.php';

use App\Avatar\SvgAvatarFactory;
use App\Tools\ColorTools;
use App\Helpers\FileSystemHelper;

$casesNumber = $_POST['cases'];
// $casesNumber = 100;

$colorSelected = $_POST['color'];
$randomColors = $_POST['randomColors'];

$numberColor = $_POST['numberRandomColor'];
dump($colorSelected, $randomColors);

if (!empty($_POST)) {
    if ($randomColors && $colorSelected == NULL) {
        $colorSelected = ColorTools::getRandomColors($numberColor);
    }

$svg = SvgAvatarFactory::getAvatar($colorSelected, $casesNumber);
    dump($svg);

$filename  = sha1(uniqid(rand(), true));
$fs = new FileSystemHelper();
$fs->write('uploads/avatars/'. $filename . '.svg', $svg);
}



include 'index.phtml';