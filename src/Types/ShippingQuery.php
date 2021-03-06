<?php

namespace TelegramBot\Types;

use TelegramBot\Abstracts\BaseType;

/**
 * This object contains information about an incoming shipping query.
 * @see https://core.telegram.org/bots/api#shippingquery
 */
class ShippingQuery extends BaseType
{
    /**
     * Unique query identifier
     * @var string $id
     */
    public $id;
    
    /**
     * User who sent the query
     * @var User $from
     */
    public $from;
    
    /**
     * Bot specified invoice payload
     * @var string $invoice_payload
     */
    public $invoice_payload;
    
    /**
     * User specified shipping address
     * @var ShippingAddress $shipping_address
     */
    public $shipping_address;
}
