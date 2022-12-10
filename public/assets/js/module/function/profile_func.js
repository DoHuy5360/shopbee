export function toggleLoadingAnimation(_bool) {
    if (_bool) {
        $("#seller-frame-cover").css("z-index", 16);
    } else {
        setTimeout(() => {
            $("#seller-frame-cover").css("z-index", -1);
        }, 100);
    }
}
export function updatePageContent(_method, _path, _complete){
    $.ajax({
        type: _method,
        url: _path,
        success: function (response) {
            $("#profile-body-tranfer-wrap").html(response);
        },
        complete: _complete
    });
}
export function updateURL(_slug){
    window.history.replaceState(
        "state name",
        null,
        `/profile/${_slug}`
    );
}