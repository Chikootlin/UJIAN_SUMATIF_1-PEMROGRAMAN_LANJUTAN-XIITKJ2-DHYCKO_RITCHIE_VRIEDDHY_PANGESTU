<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = [
            [
                'id' => 1,
                'username' => 'andi_tkj',
                'nama' => 'Andi Pratama',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Futsal',
                'foto' => 'https://i.ibb.co.com/ymR6vTzt/FREE-HDconvert-com-icon-017-01.png',
                'deskripsi' => 'Saya senang berolahraga dan bercita-cita menjadi atlet profesional.'
            ],
            [
                'id' => 2,
                'username' => 'bella_code',
                'nama' => 'Bella Arumsari',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Ngoding',
                'foto' => 'https://i.ibb.co.com/sv7cFMRn/stiker2.png',
                'deskripsi' => 'Saya suka mempelajari bahasa pemrograman dan ingin menjadi software engineer.'
            ],
            [
                'id' => 3,
                'username' => 'cika_dance',
                'nama' => 'Cika Ramadhani',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Menari',
                'foto' => 'https://i.ibb.co.com/Nngc3ztk/Open-War.jpg',
                'deskripsi' => 'Menari adalah cara saya mengekspresikan diri dan semangat.'
            ],
            [
                'id' => 4,
                'username' => 'dani_design',
                'nama' => 'Dani Saputra',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Desain Grafis',
                'foto' => 'https://i.ibb.co.com/4ZvCt2dS/nerd-bigstock-Extreme-Computer-Nerd-1520708.jpg',
                'deskripsi' => 'Saya senang membuat desain yang estetik dan fungsional.'
            ]
        ];

        return view('students.index', compact('students'));
    }

    public function show($id){
        $students = [
            [
                'id' => 1,
                'username' => 'andi_tkj',
                'nama' => 'Andi Pratama',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Futsal',
                'foto' => 'https://i.ibb.co.com/ymR6vTzt/FREE-HDconvert-com-icon-017-01.png',
                'deskripsi' => 'Saya senang berolahraga dan bercita-cita menjadi atlet profesional.'
            ],
            [
                'id' => 2,
                'username' => 'bella_code',
                'nama' => 'Bella Arumsari',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Ngoding',
                'foto' => 'https://i.ibb.co.com/sv7cFMRn/stiker2.png',
                'deskripsi' => 'Saya suka mempelajari bahasa pemrograman dan ingin menjadi software engineer.'
            ],
            [
                'id' => 3,
                'username' => 'cika_dance',
                'nama' => 'Cika Ramadhani',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Menari',
                'foto' => 'https://i.ibb.co.com/Nngc3ztk/Open-War.jpg',
                'deskripsi' => 'Menari adalah cara saya mengekspresikan diri dan semangat.'
            ],
            [
                'id' => 4,
                'username' => 'dani_design',
                'nama' => 'Dani Saputra',
                'kelas' => '12 TKJ 1',
                'hobi' => 'Desain Grafis',
                'foto' => 'https://i.ibb.co.com/4ZvCt2dS/nerd-bigstock-Extreme-Computer-Nerd-1520708.jpg',
                'deskripsi' => 'Saya senang membuat desain yang estetik dan fungsional.'
            ]
        ];

        $result = array_filter($students, function($item) use ($id) {
            return $item['id'] == $id;
        });

        $student = reset($result);
        
        return view('students.show', compact('student'));
    }
}
