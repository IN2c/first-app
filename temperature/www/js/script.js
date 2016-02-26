
  function deleteEintrag(id){
    $.ajax({
      type:"GET",
      url:"../delete.php",
      data:{id:id},
      success:function(data){
        console.log(data);
        window.location.reload();
        alert("WUHUUUUU");
      },
      error:function(){
        alert("something failed...");
      }
    });
  };

  function insertEintrag(){
    var tmp = $('#temperature').val();
    console.log(tmp);
    $.ajax({
      type:"POST",
      url:"insert.php",
      data: {tmp:tmp},
      success:function(data){
        console.log(data);
      },
      error:function(error){
        console.log(error);
      }
    })
  };

  $('form').submit(function(e) {
          e.preventDefault();
          // do something else here// some errors are visible :)
          console.log('Prevent default ok');
          return false;
  })
