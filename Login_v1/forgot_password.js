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



function forgotPassword(){

  var email = document.getElementById("email");

  if(email!="")
  {auth.sendPasswordResetEmail(email.value).then(function(){
  
      Toast.show("Email has been sent to your email please check and verify","error");
    })
  
    .catch(function(error){
      var errorCode = error.code;
      var errorMessage = error.message;
  
      console.log(errorCode);
      console.log(errorMessage);
  
      Toast.show(("message : " + errorMessage),"error");
     })
  }

  else{
    Toast.show("please Provide your email address","error");
  }
}

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
    }, 3000);
  }
};

document.addEventListener("DOMContentLoaded", () => Toast.init());
