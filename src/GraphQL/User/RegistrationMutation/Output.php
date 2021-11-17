<?php
declare(strict_types=1);

namespace App\GraphQL\User\RegistrationMutation;

use App\Entity\User;
use TheCodingMachine\GraphQLite\Annotations as GQL;

#[GQL\Type(class: User::class, name: 'user_registration_mutation_output', default: false)]
#[GQL\SourceField(name: 'id', outputType: 'ID!')]
final class Output
{
}