<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Inventories_PackItemModel(RetailCrm\Api\Model\Callback\Entity\Inventories\PackItemModel $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->externalIds) {
    $jsonData["externalIds"] = [];
foreach (array_keys($model->externalIds) as $index15) {
    $jsonData["externalIds"][$index15] = [];
if (null !== $model->externalIds[$index15]->code) {
    $jsonData["externalIds"][$index15]["code"] = $model->externalIds[$index15]->code;
}
if (null !== $model->externalIds[$index15]->value) {
    $jsonData["externalIds"][$index15]["value"] = $model->externalIds[$index15]->value;
}

if (0 === \count($jsonData["externalIds"][$index15])) {
    $jsonData["externalIds"][$index15] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
