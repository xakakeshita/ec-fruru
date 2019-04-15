<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Form\Type\Shopping\OrderType' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/src/Eccube/Form/Type/Shopping/OrderType.php';

return $this->services['Eccube\Form\Type\Shopping\OrderType'] = new \Eccube\Form\Type\Shopping\OrderType(${($_ = isset($this->services['Eccube\Repository\OrderRepository']) ? $this->services['Eccube\Repository\OrderRepository'] : $this->getOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\DeliveryRepository']) ? $this->services['Eccube\Repository\DeliveryRepository'] : $this->load('getDeliveryRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\PaymentRepository']) ? $this->services['Eccube\Repository\PaymentRepository'] : $this->load('getPaymentRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\BaseInfoRepository']) ? $this->services['Eccube\Repository\BaseInfoRepository'] : $this->load('getBaseInfoRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Request\Context']) ? $this->services['Eccube\Request\Context'] : $this->getContextService()) && false ?: '_'});
