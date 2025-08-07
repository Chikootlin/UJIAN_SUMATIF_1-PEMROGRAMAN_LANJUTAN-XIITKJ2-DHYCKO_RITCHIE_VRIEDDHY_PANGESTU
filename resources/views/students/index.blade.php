@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ($students as $data)
            <a href="{{ url('/students/' . $data['id']) }}" class="block text-inherit no-underline">
                <x-card-student 
                    foto="{{ $data['foto'] }}" 
                    nama="{{ $data['nama'] }}"  
                    username="{{ $data['username'] }}" 
                    deskripsi="{{ $data['deskripsi'] }}" 
                />
            </a>
        @endforeach
    </div>
</div>


@endsection
