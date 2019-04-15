<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.system_clearer' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->load('getCache_SystemService.php')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->load('getCache_ValidatorService.php')) && false ?: '_'}, 'cache.serializer' => ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->load('getCache_SerializerService.php')) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->load('getCache_AnnotationsService.php')) && false ?: '_'}, 'cache.property_access' => ${($_ = isset($this->services['cache.property_access']) ? $this->services['cache.property_access'] : $this->load('getCache_PropertyAccessService.php')) && false ?: '_'}]);
