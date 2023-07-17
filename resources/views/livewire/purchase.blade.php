<div class="container mt-5 pt-5">
    @if(!empty($successMsg))
    <div class="alert alert-success">
        {{ $successMsg }}
    </div>
    @endif

    <form action="">

        {{-- Page 1 --}}
        <div class="{{ $currentStep != 1 ? 'd-none' : '' }}">
            <div class="purchase-steps col-12 col-xl-8 mx-auto py-4 px-3 py-xl-5">
                <div class="progress mx-auto bg-gray" role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                    <div class="progress-bar" style="width: 0%"></div>
                </div>
                <div class="purchase-step-div d-flex justify-content-between position-relative">
                    <div class="purchase-step d-flex align-items-center justify-content-center rounded-5 border-orange-bold">
                        <span class="text-orange fs-3">1</span>
                    </div>
                    <div class="purchase-step d-flex align-items-center justify-content-center rounded-5 bg-gray">
                        <span class="text-light fs-3">2</span>
                    </div>
                    <div class="purchase-step d-flex align-items-center justify-content-center rounded-5 bg-gray">
                        <span class="text-light fs-3">3</span>
                    </div>
                    <div class="purchase-step d-flex align-items-center justify-content-center rounded-5 bg-gray">
                        <span class="text-light fs-3">4</span>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column mb-4">
                <h2 class="text-center text-purple fs-3 mt-3 mb-4 my-xl-0">Pilih Paket</h2>
                <p class="fw-bold">Pilih Paket Sesuai Kebutuhanmu</p>
                <div class="card {{ $program != 1 ? 'border-gray' : 'border-orange' }} flex-column flex-xl-row rounded-4 p-4 mb-4">
                    <div class="col">
                        <h3 class="fs-4 fw-bold">Dibimbing Online</h3>
                        <div class="d-flex gap-2 my-3">
                            <span class="d-flex align-items-center gap-2 text-purple fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg>
                                30 Menit
                            </span>
                            <span class="d-flex align-items-center gap-2 text-purple fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z"/>
                                </svg>
                                Via Online Meeting
                            </span>
                        </div>
                        <ul class="d-flex flex-column p-0 gap-1" style="list-style: none;">
                            <li>Konsultasi Via Online Meeting</li>
                            <li>Bimbingan Privat</li>
                            <li>Pertemuan 1x30 Menit</li>
                            <li>Komunitas di Telegram</li>
                        </ul>
                    </div>
                    <div class="col row p-0 mt-4 mt-xl-0">
                        <div class="col-7 col-xl-12 d-flex align-items-center align-items-xl-start justify-content-xl-end">
                            <p class="d-inline-block fw-bold text-danger fs-4 m-0">Rp. 47.000,-</p>
                        </div>
                        <div class="col-5 col-xl-12 d-flex align-items-center align-items-xl-end justify-content-end">
                            {!!
                                $program != 1 ?
                                '<label class="btn-program fw-bold py-2 px-3 small" for="program-1">Pilih Paket</label>' :
                                '<label class="btn-program-checked fw-bold py-1 px-3 fs-3 lh-1 d-flex align-items-center justify-content-center" for="program-1">
                                    <i class="bi bi-check-lg"></i>
                                </label>'
                            !!}
                            <input class="form-check-input d-none" type="radio" id="program-1" wire:model="program" value="1">
                        </div>
                    </div>
                </div>
                <div class="card {{ $program != 2 ? 'border-gray' : 'border-orange' }} flex-column flex-xl-row rounded-4 p-4 mb-4">
                    <div class="col">
                        <h3 class="fs-4 fw-bold">Dibimbing Online Premium</h3>
                        <div class="d-flex gap-2 my-3">
                            <span class="d-flex align-items-center gap-2 text-purple fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg>
                                45 Menit
                            </span>
                            <span class="d-flex align-items-center gap-2 text-purple fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z"/>
                                </svg>
                                Via Online Meeting
                            </span>
                        </div>
                        <ul class="d-flex flex-column p-0 gap-1" style="list-style: none;">
                            <li>Konsultasi Via Online Meeting</li>
                            <li>Bimbingan Privat</li>
                            <li>Pertemuan 1x45 Menit</li>
                            <li>Komunitas di Telegram</li>
                        </ul>
                    </div>
                    <div class="col row p-0 mt-4 mt-xl-0">
                        <div class="col-7 col-xl-12 d-flex align-items-center align-items-xl-start justify-content-xl-end">
                            <p class="d-inline-block fw-bold text-danger fs-4 m-0">Rp. 85.000,-</p>
                        </div>
                        <div class="col-5 col-xl-12 d-flex align-items-center align-items-xl-end justify-content-end">
                            {!!
                                $program != 2 ?
                                '<label class="btn-program fw-bold py-2 px-3 small d-flex align-items-center justify-content-center" for="program-2">Pilih Paket</label>' :
                                '<label class="btn-program-checked fw-bold py-1 px-3 fs-3 lh-1 d-flex align-items-center justify-content-center" for="program-2">
                                    <i class="bi bi-check-lg"></i>
                                </label>'
                            !!}
                            <input class="form-check-input d-none" type="radio" id="program-2" wire:model="program" value="2">
                        </div>
                    </div>
                </div>
                <div class="card {{ $program != 3 ? 'border-gray' : 'border-orange' }} flex-column flex-xl-row rounded-4 p-4 mb-4">
                    <div class="col">
                        <h3 class="fs-4 fw-bold">Dibimbing Offline</h3>
                        <div class="d-flex gap-2 my-3">
                            <span class="d-flex align-items-center gap-2 text-purple fw-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg>
                                60 Menit
                            </span>
                        </div>
                        <ul class="d-flex flex-column p-0 gap-1" style="list-style: none;">
                            <li>Konsultasi Via Online Meeting</li>
                            <li>Bimbingan Privat</li>
                            <li>Pertemuan 1x60 Menit</li>
                            <li>Komunitas di Telegram</li>
                        </ul>
                    </div>
                    <div class="col row p-0 mt-4 mt-xl-0">
                        <div class="col-7 col-xl-12 d-flex align-items-center align-items-xl-start justify-content-xl-end">
                            <p class="d-inline-block fw-bold text-danger fs-4 m-0">Rp. 98.000,-</p>
                        </div>
                        <div class="col-5 col-xl-12 d-flex align-items-center align-items-xl-end justify-content-end">
                            {!!
                                $program != 3 ?
                                '<label class="btn-program fw-bold py-2 px-3 small d-flex align-items-center justify-content-center" for="program-3">Pilih Paket</label>' :
                                '<label class="btn-program-checked fw-bold py-1 px-3 fs-3 lh-1 d-flex align-items-center justify-content-center" for="program-3">
                                    <i class="bi bi-check-lg"></i>
                                </label>'
                            !!}
                            <input class="form-check-input d-none" type="radio" id="program-3" wire:model="program" value="3">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="col-4 col-xl-3 btn-orange-static px-3 text-center" type="button" wire:click="firstStepSubmit">Selanjutnya</button>
                </div>
            </div>
        </div>

        {{-- Page 2 --}}
        <div class="{{ $currentStep != 2 ? 'd-none' : '' }}">
            <div class="purchase-steps col-12 col-xl-8 mx-auto py-4 px-3 py-xl-5">
                <div class="progress mx-auto bg-gray" role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                    <div class="progress-bar" style="width: 33%"></div>
                </div>
                <div class="purchase-step-div d-flex justify-content-between position-relative">
                    <div class="purchase-step d-flex align-items-center justify-content-center rounded-5 bg-orange">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                    <div class="purchase-step d-flex align-items-center justify-content-center rounded-5 border-orange-bold">
                        <span class="text-orange fs-3">2</span>
                    </div>
                    <div class="purchase-step d-flex align-items-center justify-content-center rounded-5 bg-gray">
                        <span class="text-light fs-3">3</span>
                    </div>
                    <div class="purchase-step d-flex align-items-center justify-content-center rounded-5 bg-gray">
                        <span class="text-light fs-3">4</span>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column mb-4">
                <h2 class="text-center text-purple fs-3 mt-3 mb-4 my-xl-0">Pilih Jadwal</h2>
                <div class="mb-5">
                    <p class="fw-bold">Pilih Jadwal Bimbinganmu</p>
                    <div class="row">
                        <div class="col-12 col-xl-6 form-group mb-3">
                            <label class="form-label small" for="date">Jadwal</label>
                            <select class="form-select" wire:model="date" id="date">
                                <option selected>Open this select menu</option>
                                @foreach ($dates as $x)
                                    <option value="{{ $x }}" wire:click="updatedDate({{ $x }})">
                                        {{ \Carbon\Carbon::parse($x)->isoFormat('dddd, D MMMM Y') }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-xl-6 form-group">
                            <label class="form-label small" for="time">Sesi</label>
                            <select class="form-select" wire:model="time" id="time">
                                <option selected>Open this select menu</option>
                                @foreach ($times as $y)
                                    <option value="{{ $y }}">{{ $y }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-5 {{ $program != 3 ? 'd-none' : '' }}">
                    <p class="fw-bold">Pilih Lokasi Bimbinganmu</p>
                    <div class="row">
                        <div class="col-12 col-xl-6 form-group mb-3">
                            <label class="form-label small" for="city">Kota Domisili</label>
                            <select class="form-select" wire:model="city" id="city">
                                <option selected>Open this select menu</option>
                                @foreach ($cities as $c)
                                    <option value="{{ $c }}" wire:click="updatedCity({{ $c }})">
                                        {{ $c }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-xl-6 form-group">
                            <label class="form-label small" for="location">Lokasi Bimbingan</label>
                            <select class="form-select" wire:model="location" id="location">
                                <option selected>Open this select menu</option>
                                @foreach ($locations as $l)
                                    <option value="{{ $l }}">{{ $l }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="col-4 col-xl-3 btn btn-secondary fw-bold rounded-4" type="button" wire:click="back(1)">Sebelumnya</button>
                    <button class="col-4 col-xl-3 btn-orange-static rounded-4 py-2 px-3 text-center" type="button" wire:click="secondStepSubmit">Selanjutnya</button>
                </div>
            </div>
        </div>

        {{-- Page 3 --}}
        <div class="{{ $currentStep != 3 ? 'd-none' : '' }}">
            <div class="purchase-steps col-12 col-xl-8 mx-auto py-4 px-3 py-xl-5">
                <div class="progress mx-auto bg-gray" role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                    <div class="progress-bar" style="width: 66%"></div>
                </div>
                <div class="purchase-step-div d-flex justify-content-between position-relative">
                    <div class="purchase-step d-flex align-items-center justify-content-center rounded-5 bg-orange">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                    <div class="purchase-step d-flex align-items-center justify-content-center rounded-5 bg-orange">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                    <div class="purchase-step d-flex align-items-center justify-content-center rounded-5 border-orange-bold">
                        <span class="text-orange fs-3">3</span>
                    </div>
                    <div class="purchase-step d-flex align-items-center justify-content-center rounded-5 bg-gray">
                        <span class="text-light fs-3">4</span>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column mb-4">
                <h2 class="text-center text-purple fs-3 mt-3 mb-4 my-xl-0">Informasi Bimbingan</h2>
                <div class="form-group mb-4 mb-xl-5">
                    <label class="form-label small" for="note">Catatan untuk Tutor</label>
                    <textarea class="form-control" name="note" wire:model="note" id="note" cols="30" rows="10" placeholder="Ceritakan kendala skripsi Anda disini ..."></textarea>
                </div>
                <div class="form-group mb-5">
                    <label class="form-label small" for="document">File Skripsi (*Opsional)</label>
                    <input class="form-control" type="file" accept="application/pdf" name="document" wire:model="document" id="document">
                </div>
                <div class="d-flex justify-content-between">
                    <button class="col-4 col-xl-3 btn btn-secondary fw-bold rounded-4" type="button" wire:click="back(2)">Sebelumnya</button>
                    <button class="col-4 col-xl-3 btn-orange-static rounded-4 py-2 px-3 text-center" type="button" wire:click="thirdStepSubmit">Selanjutnya</button>
                </div>
            </div>
        </div>

        {{-- Page 4 --}}
        <div class="{{ $currentStep != 4 ? 'd-none' : '' }}">
            <div class="purchase-steps col-12 col-xl-8 mx-auto py-4 px-3 py-xl-5">
                <div class="progress mx-auto bg-gray" role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <div class="purchase-step-div d-flex justify-content-between position-relative">
                    <div class="purchase-step d-flex align-items-center justify-content-center rounded-5 bg-orange">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                    <div class="purchase-step d-flex align-items-center justify-content-center rounded-5 bg-orange">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                    <div class="purchase-step d-flex align-items-center justify-content-center rounded-5 bg-orange">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                    <div class="purchase-step d-flex align-items-center justify-content-center rounded-5 border-orange-bold">
                        <span class="text-orange fs-3">4</span>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column mb-4">
                <h2 class="text-center text-purple fs-3 mt-3 mb-4 my-xl-0">Pembayaran</h2>
                <p class="fw-bold">Pilih Metode Pembayaran</p>
                <div id="purchase-method">
                    <div class="card rounded-4 py-3 px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Transfer Virtual Account</h5>
                            <i class="fa-sharp fa-solid fa-chevron-down fs-4" data-bs-toggle="collapse" href="#transfer-1" role="button" aria-expanded="false" aria-controls="transfer-1"></i>
                        </div>
                        <div class="collapse {{ in_array($purchaseMethod, $purchaseMethods['virtual-account']) ? 'show' : '' }}" id="transfer-1">
                            <div class="row gap-3 pt-3">
                                <div class="col-2 col-xl-1 d-flex p-0">
                                    <label for="bca" class="card {{ $purchaseMethod == 'bca' ? 'purchase-method-active' : 'purchase-method' }} justify-content-center p-2 w-100" role="button">
                                        <img src="{{ asset('image/assets/images/purchase/logo-bca.svg') }}" alt="Logo BCA">
                                    </label>
                                    <input wire:model="purchaseMethod" class="d-none" type="radio" id="bca" value="bca">
                                </div>
                                <div class="col-2 col-xl-1 d-flex p-0">
                                    <label for="bni" class="card {{ $purchaseMethod == 'bni' ? 'purchase-method-active' : 'purchase-method' }} justify-content-center p-2 w-100" role="button">
                                        <img src="{{ asset('image/assets/images/purchase/logo-bni.svg') }}" alt="Logo BNI">
                                    </label>
                                    <input wire:model="purchaseMethod" class="d-none" type="radio" id="bni" value="bni">
                                </div>
                                <div class="col-2 col-xl-1 d-flex p-0">
                                    <label for="mandiri" class="card {{ $purchaseMethod == 'mandiri' ? 'purchase-method-active' : 'purchase-method' }} justify-content-center p-2 w-100" role="button">
                                        <img src="{{ asset('image/assets/images/purchase/logo-mandiri.svg') }}" alt="Logo Mandiri">
                                    </label>
                                    <input wire:model="purchaseMethod" class="d-none" type="radio" id="mandiri" value="mandiri">
                                </div>
                                <div class="col-2 col-xl-1 d-flex p-0">
                                    <label for="permata-bank" class="card {{ $purchaseMethod == 'permata-bank' ? 'purchase-method-active' : 'purchase-method' }} justify-content-center p-2 w-100" role="button">
                                        <img src="{{ asset('image/assets/images/purchase/logo-permata-bank.svg') }}" alt="Logo Permata Bank">
                                    </label>
                                    <input wire:model="purchaseMethod" class="d-none" type="radio" id="permata-bank" value="permata-bank">
                                </div>
                                <div class="col-2 col-xl-1 d-flex p-0">
                                    <label for="cimb" class="card {{ $purchaseMethod == 'cimb' ? 'purchase-method-active' : 'purchase-method' }} justify-content-center p-2 w-100" role="button">
                                        <img src="{{ asset('image/assets/images/purchase/logo-cimb.svg') }}" alt="Logo CIMB">
                                    </label>
                                    <input wire:model="purchaseMethod" class="d-none" type="radio" id="cimb" value="cimb">
                                </div>
                                <div class="col-2 col-xl-1 d-flex p-0">
                                    <label for="maybank" class="card {{ $purchaseMethod == 'maybank' ? 'purchase-method-active' : 'purchase-method' }} justify-content-center p-2 w-100" role="button">
                                        <img src="{{ asset('image/assets/images/purchase/logo-maybank.svg') }}" alt="Logo Maybank">
                                    </label>
                                    <input wire:model="purchaseMethod" class="d-none" type="radio" id="maybank" value="maybank">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-4 py-3 px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="m-0">E-Money</h5>
                            <i class="fa-sharp fa-solid fa-chevron-down fs-4" data-bs-toggle="collapse" href="#transfer-2" role="button" aria-expanded="false" aria-controls="transfer-2"></i>
                        </div>
                        <div class="collapse {{ in_array($purchaseMethod, $purchaseMethods['e-money']) ? 'show' : '' }}" id="transfer-2">
                            <div class="row gap-3 pt-3">
                                <div class="col-2 col-xl-1 d-flex p-0">
                                    <label for="qris" class="card {{ $purchaseMethod == 'qris' ? 'purchase-method-active' : 'purchase-method' }} justify-content-center p-2 w-100" role="button">
                                        <img src="{{ asset('image/assets/images/purchase/logo-qris.svg') }}" alt="Logo QRIS">
                                    </label>
                                    <input wire:model="purchaseMethod" class="d-none" type="radio" id="qris" value="qris">
                                </div>
                                <div class="col-2 col-xl-1 d-flex p-0">
                                    <label for="ovo" class="card {{ $purchaseMethod == 'ovo' ? 'purchase-method-active' : 'purchase-method' }} justify-content-center p-2 w-100" role="button">
                                        <img src="{{ asset('image/assets/images/purchase/logo-ovo.svg') }}" alt="Logo OVO">
                                    </label>
                                    <input wire:model="purchaseMethod" class="d-none" type="radio" id="ovo" value="ovo">
                                </div>
                                <div class="col-2 col-xl-1 d-flex p-0">
                                    <label for="shopeepay" class="card {{ $purchaseMethod == 'shopeepay' ? 'purchase-method-active' : 'purchase-method' }} justify-content-center p-2 w-100" role="button">
                                        <img src="{{ asset('image/assets/images/purchase/logo-shopeepay.svg') }}" alt="Logo Shopeepay">
                                    </label>
                                    <input wire:model="purchaseMethod" class="d-none" type="radio" id="shopeepay" value="shopeepay">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-4 py-3 px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Cicilan</h5>
                            <i class="fa-sharp fa-solid fa-chevron-down fs-4" data-bs-toggle="collapse" href="#transfer-3" role="button" aria-expanded="false" aria-controls="transfer-3"></i>
                        </div>
                        <div class="collapse {{ in_array($purchaseMethod, $purchaseMethods['cicilan']) ? 'show' : '' }}" id="transfer-3">
                            <div class="row gap-3 pt-3">
                                <div class="col-2 col-xl-1 d-flex p-0">
                                    <label for="kredivo" class="card {{ $purchaseMethod == 'kredivo' ? 'purchase-method-active' : 'purchase-method' }} justify-content-center p-2 w-100" role="button">
                                        <img src="{{ asset('image/assets/images/purchase/logo-kredivo.svg') }}" alt="Logo Kredivo">
                                    </label>
                                    <input wire:model="purchaseMethod" class="d-none" type="radio" id="kredivo" value="kredivo">
                                </div>
                                <div class="col-2 col-xl-1 d-flex p-0">
                                    <label for="cicil" class="card {{ $purchaseMethod == 'cicil' ? 'purchase-method-active' : 'purchase-method' }} justify-content-center p-2 w-100" role="button">
                                        <img src="{{ asset('image/assets/images/purchase/logo-cicil.svg') }}" alt="Logo Cicil">
                                    </label>
                                    <input wire:model="purchaseMethod" class="d-none" type="radio" id="cicil" value="cicil">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-4 py-3 px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Lainnya</h5>
                            <i class="fa-sharp fa-solid fa-chevron-down fs-4" data-bs-toggle="collapse" href="#transfer-4" role="button" aria-expanded="false" aria-controls="transfer-4"></i>
                        </div>
                        <div class="collapse {{ in_array($purchaseMethod, $purchaseMethods['lainnya']) ? 'show' : '' }}" id="transfer-4">
                            <div class="row gap-3 pt-3">
                                <div class="col-2 col-xl-1 d-flex p-0">
                                    <label for="alfamart" class="card {{ $purchaseMethod == 'alfamart' ? 'purchase-method-active' : 'purchase-method' }} justify-content-center p-2 w-100" role="button">
                                        <img src="{{ asset('image/assets/images/purchase/logo-alfamart.svg') }}" alt="Logo Alfamart">
                                    </label>
                                    <input wire:model="purchaseMethod" class="d-none" type="radio" id="alfamart" value="alfamart">
                                </div>
                                <div class="col-2 col-xl-1 d-flex p-0">
                                    <label for="indomaret" class="card {{ $purchaseMethod == 'indomaret' ? 'purchase-method-active' : 'purchase-method' }} justify-content-center p-2 w-100" role="button">
                                        <img src="{{ asset('image/assets/images/purchase/logo-indomaret.svg') }}" alt="Logo Indomaret">
                                    </label>
                                    <input wire:model="purchaseMethod" class="d-none" type="radio" id="indomaret" value="indomaret">
                                </div>
                                <div class="col-2 col-xl-1 d-flex p-0">
                                    <label for="pos-indonesia" class="card {{ $purchaseMethod == 'pos-indonesia' ? 'purchase-method-active' : 'purchase-method' }} justify-content-center p-2 w-100" role="button">
                                        <img src="{{ asset('image/assets/images/purchase/logo-pos-indonesia.svg') }}" alt="Logo Pos Indonesia">
                                    </label>
                                    <input wire:model="purchaseMethod" class="d-none" type="radio" id="pos-indonesia" value="pos-indonesia">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="m-0 mb-4">
                <div class="card rounded-4 py-3 px-4 mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="m-0">Voucher Goals Academy (Opsional)</h5>
                        <a role="button" class="small fw-bold text-decoration-none text-orange">Lihat Voucher</a>
                    </div>
                </div>
                <div class="card flex-column rounded-4 py-3 px-4 mb-4">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <h5 class="m-0 mb-2">Paket Dibimbing Sekali</h5>
                            <p class="small m-0">Selasa, 30 Februari 2023 | Pukul 14.00 WIB</p>
                            <p class="small m-0">Tutor : Kak Yordhan</p>
                        </div>
                        <p class="fs-5">Rp 43.000</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="m-0">Voucher</h5>
                        <p class="d-inline-block fs-5 m-0">- Rp 10.000</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="m-0">Total</h5>
                        <p class="d-inline-block fs-4 fw-bold text-danger m-0">Rp 33.000</p>
                    </div>
                </div>
                <div>
                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                    <label class="btn-radio-orange" for="btncheck1">
                        <i class="bi bi-check-lg"></i>
                    </label>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="col-4 col-xl-3 btn btn-secondary fw-bold rounded-4" type="button" wire:click="back(3)">Sebelumnya</button>
                    <button class="col-4 col-xl-3 btn-orange-static rounded-4 py-2 px-3 text-center" type="button" wire:click="submitForm">Bayar</button>
                </div>
            </div>
        </div>
    </form>
</div>
