"use strict";

import gmapis from "google-maps-api";

const apiKey = "AIzaSyAAMgHdIpoW2059iMpwFk_GJ6lL2ZkMREg";
const google = {};
const frb = {
	lat: 50.4310347,
	lng: 30.5415553
}

let gm = gmapis(apiKey);

export default class ContactsMap{
	constructor(){
		this.el = $("#map");
		this.map = {};

		gm().then((maps) => {
			google["maps"] = maps;
			this._activateMap();
			this.setMarker();
		});
	}
	_activateMap(){
		let mapOptions = {
			center: frb,
			zoom: 14,
			minZoom: 6,
			maxZoom: 18,
			mapTypeControl: false,
			streetViewControl: false
		}
		this.map = new google.maps.Map(this.el[0], mapOptions);
	}
	setMarker(){
		let marker = new google.maps.Marker({
			position: frb,
			map: this.map,
			title: "First Realty Brokerage",
			icon: {
				url: "build/images/location-icons/location.png",
				scaledSize: new google.maps.Size(32, 32),
				anchor: new google.maps.Point(0, 32)
			}
		});
	}
}