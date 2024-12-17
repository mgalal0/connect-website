$(document).ready(function(){


$('.product_delete_btn').click(function(e){
    e.preventDefault();
 let id=$(this).val();

 swal({
    title: "Are you sure?",
    text: "Once deleted, you will not be able to recover it!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
        // 
      $.ajax({

         method:'POST',
         url:'code.php',
         data:{
            'id':id,
            'product_delete_btn':true
         },
         
         success:function(response){
          console.log(response)
                  if(response==200){
                        swal("Success!","product deleted successfully","success");
                        $('#products_table').load(location.href + " #products_table")
                  }else if(response==500){
                    swal("error!","something went wrong","error");
                  }
         }



      })

// 
    } 
  })
})
////////////////////////////



$('.categoty_delete_btn').click(function(e){
  e.preventDefault();
let id=$(this).val();

swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover it!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
      // 
    $.ajax({

       method:'POST',
       url:'code.php',
       data:{
          'id':id,
          'categoty_delete_btn':true
       },
       
       success:function(response){
        console.log(response)
                if(response==200){
                      swal("Success!","category deleted successfully","success");
                      $('#category_table').load(location.href + " #category_table")
                }else if(response==500){
                  swal("error!","something went wrong","error");
                }
       }



    })

// 
  } 
})
})




})