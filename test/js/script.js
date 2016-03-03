function deleteEintrag(id){
  var deleet = 'delete';
  $.ajax({
    type:"GET",
    url:"./index.php",
    data: {funktion:deleet,id:id},
    success:function(data){
      //console.log(data);
      refreshTable();
    },
    error:function(){
    }
  });
};

function refreshTable(){
  var read_jason = 'read_jason';
  $.ajax({
    type:"GET",
    url:"./index.php",
    data: {funktion:read_jason},
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
  var insert = "insert";
  var tmp = $('#temperature').val();
  console.log(tmp);
  $.ajax({
    type:"POST",
    url:"./index.php",
    data: {tmp:tmp,funktion:insert},
    success:function(data){
      console.log(data);
      $("#temperature").val(null);
    },
    error:function(error){
      console.log(error);
    }
  })
};

$('form').submit(function(e)
{
  e.preventDefault();
  // do something else here// some errors are visible :)
  console.log('Prevent default ok');
  return false;
});

$( document ).ready(function() {
  loadTable();
});

function loadTable(){
var read_jason = 'read_jason';
  $.ajax({
    type:"GET",
    url:"./index.php",
    data: {funktion:read_jason},
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


    document.addEventListener("deviceready", onDeviceReady, false);


    function onDeviceReady() {
        navigator.geolocation.getCurrentPosition(onSuccess, onError);
    }

    function onSuccess(position) {
        var element = document.getElementById('geolocation');
        element.innerHTML = '<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q='+ position.coords.latitude +','+ position.coords.longitude +'&hl=es;z=14&amp;output=embed"></iframe>';
    }

    function onError(error) {
        alert('code: '    + error.code    + '\n' +
              'message: ' + error.message + '\n');
    }
