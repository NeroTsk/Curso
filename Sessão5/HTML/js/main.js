var a = 4;
var b = 5;
var c = 'character';
var d = "Here have a buch of text";
var mycar = "mazda";
var mycolor = "silver";
var e = true; /// true or false

console.log(a*b);
console.log(mycar+' '+mycolor);

if(!d){
    console.log('d is false');
}else{
    console.log('d is true');
}

//var output = document.getElementById('output')

//var firstname = "john";
//var array = ['j','o','h','n'] 

//output.innerHTML=array[3];

var output = document.getElementById('output');
//var blank = "";
//var firstName = "John";
//var lastName = "Smith";
//var array = ['J', 'o', 'h', 'n'];
//function myName(a, b) {
//var fullName = 5 + a + ' ' + b;
//return fullName;
//}
//firstName = "Mike";
//var myFullName = myName(firstName, lastName);
//output.innerHTML = myFullName;

var blank = '';
var firstName = 'Nero';
var lastName = 'tsk';
var array = ['j','o','h','n'];

function myName(a,b){
  var fullName = a+' '+b;
  output.innerHTML = fullName;
}

myName(firstName,lastName);

//função e mais condição!!!!!
/*function htmlOutput(a){
    var  myOutput;
    if(a == 1){
      myOutput = "its working"  
      console.log(true)
    }else{
      myOutput = "isnt working"
      console.log(false)
    }
    output.innerHTML=myOutput;
  }
  
  htmlOutput(1);
*/

function myChoice(a){
    var b = ' ';
    if((a >=0)&& a <= 0.33){
      b = 'rock';
    }else if((a >= 0.33)&& a<= 0.66){
      b = 'paper';
    }else if((a >= 0.66)&& a<= 0.99){
      b = 'scissors';
    }
    return b;
  }
  
   var myrandom = Math.random();
   htmlOutput(myrandom+ '<br>' +myChoice(myrandom));