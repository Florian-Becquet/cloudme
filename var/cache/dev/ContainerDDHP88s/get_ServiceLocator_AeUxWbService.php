<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Ae_uxWb' shared service.

return $this->privates['.service_locator.Ae_uxWb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService.php', true],
    'subRepo' => ['privates', 'App\\Repository\\SubscriptionRepository', 'getSubscriptionRepositoryService.php', true],
    'userRepo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
], [
    'paginator' => '?',
    'subRepo' => 'App\\Repository\\SubscriptionRepository',
    'userRepo' => 'App\\Repository\\UserRepository',
]);
