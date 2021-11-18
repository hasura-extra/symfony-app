<?php
/*
 * (c) Minh Vuong <vuongxuongminh@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

declare(strict_types=1);

namespace App\Tests\Command;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;

final class GetCountriesTest extends KernelTestCase
{
    public function testExecute(): void
    {
        $app = new Application(self::bootKernel());
        $tester = new CommandTester($app->get('app:get-countries'));
        $tester->execute([]);

        $this->assertStringContainsString('Name', $tester->getDisplay());
        $this->assertStringContainsString('Capital', $tester->getDisplay());
        $this->assertStringContainsString('Currency', $tester->getDisplay());
        $this->assertStringContainsString('Vietnam', $tester->getDisplay());
    }
}