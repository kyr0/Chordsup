// JavaScript Document
"use strict";

var divs = document.getElementsByClassName('newdivkey');
var divsClone = document.getElementsByClassName('newdivkeyclone');

//getters
function selectedOption(select) {
	return document.getElementById(select).value;

}

function selectedOptionIndex(select) {
	return document.getElementById(select).selectedIndex;
}

function getCheckedRadio(radioclass) {
	var radiok = document.getElementsByClassName(radioclass);

	for (var i = 0; i < radiok.length; i++) {
		if (radiok[i].checked) {
			var checkedradio = i;
			return checkedradio;
		}
	}
}

$(document).ready(function () {
var spinner = $( "#spinner" ).spinner();
	$("#spinner").on("spinstop", function () {

		for (var i = 0; i < divsClone.length; i++) {

			divsClone[i].innerHTML = (transpose(getClonedValues(divs[i].innerHTML)));
		}

	});

});

function getClonedValues(clonedkey) {
	var clonedKeyIndex;
	switch (clonedkey) {
		case 'A':
			clonedKeyIndex = 0;
			break;
		case 'C#':
			clonedKeyIndex = 1;
			break;
		case 'B':
			clonedKeyIndex = 2;
			break;
		case 'C':
			clonedKeyIndex = 3;
			break;
		case 'C#':
			clonedKeyIndex = 4;
			break;
		case 'D':
			clonedKeyIndex = 5;
			break;
		case 'D#':
			clonedKeyIndex = 6;
			break;
		case 'E':
			clonedKeyIndex = 7;
			break;
		case 'F':
			clonedKeyIndex = 8;
			break;
		case 'F#':
			clonedKeyIndex = 9;
			break;
		case 'G':
			clonedKeyIndex = 10;
			break;
		case 'G#':
			clonedKeyIndex = 11;
			break;

		default:
			clonedKeyIndex = 0;
	}

	return clonedKeyIndex;
}

function transpose(base) {
	var spinner = $("#spinner").spinner();
	var notes = ['A', 'A#', 'B', 'C', 'C#', 'D', 'D#', 'E', 'F', 'F#', 'G', 'G#', 'A', 'A#', 'B', 'C', 'C#', 'D', 'D#', 'E', 'F', 'F#', 'G', 'G#'];
	var transposedKey;



	if ((base + spinner.spinner("value")) < 0) {
		var x = base + 12;
		transposedKey = notes[x + spinner.spinner("value")];
	} else {
		transposedKey = notes[base + spinner.spinner("value")];
	}

	return transposedKey;
}

function createRadio() {

	var key = selectedOption('selTranspose');
	var i = getCheckedRadio('newradio');


	var newDiv = document.createElement("div");
	var newDivKey = document.createElement("div");
	var newRadio = document.createElement("INPUT");

	newRadio.setAttribute("type", "radio");
	newRadio.setAttribute("name", "newradio");
	newRadio.classList = "newradio";
	newDiv.classList = "radio-inline newdiv";

	newDivKey.classList = "newdivkey";

	newDiv.appendChild(newRadio);
	newDiv.appendChild(newDivKey);
	newDivKey.appendChild(document.createTextNode(key));

	var myDiv = document.getElementById("addChords");
	myDiv.insertBefore(newDiv, myDiv.childNodes[(i + 1)]);



	var newDivClone = document.createElement("div");
	var newDivKeyClone = document.createElement("div");

	/**/
	newDivClone.classList = "radio-inline newdivclone";

	newDivKeyClone.classList = "newdivkeyclone";

	newDivClone.appendChild(newDivKeyClone);
	newDivKeyClone.appendChild(document.createTextNode(transpose(selectedOptionIndex('selTranspose'))));

	var myDivClone = document.getElementById("addChordsClone");
	myDivClone.insertBefore(newDivClone, myDivClone.childNodes[(i + 1)]);

}

function changeRadio() {
	divs[getCheckedRadio('newradio')].innerHTML = selectedOption('selTranspose');
	divsClone[getCheckedRadio('newradio')].innerHTML = transpose(selectedOptionIndex('selTranspose'));
}


function removeRadio() {
	var x = getCheckedRadio('newradio');
	var divs = document.getElementsByClassName('newdiv');
	var r = divs[x];
	r.parentNode.removeChild(r);


	var divsClone = document.getElementsByClassName('newdivclone');
	var rc = divsClone[x];
	rc.parentNode.removeChild(rc);

}



//event handlers
function init() {
	document.getElementById('createRadio').addEventListener('click', createRadio, false);
	document.getElementById('removeRadio').addEventListener('click', removeRadio, false);
	document.getElementById('changeRadio').addEventListener('click', changeRadio, false);


}

//init
window.addEventListener('load', init, false);