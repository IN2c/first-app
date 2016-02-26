
  function deleteEintrag(id){
    $.ajax({
      type:"GET",
      url:"../www/delete.php",
      data:{id:id},
      success:function(data){
        console.log(data);
        //location.reload("#Tabelle");
        refreshTable();
        alert("WUHUUUUU");
      },
      error:function(data){
        console.log(data);
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
        $("#temperature").val(null);
      },
      error:function(error){
        console.log(error);
      }
    })
  };

  function refreshTable(){
    var table = $("#Tabelle").dataTable();
    table.fnReloadAjax();
  };

  $('form').submit(function(e) {
          e.preventDefault();
          // do something else here// some errors are visible :)
          console.log('Prevent default ok');
          return false;
  })
