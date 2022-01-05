<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ogQW0sG' shared service.

return $this->privates['.service_locator.ogQW0sG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService.php', true],
    'serviceRepo' => ['privates', 'App\\Repository\\ServicesRepository', 'getServicesRepositoryService.php', true],
], [
    'paginator' => '?',
    'serviceRepo' => 'App\\Repository\\ServicesRepository',
]);
