function buy(id, type)
{
    var data={"id":id,"type":type};
    ajax(data, "buy.php");
}
function drop(cid)
{
    var data={"cid":cid};
    $(".deltr"+cid).addClass("displayNone");
    ajax(data, "del.php");
}
function ajax(data, file)
{
    if(data)
    {
        $.ajax({
            type:"POST",
            url:file,
            data:data,
            dataType: "html",
            cache: false,
            success: function(html)
            {
                if (html == "1")
                    alert("Количество товаров увеличено");
                if (html == "2")
                    alert("Товар добавлен в корзину");
                if (html == "3")
                    alert("Товар удален из корзины");
                if (html == "4")
                    alert("You must authorize!");
            }
        });
    }
}