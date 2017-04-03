<?php
/*
 * This file is part of ReceiptInterpreter.
 *
 * (c) Oliver Kaufmann
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Okaufmann\Tests\ReceiptInterpreter\Facades;

use Okaufmann\ReceiptInterpreter\Facades\Receipt as ReceiptFacade;
use Okaufmann\ReceiptInterpreter\ReceiptInterpreter;
use Okaufmann\Tests\ReceiptInterpreter\AbstractTestCase;

/**
 * This is the dummy test class.
 *
 * @author Oliver Kaufmann
 */
class ReceiptTest extends AbstractTestCase
{
    /** @test */
    public function it_can_be_resolved()
    {
        $receipt = resolve("receiptinterpreter.receipt");
        $this->assertInstanceOf(ReceiptInterpreter::class, $receipt);
    }

    /** @test */
    public function it_configures_facade_instance()
    {
        $receipt = resolve("receiptinterpreter.receipt");
        $this->assertSame('bar', $receipt->getFoo());
    }

}
