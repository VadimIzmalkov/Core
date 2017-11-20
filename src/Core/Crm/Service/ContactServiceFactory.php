<?php
namespace Core\Crm\Service;

class UserServiceFactory implements \Zend\ServiceManager\FactoryInterface
{
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        $entityManager = $serviceLocator->get('Doctrine\ORM\EntityManager');
        $moduleOptions = $serviceLocator->get('VisoftMailerModule\Options\ModuleOptions');
        $authenticationService = $serviceLocator->get('Zend\Authentication\AuthenticationService');
        $userService = $serviceLocator->get('VisoftBaseModule\Service\UserService');
        $service = new ContactService($entityManager, $moduleOptions, $authenticationService, $userService);
        return $service;
        // return new MailerService\ContactService($entityManager, $moduleOptions, $authenticationService, $userService);
    }
}