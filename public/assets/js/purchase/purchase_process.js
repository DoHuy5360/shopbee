$(document).ready(function () {
    let str__current_status;
    $.each($(".profile__process-hack"), function (index, node__btn) {
        node__btn.addEventListener("click", (e) => {
            e.preventDefault();
            str__current_status = node__btn.getAttribute("data-status");
            updateOrderStatus(node__btn, str__current_status);
        });
    });
    $.each(
        $(".profile__process--cancel-btn"),
        function (index, node__cancel_btn) {
            node__cancel_btn.addEventListener("click", (e) => {
                e.preventDefault();
                updateOrderStatus(node__cancel_btn, str__current_status);
            });
        }
    );
    function updateOrderStatus(_node__btn, _str__current_status) {
        const str__pdt_code = _node__btn.parentNode.querySelector(
            ".profile__process--card-product-code"
        );
        $.ajax({
            type: "POST",
            url: "/purchase/update",
            data: {
                _method: "PUT",
                _token: $("#profile-process-csrf-token").val(),
                action: _node__btn.getAttribute("data-action"),
                product_code: str__pdt_code.value,
                current_status: _node__btn.getAttribute("data-status"),
            },
            success: function (response) {
                refreshStatus(response, _str__current_status);
            },
        });
    }
    function refreshStatus(_arr__response_count, _str_status_name) {
        $.ajax({
            type: "GET",
            url: `/purchase/${$("#profile-user-code").val()}`,
            data: {
                status: _str_status_name,
            },
            success: function (response) {
                $("#profile-process-list-product-wrap").html(response);
                $.each(
                    $(".profile__process-order-count"),
                    function (index, node) {
                        node.innerText = _arr__response_count[index];
                    }
                );
            },
        });
    }
});
