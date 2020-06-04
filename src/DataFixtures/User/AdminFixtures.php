<?php

namespace App\DataFixtures\User;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Class AdminFixtures
 *
 * @package App\DataFixtures\User
 */
class AdminFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    /**
     * AdminFixtures constructor.
     *
     * @param UserPasswordEncoderInterface $passwordEncoder
     */
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager): void
    {
        $user = new User();

        $user->setEmail('hello@brandiel.com');
        $user->setRoles([User::ROLE_ADMIN]);
        $user->setPassword(
            $this->passwordEncoder->encodePassword(
                $user,
                'your_secure_password'
            )
        );
        $user->setFirstName('Brandiel');
        $user->setLastName('Community');

        $manager->persist($user);
        $manager->flush();
    }
}
