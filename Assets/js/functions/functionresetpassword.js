document.addEventListener("DOMContentLoaded",function () {
  
    

    
    if(document.querySelector('#formresetpassword')){
      let formreset=document.querySelector('#formresetpassword');
      formreset.onsubmit = function(e){
        e.preventDefault();
        let stremail = document.querySelector('#txtemailreset').value;
        if(stremail == ''){
          swal("Por favor", "Escribe tu correo electrónico","error");
          return false;
        }else{
     
            
      
                    swal({
                      title:"Atencion",
                      text: obdata.msg,
                      type:"success",
                      showCancelButton:true,
                      confirmButtonText: "Aceptar",
                      cancelButtonText: false,
                      closeOnConfirm:false,
                      closeOnCancel:true
                    },function(isConfirm){
                    
                    });
              
       
        }
      }
  }

 
  },false);
