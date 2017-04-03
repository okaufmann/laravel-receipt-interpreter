<?php

namespace Okaufmann\Tests\ReceiptInterpreter\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Okaufmann\Tests\ReceiptInterpreter\AbstractTestCase;

/**
 * This is the UpsLocatorTest facade test class.
 *
 * @author Oliver Kaufmann
 */
class ReceiptTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'receiptinterpreter.receipt';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return \Okaufmann\ReceiptInterpreter\Facades\Receipt::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return \Okaufmann\ReceiptInterpreter\Receipt::class;
    }
}
