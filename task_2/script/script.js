(function(){
    "use strict"
    document.getElementById("subscribe").addEventListener("submit", function(event){
        event.preventDefault();
        var correctEmail = event.target.elements["email"].value;
        var answer = document.getElementById("answer");
        var answer3 = document.getElementById("answer3");
        var answer4 = document.getElementById("answer4");
        
       var validateEmail = correctEmail.match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
       
if (document.getElementById("idCheckbox").checked && validateEmail){
      
      answer3.innerHTML = ` Thanks for subscribing! `;
      answer4.innerHTML = `  You have successfully subscribed to our email listing. Check your email for the discount code.`;
      document.getElementById("cup").setAttribute('style','display:block');
      document.getElementById("subscribe").setAttribute("style", 'display:none');
      document.getElementById("line1").setAttribute("style", 'top:539px');
      document.getElementById("icon").setAttribute("style", 'top:590px');
      document.getElementById("icon1").setAttribute("style", 'top:590px');
      document.getElementById("icon2").setAttribute("style", 'top:590px');
      document.getElementById("icon3").setAttribute("style", 'top:590px');
      
      document.getElementById("ic_icon").setAttribute("style", 'top:605px');
      document.getElementById("ic_icon1").setAttribute("style", 'top:605px');
      document.getElementById("ic_icon2").setAttribute("style", 'top:605px');
      document.getElementById("ic_icon3").setAttribute("style", 'top:608px');
   }
   //else if(document.getElementById("idCheckbox").checked && validateEmail ) {
      // answer.innerHTML = ` <p> We are not accepting subscriptions from Colombia emails </p>`;
  // }
   else if(validateEmail){
  answer.innerHTML = ` <p> You must accept the terms and conditions </p>`;
  document.getElementById("line_change").setAttribute('style', 'background: #B80808');
   }
   else if (document.getElementById("idCheckbox").checked && correctEmail.length !==0 ) {
        answer.innerHTML = ` <p> Please provide a valid e-mail address </p>`;
           document.getElementById("line_change").setAttribute('style', 'background: #B80808');
   }
   else if(document.getElementById("idCheckbox").checked) {
       answer.innerHTML = ` <p> Email address is required </p>`;
       document.getElementById("line_change").setAttribute('style', 'background: #B80808');
   }
   else{
       answer.innerHTML = ` <p> Please provide email and accept terms </p>`;
       document.getElementById("line_change").setAttribute('style', 'background: #B80808');
   }
   });
}());