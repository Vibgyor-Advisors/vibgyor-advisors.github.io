function Redirect(){
    
    firebase.auth().onAuthStateChanged(function(user) {
              if (user) {
            
           location.href='newshome.html'
           
        } 
        else {
          location.href='signup.html'
          
        }
      });
}