  <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-auto align-self-center">
                                                <img src="{{BASE}}assets/img/masterocard.png" alt="">
                                            </div>
                                            <div class="col align-self-center text-end">
                                                <p class="small">
                                                    <span class="text-uppercase size-10">Validity</span><br>
                                                    <span class="text-muted">09/24</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="fw-normal mb-2">
                                                    150540.00
                                                    <span class="small text-muted">USD</span>
                                                </h4>
                                                <p class="mb-0 text-muted size-12">10141 0021 0001 0154</p>
                                                <p class="text-muted size-12">Debit Card</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>










<div class="swiper-slide">
                                <div class="card dark-bg">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-auto align-self-center">
                                                <img src="assets/img/masterocard.png" alt="">
                                            </div>
                                            <div class="col align-self-center text-end">
                                                <p class="small">
                                                    <span class="text-uppercase size-10">Validity</span><br>
                                                    <span class="text-muted">06/25</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="fw-normal mb-2">
                                                    56040.00
                                                    <span class="small text-muted">USD</span>
                                                </h4>
                                                <p class="mb-0 text-muted size-12">10141 0021 0001 0154</p>
                                                <p class="text-muted size-12">Debit Card</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

















{% for card in cards %}
                            <div class="swiper-slide">
                                <div class="card theme-radial-gradient border-0">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-auto align-self-center">
                                                <i class="bi bi-wallet2"></i> Wallet
                                            </div>
                                            <div class="col align-self-center text-end">
                                                <p class="small">
                                                    <span class="text-uppercase size-10">{{card.expira}}</span><br>
                                                    <span class="text-muted">Unlimited</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="fw-normal mb-2">
                                                    100.00
                                                    <span class="small text-muted">USD</span>
                                                </h4>
                                                <p class="mb-0 text-muted size-12">10141 0021 0001 0154</p>
                                                <p class="text-muted size-12">Debit Card</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endfor %}
