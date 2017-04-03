<?php

namespace Okaufmann\ReceiptInterpreter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the Dummy facade class.
 *
 * @author Oliver Kaufmann
 */
class Receipt extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'receiptinterpreter.receipt';
    }
}
