<?php

require_once __DIR__."/../ext/wpcrud/WpCrud.php";

class ApartmentController extends WpCrud {
	function init() {
		$this->addField("title");
		$this->addField("address");
		$this->addField("rooms");
	}

    function getLiteral($literalId) {
        switch ($literalId) {
            case "typeName":
                return "Apartment";
                break;
        }
    }

	function createItem() {
		return new Apartment();
	}

	function getItem($id) {
		return Apartment::findOne($id);
	}

	function saveItem($item) {
		$item->save();
	}

	function deleteItem($item) {
		$item->delete();
	}

	function getAllItems() {
		return Apartment::findAll();
	}
}