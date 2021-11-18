<?php

declare(strict_types=1);

namespace App\Command;

use App\GraphQLExecutor\Countries;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

final class GetCountries extends Command
{
    protected static $defaultName = 'app:get-countries';

    protected static $defaultDescription = 'Get countries from external remote schema';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Test execute countries codegen
        // Try to edit hasura/graphql/countries.graphql
        // When you want to regenerate executor from graphql query spec just run: `bin/console hasura:sailor:codegen`
        $io = new SymfonyStyle($input, $output);
        $countries = Countries::execute();

        $io->table(
            ['Name', 'Capital', 'Currency'],
            array_map(
                fn(Countries\Countries\Countries $item) => [
                    $item->name,
                    $item->capital,
                    $item->currency
                ],
                $countries->data->countries
            )
        );

        return 0;
    }
}