@include('layouts.header')

<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Come On In</span>
                        <span class="section-heading-lower">We're Open</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Monday
                            <span class="ms-auto">08:00 - 22:00</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Tuesday
                            <span class="ms-auto">08:00 - 22:00</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Wednesday
                            <span class="ms-auto">08:00 - 22:00</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Thursday
                            <span class="ms-auto">08:00 - 22:00</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Friday
                            <span class="ms-auto">08:00 - 22:00</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Saturday
                            <span class="ms-auto">08:00 - 22:00</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Sunday
                            <span class="ms-auto">Closed</span>
                        </li>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>1999 Old Street</strong>
                            <br />
                            Bangkok, Nontaburi
                        </em>
                    </p>
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
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('/img/library.jpg')}}" alt="..." />
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Strong Book,&nbsp; Strong Services</span>
                            <span class="section-heading-lower">About My Shop</span>
                        </h2>
                        <p>&emsp; เว็บไซต์นี้จัดทำมาเพื่อขายหนังสือมือสองที่ผู้จัดทำได้อ่านจบแล้วมาส่งต่อในราคาย่อมเยาว์ เพื่อที่จะนำเงินที่ได้ไปสอบขึ้นทะเบียนใบอนุญาติที่ปรึกษาการเงิน ( IP, AFPT )</p>
                        <p class="mb-0">
                            &emsp; ถ้าผู้ซื้ออ่านหนังสือแล้วมีตรงไหนสงสัย อ่านไม่เข้าใจ หรือต้องการเพื่อนสนทนาสามารถทักมาได้ทุกเมื่อ
                            <a href="https://www.facebook.com/nattanun.chaichomphoo.3/" target="_blank" class="text-primary">Click</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')