$(document).ready(function(){
   $('#options').click(function(){
       if(this.checked){
           $('.checkBoxes').each(function(){
              this.checked = true; 
           });
       }
       else{
          $('.checkBoxes').each(function(){
              this.checked = false; 
           }); 
       }
   }); 
});