<x-app-layouts>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Dashboard</h1>

                <form method="post" action="{{ route('dashboard.update', $score->id) }}">

                    @method('PUT')
        
                    @csrf

                    @include('dashboard._form')
                    
    
    </form>
            </div>
        </div>
    </div>
    
</x-app-layouts>

    