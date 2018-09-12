<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Domain\Anuncios\UseCases\Create\CreateAnuncioHandler' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\persistence\\lib\\Doctrine\\Common\\Persistence\\ObjectManager.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityManager.php';
include_once $this->targetDirs[3].'\\src\\Domain\\Anuncios\\Domain\\AnuncioDomain\\AnuncioRepository.php';
include_once $this->targetDirs[3].'\\src\\Domain\\Anuncios\\Persistance\\AnuncioPersistance.php';
include_once $this->targetDirs[3].'\\src\\Domain\\Anuncios\\UseCases\\Create\\AnuncioCreator.php';
include_once $this->targetDirs[3].'\\src\\Domain\\Anuncios\\UseCases\\Create\\CreateAnuncioHandler.php';

return $this->privates['App\Domain\Anuncios\UseCases\Create\CreateAnuncioHandler'] = new \App\Domain\Anuncios\UseCases\Create\CreateAnuncioHandler(new \App\Domain\Anuncios\UseCases\Create\AnuncioCreator(new \App\Domain\Anuncios\Persistance\AnuncioPersistance(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')))));