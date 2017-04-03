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

use Okaufmann\ReceiptInterpreter\Receipt;

/**
 * This is the dummy test class.
 *
 * @author Oliver Kaufmann
 */
class ReceiptTest extends AbstractTestCase
{
    public function testConstruct()
    {
        $receipt = new Receipt($this->app['config']);
        $this->assertInstanceOf(Receipt::class, $receipt);
    }

    public function testGetFoo()
    {
        $dummy = new Receipt($this->app['config']);
        $this->assertSame('bar', $dummy->getFoo());
    }
}
