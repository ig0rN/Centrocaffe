<div class="prodlist-i">
        <a href="{{ route('product.view', $product->slug)}}" title="{{ $product->name }}" class="prodlist-i-img">
            @include('front.catalog.product.view.product-image',['product' => $product])
        </a>
    @if($product->new_product == 1 || $product->hit_product == 1)
    <div class="prod-sticker">
        @if($product->new_product == 1)
        <div class="item-new-badge">new</div>
        @endif
        @if($product->hit_product == 1)
        <div class="item-hit-badge_catalog-list"><i class="fa fa-star"></i> hit</div>
        @endif
    </div>
    @endif

    <div class="prodlist-i-cont">
        <h3>
            <a href="{{ route('product.view', $product->slug)}}">{{ $product->name }}</a>
        </h3>
        <div class="prodlist-i-txt">
            {!! substr($product->description, 0, 200) !!}...
        </div>
        @if ($product->contact_only == 1)
            <a class="prod-add" href="{{ route('contact') }}">
                Contact us
            </a>
@else
        @if($product->qty < 1 || $product->in_stock == 0)
            <div class="prodlist-i-action">
                <span class="prodlist-i-price">
                    <b>{{ __('front.sold-out') }}</b>
                </span>
            </div>
        @else
        <div class="prodlist-i-action">
            <form method="post" action="{{ route('cart.add-to-cart') }}">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $product->id }}"/>
                <input type="hidden" name="type" value="product"/>
                <p class="prodlist-i-qnt">
                    <input id="prodQnt" class="prod-qty" name="qty" value="1" type="text" data-max="{{ $product->qty }}">
                    <a id="prodPlus" class="prod-plus prodlist-i-plus"><i class="fa fa-angle-up"></i></a>
                    <a id="prodMinus" class="prod-minus prodlist-i-minus"><i class="fa fa-angle-down"></i></a>
                </p>
                <p class="prodlist-i-addwrap">
                    <button type="submit" class="prodlist-i-add">In den Warenkorb</button>
                </p>
                @if($product->discount == 1)
                    <span class="prodlist-i-price">
                        <b>CHF {{ number_format($product->discount_price, 2) }}</b><br>
                        <span style="text-decoration:line-through">CHF {{ number_format($product->price,2) }}</span><span class="price-off">-{{ number_format(100-($product->discount_price/$product->price*100), 0) }}%</span><br>
                        {{--<span>inkl. MwSt 7,7%</span>--}}
                     </span>
                @else
                    <span class="prodlist-i-price">
                        <b>CHF {{ number_format($product->price,2) }}</b><br>
                        {{--<span>inkl. MwSt 7,7%</span>--}}
                    </span>
                @endif
            </form>
        </div>
        @endif
@endif
    </div>
</div>

@section('scripts')
    <script>
        $('.prod-qty').on('change', function () {
            var $this = $(this);
            var max = parseInt($this.data('max'));

            if ($this.val() > max) {
                $this.val(max);
            }
        });

        $('.prod-plus').click(function () {
            var $this = $(this);
            var $qnt = $('.prod-qty', $this.parent());
            var value = parseInt($qnt.val());

            var max = parseInt($qnt.data('max'));

            if (value < 0)
                value = 0;
            if (value < max)
                value += 1;
            $qnt.val(value);
        });
        $('.prod-minus').click(function () {
            var $this = $(this);
            var $qnt = $('.prod-qty', $this.parent());
            var value = parseInt($qnt.val());
            if (value > 0)
                value -= 1;
            if (value < 0)
                value = 0;
            $qnt.val(value);
        });

    </script>

    {{-- <script>
    var sectionMode = $('ul.section-mode');
    var sectionList = $('li.section-mode-list');
    var sectionGallery = $('li.section-mode-gallery');
    var catalogList = $('#catalog-list');
    var catalogGallery = $('#catalog-gallery');
    $(function () {
        sectionMode.find('a').on('click', function (e) {
            e.preventDefault();
            var that = $(this);
            var href = that.attr('href');
            var url = '{{ Request::fullUrl() }}';

            if (href == '#catalog-gallery') {
                sectionList.removeClass('active');
                catalogList.removeClass('is-active');
                sectionGallery.addClass('active');
                catalogGallery.addClass('is-active');
                if (history.pushState) {
                    var newUrl = updateQueryStringParameter(url, 'mode', 'grid');
                    window.history.pushState({path:newUrl}, '', newUrl);
                }
            } else {
                sectionGallery.removeClass('active');
                catalogGallery.removeClass('is-active');
                sectionList.addClass('active');
                catalogList.addClass('is-active');
                if (history.pushState) {
                    var newUrl = updateQueryStringParameter(url, 'mode', 'list');
                    window.history.pushState({path:newUrl}, '', newUrl);
                }
            }
        });
    });
</script> --}}
<script>
    // Range Slider
    var range_slider = $('#range-slider');
    var initialPriceFrom = '{{ old('price_from') }}';
    var initialPriceTo = '{{ old('price_to') }}' != '' ? '{{ old('price_to') }}' : '{{ round($maxPrice) }}';
    range_slider.ionRangeSlider({
        type: "double",
        // grid: range_slider.data('grid'),
        min: 0,
        max: '{{ round($maxPrice) }}',
        from: initialPriceFrom,
        to: initialPriceTo,
        prefix: range_slider.data('prefix'),
        onFinish: function (data) {
            var priceInputsWrapper = $('.price-inputs');
            var $priceFrom = priceInputsWrapper.find('input:first-child').val(data.from);
            var $priceTo = priceInputsWrapper.find('input:last-child').val(data.to);

            var $url = getUrl('/get_price_ranges');

            var requestQueryString = '{{ is_array(request()->query()) && !empty(request()->query()) ? json_encode(request()->query()) : "{}" }}';

            var requestQueryClearedJSON = requestQueryString.replace(/&quot;/gi,"\"")
            .replace(/\[/gi,"")
            .replace(/\]/gi,"");

            var requestQueryObj = JSON.parse(requestQueryClearedJSON);

            delete requestQueryObj.price_to;
            delete requestQueryObj.price_from;

            var requestData = Object.assign({
                price_from: $priceFrom.val(), 
                price_to: $priceTo.val()
            }, requestQueryObj);

            $.ajax({
                data: requestData,
                url: $url,
                dataType: 'json',
                method: 'get',
                success: function (data) {
                        // console.log(data.url);
                        window.location.href = data.url;
                    },
                    error: function (data) {
                        // console.log('error');
                    }
                });
        },
    });
</script>

<script>
    function updateQueryStringParameter(uri, key, value) {
        var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
        var separator = uri.indexOf('?') !== -1 ? "&" : "?";
        if (uri.match(re)) {
            return uri.replace(re, '$1' + key + "=" + value + '$2');
        } else {
            return uri + separator + key + "=" + value;
        }
    }
</script>
@endsection