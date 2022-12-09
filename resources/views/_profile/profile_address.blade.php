<link rel="stylesheet" href="{{ asset('assets/css/profile/profile_address.css') }}">
<div id="profile-address-wrap">
    <div id="profile-address-header">
        <span id="profile-address-header-title">My Address</span>
        <div id="profile-address-add-new-wrp">
            <ion-icon name="add-outline"></ion-icon>
            <span>Add new address</span>
        </div>
    </div>
    <div id="profile-address-body">
        <div id="profile-address-title">Address</div>
        <div id="profile-address-list-address">
            <div class="profile__address--card-wrp">
                <div class="profile__address--card-head profile__address--card-part">
                    <div class="profile__address--card-name-phone-wrp">
                        <div class="profile__address--card-user-name">Do Huy</div>
                        <div class="profile__address--card-user-phone"><span>(+84)</span> 0963758993</div>
                    </div>

                    <div class="profile__address--card-action-wrp">
                        <span class="profile__address--card-updt">Update</span>
                        <span class="profile__address--card-del">Delete</span>
                    </div>
                </div>
                <div class="profile__address--card-body profile__address--card-part">
                    <div class="profile__address--card-address-detail">
                        <div class="profile__address--card-detail">Meet me at *#(H@#(*_@#J@#))</div>
                        <div class="profile__address--card-address-name">TP.HCM, Binh Chanh</div>
                    </div>
                    <button class="profile__address--card-set-default">Set as default</button>
                </div>
                <div class="profile__address--card-foot profile__address--card-part">
                    <span class="profile__address--card-status">Default</span>
                </div>
            </div>
        </div>
    </div>
</div>
<dialog id="profile-dialog-add-address">
    <form action="" id="profile-address-form-add-new">
        <div id="profile-address-form-head">New address</div>
        <div id="profile-address-form-body">
            <div id="profile-address-form-field-inp">
                <div id="profile-address-form-name-phone-wrp">
                    <input name="recevier" type="text" id="profile-address-inp-name" placeholder="Name">
                    <input name="phone" type="text" id="profile-address-inp-phone" placeholder="Phone">
                </div>
                <div id="profile-address-form-address-wrp">
                    <input name="province_district_wards" type="text" id="profile-address-inp-address" placeholder="Address">
                </div>
                <div id="profile-address-form-address-detail">
                    <textarea name="detail" id="profile-address-inp-detail" cols="30" rows="10" placeholder="Address detail"></textarea>
                </div>
                <div id="profile-address-form-google-map">
                    <img src="{{ asset('assets/img/map_placeholder.png') }}" alt="">
                </div>
            </div>
            <div id="profile-address-form-field-check">
                <span>Address type</span>
                <div id="profile-address-check-type-wrp">
                    <input type="radio" name="address_type" id="profile-address-chck-home">
                    <label id="profile-address-chck-type-home" for="profile-address-chck-home">Home</label>
                    <input type="radio" name="address_type" id="profile-address-chck-office">
                    <label id="profile-address-chck-type-office" for="profile-address-chck-office">Office</label>
                </div>
                <div id="profile-address-check-use-wrp">
                    <div class="profile__address-check-use-wrp">
                        <input type="checkbox" name="address_default" id=""><span>Set as default address</span>
                    </div>
                    <div class="profile__address-check-use-wrp">
                        <input type="checkbox" name="" id="" disabled><span>Set as recive product address</span>
                    </div>
                    <div class="profile__address-check-use-wrp">
                        <input type="checkbox" name="" id="" disabled><span>Set as return product address</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="profile-address-form-foot">
            <button id="profile-address-form-back-btn" type="button">Back</button>
            <button id="profile-address-form-complete-btn" type="submit">Done</button>
        </div>
    </form>
</dialog>
