<x-layout>

    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <h1 class="display-1 fw-bolder">Benvenut* su SocialVerse</h1>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <h3 class="display-3 fw-bold">Profilo di {{ Auth::user()->name }}</h3>
        </div>
    </div>

</x-layout>