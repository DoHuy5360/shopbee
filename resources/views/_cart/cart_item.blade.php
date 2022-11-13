@foreach ($get_itm_cart as $item)
    <div class="mainHome__cart--product-wrap">
        <img src="{{ asset($item->path) }}" alt="">
        <div class="mainHome__cart--product-name">{{ $item->name }}</div>
        <div class="mainHome__cart--product-price">{{ $item->price }}</div>
    </div>
@endforeach
