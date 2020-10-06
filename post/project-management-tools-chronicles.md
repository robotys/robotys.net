# Project Management Tools Chronicles

Rasanya dah lebih 2 bulan saya guna JIRA untuk uruskan projek-projek bawah tanggungjawab saya. Ingat balik, rasa macam tak logik sebab dah 10 tahun kerja dalam bidang programming tapi tak pernah properly pakai project management tools sebagai solo ataupun dalam pasukan.

![Skrinshot JIRA. Ni bukan saya punya](/media/project-management-tools-chronicles.png)

Boleh kata ini kali pertama pakai. Lagi aneh sebab tanpa pengalaman, maka agak susah untuk pakai tools yang sedia ada.

Setakat ini dengan JIRA kerja memang bergerak. Ahli pasukan boleh tahu dan uruskan kerja masing-masing dan project manager boleh nampak progress dan kejar item yang due atau pending. Namun ada 2 bab yang buat saya rasa tools ni tak memberi gambaran yang betul.

## Bab 1: Mengabaikan "Langgar Deadline".

Saya tak tahulah PM (Project Manager) lain, tapi saya yang first time jadi PM ni memang tak tepat sangat jangkaan siap satu-satu kerja. Terlalu 'optimis' dalam bagi deadline. Akibatnya semua kerja memang akan langgar deadline.

Dalam JIRA (fungsi Roadmap), cara biasa untuk tunjuk yang status sudah lebih deadline adalah dengan menukar warna timeline kepada merah. Tetapi itu tidak menerangkan 'berapa lama sudah lebih deadline'. Apabila kita ubah deadline ke hadapan, kita hilang pula maklumat bilakah deadline yang asal. Sekarang ini, saya akan merahkan timeline yang telah dilanggar dan tambah timeline baru dengan nama yang sama tetapi dengan deadline yang baru. Konfius kan? :-D

## Bab 2: Lump Sump semua task dalam satu timeline.

Apabila kita letak satu timeline dalam roadmap, tidak ada cara untuk kita lihat 'history' status setiap task. Task yang pertama mulanya bila, siapnya bila. Task berikutnya apa ceritanya pula. Perkara ini penting sebab sukar untuk kita tangkap isu yang sedang berlaku pada setiap task jika tak nampak pergerakan status task tersebut.

Jadi satu hal pulak nak bukak tools lain untuk tahu exact update. Dalam kes aku, satu hal nak kena roll call tiap pagi-petang untuk kutip update dan maintain satu excel untuk keep track updates tersebut. Kenapa tak boleh buat benda ni dalam Jira tu je?

...

Dua benda ni membuatkan saya tercari-cari tools lain tetapi semuanya lebih kurang sahaja. Kenapa jadi begitu? Kerana semua tools tersebut menggunakan konsep pengurusan project yang sama: Agile Dev. Dah satu kerja pulak saya nak kena belajar Agile dan ajar pulak team konsep tersebut untuk guna tools yang sedia ada.

Dengan pengetahuan saya yang terhad (hasil google ja ni) nampak macam Agile ni berat kepada planning dan 'go with the flow'. Macamana ia uruskan 2 bab di atas? Kurang jelas di situ.

Itu yang membuatkan saya cuba cari konsep lain untuk uruskan projek. Konsep yang nampak macam 'boleh pergi' adalah konsep 'Timeline' itu sendiri. Jika setiap feature ada 'timeline', maka setiap task untuk features itu ada 'updates' pula. Updates ini adalah maklumat perubahan status task tersebut beserta timestamp status tersebut berubah. Dari segi visual, kita boleh overlay update ini dalam bentuk 'dot' atas 'line' timeline. Jelas boleh nampak di situ. Kita boleh kata yang 'line' adalah timeline yang kita budget manakala 'dot' adalah aktiviti sebenar. Maka kita boleh nampak dengan jelas jika berlaku 'langgar deadline' di situ nanti.

Lain-lain idea tambahan:

`Idea #1`: Ada view khas seperti To Do / Backlog list untuk setiap ahli pasukan. Jadi mereka hanya fokus pada kerja mereka sahaja semasa 'in the zone'. Tak daklah distracted dengan segala macam 'big picture' pada paparan Roadmap.

`Idea #2`: Ada sistem untuk uruskan 'kerja yang bukan roadmap' seperti hotfix (bug) atau incident (firefighting) sebagai satu task yang berasingan. Ini kerana daripada pengalaman memang selalu sangat benda-benda terkejut ni mengganggu timeline yang telah dirancang. Semua itu adalah perkara yang tidak boleh dielak maka kenapa ia tidak jelas pada paparan roadmap? Kemudian hari kita boleh overlay dot untuk hotfix atas timeline dan kita akan nampak bahawasanya lompong pada roadmap itu sebenarnya diisi dengan hotfix.

`Idea #3`: Sistem 'watch' yang akan alert mereka yang watch dengan update untuk roadmap atau task tersebut. Ini mudah untuk PM monitor progress kerja.

`Idea #4`: Fungsi 'Remind' yang membolehkan PM alert programmer pada roadmap atau task khusus. Ini akan buatkan programmer lebih alert dengan kerja-kerja yang pending.

`Idea #5`: Kanban boleh di KIV. Ia nampak cantik tapi in reality tidak cukup 'condensed' untuk paparan laptop. Boleh ganti tukar dengan paparan To Do list yang compact tetapi fleksibel jika perlu maklumat yang lebih detail.

`Idea #6`: Status yang menunjukkan progress

- backlog (ready and not due this week)
- due (due this week)
- in progress
- kiv (will continue later)
- done
- canceled

`Idea #7`: Perkenalkan konsep `Squeeze` yang akan berlaku apabila due date dah dekat atau deadline dah dilanggar. Maksudnya team akan stop buat lain dan rush siapkan banyak pending task dalam masa yang pendek. Nama squeeze tu sesuai sebab ia buat kita sedar yang itu adalah perkara yang kita tidak suka. Jadi manager dan team akan lebih ambil berat apabila due date dah lekat. Lesson learned.

Idea bagus. Nak buatnya bila?

Satu soalan yang tiada jawapan.

Bertabahlah.