<?php


namespace Imper86\ImmiApi\Resource;


use Imper86\ImmiApi\Resource\User\InvoiceAddresses;
use Imper86\ImmiApi\Resource\User\PriceRules;
use Imper86\ImmiApi\Resource\User\ShippingAddresses;

class Users extends AbstractResource
{
    use GetTrait, PostTrait, PutTrait;

    protected function getBaseUri(): string
    {
        return '/users';
    }

    public function invoiceAddresses(): InvoiceAddresses
    {
        return new InvoiceAddresses($this->immi);
    }

    public function priceRules(): PriceRules
    {
        return new PriceRules($this->immi);
    }

    public function shippingAddresses(): ShippingAddresses
    {
        return new ShippingAddresses($this->immi);
    }
}