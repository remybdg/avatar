<?php

namespace App\Avatar;

class SvgAvatarFactory {
    static public function getAvatar(array $colorSelected, int $casesNumber) {
        $matrix = new AvatarMatrix;

        $matrix->setColors($colorSelected);
        $matrix->setSize($casesNumber);
        $svgAvatarRenderer = new SvgAvatarRenderer('templates/avatar.svg.tpl');
    
        $svg = $svgAvatarRenderer->render($matrix);
        return $svg;
    }
}