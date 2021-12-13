@include('layouts.header')

<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded" id="cart">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-lower">ตระกร้าสินค้า</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex text-primary fs-5">
                            ชื่อสินค้า
                            <span class="ms-auto">ราคา</span>
                        </li>
                        @foreach($cartItems->items as $items)
                        <li class="list-unstyled-item list-hours-item d-flex">
                            <a onclick="return confirm('คุณต้องการลบหนังสือเล่มนี้ใช่หรือไม่ ?')" href="{{url('/deleteProductFromCart/'.$items['data']['id'])}}">
                                <i class="fa fa-times text-danger"></i>
                            </a> &nbsp;
                            {{$items['data']['product_name']}}
                            <span class="ms-auto">{{number_format($items['data']['product_price'])}}</span>
                        </li>
                        @endforeach
                    </ul>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                            จำนวนสินค้าทั้งหมด
                            <span class="ms-auto">{{$cartItems->totalQuantity}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            ราคาทั้งหมด
                            <span class="ms-auto">{{number_format($cartItems->totalPrice)}}</span>
                        </li>
                    </ul>
                    <a href="#checkOut">
                        <button class="btn btn-primary mb-3 fs-2">ชำระเงิน</button>
                    </a>
                    <p class="mb-0">
                        <small><em>Call Anytime</em></small>
                        <br />
                        097-007-2543
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section about-heading">
    <div class="container">
        <div class="about-heading-img" id="checkOut">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">ขอบคุณที่สนับสุนเสมอมา</span>
                            <span class="section-heading-lower">ช่องทางการชำระเงิน</span>
                        </h2>
                        <p><b>พร้อมเพย์ : </b>097-007-2543</p>
                        <p><b>กสิกร : </b>063-870-0905</p>
                        <p><b>กรุงศรี : </b>778-120-0723</p>
                        <hr>
                        <p>&emsp; เมื่อคุณลูกค้าชำระเงินเสร็จเรียบร้อยแล้ว รบกวนคุณลูกค้าถ่ายรูปหน้าจอ
                            *<a href="#cart" class="text-decoration-underline">ตะกร้าสินค้า</a>* (หรือไม่ก็ระบุชื่อสินค้ามาที่ช่องทางติดต่อได้เลย)
                            และ *หลักฐานการชำระเงิน* ส่งมาที่</p>
                        <p>Line ID : Tajmahal...</p>
                        <p>Facebook : Nut Nattanun (<a href="https://www.facebook.com/nattanun.chaichomphoo.3/" class="text-primary"> Click </a>)</p>
                        <p class="mb-0">&emsp; ผมจะเป็นคนจัดส่งสินค้าด้วยตัวเอง (กรุงเทพและนนทบุรี) ในวันถัดไปหลังจากได้ใบเสร็จรับเงิน ขอบคุณทุกคนที่สนับสนุนธุรกิจเล็กๆ ของผมครับ</p>
                    </div>
                </div>
            </div>
        </div>
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('/img/thanks.jpg')}}" alt="..." />
    </div>
</section>

@include('layouts.footer')