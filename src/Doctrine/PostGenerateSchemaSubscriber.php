<?php

namespace App\Doctrine;

use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;
use Doctrine\ORM\Tools\Event\GenerateSchemaEventArgs;
use Symfony\Component\DependencyInjection\Attribute\When;

/**
 * @todo when issue https://github.com/doctrine/dbal/issues/1110 solved, remove it.
 */
#[When(env: 'dev')]
final class PostGenerateSchemaSubscriber implements EventSubscriberInterface
{
    public function postGenerateSchema(GenerateSchemaEventArgs $args): void
    {
        $schema = $args->getSchema();
        $schema->createNamespace('public');
        $schema->createNamespace('hdb_catalog'); // Hasura schema
    }

    public function getSubscribedEvents(): array
    {
        return [
            'postGenerateSchema',
        ];
    }
}