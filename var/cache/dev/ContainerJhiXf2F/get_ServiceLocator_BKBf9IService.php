<?php

namespace ContainerJhiXf2F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BKBf9IService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BKBf9_I' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BKBf9_I'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'phoneRepository' => ['privates', 'App\\Repository\\PhoneRepository', 'getPhoneRepositoryService', true],
            'serializer' => ['services', 'serializer', 'getSerializerService', true],
        ], [
            'phoneRepository' => 'App\\Repository\\PhoneRepository',
            'serializer' => '?',
        ]);
    }
}
