<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;

/**
 * This object represents a portion of the price for goods or services.
 * @see https://core.telegram.org/bots/api#labeledprice
 */
class LabeledPrice extends BaseType
{
    /**
     * Portion label
     * @var string $label
     */
    public $label;
    
    /**
     * Price of the product in the smallest units of the
     * {@see https://core.telegram.org/bots/payments#supported-currencies currency} (integer, not float/double).
     * For example, for a price of US$ 1.45 pass amount = 145.
     * See the exp parameter in {@see https://core.telegram.org/bots/payments/currencies.json currencies.json},
     * it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     * @var int $amount
     */
    public $amount;
}
