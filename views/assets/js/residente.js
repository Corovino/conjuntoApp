let  Residente =(function(){
   let c = console.log;
   postResidente = function()
   {
   	  let data = {
   	  	 url:'../routes/registroCode.php', 
   	  	 type:'POST', 
   	  	 data: $("form[id=residente]").serialize()
   	  }
   	  c('xx', data);
   	 $.ajax({
   	  	url: data.url,
   	  	type: data.type,
   	  	data: data.data,
   	  	success:function(response){

   	  		if(response.status === "true")
   	  		{
                c(response.data); 
   	  		}else{
                c(response.message);
   	  		}

   	  	}
   	  });
   	  
   	  
   }

 return {
 	residente : function(){
 		postResidente();
 	}

 }

}());