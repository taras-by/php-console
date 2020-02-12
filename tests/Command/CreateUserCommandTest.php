<?php

namespace Command;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class CreateUserCommandTest extends TestCase
{
    public function testExecute()
    {
        $application = new Application();
        $application->add(new CreateUserCommand());

        $command = $application->find('app:create-user');
        $commandTester = new CommandTester($command);
        $commandTester->execute([
            'username' => 'admin',
            'password' => 'secret',
        ]);

        $output = $commandTester->getDisplay();
        $this->assertStringContainsString('Username: admin', $output);
    }
}
