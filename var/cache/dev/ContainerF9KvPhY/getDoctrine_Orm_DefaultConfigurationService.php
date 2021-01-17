<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.orm.default_configuration' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/ContainerAwareEntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';

$this->privates['doctrine.orm.default_configuration'] = $instance = new \Doctrine\ORM\Configuration();

$a = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$a->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => ($this->targetDirs[3].'/src/Entity')]), 'App\\Entity');

$instance->setEntityNamespaces(['App' => 'App\\Entity']);
$instance->setMetadataCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php')));
$instance->setQueryCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php')));
$instance->setResultCacheImpl(($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] ?? $this->load('getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php')));
$instance->setMetadataDriverImpl($a);
$instance->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$instance->setProxyNamespace('Proxies');
$instance->setAutoGenerateProxyClasses(true);
$instance->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$instance->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$instance->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
$instance->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$instance->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this));
$instance->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(['App\\Repository\\ArticleRepository' => function () {
    return ($this->privates['App\Repository\ArticleRepository'] ?? $this->load('getArticleRepositoryService.php'));
}, 'App\\Repository\\CommentRepository' => function () {
    return ($this->privates['App\Repository\CommentRepository'] ?? $this->load('getCommentRepositoryService.php'));
}, 'App\\Repository\\TagRepository' => function () {
    return ($this->privates['App\Repository\TagRepository'] ?? $this->load('getTagRepositoryService.php'));
}])));

return $instance;
