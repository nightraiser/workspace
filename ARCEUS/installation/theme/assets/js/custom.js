$(function()
{

/***************** Add to cart code ***********************/
$("#add_to_cart").click(function()
    {
     var pid =  window.location.href.split("=")[1];
     if (localStorage.getItem("cart") === null) 
    {   
        var obj = {1:pid};
        localStorage.setItem("cart",JSON.stringify(obj));

    }
    
    

      return false;
    });
	 if(localStorage.getItem("cart")==null)
   {
    $('#no_of_cart').html("0");

   }
   else
   {
   	var arr = localStorage.getItem("cart");
   	var productsInCart = JSON.parse(arr);
    $('#no_of_cart').html(Object.keys(productsInCart).length);
   }
   /***************** Add to cart code ***********************/ 

});