<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Eccube\Service\Payment\Method\Cash' shared autowired service.

include_once $this->targetDirs[3].'/src/Eccube/Service/Payment/PaymentMethodInterface.php';
include_once $this->targetDirs[3].'/src/Eccube/Service/Payment/Method/Cash.php';

return $this->services['Eccube\Service\Payment\Method\Cash'] = new \Eccube\Service\Payment\Method\Cash(${($_ = isset($this->services['eccube.purchase.flow.shopping']) ? $this->services['eccube.purchase.flow.shopping'] : $this->load('getEccube_Purchase_Flow_ShoppingService.php')) && false ?: '_'});
