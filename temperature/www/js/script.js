
  function deleteEintrag(id){
    $.ajax({
      type:"GET",
      url:"../delete.php",
      data:{id:id},
      success:function(data){
        console.log(data);
        window.location.reload();
        alert(data);
      },
      error:function(){
        alert("something failed...");
      }
    });
  };
