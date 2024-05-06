<?php

namespace ContainerYXxquxL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Nm6R5I_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Nm6R5I.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Nm6R5I.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'hub' => ['privates', 'mercure.hub.default.traceable', 'getMercure_Hub_Default_TraceableService', false],
            'projectDir' => ['privates', '.value.47DvH.H', 'get_Value_47DvH_HService', true],
        ], [
            'hub' => '?',
            'projectDir' => '?',
        ]);
    }
}
