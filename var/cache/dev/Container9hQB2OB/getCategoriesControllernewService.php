<?php

namespace Container9hQB2OB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoriesControllernewService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Kq27LHM.App\Controller\CategoriesController::new()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.Kq27LHM'] ?? $container->load('get_ServiceLocator_Kq27LHMService'));

        if (isset($container->privates['.service_locator.Kq27LHM.App\\Controller\\CategoriesController::new()'])) {
            return $container->privates['.service_locator.Kq27LHM.App\\Controller\\CategoriesController::new()'];
        }

        return $container->privates['.service_locator.Kq27LHM.App\\Controller\\CategoriesController::new()'] = $a->withContext('App\\Controller\\CategoriesController::new()', $container);
    }
}
