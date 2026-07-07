<x-layout>
    
    
    <div class="row mt-2">
        <div class="col-12 d-flex flex-column justify-content-center align-items-center">
            <h1 class="display-1 fw-bolder">Benvenuti su SocialVerse</h1>
            <h4 class="display-6 fw-semibold text-center mt-3">Accedi al tuo profilo!</h4>
        </div>
    </div>
    
    <x-error />

    <div class="row container-fluid justify-content-center mt-3">
        <form class="col-12 col-md-6 bg-gr p-4 my-4 rounded-4 shadow w-md-50" method="POST" action="{{ route('login.store') }}">
            <div class="mb-3">
                <label for="email" class="form-label fs-5 fw-medium">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fs-5 fw-medium">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="d-flex justify-content-center align-items-center mt-4">
                <button type="submit" class="btn btn-form">Accedi</button>
            </div>
        </form>
    </div>
    
</x-layout>