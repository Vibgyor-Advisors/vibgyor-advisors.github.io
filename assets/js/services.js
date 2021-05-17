function Redirect(){
    
    firebase.auth().onAuthStateChanged(function(user) {
              if (user) {
            
           location.href='offer.html'
           
        } 
        else {
          location.href='signup.html'
          
        }
      });
}