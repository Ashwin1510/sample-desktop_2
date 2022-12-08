
// var myArray = new Array();

// myArray[0] = "pizza";

// myArray[1] = "chocoleate";

// var tweets = ["Morning everybody!","I love coffee!"];

// // alert(myArray[0]);


// // alert(tweets[1]);

// // document.write(tweets[0]);

// tweets.push("Back to work");

// // alert(tweets[2]);

// tweets.splice(1, 0, "Cornflakes for breakfast");

// console.log(tweets);


// var x = 2;
// if (x == 1) {

// alert("x is 1!!")

// }else  {

//   alert("x is not 1!!")


// }



document.getElementById("checkmagicword").onclick = function(){

 var magicwordEnterd = document.getElementById("magicword").value;
 
  var magicword = "hloo";

  if (magicwordEnterd == magicword){

    alert("u got it");

  }

  else {

    alert("Nope, try agin....");
  }


}