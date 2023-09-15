ALTER TABLE `my_gloryofancient`.`personaggio` 
ADD COLUMN `favore_divino` MEDIUMTEXT NULL AFTER `prestavolto`,
ADD COLUMN `fama` MEDIUMTEXT NULL AFTER `favore_divino`,
ADD COLUMN `armatura_naturale` MEDIUMTEXT NULL AFTER `fama`;