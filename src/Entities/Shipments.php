<?php

namespace DenizTezcan\LaravelPostNLAPI\Entities;

class Shipments extends AbstractEntity
{
    protected $Addresses;
    protected $Barcode;
    protected $Contacts;
    protected $DeliveryAddress;
    protected $ProductCodeDelivery;
    protected $Reference;
    protected $Remark;
    protected $Groups;
    protected $ProductOptions;
    protected $Dimension;
    protected $Customs;

    public function __construct(
        Address $addresses,
        $barcode,
        Contact $contacts,
        $deliveryAddress = 1,
        $productCodeDelivery = 1,
        $reference = '',
        $remark = '',
        $groups = null,
        $productOptions = null,
        $dimension = null,
        $customs = null
    ) {
        parent::__construct();
        $this->setAddresses([$addresses]);
        $this->setBarcode($barcode);
        $this->setContacts([$contacts]);
        $this->setDeliveryAddress($deliveryAddress);
        $this->setProductCodeDelivery($productCodeDelivery);
        $this->setReference($reference);
        $this->setRemark($remark);
        $this->setGroups($groups);
        $this->setProductOptions($productOptions);
        $this->setDimension($dimension);
        $this->setCustoms($customs);
    }
}
