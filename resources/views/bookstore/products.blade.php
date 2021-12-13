@include('layouts.header')

@for ($i = 0; $i < count($books); $i++)
    @if ($i % 2 === 0)
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-3 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-lower">
                                    <span class="text-secondary fs-1">{{$books[$i]->product_name}}</span>
                                    <span class="fs-5 text-capitalize text-primary">
                                        ( <strong class="fs-1">{{number_format($books[$i]->product_price)}}</strong> baht )
                                    </span>
                                </span>
                            </h2>
                        </div>
                    </div>
                    <img
                        class="
                            product-item-img
                            mx-auto
                            d-flex
                            rounded
                            img-fluid
                            mb-3 mb-lg-0
                        "
                        src="{{asset($books[$i]->product_image)}}"
                        alt="..."
                    />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-4 rounded">
                            <p class="mb-0">{{$books[$i]->product_description}}</p>
                            <p class="pt-3 m-0 text-center">
                                <a href="{{url('/incrementCart/'.$books[$i]->id)}}" class="text-primary">
                                    Add to Cart <i class="fas fa-cart-arrow-down"></i> 
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($i % 2 !== 0)
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-3 d-flex me-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-lower">
                                    <span class="text-secondary fs-1">{{$books[$i]->product_name}}</span>
                                    <span class="fs-5 text-capitalize text-primary">
                                        ( <strong class="fs-1">{{number_format($books[$i]->product_price)}}</strong> baht )
                                    </span>
                                </span>
                            </h2>
                        </div>
                    </div>
                    <img
                        class="
                            product-item-img
                            mx-auto
                            d-flex
                            rounded
                            img-fluid
                            mb-3 mb-lg-0
                        "
                        src="{{asset($books[$i]->product_image)}}"
                        alt="..."
                    />
                    <div class="product-item-description d-flex ms-auto">
                        <div class="bg-faded p-4 rounded">
                            <p class="mb-0">{{$books[$i]->product_description}}</p>
                            <p class="pt-3 m-0 text-center">
                                <a href="{{url('/incrementCart/'.$books[$i]->id)}}" class="text-primary">
                                    Add to Cart <i class="fas fa-cart-arrow-down"></i> 
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endfor
<div class=" page-link d-flex justify-content-center">{{$books->links()}}</div>

@include('layouts.footer')
