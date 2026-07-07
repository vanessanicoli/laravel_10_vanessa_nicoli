<x-layout>

    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <h1 class="display-1 fw-bolder">Benvenuti su SocialVerse</h1>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-5 d-flex flex-column gap-2 justify-content-center mx-auto">
            <h4 class="display-6 fw-semibold text-center">Che aspetti? Unisciti a noi!</h4>
            <a class="btn btn-home" type="button" href="{{ route('register') }}">Registrati</a>
        </div>
        <div class="col-5 d-flex flex-column gap-2 justify-content-center mx-auto">
            <h4 class="display-6 fw-semibold text-center">Accedi al tuo account</h4>
            <a class="btn btn-home" type="button" href="{{ route('login') }}">Accedi</a>
        </div>
    </div>

</x-layout>