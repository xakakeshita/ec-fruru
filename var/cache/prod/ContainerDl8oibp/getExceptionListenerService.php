<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\EventListener\ExceptionListener' shared autowired service.

include_once $this->targetDirs[3].'/src/Eccube/EventListener/ExceptionListener.php';

return $this->services['Eccube\EventListener\ExceptionListener'] = new \Eccube\EventListener\ExceptionListener(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Request\Context']) ? $this->services['Eccube\Request\Context'] : $this->getContextService()) && false ?: '_'});
