<?php
/*
 * This file is part of YourPackage.
 *
 * (c) Oliver Kaufmann
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Okaufmann\ReceiptInterpreter;

use Illuminate\Contracts\Config\Repository;

/**
 * This is the Dummy class.
 *
 * @author Oliver Kaufmann
 */
class ReceiptInterpreter
{
    /**
     * @var \TesseractOCR
     */
    private $tesseractInstance;

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
        $this->foo = array_get($config['receiptinterpreter'], 'foo');
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

    public function fromImage($path)
    {
        $this->tesseractInstance = new \TesseractOCR($path);

        return $this;
    }

    public function getReceipt()
    {
        $this->ensureTesseractInstance();

        $text = $this->tesseractInstance
            ->lang('deu')
            ->psm(6 )
            ->run();

        $receipt = Receipt::create($text);

        return $receipt;
    }

    public function getPrice()
    {
        $receipt = $this->getReceipt();

        $price = $receipt->getPrice();

        return $price;
    }

    private function ensureTesseractInstance()
    {
        if (!$this->tesseractInstance) {
            throw new \Exception('No tesseract instance set!');
        }
    }
}
