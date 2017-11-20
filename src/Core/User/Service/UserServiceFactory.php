<?php
namespace Core\User\Service;

class UserServiceFactory implements \Zend\ServiceManager\FactoryInterface
{
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        $entityManager = $serviceLocator->get('Doctrine\ORM\EntityManager');
        $authenticationService = $serviceLocator->get('Zend\Authentication\AuthenticationService');
        $service = new UserService($entityManager, $authenticationService);
        return $service;
    }
}