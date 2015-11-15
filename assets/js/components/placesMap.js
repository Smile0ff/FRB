"use strict";

import gmapis from "google-maps-api";

const apiKey = "AIzaSyAAMgHdIpoW2059iMpwFk_GJ6lL2ZkMREg";
const google = {};
const kiev = {
	lat: 50.449897,
	lng: 30.523610
}
let gm = gmapis(apiKey);

export default class PlacesMap{
	constructor(){
		this.el = $("#map");
		this.locations = [];
		this.map = {};
		this.markers = [];
		
		gm().then((maps) => {
			google["maps"] = maps;
			this._activateMap();
		});
	}
	_activateMap(){
		let mapOptions = {
			center: kiev,
			zoom: 11,
			minZoom: 6,
			maxZoom: 16,
			mapTypeControl: false,
			streetViewControl: false
		}
		this.map = new google.maps.Map(this.el[0], mapOptions);
	}
	setLocations(locations = {}){
		this.locations = locations;
		this.setMarkers();
		return this;
	}
	setMarkers(){
		this.markers = [];

		for(let key in this.locations){
			let location = this.locations[key];
			let icon = this._getIcon(location.icon);
			let marker = new google.maps.Marker({
				position: new google.maps.LatLng(location.lat, location.lng),
				map: this.map,
				title: location.title,
				icon: icon
			});
			this.markers.push(marker);
		}
	}
	_getIcon(iconName){
		return {
			url: "build/images/location-icons/location-"+ iconName +".png",
			scaledSize: new google.maps.Size(32, 32),
			anchor: new google.maps.Point(0, 32)
		}
	}
}