<?php
/*
 * This file is part of YourPackage.
 *
 * (c) Oliver Kaufmann
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Okaufmann\Tests\ReceiptInterpreter;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use Okaufmann\ReceiptInterpreter\ReceiptInterpreterServiceProvider;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return ReceiptInterpreterServiceProvider::class;
    }
}
