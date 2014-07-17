<?php
require __DIR__.'/ManufacturerDetect.php';

echo ManufacturerDetect::getInstance()->getManufacturer();
echo ManufacturerDetect::getInstance()->getConnection();
