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

use Okaufmann\ReceiptInterpreter\ReceiptInterpreter;
use Spatie\Image\Image;
use Textcleaner\Textcleaner;

/**
 * This is the dummy test class.
 *
 * @author Oliver Kaufmann
 */
class ReceiptInterpreterTest extends AbstractTestCase
{
    /**
     * @return ReceiptInterpreter
     */
    private function getInstance()
    {
        $receipt = resolve('receiptinterpreter.receipt');

        return $receipt;
    }

    /** @test */
    public function it_can_be_constructed()
    {
        $receipt = new ReceiptInterpreter($this->app['config']);
        $this->assertInstanceOf(ReceiptInterpreter::class, $receipt);
    }

    /** @test */
    public function config_values_set_correct()
    {
        $receipt = new ReceiptInterpreter($this->app['config']);
        $this->assertSame('bar', $receipt->getFoo());
    }

    /** @test */
    public function price_can_be_parsed_out_of_a_migros_receipt()
    {
        $path = __DIR__.'/data/receipt-2.png';
        $dest = __DIR__.'/data/receipt-2-deskew.png';
        $dest2 = __DIR__.'/data/receipt-2-deskew-contrast.png';
        $dest3 = __DIR__.'/data/receipt-2-deskew-contrast-clean.png';
        $imagick = new \Imagick($path);
        $imagick->deskewImage(1);
        $imagick->writeImage($dest);
        $imagick->clear();

        Image::load($dest)->contrast(50)->save($dest2);

        $textclean = new Textcleaner($path);
        $textclean->setFiltersize(25);
        $textclean->setOffset(10);
        $textclean->setUnrotate(true);
        $textclean->setSharpamt(1);
        $textclean->setPadamt(10);
        $textclean->setOutputImage($dest3);
        echo $textclean->buildCommand();

//      -g -e stretch -f 25 -o 10 -u -s 1 -T -p 10
        $textclean->execute();

//        $receiptPrice = $this->getInstance()
//            ->fromImage(__DIR__.'/data/receipt-2-deskew.png')
//            ->getPrice();
//
//        $this->assertEquals(1.8, $receiptPrice);
    }
}
