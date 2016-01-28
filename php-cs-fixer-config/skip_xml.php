<?php

$finder = Symfony\CS\Finder\DefaultFinder::create();
$finder->files()->notName('*.xml');

return Symfony\CS\Config\Config::create()->finder($finder);