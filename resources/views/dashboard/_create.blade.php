<div class="card">
    <div class="card-header">Create new Task</div>
            <div class="card-body">
                
                <form method="post" action="{{ route('dashboard.store') }}" class="d-grid gap-2 d-md-flex">
                    
                    @csrf

                    @include('dashboard._form')
                
                </form>
            </div>
</div>