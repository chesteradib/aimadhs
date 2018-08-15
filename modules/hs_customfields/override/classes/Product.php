<?php

/**
 * Override Class ProductCore
 */

class Product extends ProductCore
{

    public $yearOfConstruction;

    public function __construct($id_product = null, $full = false, $id_lang = null, $id_shop = null, Context $context = null)
    {
        self::$definition['fields'][ 'year_of_construction'] = array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId');

        parent::__construct($id_product, $full, $id_lang, $id_shop, $context);

    }
}