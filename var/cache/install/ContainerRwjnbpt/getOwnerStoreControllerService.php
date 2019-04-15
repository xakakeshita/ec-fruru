<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Eccube\Controller\Admin\Store\OwnerStoreController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/src/Eccube/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Eccube/Controller/Admin/Store/OwnerStoreController.php';
include_once $this->targetDirs[3].'/src/Eccube/Util/CacheUtil.php';

$this->services['Eccube\Controller\Admin\Store\OwnerStoreController'] = $instance = new \Eccube\Controller\Admin\Store\OwnerStoreController(${($_ = isset($this->services['Eccube\Repository\PluginRepository']) ? $this->services['Eccube\Repository\PluginRepository'] : $this->getPluginRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Service\PluginService']) ? $this->services['Eccube\Service\PluginService'] : $this->load('getPluginServiceService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Service\Composer\ComposerProcessService']) ? $this->services['Eccube\Service\Composer\ComposerProcessService'] : $this->load('getComposerProcessServiceService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Service\Composer\ComposerServiceInterface']) ? $this->services['Eccube\Service\Composer\ComposerServiceInterface'] : $this->load('getComposerServiceInterfaceService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Service\SystemService']) ? $this->services['Eccube\Service\SystemService'] : $this->load('getSystemServiceService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Service\PluginApiService']) ? $this->services['Eccube\Service\PluginApiService'] : $this->load('getPluginApiServiceService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Repository\BaseInfoRepository']) ? $this->services['Eccube\Repository\BaseInfoRepository'] : $this->load('getBaseInfoRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['Eccube\Util\CacheUtil']) ? $this->services['Eccube\Util\CacheUtil'] : ($this->services['Eccube\Util\CacheUtil'] = new \Eccube\Util\CacheUtil(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'});

$instance->setEccubeConfig(${($_ = isset($this->services['Eccube\Common\EccubeConfig']) ? $this->services['Eccube\Common\EccubeConfig'] : ($this->services['Eccube\Common\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))) && false ?: '_'});
$instance->setEntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
$instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
$instance->setSession(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
$instance->setFormFactory(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'});
$instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

return $instance;
