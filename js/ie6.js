
$(function(){
 if($.browser.msie && $.browser.version<7)
  $('#top').before(
   '<div id="ie6detect">'+
   '��� �������� Internet Explorer 6 ��� ��-����� ������!<br />'+
   '��� ���� �� ������ �� ������� ����� ���� �� ����<br />��� �� ������������ �� �� ����������� �������� ��� �� ���������� ���� ������� ����'+
   'Google Chrome, FireFox, Safari ��� Opera!'+
   '</div>'
  );
});
