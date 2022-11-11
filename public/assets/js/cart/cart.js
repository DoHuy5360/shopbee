$(document).ready(function () {
    const arr_del_btn = $(".cart_page_actionDel");
    $.each(arr_del_btn, function (index) {
        const del_btn = arr_del_btn[index];
        del_btn.addEventListener("click", (e) => {
            $.ajax({
                type: "POST",
                url: `/cart/${del_btn.getAttribute("data-item-code")}`,
                data: {
                    _method: "DELETE",
                    _token: $("#cartPage-csrf").val(),
                },
                success: function (response) {
                    if (response.status === 200) {
                        del_btn.parentNode.parentNode.parentNode.parentNode.remove();
                    }
                },
            });
        });
    });
});
