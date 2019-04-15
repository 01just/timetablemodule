$(document).ready(function () {
 
var list1 = document.getElementById('department');
 
list1.options[0] = new Option('--Select--', '');
list1.options[1] = new Option('ele', 'ele');
list1.options[2] = new Option('mech', 'mech');
list1.options[3] = new Option('chm', 'chm');
});


function changeview(){
	var list1 = document.getElementById('department');
	var list2 = document.getElementById('course');
	var list3 = document.getElementById('day');
	var but = document.getElementById('sub');
	//but.disabled = true;
	//var list4 = document.getElementById('start_time');
	//var list4 = document.getElementById('end_time');
	var selected = list1.options[list1.selectedIndex].value;
	var t1 =0;
	var t2= 0;
	if(selected=="ele"){
				list2.options.length=0;
                list2.options[0] = new Option('--Select--', '');
                list2.options[1] = new Option('ELE101', 'ELE101');
                list2.options[2] = new Option('ELE202', 'ELE202');
				list2.options[3] = new Option('ELE303', 'ELE303');
				list2.options[4] = new Option('ELE404', 'ELE404');
				list2.options[5] = new Option('ELE505', 'ELE505');
		
	}else if(selected == "mech"){
				list2.options.length=0;
                list2.options[0] = new Option('--Select--', '');
                list2.options[1] = new Option('MECH101', 'MECH101');
                list2.options[2] = new Option('MECH202', 'MECH202');
				list2.options[3] = new Option('MECH303', 'MECH303');
				list2.options[4] = new Option('MECH404', 'MECH404');
				list2.options[5] = new Option('MECH505', 'MECH505');
		
	}else if(selected == "chm"){
				list2.options.length=0;
                list2.options[0] = new Option('--Select--', '');
                list2.options[1] = new Option('CHM101', 'CHM101');
                list2.options[2] = new Option('CHM202', 'CHM202');
				list2.options[3] = new Option('CHM303', 'CHM303');
				list2.options[4] = new Option('CHM404', 'CHM404');
				list2.options[5] = new Option('CHM505', 'CHM505');
		
	}
	/* list3.options.length =0;
	list3.options[0] = new Option('--Select--','');
	list3.options[1] = new Option('Monday','Mon');
	list3.options[2] = new Option('Tuesday','Tue');
	list3.options[3] = new Option('Wednesday','Wed');
	list3.options[4] = new Option('Thursday','Thur');
	list3.options[5] = new Option('Friday','Fri'); */
	populate('#start_time');
	populate('#end_time');
	
	
	
	
}

function populate(selector) {
    var select = $(selector);
    var hours, minutes, ampm;
    for(var i = 420; i <= 1320; i += 30){
        hours = Math.floor(i / 60);
        minutes = i % 60;
        if (minutes < 10){
            minutes = '0' + minutes; // adding leading zero
        }
        ampm = hours % 24 < 12 ? 'AM' : 'PM';
        hours = hours % 12;
        if (hours === 0){
            hours = 12;
        } 
		
        select.append($('<option></option>')
            .attr('value', hours + ':' + minutes + ' ' + ampm)
            .text(hours + ':' + minutes + ' ' + ampm)
		); 
    }
}