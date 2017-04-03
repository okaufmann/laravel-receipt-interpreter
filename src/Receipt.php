<?php
/*
 * This file is part of YourPackage.
 *
 * (c) {{ author }}
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Okaufmann\ReceiptInterpreter;

use Illuminate\Contracts\Config\Repository;

/**
 * This is the Dummy class.
 *
 * @author {{ author }}
 */
class Receipt
{
    /**
     * Foo.
     *
     * @var string
     */
    protected $foo;

    /**
     * Config repository.
     *
     * @var Repository
     */
    protected $config;

    /**
     * Create a new dummy instance.
     *
     * @param Repository $config
     *
     * @return void
     */
    public function __construct(Repository $config)
    {
        $this->foo = array_get($config, 'foo', 'bar');
    }

    /**
     * Return foo.
     *
     * @return string
     */
    public function getFoo()
    {
        return $this->foo;
    }
}
