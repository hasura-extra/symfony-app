<?php

declare(strict_types=1);

namespace App\GraphQL\User\RegistrationMutation;

use App\Entity\User;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Validator\Constraints as Assertion;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use TheCodingMachine\GraphQLite\Annotations as GQL;

#[GQL\Input(name: 'user_registration_mutation_input', default: true)]
final class Input implements ContainerAwareInterface
{
    #[Assertion\NotBlank]
    #[GQL\Field(name: 'name')]
    public string $name;

    #[Assertion\Email]
    #[Assertion\NotBlank]
    #[GQL\Field(name: 'email')]
    public string $email;

    #[Assertion\NotBlank]
    #[GQL\Field(name: 'password')]
    public string $password;

    private ?ContainerInterface $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @todo when issue https://github.com/symfony/symfony/issues/22592 solved, use UniqueEntity constraint instead.
     */
    #[Assertion\Callback]
    public function uniqueEmailValidate(ExecutionContextInterface $context): void {
        $doctrine = $this->container->get('doctrine');
        $userRepo = $doctrine->getRepository(User::class);

        if (null !== $userRepo->findOneBy(['email' => $this->email])) {
            $context
                ->buildViolation('This email is already used.')
                ->atPath('email')
                ->addViolation();
        }
    }
}