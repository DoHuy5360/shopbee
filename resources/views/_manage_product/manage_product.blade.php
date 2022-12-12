<link rel="stylesheet" href="{{ asset('assets/css/manage_product/manage_product.css') }}">
<input id="seller-allProduct-csrf" type="hidden" name="" value="{{ csrf_token() }}">
<div id="seller-all-product-wrap">
    <div id="seller-all-product-notification" class="seller__allProduct--wrap">
        <img src="{{ asset('assets/img/speaker.png') }}" alt="" />
        <div id="seller-all-product-notification-wrap">
            <div id="seller-all-product-notification-title">
                New resizing tool
            </div>
            <div id="seller-all-product-notification-desc">
                <span>Shopbee supports merchants with a new feature that displays information about the size of
                    Fashion products are more accurate while increasing search visibility
                    product <a href="#">Learn more</a></span>
                <button type="button">Create now</button>
            </div>
        </div>
    </div>
    <div id="seller-all-product-search-wrap" class="seller__allProduct--wrap">
        <div id="seller-all-product-search-form">
            <div id="seller-all-product-search-left">
                <div id="seller-all-product-search-attribute">
                    <select name="" id="">
                        <option value="" hidden aria-hidden="true">Product's name</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                    <input id="seller-all-product-search-input-attribute" type="text" placeholder="Please enter at least two letters" />
                </div>
                <div id="seller-all-product-search-storage">
                    <span>Storage</span>
                    <div id="seller-all-product-search-storage-number">
                        <input type="number" name="" id="" placeholder="Min" />
                        <span>-</span>
                        <input type="number" name="" id="" placeholder="Max" />
                    </div>
                </div>
            </div>
            <div id="seller-all-product-search-right">
                <div id="seller-all-product-search-category">
                    <span>Classify</span>
                    <input type="text" />
                </div>
                <div id="seller-all-product-sales">
                    <span>Sold</span>
                    <div id="seller-all-product-sales-number">
                        <input type="number" name="" id="" placeholder="Min" />
                        <span>-</span>
                        <input type="number" name="" id="" placeholder="Max" />
                    </div>
                </div>
            </div>
        </div>
        <div id="seller-all-product-search-action">
            <button id="seller-all-product-search-search-button" type="button">Search</button>
            <button id="seller-all-product-search-clear-button" type="button">Clear</button>
        </div>
    </div>
    <div id="seller-all-product-manage-wrap" class="seller__allProduct--wrap">
        <div id="seller-all-product-navigation-wrap">
            <div id="seller-all-product-tab-all" class="seller__allProduct--tab active__tab">
                All
            </div>
            <div id="seller-all-product-tab-active" class="seller__allProduct--tab">
                Active
            </div>
            <div id="seller-all-product-tab-soldOut" class="seller__allProduct--tab">
                Sold out <span>0</span>
            </div>
            <div id="seller-all-product-tab-censorship" class="seller__allProduct--tab">
                Pending <span>0</span>
            </div>
            <div id="seller-all-product-tab-violation" class="seller__allProduct--tab">
                Violate <span>0</span>
            </div>
            <div id="seller-all-product-tab-hidden" class="seller__allProduct--tab">Hidden <span>0</span></div>
        </div>
        <div id="seller-all-product-list-wrap">
            <div id="seller-all-product-index-header">
                <div id="seller-all-product-amount">
                    <div id="seller-all-product-number"><span>{{ $amont_pdt }}</span> Products</div>
                    <div id="seller-all-product-process-bar" style="--i: {{ ((int) $amont_pdt / 1000) * 100 }}%;">
                        <div id="seller-all-product-process-bar-percent"></div>
                    </div>
                    <div id="seller-all-product-remain">
                        You can post {{ 1000 - (int) $amont_pdt }} more products <span>
                            <ion-icon name="help-circle-outline"></ion-icon>
                        </span>
                    </div>
                </div>
                <div id="seller-all-product-action-field">
                    <a href="#">Optimal products</a>
                    <a href="{{ route('product.index') }}" id="seller-all-product-add" target="_blank">
                        <ion-icon name="add-outline"></ion-icon>
                        <div>Add new products</div>
                    </a>
                    <div id="seller-all-product-multiply-handle">
                        <div>Batch processing tool</div>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                    <div id="seller-all-product-view-type">
                        <div id="seller-all-product-view-list">
                            <ion-icon name="list-outline"></ion-icon>
                        </div>
                        <div id="seller-all-product-view-grid">
                            <ion-icon name="grid-outline"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
            <div id="seller-all-product-table-wrap">
                <div id="seller-all-product-table-header" class="seller__allProduct--table-grid">
                    <div class="seller__allProduct--header-title">
                        <input class="manage__product-check-all" type="checkbox" name="" title="Checking all products" />
                    </div>
                    <div class="seller__allProduct--header-title">Product's name</div>
                    <div class="seller__allProduct--header-title">Classify SKU</div>
                    <div class="seller__allProduct--header-title">Classify</div>
                    <div class="seller__allProduct--header-title">Price</div>
                    <div class="seller__allProduct--header-title">Storage</div>
                    <div class="seller__allProduct--header-title">Sold</div>
                    <div class="seller__allProduct--header-title">Actions</div>
                </div>
                <div id="seller-all-product-table-body">
                    @foreach ($get_pdt_cls as $item)
                        <div class="seller__allProduct--card seller__allProduct--table-grid">
                            <div class="seller__allProduct--card-checkbox-wrap">
                                <input class="seller__allProduct--card-checkbox" type="checkbox" name="" data-product-code="{{ $item->product_code }}"
                                    title="Click to check this product" />
                            </div>
                            <div class="seller__allProduct--card-info">
                                <img class="seller__allProduct--card-image" src="{{ asset($item->path) }}" alt="" />
                                <div class="seller__allProduct-card-name-wrap">
                                    <div class="seller__allProduct--card-status" data-product-visibily-code="{{ $item->product_code }}">{{ $item->hidden ? 'Hidden' : 'Visible' }}</div>
                                    <div class="seller__allProduct--name">
                                        <a href="{{ route('product.show', $item->product_code) }}" target="_blank">{{ $item->product_name }}</a>
                                    </div>
                                    <div class="seller__allProduct--card-sku">ProductS SKU: <span>{{ $item->sku_code }}</span></div>
                                    <div class="seller__allProduct--interactive-wrap">
                                        <div class="seller__allProduct--card-interactive">
                                            <ion-icon name="eye-outline"></ion-icon>
                                            <span>0</span>
                                        </div>
                                        <div class="seller__allProduct--card-interactive">
                                            <ion-icon name="heart-outline"></ion-icon>
                                            <span>0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="manage__product_group_classify">
                                <div class="manage__product--group-classify-wrap">
                                    @foreach ($item->classificationones as $cls1_idx => $cls1)
                                        @foreach ($cls1->classificationtwos as $cls2_idx => $cls2)
                                            <div class="manage__product_wrap_by_classify">
                                                <div class="seller__allProduct--card-sku-code">{{ $cls2->sku }}</div>
                                                <div class="seller__allProduct--card-classification">{{ $cls1->name }}, {{ $cls2->name }}</div>
                                                <div class="seller__allProduct--card-price">{{ $cls2->price }}</div>
                                                <div class="seller__allProduct--card-storage">{{ $cls2->storage }}</div>
                                                <div class="seller__allProduct--card-storage">-/-/-/-/-</div>
                                                {{-- <div class="seller__allProduct--card-sales">{{ $cls2->sold }}</div> --}}
                                            </div>
                                        @endforeach
                                    @endforeach
                                </div>
                                @if (isset($item->classification_hidden))
                                    <div class="manage__product_view_more_classification">
                                        <div class="manage__product--amnt-cls-hden">{{ $item->classification_hidden }} phân loại hàng khác <ion-icon name="chevron-down-outline"></ion-icon>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="seller__allProduct--card-action">
                                <a href="{{ route('product.edit', $item->product_code) }}" target="_blank">Edit</a>
                                <a href="#" target="_blank">Copy</a>
                                <a href="#" target="_blank">View more</a>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($get_pdt as $item)
                        <div class="seller__allProduct--card seller__allProduct--table-grid">
                            <div class="seller__allProduct--card-checkbox-wrap">
                                <input class="seller__allProduct--card-checkbox" type="checkbox" name="" data-product-code="{{ $item->product_code }}"
                                    title="Click to check this product" />
                            </div>
                            <div class="seller__allProduct--card-info">
                                <img class="seller__allProduct--card-image" src="{{ asset($item->path) }}" alt="" />
                                <div class="seller__allProduct-card-name-wrap">
                                    <div class="seller__allProduct--card-status" data-product-visibily-code="{{ $item->product_code }}">{{ $item->hidden ? 'Hidden' : 'Visible' }}</div>
                                    <div class="seller__allProduct--name">
                                        <a href="{{ route('product.show', $item->product_code) }}" target="_blank">{{ $item->product_name }}</a>
                                    </div>
                                    <div class="seller__allProduct--card-sku">ProductS SKU: <span>{{ $item->sku_code }}</span></div>
                                    <div class="seller__allProduct--interactive-wrap">
                                        <div class="seller__allProduct--card-interactive">
                                            <ion-icon name="eye-outline"></ion-icon>
                                            <span>0</span>
                                        </div>
                                        <div class="seller__allProduct--card-interactive">
                                            <ion-icon name="heart-outline"></ion-icon>
                                            <span>0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="seller__allProduct--card-sku-code">{{ $item->sku_code }}</div>
                            <div class="seller__allProduct--card-classification">-/-/-/-/-/-/-</div>
                            <div class="seller__allProduct--card-price">{{ $item->price }}</div>
                            <div class="seller__allProduct--card-storage">{{ $item->storage }}</div>
                            <div class="seller__allProduct--card-sales">{{ $item->sold }}</div>
                            <div class="seller__allProduct--card-action">
                                <a href="{{ route('product.edit', $item->product_code) }}" target="_blank">Edit</a>
                                <a href="#" target="_blank">Copy</a>
                                <a href="#" target="_blank">View more</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="seller-all-product-table-footer">
                    <div id="seller-all-product-tab-index">
                        <ion-icon name="chevron-back-outline"></ion-icon>
                        <span>1</span>
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </div>
                    <div id="seller-all-product-amount-tab">
                        <div><span>24</span>/Pages</div>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <div id="seller-allProduct-delete-card-wrap">
                <div id="seller-allProduct-delete-left-part">
                    <input class="manage__product-check-all" type="checkbox" name="" title="Checking all products">
                    <span>Select all</span>
                </div>
                <div id="seller-allProduct-delete-right-part">
                    <div><span id="manage__product--amount-card-delete"></span> products selected</div>
                    <button id="seller-allProduct-card-delete-btn" type="button">Delete</button>
                    <button id="seller-allProduct-card-hidden-btn" type="button">Make hidden</button>
                    <button id="seller-allProduct-card-display-btn" type="button">Make visible</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/manage_product/manage_product.js') }}"></script>
