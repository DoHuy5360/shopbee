const all_birthday_choice = document.querySelectorAll(".profile__birthday--option-wrap");
let temporary;
all_birthday_choice.forEach((block) => {
  block.addEventListener("click", (e) => {
    if (block.classList.contains("active")) {
      block.classList.remove("active");
      temporary = null;
    } else {
      block.classList.add("active");
      if (temporary) {
        temporary.classList.remove("active");
      }
      temporary = block;
    }
  });
});
let array_datetime = [];
const birthday_field = document.getElementById("profile-edit-birthday-value");
document.querySelectorAll(".profile__birthday--list-value").forEach((list_datetime) => {
  list_datetime.addEventListener("click", (e_click) => {
    const date_value = e_click.target.innerText;
    list_datetime.parentNode.querySelector(".profile__birthday--value").innerText = date_value;
    const index = list_datetime.getAttribute("data-datetime");
    array_datetime[index] = date_value;
    birthday_field.value = array_datetime.join("/");
  });
});
//! ---------------
$(document).ready(function () {
  // todo: Hiện đơn mua
  $("#profile-menu-element-order").click(function(){
    // window.history.pushState(null,null,'/1')
    window.history.replaceState('state name', null, '/profile/order')
    $.ajax({
      type: 'GET',
      url: '/purchase',
      data: {
        user_code: $("#profile-user-code").val()
      },
      success: function(response){
        $("#profile-body-tranfer-wrap").html(response)
      }
    })
  })

});
