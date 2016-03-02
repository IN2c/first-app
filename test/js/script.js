
  function deleteEintrag(id){
    $.ajax({
      type:"GET",
      url:"./delete.php?id="+id+"",
      success:function(){
        console.log();
        refreshTable();
      },
      error:function(data){
        console.log(data);
        alert("something failed...");
      }
    });
  };

function refreshTable(){
  $.ajax({
    type:"GET",
    url:"./read_json.php",
    success:function(data){
      var tabelle = "";
      $.each(JSON.parse(data), function(id, obj){
        tabelle += "<tr>\
        <td>"+obj.ID+"</td>\
        <td>"+obj.Temperatur+"</td>\
        <td>"+obj.Date+"</td>\
        <td class='button'><button class='btn btn-danger' id='"+obj.ID+"' onclick='deleteEintrag("+obj.ID+")'>Delete</button></td>\
        </tr>"
      });

      $("#ausgabe").html(tabelle);
    },
    error:function(data){
    },
    beforeSend:function(){
      $("#ausgabe").html = ("");
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



  $('form').submit(function(e) {
          e.preventDefault();
          // do something else here// some errors are visible :)
          console.log('Prevent default ok');
          return false;
  });

  $( document ).ready(function() {
    loadTable();
});

function loadTable(){
  $.ajax({
    type:"GET",
    url:"./read_json.php",
    success:function(data){
      var tabelle = "";
      $.each(JSON.parse(data), function(id, obj){
        tabelle += "<tr>\
        <td>"+obj.ID+"</td>\
        <td>"+obj.Temperatur+"</td>\
        <td>"+obj.Date+"</td>\
        <td class='button'><button class='btn btn-danger' id='"+obj.ID+"' onclick='deleteEintrag("+obj.ID+")'>Delete</button></td>\
        </tr>"
      });

      $("#ausgabe").html(tabelle);
    },
    error:function(data){
    },
    beforeSend:function(){
      $("#ausgabe").html = ("");
    }
  });
  };
