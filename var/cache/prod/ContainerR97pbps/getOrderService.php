<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'autowired.Eccube\Entity\Order' shared autowired service.

include_once $this->targetDirs[3].'/src/Eccube/Entity/AbstractEntity.php';
include_once $this->targetDirs[3].'/src/Eccube/Entity/PurchaseInterface.php';
include_once $this->targetDirs[3].'/src/Eccube/Entity/ItemHolderInterface.php';
include_once $this->targetDirs[3].'/src/Eccube/Entity/NameTrait.php';
include_once $this->targetDirs[3].'/src/Eccube/Entity/PointTrait.php';
include_once $this->targetDirs[3].'/src/Eccube/Entity/Order.php';

return $this->services['autowired.Eccube\Entity\Order'] = new \Eccube\Entity\Order();