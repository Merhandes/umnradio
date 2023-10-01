<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $post_content1 = '<p class="text-justify ">“Buka lagi visimu, kau tahu mana urutan satu”<br><br>
            Sepenggal lirik dari lagu “33x” milik Perunggu jadi salah satu kalimat paling tepat untuk menggambarkan tahun-tahun kehidupan sebagai mahasiswa.<br><br>
            Ultimafriends, sebagai Maba mungkin lo merasa <i>overwhelmed</i> dengan hal-hal baru di masa awal perkuliahan. <i>Mention it</i>, OMB, perkenalan fakultas, teman-teman baru, sistem belajar yang baru, dan masih banyak hal lain. Rasa-rasanya semua terjadi dalam sekedip mata.<br><br>
            Di antara banyaknya hal yang harus dihadapi, mungkin seringkali lo berakhir kebingungan mana yang harus diselesaikan terlebih dahulu. Bahkan mungkin, ketika akhirnya lo berhasil menyelesaikan satu tugas, tiba-tiba ada tugas lain yang berbaris menunggu untuk dikerjakan. Lalu, ketika lo lihat ke kanan kiri, mungkin mulai tumbuh perasaan kalau lo belum mengusahakan sekeras orang lain.<br><br>
            Tenang, kali ini lo enggak sendiri.</p> <br> 

            <div class="flex flex-col items-center justify-center text-center">
            <img class="h-32 md:h-72 w-auto z-0" src="{{ asset(\'images/artikel2/SURAT1.webp\') }}"
            alt=""><br>
            </div>

            <p>Ultimafriends, sepertinya kita semua bisa sepakat bahwa kuliah bukan hal yang mudah, tapi bukan berarti enggak bisa diselesaikan. Ketika lo merasa sedang ada di titik bawah dalam kehidupan perkuliahan, selalu ingat kalau ada banyak hal kecil yang bisa membuat lo kembali kuat.<br><br>
            Seperti kata Cila, kuliah adalah sesuatu yang harus lo nikmatin pelan-pelan. Ketika lo sudah sanggup menemukan alasan-alasan baik untuk tetap kuat, lo akan bisa dengan jelas melihat pintu keluar untuk semua masalah. <i>You’ll survive</i>, Ultimafriends. <i>Finger crossed!</i>
            </p><br> <br> 

            <div class="flex flex-col items-center justify-center text-center">
            <img class="h-32 md:h-72 w-auto z-0" src="{{ asset(\'images/artikel2/SURAT2.webp\') }}"
            alt=""><br>
            </div>

            <p>Enggak bisa dipungkiri, sebagai mahasiswa pasti akan ada masanya lo dibuat kelimpungan menyelesaikan tugas yang datang bersamaan. Untuk itu, lo bisa mencoba untuk membuat <i>to-do-list</i> seperti Maria, supaya lo bisa menentukan mana yang paling penting untuk segera diselesaikan. <i>One step at a time</i>, Ultimafriends!<br><br>
            <i>Don’t be shy</i>, Ultimafriends, raise your hand kalau lo merasa <i>overwhelmed</i> dengan banyaknya pilihan kegiatan di kampus! Tenang, lo akan punya banyak waktu untuk mempelajari masing-masing organisasi. Kalau dalam perjalanannya nanti muncul banyak pertanyaan soal mana yang paling baik dan tepat untuk lo, jangan merasa takut untuk bertanya. <i>Just like what</i> Maria <i>said, the seniors have your back!</i></p> <br> <br>

            <div class="flex flex-col items-center justify-center text-center">
            <img class="h-32 md:h-72 w-auto z-0" src="{{ asset(\'images/artikel2/SURAT3.webp\') }}"
            alt=""><br>
            </div>

            <p>Ultimafriends, sebagai Maba, mungkin lo akan merasa dihantam dengan rasa bingung dan
            kaget di masa-masa awal kuliah. <i>It’s full of surprise, they said.</i><br> <br>
            Tarik napas, Ultimafriends. Ada saatnya lo harus mencoba meletakkan semua pikiran-pikiran
            ramai di kepala. Anggap hal-hal tadi adalah tantangan dalam petualangan lo. Kalau nanti ada
            waktunya semua energi lo habis terkuras, silakan ambil waktu untuk istirahat sebentar. Isi
            bensin dan coba lagi untuk lain hari.</p> <br> <br>

            <div class="flex flex-col items-center justify-center text-center">
            <img class="h-32 md:h-72 w-auto z-0" src="{{ asset(\'images/artikel2/SURAT4.webp\') }}"
            alt=""><br>
            </div>

            <p>Persis seperti kata Dave, kuliah adalah waktunya lo berpetualang dan menentukan pijakan.
            Mungkin akan ada beberapa jalan yang terasa buntu, beberapa keputusan yang salah, atau
            bidikan yang salah arah. <i>But, one thing for sure</i>, masa-masa kuliah memberikan lo banyak
            kesempatan untuk mencari tahu kemauan diri sendiri dan belajar memecahkan masalah masa
            depan.<br> <br>
            <i>Kindly remember</i>, Ultimafriends, lo enggak harus selalu jadi yang terbaik di antara semua
            orang. Sebebasnya lo boleh mengarang makna untuk proses pendewasaan. Besok atau hari
            ini, lo akan selalu jadi pemegang kendalinya. Selamat berpetualang sebagai mahasiswa,
            Ultimafriends!</p> <br> <br>
            
            <p><b>Writer</b> : Lungayu Endahrum</p>
            <p class="pb-24"><b>Editor</b> : Lungayu Endahrum</p>
            </div>';

        $post1 = [
            'title' => 'Kepada Yth. Maba: Apa Kabar Kali Ini?',
            'slug' => 'kepada-yth-maba-apa-kabar-kali-ini',
            'author' => 'Lungayu Endahrum',
            'editor' => 'Lungayu Endahrum',
            'post_content' => $post_content1,
            'published' => '2023-08-23',
            'category' => 'LAPOR OMB'
        ];

        $string = strip_tags(str_replace('><', '> <', $post_content1));
        $str = Str::limit($string, 100, '...');
        $stringClean = preg_replace('/\s\s+/', ' ', $str);

        $post1['excerpt'] = Str::limit(strip_tags($stringClean), 100, '...');

        $coverPhotoPath1 = 'images/artikel2/FEATURED IMAGE MABA.webp';

        $post1['cover_photo'] = $coverPhotoPath1;

        Post::create($post1);
    }
}
