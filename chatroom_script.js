function sendMessage() {
  var msg = $('#msgInput').val();
  if (msg !== null && msg !== ' ') {
    $.post(
      "chatroom_ajax.php",
      {'msg': msg, 'chat': chat}
    );
    $('#msgInput').val('');
  } else {
    alert('Please enter a message!');
    $('#msgInput').val('')
  }
}
$('#send').click(sendMessage);
$(document).keydown(function(e){
  if(e.which == 13) {
    sendMessage();
  }
});
function load_chat() {
  var oldScroll = $('#chat').prop("scrollHeight");
  $.ajax({
    url: chat + '_log.html',
    cache: false,
    success: function(html) {
      $('#chat').html(html);
      var newScroll = $('#chat').prop("scrollHeight");
      if(newScroll > oldScroll) {
        $("#chat").animate({ scrollTop: $('#chat').prop("scrollHeight")}, 1000);
      }
    }
  });
}
setInterval(load_chat, 1000);
function leaveChat() {
  $.post(
    chat + '.php',
    {'leave': 'true'}
    )
  var openTab = window.open('index.php', '_self');
  openTab.focus();
}
$('#leaveChat').click(leaveChat);
