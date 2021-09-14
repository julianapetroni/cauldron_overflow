<?php

namespace ContainerWyDwHEt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GGnHnGsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GGnHnGs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GGnHnGs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CommentController::commentVote' => ['privates', '.service_locator.OC2AG.K', 'get_ServiceLocator_OC2AG_KService', true],
            'App\\Controller\\QuestionController::homepage' => ['privates', '.service_locator.Fw7oUNq', 'get_ServiceLocator_Fw7oUNqService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\CommentController:commentVote' => ['privates', '.service_locator.OC2AG.K', 'get_ServiceLocator_OC2AG_KService', true],
            'App\\Controller\\QuestionController:homepage' => ['privates', '.service_locator.Fw7oUNq', 'get_ServiceLocator_Fw7oUNqService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\CommentController::commentVote' => '?',
            'App\\Controller\\QuestionController::homepage' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CommentController:commentVote' => '?',
            'App\\Controller\\QuestionController:homepage' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}