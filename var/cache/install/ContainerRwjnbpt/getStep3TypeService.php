<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Form\Type\Install\Step3Type' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/src/Eccube/Form/Type/Install/Step3Type.php';

return $this->services['Eccube\Form\Type\Install\Step3Type'] = new \Eccube\Form\Type\Install\Step3Type(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Common\EccubeConfig']) ? $this->services['Eccube\Common\EccubeConfig'] : ($this->services['Eccube\Common\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'});
