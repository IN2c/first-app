
  function deleteEintrag(id){
    $.ajax({
      type:"GET",
      url:"../www/delete.php",
      success:function(){
        refreshTable();
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

$(document).ready(function refreshTable(resultarray2){
  $.ajax({
    type:"GET",
    url:"../www/read_json.php",
    success:function(data){
      console.log(data);
      var tabelle = "";
      $.each(JSON.parse(data), function(id, obj){
        tabelle += "<tr>\
        <td>"+obj.ID+"</td>\
        <td>"+obj.Temperatur+"</td>\
        <td>"+obj.Date+"</td>\
        <td class='button'><button class='btn btn-danger' id='.$ID.' onclick='deleteEintrag('.$ID.')'>Delete</button></td>\
        </tr>"
      });

      $("#ausgabe").html(tabelle);
    },
    error:function(data){
      console.log(data);
    },
    beforeSend:function(){
      $("#ausgabe").html = ("");
    }
  });
});

  $('form').submit(function(e) {
          e.preventDefault();
          // do something else here// some errors are visible :)
          console.log('Prevent default ok');
          return false;
  })
