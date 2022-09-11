<?php
 
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

$installer->run("
CREATE TABLE `fballiano_omnibus_price` (
  `entity_id` int unsigned NOT NULL,
  `customer_group_id` smallint unsigned NOT NULL,
  `website_id` smallint unsigned NOT NULL,
  `datetime` datetime NOT NULL,
  `tax_class_id` smallint unsigned DEFAULT '0',
  `final_price` decimal(12,4) DEFAULT NULL,
  `group_price` decimal(12,4) DEFAULT NULL,
  PRIMARY KEY (`entity_id`,`customer_group_id`,`website_id`),
  KEY `IDX_FBALLIANO_OMNIBUS_PRICE_CUSTOMER_GROUP_ID` (`customer_group_id`),
  KEY `IDX_FBALLIANO_OMNIBUS_PRICE_WEBSITE_ID` (`website_id`),
  KEY `IDX_FBALLIANO_OMNIBUS_PRICE_DATETIME` (`datetime`),
  CONSTRAINT `FK_FB_OB_PRICE_CSTR_GROUP_ID_CSTR_GROUP_CSTR_GROUP_ID` FOREIGN KEY (`customer_group_id`) REFERENCES `customer_group` (`customer_group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_FB_OB_PRICE_ENTT_ID_CAT_PRD_ENTT_ENTT_ID` FOREIGN KEY (`entity_id`) REFERENCES `catalog_product_entity` (`entity_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_FB_OB_PRICE_WS_ID_CORE_WS_WS_ID` FOREIGN KEY (`website_id`) REFERENCES `core_website` (`website_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
");

$installer->endSetup();