
function showForm1(){
	document.getElementById('id01').style.display='block';
	document.getElementById('form1').style.display='block';
	document.getElementById('form2').style.display='none';

}

function closeForm1(){
	var modal1 = document.getElementById('id01');

	modal1.style.display = 'none';

	window.onclick = function(event) {
	    if (event.target == modal1) {
	        modal1.style.display = "none";
	    }
	}	
}


function showForm2(){
	document.getElementById('id01').style.display='block'
	document.getElementById('form1').style.display='none'
	document.getElementById('form2').style.display='block'

}

function closeForm2(){
	var modal2 = document.getElementById('id01');

	modal2.style.display = 'none';

	window.onclick = function(event) {
	    if (event.target == modal2) {
	        modal2.style.display = "none";
	    }
	}	
}