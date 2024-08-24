@if ($cartItems->Count() > 0)
    <div class="col-12 col-md-7 col-lg-9">
        <ul class="ps-shopping__list">
            @foreach ($cartItems as $item)
                <li>
                    <div class="ps-product ps-product--wishlist">
                        <div class="ps-product__remove">
                            <a href="javascript:void(0)" class="remove-from-cart" data-cart-item-id="{{ $item->rowId }}">
                                <i class="icon-cross"></i>
                            </a>
                        </div>
                        <div class="ps-product__thumbnail">
                            <a class="ps-product__image" href="{{ route('product.details', $item->model->slug) }}">
                                <figure>
                                    <img src="{{ asset('storage/' . $item->model->thumbnail) }}" alt />
                                </figure>
                            </a>
                        </div>
                        <div class="ps-product__content">
                            <h5 class="ps-product__title">
                                <a
                                    href="{{ route('product.details', $item->model->slug) }}">{{ $item->model->name }}</a>
                            </h5>
                            <div class="ps-product__row">
                                <div class="ps-product__label">Price:</div>
                                <div class="ps-product__value">
                                    <span class="ps-product__price">£{{ $item->price }}</span>
                                </div>
                            </div>
                            <div class="ps-product__row ps-product__stock">

                                <div class="ps-product__label">Stock:</div>
                                @if (!empty($item->box_stock) && $item->box_stock > 0)
                                    <div class="ps-product__value">
                                        <span class="ps-product__in-stock">{{ $item->box_stock }} In Stock</span>
                                    </div>
                                @else
                                    <div class="ps-product__badge"><span class="ps-badge ps-badge--outstock">Out Of
                                            Stock</span></div>
                                @endif
                            </div>
                            <div class="ps-product__cart">
                                <button class="ps-btn">Add to cart</button>
                            </div>
                            <div class="ps-product__row ps-product__quantity">
                                <div class="ps-product__label">Quantity:</div>
                                <div class="ps-product__value">{{ $item->qty }}</div>
                            </div>
                            <div class="ps-product__row ps-product__subtotal">
                                <div class="ps-product__label">Subtotal:</div>
                                <div class="ps-product__value">£{{ $item->price * $item->qty }}
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>


        <div class="ps-shopping__table">
            <table class="table ps-table ps-table--product">
                <thead>
                    <tr>
                        <th class="ps-product__remove"></th>
                        <th class="ps-product__thumbnail"></th>
                        <th class="ps-product__name">Product name</th>
                        <th class="ps-product__meta">Unit price</th>
                        <th class="ps-product__quantity">Quantity</th>
                        <th class="ps-product__subtotal">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                        <tr>
                            <td class="ps-product__remove">
                                <a href="javascript:void(0)" class="remove-from-cart"
                                    data-cart-item-id="{{ $item->rowId }}">
                                    <i class="icon-cross"></i>
                                </a>
                            </td>
                            <td class="ps-product__thumbnail">
                                <a class="ps-product__image" href="{{ route('product.details', $item->model->slug) }}">
                                    <figure>
                                        <img src="{{ asset('storage/' . $item->model->thumbnail) }}" alt />
                                    </figure>
                                </a>
                            </td>
                            <td class="ps-product__name">
                                <a
                                    href="{{ route('product.details', $item->model->slug) }}">{{ $item->model->name }}</a>
                            </td>
                            <td class="ps-product__meta">
                                <span class="ps-product__price">£{{ $item->price }}</span>
                            </td>
                            <td class="ps-product__quantity">
                                <div class="def-number-input number-input safari_only">
                                    <button class="minus"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="icon-minus"></i>
                                    </button>
                                    <input class="quantity" min="0" name="quantity" value="{{ $item->qty }}"
                                        type="number" />
                                    <button class="plus"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="icon-plus"></i>
                                    </button>
                                </div>
                            </td>
                            <td class="ps-product__subtotal">£{{ $item->price * $item->qty }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="ps-shopping__footer">

            <div class="ps-shopping__button">
                <button class="ps-btn ps-btn--primary" type="button">
                    Clear All
                </button>
                <button class="ps-btn ps-btn--primary" type="button">
                    Update cart
                </button>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-5 col-lg-3">
        <div class="ps-shopping__label">Cart totals</div>
        <div class="ps-shopping__box">
            <div class="ps-shopping__row">
                <div class="ps-shopping__label">Subtotal</div>
                <div class="ps-shopping__price">£{{ Cart::subtotal() }}</div>
            </div>


            <div class="ps-shopping__row">
                <div class="ps-shopping__label">Total</div>
                <div class="ps-shopping__price">£{{ Cart::subtotal() }}</div>
            </div>
            <div class="ps-shopping__checkout">
                    <a class="ps-btn ps-btn--warning" href="{{ route('checkout') }}">Proceed to checkout</a>
                <a class="ps-shopping__link" href="{{ route('allproducts') }}">Continue To Shopping</a>
            </div>
        </div>
    </div>
@else
    <div class="col-md-12 text-center">
        <h2>Your cart is empty !</h2>
        <h5 class="mt-3">Add Items to it now.</h5>
        <a href="{{ route('allproducts') }}" class="btn btn-warning mt-5 mb-4">
            Shop Now
        </a>
    </div>
@endif