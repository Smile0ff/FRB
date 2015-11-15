"use strict";

import $ from "jquery";
import mask from "jquery-mask-plugin";
import validate from "jquery-validation";
import ContactsMap from "../components/contactsMap";

$(function(){
	new ContactsMap();
	$("form").validate();
});
