 function valide(){
         
         var nom=document.getElementById("name").value;
         
         var email=document.getElementById("email").value;
         
         
         var password=document.getElementById("password").value;
         var confirmation=document.getElementById("confirmation").value;
 
         var regexmail= /^[a-zA-Z0-9.-]+@[a-z0-9.-]{2,6}.[a-z]{2,4}$/;
         var regexpasswd = /^[a-zA-Z*'-_^"@$#]{8,30}$/;
         var regexname = /^[a-zA-Z]{3,16}$/;
        
 
         if( nom=="" ||  email=="" ||  password=="" || confirmation=="") {
             window.alert("tous les champs doivent etre remplis");
         }
        
         else if(!regexmail.test(email) || !regexpasswd.test(password) || !regexname.test(nom) ){
     
                 window.alert("respecte les format")
             }
 
             else if(password!= confirmation){
 
                 window.alert("mot de passe non  edentique")
             }
 
             else{
                 window.alert(" name:"+nom +  "email:"+email +  "password:"+password + "confirmation:"+confirmation);
             }
         
         
         }
     
    </script>