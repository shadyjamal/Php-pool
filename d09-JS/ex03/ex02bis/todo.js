var last_id = 0;

$("#new").click(function()
{
    var todoName = prompt("write the new todo");
    if(todoName !== "" && todoName.trim() !== "")
        newTodo(++last_id,todoName,true);
});

$(document).ready(function(){
    var Cookie = document.cookie;
    var ca = Cookie.split(';').filter(function (el) {return el !== '';});
    for(var i = 0; i < ca.length ; i++)
        newTodo(ca[i].split('=')[0], decodeURIComponent(ca[i].split('=')[1]), 0);
    var divs = $("#ft_list div");
    if(divs.length > 0)
        last_id = Number($(divs[0]).data("id"));
});

function newTodo(id,value,Cookie)
{
    $("#ft_list").prepend($("<div></div>").text(value));
    $("#ft_list div:first-child").click(
        function(){
            if(confirm("do you want to remove this todo"))
            {
                setCookie($(this).data("id"), "", -1);
                $(this).remove();
            }
        });
    $("#ft_list div:first-child").data("id", id);
    if(Cookie == true)
        setCookie(id, value, 1);
}

function setCookie(cname, cvalue, exdays) 
{
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    cvalue = encodeURIComponent(cvalue);
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}