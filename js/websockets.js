// Make connection when DOM has finished loading
$(document).ready(ConnectToChat);
//------------------------------------------------------------------------------
function ConnectToChat()
{
// Open connection 
$('#postit').attr('disabled', 'disabled');
$('#debugmessage').text('Connecting...');


// ### My Pusher credentials, get your own!###
$key = 'Type Here';
$secret = 'Type Here';
$app_id = 'Type Here';
var pusher = new Pusher($key, $secret, $app_id);

// Check connection status
pusher.connection.bind('connected', function()
{
$('#postit').removeAttr('disabled');
$('#debugmessage').text('Connected!').fadeOut(2000);
});

// Create channel 
var myChannel = pusher.subscribe('chat-channel'); 

// Bind event to function
myChannel.bind('new-message', 
function(data) 
{
$('#messages').append(data);
$("#messages").prop({ scrollTop: $("#messages").prop("scrollHeight") });
});

// Bind enter key to post message
$('#yourmessage').bind('keypress', function(e) {
if(e.keyCode==13){
SendNewMessage();
}
});

// Bind button click to post message
$('#postit').click(SendNewMessage);

}

//------------------------------------------------------------------------------
function SendNewMessage()
{
// Read name and message from form 
var name = $('#yourname').val();
var message = $('#yourmessage').val();
var connecting = $('#postit').prop('disabled');

// Validate input
if(name=='')
name="Anonymous";

// Are we still connecting?
if(connecting)
exit;

if(message!='')
{
// Clear message
$('#yourmessage').val('');

// Send message to server
$.ajax({
// ### Your URL Here StudentNo/YourFilesFolder/push-event.php ###
url: "http://mi-linux.wlv.ac.uk/~1315977/codeigniter/applications/views/chat/push-event.php",
type: "POST",
data: ({name : name, message : message, key : $key, secret : $secret, app_id : $app_id})
});
}

// Refocus on text input ready for next message 
$('#yourmessage').focus();

}