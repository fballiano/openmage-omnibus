<?php

class Fballiano_Omnibus_Model_Observer
{
    public function prepareCatalogProductPriceIndexTable(Varien_Event_Observer $observer)
    {
        $event = $observer->getEvent();
        $table = $event->getIndexTable()["i"];
        if ($table != "catalog_product_index_price_final_idx") return;


    }
}