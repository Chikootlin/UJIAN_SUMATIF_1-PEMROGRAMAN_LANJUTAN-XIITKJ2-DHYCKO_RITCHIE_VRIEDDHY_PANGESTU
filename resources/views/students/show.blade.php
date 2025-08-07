@extends('layouts.app')

@section('content')

<x-card-show 
    :id="$student['id']" 
    :username="$student['username']"
    :nama="$student['nama']"
    :kelas="$student['kelas']"
    :hobi="$student['hobi']"
    :foto="$student['foto']"
    :deskripsi="$student['deskripsi']"
/>

@endsection