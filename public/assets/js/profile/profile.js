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
// $(document).ready(function () {
//   $("#profile-edit-save-btn").click(function (e) {
//     e.preventDefault();
//     $.post(
//       "profile.php",
//       {
//         user_name: $("#profile-edit-user-name").val(),
//       },
//       function (ketqua) {
//         $("#noidung").html(ketqua);
//       }
//     );
//   });
// });
$(document).ready(function () {
  $("#profile-edit-save-btn").click(function () {
    $.ajax({
      url: "profile.php",
      type: "POST",
      dataType: "json",
      data: $("#profile-edit-form").serialize(),
      success: function (data) {
        $("#noidung").html(ketqua);
      },
    });
  });

  $("#profile-menu-element-order").click(function(){
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
  // $("#profile-menu-element-order").click(function(){
  //   $.ajax({
  //     type: 'GET',
  //     url: `/purchase/${$("#profile-user-code").val()}`,
  //     data: {
  //       type: 'wait_confirm'
  //     },
  //     success: function(response){
  //       $("#profile-body-tranfer-wrap").html(response)
  //     }
  //   })
  })

});
