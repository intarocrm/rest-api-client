<?php

function deserialize_RetailCrm_Api_Model_Callback_Response_Inventories_ReserveResponse(array $jsonData): RetailCrm\Api\Model\Callback\Response\Inventories\ReserveResponse
{
    
$model = new RetailCrm\Api\Model\Callback\Response\Inventories\ReserveResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['errorMsg'])) {
    $model->errorMsg = $jsonData['errorMsg'];

}
if (isset($jsonData['inventories'])) {
    $model->inventories = [];
foreach (array_keys($jsonData['inventories']) as $index24) {
    
$model->inventories[$index24] = new RetailCrm\Api\Model\Callback\Entity\Inventories\InventoriesDataModel();
if (isset($jsonData['inventories'][$index24]['offers'])) {
    $model->inventories[$index24]->offers = [];
foreach (array_keys($jsonData['inventories'][$index24]['offers']) as $index44) {
    
$model->inventories[$index24]->offers[$index44] = new RetailCrm\Api\Model\Entity\Inventories\Offer();
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['displayName'])) {
    $model->inventories[$index24]->offers[$index44]->displayName = $jsonData['inventories'][$index24]['offers'][$index44]['displayName'];

}
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['id'])) {
    $model->inventories[$index24]->offers[$index44]->id = $jsonData['inventories'][$index24]['offers'][$index44]['id'];

}
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['externalId'])) {
    $model->inventories[$index24]->offers[$index44]->externalId = $jsonData['inventories'][$index24]['offers'][$index44]['externalId'];

}
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['xmlId'])) {
    $model->inventories[$index24]->offers[$index44]->xmlId = $jsonData['inventories'][$index24]['offers'][$index44]['xmlId'];

}
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['name'])) {
    $model->inventories[$index24]->offers[$index44]->name = $jsonData['inventories'][$index24]['offers'][$index44]['name'];

}
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['article'])) {
    $model->inventories[$index24]->offers[$index44]->article = $jsonData['inventories'][$index24]['offers'][$index44]['article'];

}
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['vatRate'])) {
    $model->inventories[$index24]->offers[$index44]->vatRate = $jsonData['inventories'][$index24]['offers'][$index44]['vatRate'];

}
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['unit'])) {
    
$model->inventories[$index24]->offers[$index44]->unit = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['unit']['code'])) {
    $model->inventories[$index24]->offers[$index44]->unit->code = $jsonData['inventories'][$index24]['offers'][$index44]['unit']['code'];

}
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['unit']['name'])) {
    $model->inventories[$index24]->offers[$index44]->unit->name = $jsonData['inventories'][$index24]['offers'][$index44]['unit']['name'];

}
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['unit']['sym'])) {
    $model->inventories[$index24]->offers[$index44]->unit->sym = $jsonData['inventories'][$index24]['offers'][$index44]['unit']['sym'];

}


}
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['barcode'])) {
    $model->inventories[$index24]->offers[$index44]->barcode = $jsonData['inventories'][$index24]['offers'][$index44]['barcode'];

}
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['properties'])) {
    $model->inventories[$index24]->offers[$index44]->properties = [];
foreach (array_keys($jsonData['inventories'][$index24]['offers'][$index44]['properties']) as $index68) {
    $model->inventories[$index24]->offers[$index44]->properties[$index68] = $jsonData['inventories'][$index24]['offers'][$index44]['properties'][$index68];

}

}
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['site'])) {
    $model->inventories[$index24]->offers[$index44]->site = $jsonData['inventories'][$index24]['offers'][$index44]['site'];

}
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['purchasePrice'])) {
    $model->inventories[$index24]->offers[$index44]->purchasePrice = (float) $jsonData['inventories'][$index24]['offers'][$index44]['purchasePrice'];

}
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['quantity'])) {
    $model->inventories[$index24]->offers[$index44]->quantity = (float) $jsonData['inventories'][$index24]['offers'][$index44]['quantity'];

}
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['stores'])) {
    
$model->inventories[$index24]->offers[$index44]->stores = new RetailCrm\Api\Model\Entity\Inventories\Inventory();
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['stores']['quantity'])) {
    $model->inventories[$index24]->offers[$index44]->stores->quantity = (float) $jsonData['inventories'][$index24]['offers'][$index44]['stores']['quantity'];

}
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['stores']['purchasePrice'])) {
    $model->inventories[$index24]->offers[$index44]->stores->purchasePrice = (float) $jsonData['inventories'][$index24]['offers'][$index44]['stores']['purchasePrice'];

}
if (isset($jsonData['inventories'][$index24]['offers'][$index44]['stores']['store'])) {
    $model->inventories[$index24]->offers[$index44]->stores->store = $jsonData['inventories'][$index24]['offers'][$index44]['stores']['store'];

}


}


}

}


}

}



    return $model;
}
