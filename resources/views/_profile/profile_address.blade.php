<link rel="stylesheet" href="{{ asset('assets/css/profile/profile_address.css') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
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
            @foreach ($get_address as $adrs)
                <div class="profile__address--card-wrp">
                    <div class="profile__address--card-head profile__address--card-part">
                        <div class="profile__address--card-name-phone-wrp">
                            <div class="profile__address--card-user-name">{{ $adrs->receiver }}</div>
                            <div class="profile__address--card-user-phone"><span>(+84)</span> {{ $adrs->phone }}</div>
                        </div>

                        <div class="profile__address--card-action-wrp" data-addess-code="{{ $adrs->code }}">
                            <span class="profile__address--card-updt">Update</span>
                            @if (!$adrs->default_address)
                                <span class="profile__address--card-del">Delete</span>
                            @endif
                        </div>
                    </div>
                    <div class="profile__address--card-body profile__address--card-part">
                        <div class="profile__address--card-address-detail">
                            <div class="profile__address--card-detail">{{ $adrs->detail }}</div>
                            <div class="profile__address--card-address-name">{{ $adrs->province }}, {{ $adrs->district }}, {{ $adrs->wards }}</div>
                        </div>
                        <button class="profile__address--card-set-default" data-addess-code="{{ $adrs->code }}" type="button">Set as default</button>
                    </div>
                    <div class="profile__address--card-foot profile__address--card-part">
                        @if ($adrs->default_address)
                            <span class="profile__address--card-status">Default</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<dialog id="profile-dialog-add-address">
    <form action="{{ route('user_address.store') }}" id="profile-address-form-add-new" method="POST">
        @csrf
        <div id="profile-address-form-head">New address</div>
        <div id="profile-address-form-body">
            <div id="profile-address-form-field-inp">
                <div id="profile-address-form-name-phone-wrp">
                    <input name="receier" type="text" id="profile-address-inp-name" placeholder="Name">
                    <input name="phone" type="text" id="profile-address-inp-phone" placeholder="Phone">
                </div>
                <div id="profile-address-form-address-wrp">
                    <input name="province_district_wards" type="text" id="profile-address-inp-address" placeholder="Address">
                </div>
                <div id="profile-address-form-address-detail">
                    <textarea name="detail" id="profile-address-inp-detail" cols="30" rows="10" placeholder="Address detail"></textarea>
                </div>
                <div id="profile-address-form-google-map">
                    <img src="{{ asset('assets/img/map_placeholder.png') }}" alt="" draggable="false">
                </div>
            </div>
            <div id="profile-address-form-field-check">
                <span>Address type</span>
                <div id="profile-address-check-type-wrp">
                    <input type="radio" name="address_type" id="profile-address-chck-home" value="home">
                    <label id="profile-address-chck-type-home" for="profile-address-chck-home">Home</label>
                    <input type="radio" name="address_type" id="profile-address-chck-office" value="office">
                    <label id="profile-address-chck-type-office" for="profile-address-chck-office">Office</label>
                </div>
                <div id="profile-address-check-use-wrp">
                    <div class="profile__address-check-use-wrp">
                        <input type="checkbox" name="address_default" value="true"><span>Set as default address</span>
                    </div>
                    <div class="profile__address-check-use-wrp">
                        <input type="checkbox" name="" disabled><span>Set as recive product address</span>
                    </div>
                    <div class="profile__address-check-use-wrp">
                        <input type="checkbox" name="" disabled><span>Set as return product address</span>
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
