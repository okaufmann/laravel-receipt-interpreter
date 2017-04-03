<?php
/*
 * This file is part of ReceiptInterpreter.
 *
 * (c) Oliver Kaufmann
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Okaufmann\Tests\ReceiptInterpreter;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use Okaufmann\ReceiptInterpreter\Receipt;

/**
 * This is the service provider test class.
 *
 * @author Oliver Kaufmann
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testDummyClassIsInjectable()
    {
        $this->assertIsInjectable(Receipt::class);
    }
}
