@if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->ALL() as $error)
                <p>{{ $error }}</p>
            @endforeach        
        </div>
@endif