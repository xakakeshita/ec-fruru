<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Command\ComposerUpdateCommand' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/src/Eccube/Command/ComposerUpdateCommand.php';

$this->services['Eccube\Command\ComposerUpdateCommand'] = $instance = new \Eccube\Command\ComposerUpdateCommand(${($_ = isset($this->services['Eccube\Service\Composer\ComposerApiService']) ? $this->services['Eccube\Service\Composer\ComposerApiService'] : $this->load('getComposerApiServiceService.php')) && false ?: '_'});

$instance->setName('eccube:composer:update');

return $instance;
