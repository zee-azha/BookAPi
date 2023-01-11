<?php
namespace App\Database\Seeds;
class ContactTableSeeder extends \CodeIgniter\Database\Seeder {
public function run() {
  $data = [
    [
    'title' => 'Makna Budaya Dalam Komunikasi Antar Budaya',
    'year' => '2009',
    'author' => 'Alo Liliweri',
    'publisher' => 'LKiS',
    'status' => 'ready',
    'price' => '20000'
    ],
    [
        'title' => 'Strategi Meningkatkan Daya Baca	',
        'year' => '2016',
        'author' => 'Nurhadi',
        'publisher' => 'Bumi Aksara',
        'status' => 'ready',
        'price' => '30000'
    ],
    [
        'title' => 'Perbedaan Penerapan Model Problem Based Learning',
        'year' => '2016',
        'author' => 'Dedy Miswar',
        'publisher' => 'Media Akademi',
        'status' => 'out of stock',
        'price' => '35000'
    ],
    [
        'title' => 'E-Learning dan Sistem Informasi Pendidikan Edisi 2',
        'year' => '2016',
        'author' => 'Prof. Richardus Eko Indrajit',
        'publisher' => 'Preinexus',
        'status' => 'out of stock',
        'price' => '40000'
    ],
    
    [
        'title' => 'Mobile Learning Sebuah Aplikasi Teknologi Pembelajaran',
        'year' => '2016',
        'author' => 'Dedi Darmawan',
        'publisher' => 'RajaGrafindo',
        'status' => 'ready',
        'price' => '27000'
    ]
    ];
$this->db->table('books')->insertBatch($data);}}