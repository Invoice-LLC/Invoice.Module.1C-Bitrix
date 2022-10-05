<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
include(GetLangFileName(dirname(__FILE__)."/", "/payment.php"));

$psTitle = "Invoice";
$psDescription = "Платежная система Invoice";
$arPSCorrespondence = array(
    "ORDER_ID" => array(
        "NAME" => GetMessage("ORDER_ID"),
        "DESCR" => GetMessage("ORDER_ID_DESCR"),
        "VALUE" => "ID",
        "TYPE" => "ORDER"
    ),
);