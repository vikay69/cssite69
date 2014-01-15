
$(function(){
 if($.browser.msie && $.browser.version<7)
  $('#top').before(
   '<div id="ie6detect">'+
   'Вие ползвате Internet Explorer 6 или по-стара версия!<br />'+
   'Вие няма да можете да виждате някои неща за това<br />ние Ви препоръчваме да си ъпгрейднете версията или да използвате друг браузър като'+
   'Google Chrome, FireFox, Safari или Opera!'+
   '</div>'
  );
});
