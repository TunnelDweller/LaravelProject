<form method="GET" action="{{ route('students.index') }}" class="mb-3">
    <select name="college_id" onchange="this.form.submit()" class="form-select w-25">
        <option value="">All Colleges</option>
        @foreach($colleges as $college)
            <option value="{{ $college->id }}" {{ request('college_id') == $college->id ? 'selected' : '' }}>
                {{ $college->name }}
            </option>
        @endforeach
    </select>
</form>
