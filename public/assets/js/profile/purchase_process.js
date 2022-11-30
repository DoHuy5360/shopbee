$(document).ready(function () {
    $.each($(".profile__process-hack"), function (index, node__btn) {
        node__btn.addEventListener("click", (e) => {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "/purchase/update",
                data: {
                    _method: "PUT",
                    _token: $("#profile-process-csrf-token").val(),
                    action: node__btn.getAttribute("data-hack"),
                    product_code: node__btn.getAttribute("data-product-code"),
                    current_status: node__btn.getAttribute("data-status"),
                },
                success: function (response) {
                    // $.each($(`[data-card-product-code='${node__btn.getAttribute("data-product-code")}']`), function (index, node__card) { 
                    //      node__card.remove();
                    // });
                    $.ajax({
                        type: "GET",
                        url: `/purchase/${$("#profile-user-code").val()}`,
                        data: {
                            status: node__btn.getAttribute("data-status"),
                        },
                        success: function (response) {
                            $("#profile-process-list-product-wrap").html(response);
                        },
                    });
                    $.each(
                        $(".profile__process-order-count"),
                        function (index, node) {
                            node.innerText = response[index];
                        }
                    );
                },
            });
        });
    });
});
