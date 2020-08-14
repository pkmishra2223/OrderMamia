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
                
                var email= document.forms["myform"]["email"].value;
                var password=document.forms["myform"]["password"].value;
                
                

  const promise=auth.createUserWithEmailAndPassword(email,password);
  promise.catch(e=> alert(e.message));
  alert('signed In');
  }