@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>警告!</strong>
        以下地方出现错误：.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif