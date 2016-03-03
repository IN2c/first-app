// Oliver & Tobias (beide Hauptteile) & Janosh

// deleteEintrag löscht einen Datensatz aus der DB
function deleteEintrag(id){
  var deleet = 'delete';
  $.ajax({
    type:"GET",
    url:"./index.php",
    // es wird mitgegeben, um was es sich handelt (delete) und welche ID gelöscht werden soll
    data: {funktion:deleet,id:id},
    success:function(data){
      //console.log(data);
      // dann wird die funktino, die die Tabelle aktualisiert aufgerufen
      refreshTable();
    },
    error:function(){
    }
  });
};

// refreshTable ruft Daten aus der DB ab und gibt sie in Tabellenform in der Übersicht aus
function refreshTable(){
  var read_jason = 'read_jason';
  $.ajax({
    type:"GET",
    url:"./index.php",
    data: {funktion:read_jason},
    success:function(data){
      var tabelle = "";
      $.each(JSON.parse(data), function(id, obj){
        // variable "tabelle" wird mit html tags und Daten aus der DB gefüllt
        tabelle += "<tr>\
        <td>"+obj.ID+"</td>\
        <td>"+obj.Temperatur+"</td>\
        <td>"+obj.Date+"</td>\
        <td class='button'><button class='btn btn-danger' id='"+obj.ID+"' onclick='deleteEintrag("+obj.ID+")'>Delete</button></td>\
        </tr>"
      });
      // hier wird der String, der in der Variable "tabelle" steht in das HTML - Tag mit der id "ausgabe" eingefügt
      $("#ausgabe").html(tabelle);
    },
    error:function(data){
    },
    beforeSend:function(){
      // macht, dass die Tabelle vor dem senden geleert wird
      $("#ausgabe").html = ("");
    }
  });
};

// fügt einen neuen Eintrag in die DB ein
function insertEintrag(){
  var insert = "insert";
  var tmp = $('#temperature').val();
  console.log(tmp);
  $.ajax({
    type:"POST",
    url:"./index.php",
    // hier wird der Wert, den man in Eingabefeld eingegeben hat und um was es sich handelt (insert) mitegegeben
    data: {tmp:tmp,funktion:insert},
    success:function(data){
      // hier wird das Eingabefeld bei einem success geleert.
      $("#temperature").val(null);
      console.log(data);
      if(data == "Nothing posted")
      {
        $("#alert").fadeIn("slow");
        $("#alert").html("Bitte Wert zwischen -50 und 60 eingben.");
      }
      else
      {
        $("#alert").fadeOut(10);
      }
    },
    error:function(data){
      console.log(data);
    }
  })
};

// verhindert das neuladen des Formulares beim klick auf den "Senden" Button
$('form').submit(function(e)
{
  e.preventDefault();
  // do something else here// some errors are visible :)
  console.log('Prevent default ok');
  return false;
});

// führt die Funktion loadTable aus, sobald die Seite fertig geladen wurde
$( document ).ready(function() {
  loadTable();
});

// diese Funktion ladet die Tabelle mit allen Datensätzen aus der DB beim aufrufen der Seite
function loadTable(){
var read_jason = 'read_jason';
  $.ajax({
    type:"GET",
    url:"./index.php",
    // hier wird mitgegeben, dass es sich um die Funktion "read_jason" handelt
    data: {funktion:read_jason},
    success:function(data){
      var tabelle = "";
      $.each(JSON.parse(data), function(id, obj){
        // variable "tabelle" wird mit html tags und Daten aus der DB gefüllt
        tabelle += "<tr>\
        <td>"+obj.ID+"</td>\
        <td>"+obj.Temperatur+"</td>\
        <td>"+obj.Date+"</td>\
        <td class='button'><button class='btn btn-danger' id='"+obj.ID+"' onclick='deleteEintrag("+obj.ID+")'>Delete</button></td>\
        </tr>"
      });
      // hier wird der String, der in der Variable "tabelle" steht in das HTML - Tag mit der id "ausgabe" eingefügt
      $("#ausgabe").html(tabelle);
    },
    error:function(data){
    },
    beforeSend:function(){
      // macht, dass die Tabelle vor dem senden geleert wird
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
