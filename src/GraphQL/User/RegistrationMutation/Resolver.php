<?php

declare(strict_types=1);

namespace App\GraphQL\User\RegistrationMutation;

use App\Entity\User;
use Hasura\Bundle\GraphQLite\Attribute\ObjectAssertion;
use Hasura\Bundle\GraphQLite\Attribute\Transactional;
use Hasura\GraphQLiteBridge\Attribute\ArgNaming;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use TheCodingMachine\GraphQLite\Annotations as GQL;

final class Resolver
{
    public function __construct(private UserPasswordHasherInterface $hasher)
    {
    }

    #[GQL\Mutation(name: 'user_registration', outputType: 'user_registration_mutation_output!')]
    #[ArgNaming(for: 'inputObj', name: 'input_obj')]
    #[ObjectAssertion(for: 'inputObj')]
    #[Transactional]
    public function __invoke(
        Input $inputObj
    ): User {
        $user = new User();
        $user->setName($inputObj->name);
        $user->setEmail($inputObj->email);
        $user->setPassword($this->hasher->hashPassword($user, $inputObj->password));

        return $user;
    }
}