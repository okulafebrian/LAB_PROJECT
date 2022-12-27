@if (session('success'))
    <div id="alert" class="modal fade show" style="z-index: 9999;" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 25rem">
            <div class="modal-content rounded-4 shadow border-0">
                <div class="modal-body text-center p-5">
                    <img src="/storage/assets/success.png" width="75%" class="mb-2">
                    <h3 class="text-primary">{!! session('success') !!}</h3>
                </div>
            </div>
        </div>
    </div>
@endif

@if (session('failed'))
    <div id="alert" class="modal fade show" style="z-index: 9999;" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 25rem">
            <div class="modal-content rounded-4 shadow border-0">
                <div class="modal-body text-center p-5">
                    <img src="/storage/assets/failed.png" width="75%" class="mb-2">
                    <h3 class="text-primary">{!! session('failed') !!}</h3>
                </div>
            </div>
        </div>
    </div>
@endif
