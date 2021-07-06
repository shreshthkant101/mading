const today = new Date()
const yesterday = new Date(today)

yesterday.setDate(yesterday.getDate() - 1)

today.toDateString()
yesterday.toDateString()

var threads=[
    {
        id: 1,
        title: "Langkah Dasar Algoprog",
        author: "Author1",
        date: yesterday.toDateString(),
        content: "Penting bagi seorang programmer pemula untuk memahami dengan baik perbedaan algoritma dan program agar tidak membuat kekeliruan saat bekerja. Apa perbedaan algoritma dan program? Algoritma pemrograman merupakan tahap-tahap sistematis dan terstruktur yang menyusun sebuah program. Sedangkan program merupakan implementasi dari bahasa program yang berupa kumpulan pernyataan di dalam sebuah komputer. Para ahli mendefinisikan program sebagai berikut: Program = Bahasa program + Algoritma pemrograman.",
        comments: [
            {
                author: "User1",
                date: yesterday.toDateString(),
                content: "Mantapp"
            },
            {
                author: "User2",
                date: Date.now(),
                content: "Msh ga ngerti.."
            },
            {
                author: "User3",
                date: Date.now(),
                content: "Wow"
            }
        ]
    },
    {
        id: 2,
        title: "Kos-kosan?",
        author: "Author2",
        date: Date.now(),
        content: "Disini kosan dket kampus dmn ya?",
        comments: [
            {
                author: "User4",
                date: Date.now(),
                content: "Ada di blkng Paddington tuh"
            },
            {
                author: "User5",
                date: Date.now(),
                content: "Budget brp?"
            }
        ]
    },
    {
        id: 3,
        title: "[Ask]",
        author: "Author3",
        date: yesterday.toDateString(),
        content: "Cara bljr coding yg efektif gmn?",
        comments: [
            {
                author: "User6",
                date: yesterday.toDateString(),
                content: "Hrs paham dasarnya dlu"
            }
        ]
    },
    {
        id: 4,
        title: "Cara aman bepergian di tengah pandemi",
        author: "Author4",
        date: yesterday.toDateString(),
        content: "Menurut Pusat Pengendalian dan Penyebaran Penyakit AS, berikut hal-hal yang perlu dipertimbangkan ketika merencanakan perjalanan: 1)pastikan lokasi yang menjadi tujuan liburan atau perjalanan bukan area berisiko tinggi. 2) perhatikan protokol kesehatan yang diterapkan di area tujuan liburan dan tempat tinggal Anda. 3) pastikan orang yang bepergian brsama Anda tidak termasuk kelompok orang berisiko tinggi tertular Covid-19. “Selama kita menerapkan protokol kesehatan dan selalu waspada dalam perjalanan, risikonya dapat diminimalisir secara signifikan,” kata Khabbaza. Hal tersebut bisa kita lakukan dengan menjaga jarak dan memakai masker saat berintraksi atau bertemu dengan orang lain. Kita juga harus rutin mencuci tangan dan tidak menyentuh mata, hidung, atau mulut saat tangan kotor. Artikel ini telah tayang di Kompas.com dengan judul",
        comments: [
            {
                author: "User7",
                date: yesterday.toDateString(),
                content: "Mantapp"
            },
            {
                author: "User8",
                date: Date.now(),
                content: "capek bngt.."
            },
            {
                author: "User9",
                date: Date.now(),
                content: "Wow bgs nih"
            }
        ]
    }
]

var threads;
if(localStorage && localStorage.getItem('threads')){
    threads = JSON.parse(localStorage.getItem('threads'));
}else{
    threads = defaultThreads;
    localStorage.setItem('threads', JSON.stringify(defaultThreads));
}

//window.localStorage.clear();