<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_ResponseProperty_ResponseLoadDeliveryData(RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseLoadDeliveryData $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->trackNumber) {
    $jsonData["trackNumber"] = $model->trackNumber;
}
if (null !== $model->cost) {
    $jsonData["cost"] = $model->cost;
}
if (null !== $model->shipmentDate) {
    $jsonData["shipmentDate"] = $model->shipmentDate->format('Y-m-d H:i:s');;
}
if (null !== $model->deliveryDate) {
    $jsonData["deliveryDate"] = $model->deliveryDate->format('Y-m-d H:i:s');;
}
if (null !== $model->deliveryTime) {
    $jsonData["deliveryTime"] = [];
if (null !== $model->deliveryTime->from) {
    $jsonData["deliveryTime"]["from"] = $model->deliveryTime->from->format('H:i');;
}
if (null !== $model->deliveryTime->to) {
    $jsonData["deliveryTime"]["to"] = $model->deliveryTime->to->format('H:i');;
}
if (null !== $model->deliveryTime->custom) {
    $jsonData["deliveryTime"]["custom"] = $model->deliveryTime->custom;
}

if (0 === \count($jsonData["deliveryTime"])) {
    $jsonData["deliveryTime"] = $emptyObject;
}

}
if (null !== $model->tariff) {
    $jsonData["tariff"] = $model->tariff;
}
if (null !== $model->tariffName) {
    $jsonData["tariffName"] = $model->tariffName;
}
if (null !== $model->payerType) {
    $jsonData["payerType"] = $model->payerType;
}
if (null !== $model->status) {
    $jsonData["status"] = [];
if (null !== $model->status->code) {
    $jsonData["status"]["code"] = $model->status->code;
}
if (null !== $model->status->updatedAt) {
    $jsonData["status"]["updatedAt"] = $model->status->updatedAt->format('Y-m-d\TH:i:sP');;
}
if (null !== $model->status->comment) {
    $jsonData["status"]["comment"] = $model->status->comment;
}

if (0 === \count($jsonData["status"])) {
    $jsonData["status"] = $emptyObject;
}

}
if (null !== $model->extraData) {
    $jsonData["extraData"] = [];
foreach (array_keys($model->extraData) as $index13) {
    $jsonData["extraData"] = $model->extraData;
}

}
if (null !== $model->shipmentAddress) {
    $jsonData["shipmentAddress"] = [];
if (null !== $model->shipmentAddress->index) {
    $jsonData["shipmentAddress"]["index"] = $model->shipmentAddress->index;
}
if (null !== $model->shipmentAddress->countryIso) {
    $jsonData["shipmentAddress"]["countryIso"] = $model->shipmentAddress->countryIso;
}
if (null !== $model->shipmentAddress->region) {
    $jsonData["shipmentAddress"]["region"] = $model->shipmentAddress->region;
}
if (null !== $model->shipmentAddress->regionId) {
    $jsonData["shipmentAddress"]["regionId"] = $model->shipmentAddress->regionId;
}
if (null !== $model->shipmentAddress->city) {
    $jsonData["shipmentAddress"]["city"] = $model->shipmentAddress->city;
}
if (null !== $model->shipmentAddress->cityId) {
    $jsonData["shipmentAddress"]["cityId"] = $model->shipmentAddress->cityId;
}
if (null !== $model->shipmentAddress->cityType) {
    $jsonData["shipmentAddress"]["cityType"] = $model->shipmentAddress->cityType;
}
if (null !== $model->shipmentAddress->street) {
    $jsonData["shipmentAddress"]["street"] = $model->shipmentAddress->street;
}
if (null !== $model->shipmentAddress->streetId) {
    $jsonData["shipmentAddress"]["streetId"] = $model->shipmentAddress->streetId;
}
if (null !== $model->shipmentAddress->streetType) {
    $jsonData["shipmentAddress"]["streetType"] = $model->shipmentAddress->streetType;
}
if (null !== $model->shipmentAddress->building) {
    $jsonData["shipmentAddress"]["building"] = $model->shipmentAddress->building;
}
if (null !== $model->shipmentAddress->flat) {
    $jsonData["shipmentAddress"]["flat"] = $model->shipmentAddress->flat;
}
if (null !== $model->shipmentAddress->floor) {
    $jsonData["shipmentAddress"]["floor"] = $model->shipmentAddress->floor;
}
if (null !== $model->shipmentAddress->block) {
    $jsonData["shipmentAddress"]["block"] = $model->shipmentAddress->block;
}
if (null !== $model->shipmentAddress->house) {
    $jsonData["shipmentAddress"]["house"] = $model->shipmentAddress->house;
}
if (null !== $model->shipmentAddress->housing) {
    $jsonData["shipmentAddress"]["housing"] = $model->shipmentAddress->housing;
}
if (null !== $model->shipmentAddress->metro) {
    $jsonData["shipmentAddress"]["metro"] = $model->shipmentAddress->metro;
}
if (null !== $model->shipmentAddress->notes) {
    $jsonData["shipmentAddress"]["notes"] = $model->shipmentAddress->notes;
}
if (null !== $model->shipmentAddress->text) {
    $jsonData["shipmentAddress"]["text"] = $model->shipmentAddress->text;
}
if (null !== $model->shipmentAddress->terminal) {
    $jsonData["shipmentAddress"]["terminal"] = $model->shipmentAddress->terminal;
}
if (null !== $model->shipmentAddress->terminalData) {
    $jsonData["shipmentAddress"]["terminalData"] = [];
if (null !== $model->shipmentAddress->terminalData->code) {
    $jsonData["shipmentAddress"]["terminalData"]["code"] = $model->shipmentAddress->terminalData->code;
}
if (null !== $model->shipmentAddress->terminalData->cost) {
    $jsonData["shipmentAddress"]["terminalData"]["cost"] = $model->shipmentAddress->terminalData->cost;
}
if (null !== $model->shipmentAddress->terminalData->name) {
    $jsonData["shipmentAddress"]["terminalData"]["name"] = $model->shipmentAddress->terminalData->name;
}
if (null !== $model->shipmentAddress->terminalData->description) {
    $jsonData["shipmentAddress"]["terminalData"]["description"] = $model->shipmentAddress->terminalData->description;
}
if (null !== $model->shipmentAddress->terminalData->address) {
    $jsonData["shipmentAddress"]["terminalData"]["address"] = $model->shipmentAddress->terminalData->address;
}
if (null !== $model->shipmentAddress->terminalData->schedule) {
    $jsonData["shipmentAddress"]["terminalData"]["schedule"] = $model->shipmentAddress->terminalData->schedule;
}
if (null !== $model->shipmentAddress->terminalData->phone) {
    $jsonData["shipmentAddress"]["terminalData"]["phone"] = $model->shipmentAddress->terminalData->phone;
}
if (null !== $model->shipmentAddress->terminalData->extraData) {
    $jsonData["shipmentAddress"]["terminalData"]["extraData"] = [];
foreach (array_keys($model->shipmentAddress->terminalData->extraData) as $index48) {
    $jsonData["shipmentAddress"]["terminalData"]["extraData"] = $model->shipmentAddress->terminalData->extraData;
}

}
if (null !== $model->shipmentAddress->terminalData->coordinates) {
    $jsonData["shipmentAddress"]["terminalData"]["coordinates"] = [];
if (null !== $model->shipmentAddress->terminalData->coordinates->latitude) {
    $jsonData["shipmentAddress"]["terminalData"]["coordinates"]["latitude"] = $model->shipmentAddress->terminalData->coordinates->latitude;
}
if (null !== $model->shipmentAddress->terminalData->coordinates->longitude) {
    $jsonData["shipmentAddress"]["terminalData"]["coordinates"]["longitude"] = $model->shipmentAddress->terminalData->coordinates->longitude;
}

if (0 === \count($jsonData["shipmentAddress"]["terminalData"]["coordinates"])) {
    $jsonData["shipmentAddress"]["terminalData"]["coordinates"] = $emptyObject;
}

}

if (0 === \count($jsonData["shipmentAddress"]["terminalData"])) {
    $jsonData["shipmentAddress"]["terminalData"] = $emptyObject;
}

}

if (0 === \count($jsonData["shipmentAddress"])) {
    $jsonData["shipmentAddress"] = $emptyObject;
}

}
if (null !== $model->deliveryAddress) {
    $jsonData["deliveryAddress"] = [];
if (null !== $model->deliveryAddress->index) {
    $jsonData["deliveryAddress"]["index"] = $model->deliveryAddress->index;
}
if (null !== $model->deliveryAddress->countryIso) {
    $jsonData["deliveryAddress"]["countryIso"] = $model->deliveryAddress->countryIso;
}
if (null !== $model->deliveryAddress->region) {
    $jsonData["deliveryAddress"]["region"] = $model->deliveryAddress->region;
}
if (null !== $model->deliveryAddress->regionId) {
    $jsonData["deliveryAddress"]["regionId"] = $model->deliveryAddress->regionId;
}
if (null !== $model->deliveryAddress->city) {
    $jsonData["deliveryAddress"]["city"] = $model->deliveryAddress->city;
}
if (null !== $model->deliveryAddress->cityId) {
    $jsonData["deliveryAddress"]["cityId"] = $model->deliveryAddress->cityId;
}
if (null !== $model->deliveryAddress->cityType) {
    $jsonData["deliveryAddress"]["cityType"] = $model->deliveryAddress->cityType;
}
if (null !== $model->deliveryAddress->street) {
    $jsonData["deliveryAddress"]["street"] = $model->deliveryAddress->street;
}
if (null !== $model->deliveryAddress->streetId) {
    $jsonData["deliveryAddress"]["streetId"] = $model->deliveryAddress->streetId;
}
if (null !== $model->deliveryAddress->streetType) {
    $jsonData["deliveryAddress"]["streetType"] = $model->deliveryAddress->streetType;
}
if (null !== $model->deliveryAddress->building) {
    $jsonData["deliveryAddress"]["building"] = $model->deliveryAddress->building;
}
if (null !== $model->deliveryAddress->flat) {
    $jsonData["deliveryAddress"]["flat"] = $model->deliveryAddress->flat;
}
if (null !== $model->deliveryAddress->floor) {
    $jsonData["deliveryAddress"]["floor"] = $model->deliveryAddress->floor;
}
if (null !== $model->deliveryAddress->block) {
    $jsonData["deliveryAddress"]["block"] = $model->deliveryAddress->block;
}
if (null !== $model->deliveryAddress->house) {
    $jsonData["deliveryAddress"]["house"] = $model->deliveryAddress->house;
}
if (null !== $model->deliveryAddress->housing) {
    $jsonData["deliveryAddress"]["housing"] = $model->deliveryAddress->housing;
}
if (null !== $model->deliveryAddress->metro) {
    $jsonData["deliveryAddress"]["metro"] = $model->deliveryAddress->metro;
}
if (null !== $model->deliveryAddress->notes) {
    $jsonData["deliveryAddress"]["notes"] = $model->deliveryAddress->notes;
}
if (null !== $model->deliveryAddress->text) {
    $jsonData["deliveryAddress"]["text"] = $model->deliveryAddress->text;
}
if (null !== $model->deliveryAddress->terminal) {
    $jsonData["deliveryAddress"]["terminal"] = $model->deliveryAddress->terminal;
}
if (null !== $model->deliveryAddress->terminalData) {
    $jsonData["deliveryAddress"]["terminalData"] = [];
if (null !== $model->deliveryAddress->terminalData->code) {
    $jsonData["deliveryAddress"]["terminalData"]["code"] = $model->deliveryAddress->terminalData->code;
}
if (null !== $model->deliveryAddress->terminalData->cost) {
    $jsonData["deliveryAddress"]["terminalData"]["cost"] = $model->deliveryAddress->terminalData->cost;
}
if (null !== $model->deliveryAddress->terminalData->name) {
    $jsonData["deliveryAddress"]["terminalData"]["name"] = $model->deliveryAddress->terminalData->name;
}
if (null !== $model->deliveryAddress->terminalData->description) {
    $jsonData["deliveryAddress"]["terminalData"]["description"] = $model->deliveryAddress->terminalData->description;
}
if (null !== $model->deliveryAddress->terminalData->address) {
    $jsonData["deliveryAddress"]["terminalData"]["address"] = $model->deliveryAddress->terminalData->address;
}
if (null !== $model->deliveryAddress->terminalData->schedule) {
    $jsonData["deliveryAddress"]["terminalData"]["schedule"] = $model->deliveryAddress->terminalData->schedule;
}
if (null !== $model->deliveryAddress->terminalData->phone) {
    $jsonData["deliveryAddress"]["terminalData"]["phone"] = $model->deliveryAddress->terminalData->phone;
}
if (null !== $model->deliveryAddress->terminalData->extraData) {
    $jsonData["deliveryAddress"]["terminalData"]["extraData"] = [];
foreach (array_keys($model->deliveryAddress->terminalData->extraData) as $index48) {
    $jsonData["deliveryAddress"]["terminalData"]["extraData"] = $model->deliveryAddress->terminalData->extraData;
}

}
if (null !== $model->deliveryAddress->terminalData->coordinates) {
    $jsonData["deliveryAddress"]["terminalData"]["coordinates"] = [];
if (null !== $model->deliveryAddress->terminalData->coordinates->latitude) {
    $jsonData["deliveryAddress"]["terminalData"]["coordinates"]["latitude"] = $model->deliveryAddress->terminalData->coordinates->latitude;
}
if (null !== $model->deliveryAddress->terminalData->coordinates->longitude) {
    $jsonData["deliveryAddress"]["terminalData"]["coordinates"]["longitude"] = $model->deliveryAddress->terminalData->coordinates->longitude;
}

if (0 === \count($jsonData["deliveryAddress"]["terminalData"]["coordinates"])) {
    $jsonData["deliveryAddress"]["terminalData"]["coordinates"] = $emptyObject;
}

}

if (0 === \count($jsonData["deliveryAddress"]["terminalData"])) {
    $jsonData["deliveryAddress"]["terminalData"] = $emptyObject;
}

}

if (0 === \count($jsonData["deliveryAddress"])) {
    $jsonData["deliveryAddress"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
