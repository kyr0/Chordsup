// JavaScript Document

// logic
function chordProgression(){
	"use strict";
	// getting values	
	var scale = radioCheck('radio');
	var key = selectedOptionKey('select1');
	var keyValue = selectedOptionValue('select1');
	var notes=['A', 'A#', 'B', 'C', 'C#', 'D', 'D#', 'E', 'F', 'F#', 'G', 'G#', 'A', 'A#', 'B', 'C', 'C#', 'D', 'D#', 'E', 'F', 'F#', 'G', 'G#'];
	var I,II,III,IV,V,VI,VII;
	var p1,p2,p3,p4,p5,p6,p7,p8,p9;
	
	if (scale==='major'){
	 I = 	notes[key];
	 II = 	notes[key+2]+'m';
	 III = 	notes[key+4]+'m';
	 IV = 	notes[key+5];
	 V = 	notes[key+7];
	 VI = 	notes[key+9]+'m';
	 VII = 	notes[key+11];	
	}
	
	if (scale==='minor'){
	 I = 	notes[key]+'m';
	 II = 	notes[key+2];
	 III = 	notes[key+3];
	 IV = 	notes[key+5]+'m';
	 V = 	notes[key+7]+'m';
	 VI = 	notes[key+8];
	VII = 	notes[key+10];
	}
	
		
document.getElementById("info3").innerHTML=('All chords in '+keyValue+' '+scale +': '+  I+' '+II+' '+III+' '+IV+' '+V+' '+VI+' '+VII);
	
p1=I+ ' '+IV + '<br> '+
I + ' ' + V;
	
p2=I + ' ' + IV + ' ' + V + '<br> '+
V + ' ' + I + ' ' + IV + '<br> '+
V + ' ' + IV + ' ' + I + '<br> '+
I + ' ' + VI + ' ' + V + '<br> '+
I + ' ' + II + ' ' + V + '<br> '+
I + ' ' + V + ' ' + I + '<br> '+
I + ' ' + IV + ' ' + V + ' ' + V + '<br> '+
I + ' ' + I + ' ' + IV + ' ' + V + '<br> '+
I + ' ' + IV + ' ' + I + ' ' + V + '<br> '+
I + ' ' + IV + ' ' + V + ' ' + IV + '<br> '+
I + ' ' + V + ' ' + IV + ' ' + V + '<br> '+
I + ' ' + I + ' ' + IV + ' ' + VI + '<br> '+
IV + ' ' + I + ' ' + IV + ' ' + V;

p3=I + ' ' + VI + ' ' + IV + ' ' + V + '<br> '+
I + ' ' + VI + ' ' + II + ' ' + V + '<br> '+
I + ' ' + IV + ' ' + VI + ' ' + IV + '<br> '+
I + ' ' + VI + ' ' + II + ' ' + V + '<br> '+
I + ' ' + V + ' ' + VI + ' ' + IV;	
	
p4=I + ' ' + II + ' ' + V + ' ' + I + '<br> '+
I + ' ' + VI + ' ' + II + ' ' + V + '<br> '+
I + ' ' + IV + ' ' + V + ' ' + I + '<br> '+
I + ' ' + VI + ' ' + II + ' ' + V;	
	
p5=	I + ' ' + VII + ' ' + VI + ' ' + V ;
	
p6= I + ' ' + V + ' ' + VI + ' ' + IV + '<br> '+
I + ' ' + V + ' ' + VI + ' ' + III + ' ' + IV + '<br> '+
VI + ' ' + V + ' ' + IV + ' ' + V + '<br> '+
II + ' ' + V + ' ' + I + ' ' + IV + '<br> '+
VI + ' ' + IV + ' ' + I + ' ' + V + '<br> '+
I + ' ' + VI + ' ' + III + ' ' + VII + '<br> '+
I + ' ' + VI + ' ' + II + ' ' + IV + '<br> '+
I + ' ' + III + ' ' + IV + ' ' + VI + '<br> '+
I + ' ' + IV + ' ' + I + ' ' + V ;
	
p7=I + ' ' + I + ' ' + I + ' ' + I + '<br> '+
IV + ' ' + IV + ' ' + I + ' ' + I + '<br> '+
V + ' ' + V + ' ' + I + ' ' + I ;
	
p8=I + ' ' + I + ' ' + I + ' ' + I + '<br> '+
IV + ' ' + IV + ' ' + I + ' ' + I + '<br> '+
V + ' ' + IV + ' ' + I + ' ' + I;
	
p9= I + ' ' + IV + ' ' + I + ' ' + I + '<br> '+
IV + ' ' + IV + ' ' + I + ' ' + I + '<br> '+
V + ' ' + IV + ' ' + I + ' ' + I;
	
document.getElementById("p1").innerHTML=(p1);
document.getElementById("p2").innerHTML=(p2);
document.getElementById("p3").innerHTML=(p3);	
document.getElementById("p4").innerHTML=(p4);	
document.getElementById("p5").innerHTML=(p5);	
document.getElementById("p6").innerHTML=(p6);	
document.getElementById("p7").innerHTML=(p7);	
document.getElementById("p8").innerHTML=(p8);	
document.getElementById("p9").innerHTML=(p9);	
document.getElementById("progression").style.display = "block"; 
		 
}


//getters
function selectedOptionKey(select) {
	"use strict";	
	return document.getElementById(select).selectedIndex;
}

function selectedOptionValue(select) {
	"use strict";	
	return document.getElementById(select).value;
}

 function radioCheck(nev) {
	 "use strict";
    var radiok = document.getElementsByName(nev);
    for (var i = 0; i < radiok.length; i++) {
        if (radiok[i].checked) {
            return radiok[i].value;
        }
    }
    return undefined;
}


//event handlers
function init() {
	"use strict";
    document.getElementById('radio-1').addEventListener('click', chordProgression, false);
	document.getElementById('radio-2').addEventListener('click', chordProgression, false);
	document.getElementById('select1').addEventListener('change', chordProgression, false);
}

//init
window.addEventListener('load', init, false);