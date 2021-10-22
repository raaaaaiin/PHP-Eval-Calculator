var display;
var a;
var b;
var c;
var operation;
var first;
var second;
var result;
var z;
var html = [];

$(document).on("click",'button#click',function(){
	 getch($(this).text())
}); 

$(document).on("click",'#clear',function(){
	clear()
}); 

$(document).on("click",'#Operation',function(){
	oper($(this).text())
}); 

$(document).on("click",'#Equals',function(){

	display= $('#sekond')
	second = parseInt(display.val())
	display.val(eval("Math.sqrt(16)+5"))
	//formula(operation)
});

$(document).on("click",'#clearall',function(){
 clearall()
});


function clearall(){
	c = display.val("")

}

function clear(){
	display = $('#sekond')
	c = display.val()
	var length = c.length--;
	var z = c.substring(1,length)
	c = display.val(z)
	
}



function oper(operas){
		
	display = $('#sekond')
	operation = operas
	first = parseInt(display.val())
	c = display.val("");
}

function formula(element){
	display = $('#sekond')
	result = element
	c = display.val(eval(first + result + second))
}

function getch(elumns){
	 display = $('#sekond')
	 a = display.val();
	 b = elumns
	 c = display.val(a + b);
}
