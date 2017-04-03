<?php
/*
 * This file is part of ReceiptInterpreter.
 *
 * (c) {{ author }}
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Okaufmann\Tests\ReceiptInterpreter;

use Okaufmann\ReceiptInterpreter\Receipt;

/**
 * This is the dummy test class.
 *
 * @author {{ author }}
 */
class ReceiptTest extends AbstractTestCase
{
    public function testConstruct()
    {
        $dummy = new Receipt($this->app['config']);
        $this->assertInstanceOf(Receipt::class, $dummy);
    }

    public function testGetFoo()
    {
        $dummy = new Receipt($this->app['config']);
        $this->assertSame('bar', $dummy->getFoo());
    }
}
