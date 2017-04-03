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

use Okaufmann\ReceiptInterpreter\ReceiptInterpreterServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class AbstractTestCase extends OrchestraTestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            ReceiptInterpreterServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Receipt' => 'Okaufmann\ReceiptInterpreter\Facades\Receipt',
        ];
    }
}
