<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-19 04:29:19 --> Query error: Index for table 'shop_categories' is corrupt; try to repair it - Invalid query: SELECT `shop_categories`.`sub_for`, `shop_categories`.`id`, `shop_categories_translations`.`name`
FROM `shop_categories_translations`
INNER JOIN `shop_categories` ON `shop_categories`.`id` = `shop_categories_translations`.`for_id`
WHERE `abbr` = 'en'
ORDER BY `position` ASC
ERROR - 2019-11-19 04:31:57 --> Query error: Index for table 'shop_categories' is corrupt; try to repair it - Invalid query: SELECT `shop_categories`.`sub_for`, `shop_categories`.`id`, `shop_categories_translations`.`name`
FROM `shop_categories_translations`
INNER JOIN `shop_categories` ON `shop_categories`.`id` = `shop_categories_translations`.`for_id`
WHERE `abbr` = 'en'
ORDER BY `position` ASC
ERROR - 2019-11-19 04:32:15 --> Query error: Index for table 'shop_categories' is corrupt; try to repair it - Invalid query: SELECT `shop_categories`.`id`, `shop_categories_translations`.`name`
FROM `shop_categories_translations`
INNER JOIN `shop_categories` ON `shop_categories`.`id` = `shop_categories_translations`.`for_id`
WHERE `abbr` = 'en'
AND `shop_categories`.`sub_for` = 0
 LIMIT 10
