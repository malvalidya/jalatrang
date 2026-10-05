<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        Berita::create([
            'judul' => 'Malam Penuh Gengsi Dimulai! 16 Tim Berebut Mahkota Juara di Ajang CVC Cup 2026 Desa Jalatrang',
            'kategori' => 'Olahraga',
            'isi' => 'JalatrangNews; Himpunan Pemuda-Pemudi Dusun Cikandung yang tergabung dalam Cikandung Voli Ball Club (CVC) resmi menyelenggarakan ajang olahraga bertajuk CVC Cup 2026. Turnamen bola voli putra antar-dusun se-Kecamatan Cipaku ini resmi dibuka pada Sabtu, 26 September 2026, dan dijadwalkan berlangsung hingga 10 Oktober 2026.

                    Pembukaan turnamen yang dipusatkan di Lapangan Bola Voli CVC, Dusun Cikandung, Desa Jalatrang, ini dibuka secara langsung oleh Kepala Desa Jalatrang, Dadi Haryadi.

                    Dalam sambutannya, Dadi Haryadi mengapresiasi tinggi inisiatif para pemuda Dusun Cikandung yang sukses menggerakkan kegiatan positif berskala kecamatan ini. "Ajang ini bukan hanya sekadar mencari siapa yang menang atau kalah, tetapi menjadi momentum penting untuk mempererat silaturahmi, sportivitas, dan menggali bibit-bibit atlet bola voli potensial di wilayah Kecamatan Cipaku," ujar Dadi.

Panggung Pembuktian 16 Tim Terbaik
Sebanyak 16 tim terbaik dari berbagai dusun di Kecamatan Cipaku dipastikan siap saling sikut demi memperebutkan mahkota juara. Atmosfer kompetisi dijamin bakal membara setiap malam mulai pukul 19.30 WIB hingga partai puncak pada 10 Oktober 2026.

Tak tanggung-tanggung, jalannya pertandingan tiap malam dijamin makin hidup dan bergemuruh berkat kehadiran reporter andalan Desa Jalatrang, Ali Jawa, yang memandu jalannya laga dengan gaya komentarnya yang khas dan memompa adrenalin penonton.

Dihadiri Tokoh Penting hingga Pengusaha Lokal
Malam pembukaan CVC Cup 2026 kian terasa istimewa dengan hadirnya jajaran penting pemangku wilayah. Tampak memadati arena: Bhabinkamtibmas Desa Jalatrang, tokoh masyarakat, tokoh agama, tokoh pemuda, Kepala Dusun Cikandung, para pengusaha lokal Dusun Cikandung yang turut mendukung penuh acara, Ketua BPD Desa Jalatrang, hingga jajaran ketua RT dan RW se-Dusun Cikandung yang bahu-membahu menyukseskan acara.

Ajang CVC Cup 2026 kini resmi menabuh genderang perang sportivitas. Siapakah tim yang akan keluar sebagai penguasa voli baru di Kecamatan Cipaku? Saksikan keseruannya langsung setiap malam di Lapangan CVC Dusun Cikandung!

 

Team_Media; Nurhalim',
            'penulis' => 'Dadi Haryadi',
        ]);
        Berita::create([
            'judul' => 'Pemerintah Desa Jalatrang Kukuhkan Desa Siaga TB, Perkuat Kolaborasi Lintas Sektor Basmi Tuberkulosis',
            'kategori' => 'Pendidikan',
            'isi' => 'JalatrangNews; Pemerintah Desa Jalatrang, Kecamatan Cipaku, Kabupaten Ciamis, menunjukkan komitmen nyata dalam meningkatkan kesehatan masyarakat dengan menggelar Sosialisasi Pencegahan Penyakit Menular (TBC) sekaligus Pembentukan Desa Siaga Tuberkulosis (TB). Kegiatan strategis ini diselenggarakan pada Senin, 28 September 2026, di aula desa Jalatrang.

Acara yang dihadiri oleh puluhan pemangku kepentingan tingkat desa ini bertujuan untuk membangun kesadaran kolektif serta memperkuat jejaring deteksi dini penularan TBC langsung dari tingkat akar rumput.

Kepala Desa Jalatrang dalam sambutannya menekankan pentingnya peran aktif seluruh elemen masyarakat dalam memutus mata rantai penyebaran TBC. Pembentukan "Desa Siaga TB" diharapkan mampu menjadi garda terdepan dalam penemuan kasus baru secara cepat dan tepat sehingga penanganan medis dapat segera dilakukan.

Sinergi Lintas Sektor dan Kehadiran Narasumber Ahli
Untuk memberikan pemahaman mendalam secara komprehensif, Pemerintah Desa Jalatrang menghadirkan narasumber ahli dari tingkat kecamatan (Sekmat Cipaku) serta tenaga kesehatan profesional Tingkat Kabupaten Ciamis dari Puskesmas Cipaku. Materi yang disampaikan meliputi:

Pengenalan gejala klinis dan metode penularan TBC.

Langkah-langkah pencegahan serta pentingnya kepatuhan minum obat bagi pasien.

Mekanisme kerja dan fungsi strategis pembentukan Desa Siaga TB.

Dihadiri Unsur Pimpinan dan Kelembagaan Desa
Kegiatan ini mendapat sambutan antusias dan dihadiri oleh jajaran lengkap Forum Koordinasi Pimpinan Desa serta lembaga kemasyarakatan, di antaranya: Bhabinkamtibmas, Babinsa, Ketua Badan Permusyawaratan Desa (BPD), Ketua KDMP, Pendamping Desa beserta PLD, Direktur Bank Sampah Jalatrang Berseka, Ketua TP PKK Desa Jalatrang, Bidan Desa, TPK Desa dan Seluruh pengurus Posyandu se-Desa Jalatrang

Transparansi Anggaran dan Komitmen Berkelanjutan
Pelaksanaan program kesehatan masyarakat ini dibiayai penuh melalui alokasi Dana Desa (DD) Tahap 2 Tahun Anggaran 2026. Pemanfaatan Dana Desa ini dinilai sangat tepat sasaran guna mendukung visi pembangunan manusia yang sehat, produktif, dan berdaya saing di Desa Jalatrang.

Melalui pengukuhan Desa Siaga TB ini, Pemerintah Desa Jalatrang optimis dapat menciptakan lingkungan desa yang tanggap, responsif, dan bebas dari stigma negatif terhadap penderita tuberkulosis.

 

Team_Media; Nurhalim',
            'penulis' => 'Dadi Haryadi',
        ]);
    }
}