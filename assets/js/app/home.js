"use strict";

import Preloader from "../components/preloader";
import $ from "jquery";
import Menu from "../components/menu";
import Prism from "../components/prism";

new Preloader();

$(function(){

	new Menu();
	new Prism();
});