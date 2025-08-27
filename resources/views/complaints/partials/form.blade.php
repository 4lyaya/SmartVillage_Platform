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

<div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" name="name" class="form-control" value="{{ $fields['name'] }}">
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="national_id" class="form-label">NIK</label>
    <input type="text" name="national_id" class="form-control" value="{{ $fields['national_id'] }}">
    @error('national_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="address" class="form-label">Alamat</label>
    <textarea name="address" class="form-control">{{ $fields['address'] }}</textarea>
    @error('address')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="phone" class="form-label">Telepon</label>
    <input type="text" name="phone" class="form-control" value="{{ $fields['phone'] }}">
    @error('phone')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email (opsional)</label>
    <input type="email" name="email" class="form-control" value="{{ $fields['email'] }}">
    @error('email')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="category_id" class="form-label">Kategori</label>
    <select name="category_id" class="form-control">
        <option value="">-- Pilih Kategori --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $fields['category_id'] == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="location" class="form-label">Lokasi</label>
    <input type="text" name="location" class="form-control" value="{{ $fields['location'] }}">
    @error('location')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="date" class="form-label">Tanggal</label>
    <input type="date" name="date" class="form-control" value="{{ $fields['date'] }}">
    @error('date')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Deskripsi</label>
    <textarea name="description" class="form-control">{{ $fields['description'] }}</textarea>
    @error('description')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="photo" class="form-label">Foto (opsional)</label>
    <input type="file" name="photo" class="form-control">
    @if (!empty($complaint->photo))
        <p class="mt-2">
            <img src="{{ asset('storage/' . $complaint->photo) }}" alt="Foto" class="img-fluid"
                style="max-height: 150px;">
        </p>
    @endif
    @error('photo')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
