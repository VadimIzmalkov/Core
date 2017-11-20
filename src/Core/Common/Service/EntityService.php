<?php 
namespace Core\Common\Service;

abstract class EntityService
{
	private $repository;
	
	protected $entityManager;

	public function __construct($entityManager)
	{
		$this->entityManager = $entityManager;
		$this->repository = $this->entityManager->getRepository(static::ENTITY);
	}

	// abstract function create(array $entityData, $flush);

	public function setRepository($repository)
	{
		$this->repository = $repository;
	}

	public function getRepository()
	{
		return $this->repository;
	}
}