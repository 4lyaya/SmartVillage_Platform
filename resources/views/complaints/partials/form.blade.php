@php
    $fields = [
        'name' => old('name', $complaint->name ?? ''),
        'national_id' => old('national_id', $complaint->national_id ?? ''),
        'address' => old('address', $complaint->address ?? ''),
        'phone' => old('phone', $complaint->phone ?? ''),
        'email' => old('email', $complaint->email ?? ''),
        'category_id' => old('category_id', $complaint->category_id ?? ''),
        'location' => old('location', $complaint->location ?? ''),
        'date' => old('date', $complaint->date ?? ''),
        'description' => old('description', $complaint->description ?? ''),
    ];
@endphp

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="name" class="form-label">Nama <span class="text-danger">*</span></label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
            value="{{ $fields['name'] }}" required>
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label for="national_id" class="form-label">NIK <span class="text-danger">*</span></label>
        <input type="text" name="national_id" class="form-control @error('national_id') is-invalid @enderror"
            value="{{ $fields['national_id'] }}" required>
        @error('national_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="mb-3">
    <label for="address" class="form-label">Alamat <span class="text-danger">*</span></label>
    <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="3" required>{{ $fields['address'] }}</textarea>
    @error('address')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="phone" class="form-label">Telepon <span class="text-danger">*</span></label>
        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
            value="{{ $fields['phone'] }}" required>
        @error('phone')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
            value="{{ $fields['email'] }}">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="category_id" class="form-label">Kategori <span class="text-danger">*</span></label>
        <select name="category_id" class="form-select @error('category_id') is-invalid @enderror" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $fields['category_id'] == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label for="location" class="form-label">Lokasi <span class="text-danger">*</span></label>
        <input type="text" name="location" class="form-control @error('location') is-invalid @enderror"
            value="{{ $fields['location'] }}" required>
        @error('location')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="date" class="form-label">Tanggal <span class="text-danger">*</span></label>
        <input type="date" name="date" class="form-control @error('date') is-invalid @enderror"
            value="{{ $fields['date'] }}" required>
        @error('date')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label for="photo" class="form-label">Foto Baru (opsional)</label>
        <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" accept="image/*">
        <div class="form-text">Maksimal 2MB. Format: JPG, PNG, JPEG.</div>
        @error('photo')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Deskripsi <span class="text-danger">*</span></label>
    <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="5" required>{{ $fields['description'] }}</textarea>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
