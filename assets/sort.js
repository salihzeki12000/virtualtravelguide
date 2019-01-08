$(document).on('click','#lowhigh',function (){

var action="lowhigh";

$.ajax({
url:"ajaxcontrol.php",
method:"post",
data:{action:action},
success:function(data)
{


$('#unsort').hide();
$('#sortedhigh').hide();
$('#sortedlow').show();
$('#sortedlow').append(data);





}


})
});

$(document).on('click','#highlow',function (){

var action="highlow";

$.ajax({
url:"ajaxcontrol.php",
method:"post",
data:{action:action},
success:function(data)
{

$('#unsort').hide();
$('#sortedlow').hide();
$('#sortedhigh').show();
$('#sortedhigh').append(data);





}


})


});
