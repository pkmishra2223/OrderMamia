// Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyBfmoq3CTU_eHMFFhwsrQQiHKHmXeht8Tg",
    authDomain: "ordermania-2020.firebaseapp.com",
    databaseURL: "https://ordermania-2020.firebaseio.com",
    projectId: "ordermania-2020",
    storageBucket: "ordermania-2020.appspot.com",
    messagingSenderId: "450470929707",
    appId: "1:450470929707:web:b480a5e5386f410be6916e",
    measurementId: "G-Q03EG490HX"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();


  const auth=firebase.auth();

  function signUp(){

                
                var email= document.getElementById("email");
                var password=document.getElementById("password");
                var conPassword= document.getElementById("conPassword");
               
                console.log(email.value);
                console.log(password.value);

                if(firebase.auth().currentUser){
      Toast.show("you are already logged in", "error");
    }
    


                
else{
  const promise=auth.createUserWithEmailAndPassword(email.value,password.value).then(function(){
     
        window.location='../index1.html';
    
      

    }).catch(e=> alert(e.message));

 
  } 

}
  

  function signIn(){
    
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    if(firebase.auth().currentUser){
      Toast.show("you are already logged in", "error");
    }
    else{
      auth.signInWithEmailAndPassword(email.value, password.value).then(function(){
     
        window.location='../index1.html';
    
      

    }).catch(e => alert(e.message));

    }
    
    

    


    
    
    
    
  }

  
  function signOut(){
      auth.signOut().then(function(){
        window.location='index.php';

      });
      
    Toast.show("Signed Out","success");
    }
    
    // 
    
  
  
  
  
  auth.onAuthStateChanged(function(user){
    
    if(user){
      
      var email = user.email;
      Toast.show(("Active User "),"success");
      Toast.show('signed In ' + email,"success");
    


      
      
    
      
      
      //Take user to a different or home page

      //is signed in
      
    }else{
      
      Toast.show("No Active User","error");
      //no user is signed in
    }
    
    
    
  });
  

  function Continue() {
    if(firebase.auth().currentUser){
        window.location = "../index1.html"
      
    }
    else{
    
      Toast.show("Please Login to Continue", "error");
    }

  }
function GoogleLogin() {
  if(firebase.auth().currentUser){
      Toast.show("you are already logged in", "error");
    }
    //first of all create google provider object
else{

  var provider=new firebase.auth.GoogleAuthProvider();
    //Login with popup window
    firebase.auth().signInWithPopup(provider).then(function () {
        //code executes after successful login

        window.location="../index1.html";
    }).catch(function (error) {
        var errorMessage=error.message;
        Toast.show(errorMessage,"error");
    });

}
    
}
function payment(){
    auth.onAuthStateChanged(function(user){
      
      if(user){
        window.location.href='cartm.php';
         }
  else{
     alert("Please Login to continue");
  }
  })

  };
function payment1(){
    auth.onAuthStateChanged(function(user){
      
      if(user){
        window.location.href='cartm2.php';
         }
  else{
     alert("Please Login to continue");
  }
  })

  };
function payment2(){
    auth.onAuthStateChanged(function(user){
      
      if(user){
        window.location.href='cartb1.php';
         }
  else{
     alert("Please Login to continue");
  }
  })

  };
function payment3(){
    auth.onAuthStateChanged(function(user){
      
      if(user){
        window.location.href='cartb2.php';
         }
  else{
     alert("Please Login to continue");
  }
  })

  };

  function payment4(){
    auth.onAuthStateChanged(function(user){
      
      if(user){
        window.location.href='cartb3.php';
         }
  else{
     alert("Please Login to continue");
  }
  })

  };
  function payment5(){
    auth.onAuthStateChanged(function(user){
      
      if(user){
        window.location.href='cartd1.php';
         }
  else{
     alert("Please Login to continue");
  }
  })

  };
function payment6(){
    auth.onAuthStateChanged(function(user){
      
      if(user){
        window.location.href='cartd2.php';
         }
  else{
     alert("Please Login to continue");
  }
  })

  };

function payment7(){
    auth.onAuthStateChanged(function(user){
      
      if(user){
        window.location.href='cartd3.php';
         }
  else{
     alert("Please Login to continue");
  }
  })

  };






const Toast = {
  init() {
    this.hideTimeout = null;

    this.el = document.createElement("div");
    this.el.className = "toast";
    document.body.appendChild(this.el);
  },

  show(message, state) {
    clearTimeout(this.hideTimeout);

    this.el.textContent = message;
    this.el.className = "toast toast--visible";

    if (state) {
      this.el.classList.add(`toast--${state}`);
    }

    this.hideTimeout = setTimeout(() => {
      this.el.classList.remove("toast--visible");
    }, 5000);
  }
};

document.addEventListener("DOMContentLoaded", () => Toast.init());

function redirect()
  {auth.onAuthStateChanged(function(user){
      
      if(user){
        window.location.href='index1.html'
  
  }
  else{
    window.location.href='index.php';
  }
  })};

  