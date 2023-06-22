<div class="text-red-500 text-xs mt-2 text-center">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-style-type: circle">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
