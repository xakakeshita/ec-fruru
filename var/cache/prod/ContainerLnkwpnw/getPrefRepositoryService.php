<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Repository\Master\PrefRepository' shared autowired service.

include_once $this->targetDirs[3].'/src/Eccube/Repository/Master/PrefRepository.php';

return $this->services['Eccube\Repository\Master\PrefRepository'] = new \Eccube\Repository\Master\PrefRepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
