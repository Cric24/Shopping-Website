

var generateBtn = document.querySelector("#generate");


generateBtn.addEventListener("click", writePassword);


var lowerCase = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
var upperCase = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
var number = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
var specialCharacter = ["!", "%", "&", ",", "*", "+", "-", ".", "/", "<", ">", "?","~"];


var stringLength = "";


var includeSpecialCharacter;
var includeNumericCharacter;
var includeUpperCase;
var includeLowerCase;


function generatePassword() {
  var stringLength = (prompt("How many characters would you like your password? Choose between 8 and 128"));

  
  if (stringLength == null)  {
    alert("Click the Generate Password button to restart the generator");
    Return;
    }

   
  while(stringLength <= 8 || stringLength >= 128) {
      alert("Password length must be between 8 and 128 characters. Try selecting a different value");
      var stringLength = (prompt("How many characters would you like your password? Choose between 8 and 128"));
      }

   
    var includeNumericCharacter = confirm("Would you like your password to include numbers");    
    var includeSpecialCharacter = confirm("Would you like your password to include special characters");
    var includeLowerCase = confirm("Would you like your password to include lowercase characters");
    var includeUpperCase = confirm("Would you like your password to include uppercase characters");

      
      while (includeUpperCase === false && includeLowerCase === false && includeSpecialCharacter === false && includeNumericCharacter === false) {
        alert("You must choose at one of the four criteria's (Numbers, Special Characters, Lowercase or Uppercase) for your password");

        var includeSpecialCharacter = confirm("Would you like your password to include numbers");
        var includeNumericCharacter = confirm("Would you like your password to include special characters");    
        var includeLowerCase = confirm("Would you like your password to include lowercase characters");
        var includeUpperCase = confirm("Would you like your password to include uppercase characters");   
    } 

      
      var passwordCreate = []
      
      
    if (includeSpecialCharacter) {
      passwordCreate = passwordCreate.concat(specialCharacter)
    }

    
    if (includeNumericCharacter) {
      passwordCreate = passwordCreate.concat(number)
    }
    
    
    if (includeLowerCase) {
      passwordCreate = passwordCreate.concat(lowerCase)
    }

    
    if (includeUpperCase) {
      passwordCreate = passwordCreate.concat(upperCase)
    }

    console.log(passwordCreate)

      
      var newPassword = ""
      
      
      for (var i = 0; i < stringLength; i++) {
        newPassword = newPassword + passwordCreate[Math.floor(Math.random() * passwordCreate.length)];
      }
      return newPassword;
}



function writePassword() {
    var password = generatePassword();
    var passwordText = document.querySelector("#password");
    passwordText.value = password;
  
  }



 

console.log(copyPassword)