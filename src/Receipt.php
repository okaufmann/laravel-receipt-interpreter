<?php
/*
 * laravel-receipt-interpreter
 *
 * This File belongs to to Project laravel-receipt-interpreter
 *
 * @author Oliver Kaufmann <okaufmann91@gmail.com>
 * @version 1.0
 */

namespace Okaufmann\ReceiptInterpreter;

use Spatie\Regex\Regex;

class Receipt
{
    private $text;

    private $priceRegex = '/(Total|Summe).*([0-9]{0,4}[,\.][0-9]{0,2})/';

    private function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * Create new instance.
     *
     * @param $text
     *
     * @return Receipt
     */
    public static function create($text)
    {
        $instance = new self($text);

        return $instance;
    }

    public function getPrice()
    {
        $priceMatch = Regex::match($this->priceRegex, $this->text);
        $price = $priceMatch->hasMatch() ? $priceMatch->group(1) : null;

        return $price;
    }
}
