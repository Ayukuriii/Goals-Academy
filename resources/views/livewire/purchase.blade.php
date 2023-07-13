<div class="container mt-5 pt-5">
    @if(!empty($successMsg))
    <div class="alert alert-success">
        {{ $successMsg }}
    </div>
    @endif

    <form action="">
        <div class="{{ $currentStep != 1 ? 'd-none' : '' }}">
            <div class="purchase-steps w-75 mx-auto py-5">
                <div class="progress mx-auto bg-gray" role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 4px; width: 90%">
                    <div class="progress-bar" style="width: 0%"></div>
                </div>
                <div class="d-flex justify-content-between position-relative" style="margin-top: -30px;">
                    <div class="d-flex align-items-center justify-content-center rounded-5 border-orange-bold" style="width: 55px; height: 55px;">
                        <span class="text-orange fs-3">1</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-center rounded-5 bg-gray" style="width: 55px; height: 55px;">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                    <div class="d-flex align-items-center justify-content-center rounded-5 bg-gray" style="width: 55px; height: 55px;">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                    <div class="d-flex align-items-center justify-content-center rounded-5 bg-gray" style="width: 55px; height: 55px;">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column mb-4">
                <h2 class="text-center text-purple fs-3">Pilih Paket</h2>
                <p class="fw-bold">Pilih Paket Sesuai Kebutuhanmu</p>
                <div class="card {{ $program != 1 ? 'border-gray' : 'border-orange' }} flex-row rounded-4 p-4 mb-4">
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
                    <div class="col">
                        <p class="fw-bold text-danger fs-4 text-end">Rp. 47.000,-</p>
                        <div class="d-flex align-items-center justify-content-end">
                            {!!
                                $program != 1 ?
                                '<label class="btn-program fw-bold py-2 px-3" for="program-1">Pilih Paket</label>' :
                                '<label class="btn-program-checked fw-bold py-1 px-3 bi bi-check-lg fs-3 lh-1" for="program-1"></label>'
                            !!}
                            <input class="form-check-input d-none" type="radio" id="program-1" wire:model="program" value="1">
                        </div>
                    </div>
                </div>
                <div class="card {{ $program != 2 ? 'border-gray' : 'border-orange' }} flex-row rounded-4 p-4 mb-4">
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
                    <div class="col">
                        <p class="fw-bold text-danger fs-4 text-end">Rp. 85.000,-</p>
                        <div class="d-flex align-items-center justify-content-end">
                            {!!
                                $program != 2 ?
                                '<label class="btn-program fw-bold py-2 px-3" for="program-2">Pilih Paket</label>' :
                                '<label class="btn-program-checked fw-bold py-1 px-3 bi bi-check-lg fs-3 lh-1" for="program-2"></label>'
                            !!}
                            <input class="form-check-input d-none" type="radio" id="program-2" wire:model="program" value="2">
                        </div>
                    </div>
                </div>
                <div class="card {{ $program != 3 ? 'border-gray' : 'border-orange' }} flex-row rounded-4 p-4 mb-4">
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
                    <div class="col">
                        <p class="fw-bold text-danger fs-4 text-end">Rp. 98.000,-</p>
                        <div class="d-flex align-items-center justify-content-end">
                            {!!
                                $program != 3 ?
                                '<label class="btn-program fw-bold py-2 px-3" for="program-3">Pilih Paket</label>' :
                                '<label class="btn-program-checked fw-bold py-1 px-3 bi bi-check-lg fs-3 lh-1" for="program-3"></label>'
                            !!}
                            <input class="form-check-input d-none" type="radio" id="program-3" wire:model="program" value="3">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn-orange-static py-2 px-3 text-center" type="button" wire:click="firstStepSubmit">Selanjutnya</button>
                </div>
            </div>
        </div>
        <div class="{{ $currentStep != 2 ? 'd-none' : '' }}">
            <div class="purchase-steps w-75 mx-auto py-5">
                <div class="progress mx-auto bg-gray" role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 4px; width: 90%">
                    <div class="progress-bar" style="width: 33%"></div>
                </div>
                <div class="d-flex justify-content-between position-relative" style="margin-top: -30px;">
                    <div class="d-flex align-items-center justify-content-center rounded-5 bg-orange" style="width: 55px; height: 55px;">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                    <div class="d-flex align-items-center justify-content-center rounded-5 border-orange-bold" style="width: 55px; height: 55px;">
                        <span class="text-orange fs-3">2</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-center rounded-5 bg-gray" style="width: 55px; height: 55px;">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                    <div class="d-flex align-items-center justify-content-center rounded-5 bg-gray" style="width: 55px; height: 55px;">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column mb-4">
                <h2 class="text-center text-purple fs-3">Pilih Jadwal dan Sesi</h2>
                <p class="fw-bold">Pilih Jadwal Bimbinganmu</p>
                <div class="row">
                    <div class="col-6 form-group">
                        <label for="user-level">User Level</label>
                        <select class="form-select" wire:model="user_level" aria-label="Default select example" id="user-level">
                            <option selected>Open this select menu</option>
                            @foreach ($user_levels as $x)
                                <option value="{{ Str::lower($x) }}" wire:click="updatedUserLevel({{ Str::lower($x) }})">{{ $x }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 form-group">
                        <label for="user">User</label>
                        <select class="form-select" wire:model="user" aria-label="Default select example" id="user">
                            <option selected>Open this select menu</option>
                            @foreach ($users as $u)
                                <option value="{{ $u->id }}">{{ $u->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-secondary" type="button" wire:click="back(1)">Sebelumnya</button>
                    <button class="btn-orange-static py-2 px-3 text-center" type="button" wire:click="secondStepSubmit">Selanjutnya</button>
                </div>
            </div>
        </div>
        <div class="{{ $currentStep != 3 ? 'd-none' : '' }}">
            <div class="purchase-steps w-75 mx-auto py-5">
                <div class="progress mx-auto bg-gray" role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 4px; width: 90%">
                    <div class="progress-bar" style="width: 66%"></div>
                </div>
                <div class="d-flex justify-content-between position-relative" style="margin-top: -30px;">
                    <div class="d-flex align-items-center justify-content-center rounded-5 bg-orange" style="width: 55px; height: 55px;">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                    <div class="d-flex align-items-center justify-content-center rounded-5 bg-orange" style="width: 55px; height: 55px;">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                    <div class="d-flex align-items-center justify-content-center rounded-5 border-orange-bold" style="width: 55px; height: 55px;">
                        <span class="text-orange fs-3">3</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-center rounded-5 bg-gray" style="width: 55px; height: 55px;">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column mb-4">
                <h2 class="text-center text-purple fs-3">Pilih Paket</h2>
                <p class="fw-bold">Pilih paket sesuai kebutuhanmu</p>
                test3
                <div class="d-flex justify-content-between">
                    <button type="button" wire:click="back(2)">Sebelumnya</button>
                    <button class="btn-orange-static py-2 px-3 text-center" type="button" wire:click="thirdStepSubmit">Selanjutnya</button>
                </div>
            </div>
        </div>
        <div class="{{ $currentStep != 4 ? 'd-none' : '' }}">
            <div class="purchase-steps w-75 mx-auto py-5">
                <div class="progress mx-auto bg-gray" role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 4px; width: 90%">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <div class="d-flex justify-content-between position-relative" style="margin-top: -30px;">
                    <div class="d-flex align-items-center justify-content-center rounded-5 bg-orange" style="width: 55px; height: 55px;">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                    <div class="d-flex align-items-center justify-content-center rounded-5 bg-orange" style="width: 55px; height: 55px;">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                    <div class="d-flex align-items-center justify-content-center rounded-5 bg-orange" style="width: 55px; height: 55px;">
                        <i class="bi bi-check-lg text-light fs-2"></i>
                    </div>
                    <div class="d-flex align-items-center justify-content-center rounded-5 border-orange-bold" style="width: 55px; height: 55px;">
                        <span class="text-orange fs-3">4</span>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column mb-4">
                <h2 class="text-center text-purple fs-3">Pilih Paket</h2>
                <p class="fw-bold">Pilih paket sesuai kebutuhanmu</p>
                test4
                <div class="d-flex justify-content-between">
                    <button type="button" wire:click="back(3)">Sebelumnya</button>
                    <button class="btn-orange-static py-2 px-3 text-center" type="button" wire:click="submitForm">Submit</button>
                </div>
            </div>
        </div>
    </form>
    {{-- <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="multi-wizard-step">
                <a href="#step-1" type="button"
                    class="btn {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                <p>Step 1</p>
            </div>
            <div class="multi-wizard-step">
                <a href="#step-2" type="button"
                    class="btn {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                <p>Step 2</p>
            </div>
            <div class="multi-wizard-step">
                <a href="#step-3" type="button"
                    class="btn {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}"
                    disabled="disabled">3</a>
                <p>Step 3</p>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
        <div class="col-md-12">
            <h3> Step 1</h3>
            <div class="form-group">
                <label for="title">Team Name:</label>
                <input type="text" wire:model="name" class="form-control" id="taskTitle">
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">Team Price:</label>
                <input type="text" wire:model="price" class="form-control" id="teamPrice" />
                @error('price') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="detail">Team Details:</label>
                <textarea type="text" wire:model="detail" class="form-control"
                    id="taskDetail">{{{ $detail ?? '' }}}</textarea>
                @error('detail') <span class="error">{{ $message }}</span> @enderror
            </div>
            <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit"
                type="button">Next</button>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
        <div class="col-md-12">
            <h3> Step 2</h3>
            <div class="form-group">
                <label for="description">Team Status</label><br />
                <label class="radio-inline"><input type="radio" wire:model="status" value="1"
                        {{{ $status == '1' ? "checked" : "" }}}> Active</label>
                <label class="radio-inline"><input type="radio" wire:model="status" value="0"
                        {{{ $status == '0' ? "checked" : "" }}}> DeActive</label>
                @error('status') <span class="error">{{ $message }}</span> @enderror
            </div>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                wire:click="secondStepSubmit">Next</button>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
        <div class="col-md-12">
            <h3> Step 3</h3>
            <table class="table">
                <tr>
                    <td>Team Name:</td>
                    <td><strong>{{$name}}</strong></td>
                </tr>
                <tr>
                    <td>Team Price:</td>
                    <td><strong>{{$price}}</strong></td>
                </tr>
                <tr>
                    <td>Team status:</td>
                    <td><strong>{{$status ? 'Active' : 'DeActive'}}</strong></td>
                </tr>
                <tr>
                    <td>Team Detail:</td>
                    <td><strong>{{$detail}}</strong></td>
                </tr>
            </table>
            <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
            <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
        </div>
    </div> --}}
</div>
