<?php

/*
 * This file is part of the Rapid Content Management Framework.
 *
 * (c) Wim Ulkeman <wim@wimulkeman.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bearwulf\RCMF\Tests;

use Bearwulf\RCMF\RCMF;
use PHPUnit\Framework\TestCase;

/**
 * Test case for the RCMF class.
 */
class RCMFTest extends TestCase
{
    /**
     * Test that the RCMF class can be instantiated.
     */
    public function testCanBeInstantiated(): void
    {
        $rcmf = new RCMF();
        
        $this->assertInstanceOf(RCMF::class, $rcmf);
    }
}
