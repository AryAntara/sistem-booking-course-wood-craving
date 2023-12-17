<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>
    <div class="max-w-screen-xl mx-auto px-5">
    <main class="grid lg:grid-cols-2 place-items-center pt-16 pb-8 md:pt-8 md:mt-4 sm:mt-8 mt-24 mb-32">
        <div class="py-6 md:order-1 hidden md:block">
            <img alt="Wood house" width="1000" height="424"
                 src="<?= base_url("/images/woodcutter.jpg") ?>" loading="eager" decoding="async">
        </div>
        <div>
            <h1 class="text-5xl lg:text-6xl xl:text-7xl font-bold lg:tracking-tight">
                Pelajari Seni Ukir Bersama WoodStyles
            </h1>
            <p class="text-lg mt-8 text-slate-600 max-w-xl">
                Woodstyles adalah sebuah tempat untuk kursus mengukir terbaik dibali.
                <wbr>
                Kamu akan di latih oleh guru kursus profesional yang telah bersetifikat resmi.
                Guru - guru di woodstyle telah mempunyai banyak pengalaman dalam mengukir kayu.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row gap-3">
                <a href="<?= base_url('/course') ?>"
                   class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 px-5 py-2.5 bg-white border-2 border-black hover:bg-black hover:text-white text-black">
                    Lihat Kursus
                </a>
            </div>
        </div>
    </main>
    <div class="mt-16 md:mt-0">
        <h2 class="text-4xl lg:text-5xl font-bold lg:tracking-tight">
            Beberapa Alasan kenapa memilih kami
        </h2>
        <p class="text-lg mt-4 text-slate-600">
            Woodstyles adalah salah tempat kursus ukir dibali, dan seni ukir adalah seni tradisional bali yang harus
            dilestarikan.
        </p>
    </div>

    <div class="grid sm:grid-cols-2 md:grid-cols-3 mt-16 gap-16">
        <div class="flex gap-4 p-8 border-dashed rounded-xl items-start border-2 border-black">
            <div class="mt-1 p-0 w-8 h-8 shrink-0">
                <!--                <svg viewBox="0 0 24 24" class="text-white" astro-icon="bx:bxs-briefcase">-->
                <!--                    <path fill="currentColor"-->
                <!--                          d="M20 6h-3V4c0-1.103-.897-2-2-2H9c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v3h20V8c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm5 10h-4v-2H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-8v2z"/>-->
                <!--                </svg>-->
                <svg class="text-white" xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                    <path d="M320 96H192L144.6 24.9C137.5 14.2 145.1 0 157.9 0H354.1c12.8 0 20.4 14.2 13.3 24.9L320 96zM192 128H320c3.8 2.5 8.1 5.3 13 8.4C389.7 172.7 512 250.9 512 416c0 53-43 96-96 96H96c-53 0-96-43-96-96C0 250.9 122.3 172.7 179 136.4l0 0 0 0c4.8-3.1 9.2-5.9 13-8.4zm84 88c0-11-9-20-20-20s-20 9-20 20v14c-7.6 1.7-15.2 4.4-22.2 8.5c-13.9 8.3-25.9 22.8-25.8 43.9c.1 20.3 12 33.1 24.7 40.7c11 6.6 24.7 10.8 35.6 14l1.7 .5c12.6 3.8 21.8 6.8 28 10.7c5.1 3.2 5.8 5.4 5.9 8.2c.1 5-1.8 8-5.9 10.5c-5 3.1-12.9 5-21.4 4.7c-11.1-.4-21.5-3.9-35.1-8.5c-2.3-.8-4.7-1.6-7.2-2.4c-10.5-3.5-21.8 2.2-25.3 12.6s2.2 21.8 12.6 25.3c1.9 .6 4 1.3 6.1 2.1l0 0 0 0c8.3 2.9 17.9 6.2 28.2 8.4V424c0 11 9 20 20 20s20-9 20-20V410.2c8-1.7 16-4.5 23.2-9c14.3-8.9 25.1-24.1 24.8-45c-.3-20.3-11.7-33.4-24.6-41.6c-11.5-7.2-25.9-11.6-37.1-15l0 0-.7-.2c-12.8-3.9-21.9-6.7-28.3-10.5c-5.2-3.1-5.3-4.9-5.3-6.7c0-3.7 1.4-6.5 6.2-9.3c5.4-3.2 13.6-5.1 21.5-5c9.6 .1 20.2 2.2 31.2 5.2c10.7 2.8 21.6-3.5 24.5-14.2s-3.5-21.6-14.2-24.5c-6.5-1.7-13.7-3.4-21.1-4.7V216z"/>
                </svg>
            </div>
            <div>
                <h3 class="font-semibold text-lg">Harga Yang Terjakau</h3>
                <p class="text-slate-500 mt-2 leading-relaxed">Kami menawarkan harga yang ramah di kantong. Setiap
                    kursus disini mulai dari
                    <br><b>Rp. 100.000</b> saja!</p>
            </div>
        </div>
        <div class="flex gap-4 p-8 border-dashed rounded-xl items-start border-2 border-black items-start">
            <div class="mt-1 w-8 h-8 shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 640 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                    <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
                </svg>
            </div>
            <div>
                <h3 class="font-semibold text-lg">Guru Yang Berpengalaman</h3>
                <p class="text-slate-500 mt-2 leading-relaxed">Para perngajar yang mengajar di kursus ini minimum
                    mempunyai pengalaman 2 tahun. Jadi tak peerlu ragu dengan pengajar kami.</p>
            </div>
        </div>
        <div class="flex gap-4 p-8 border-dashed rounded-xl items-start border-2 border-black items-start">
            <div class="mt-1 w-8 h-8 shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="22" viewBox="0 0 448 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                    <path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
                </svg>
            </div>
            <div>
                <h3 class="font-semibold text-lg">Kurikulum terupdate</h3>
                <p class="text-slate-500 mt-2 leading-relaxed">Selain menggunakan pengajar yang berpengalaman. Kurikulum
                    dalam woodstyles selalu terupdate.</p>
            </div>
        </div>

    </div>
    <div class="bg-black px-20 py-20 mt-20 mx-auto max-w-5xl rounded-lg flex flex-col items-center text-center">
        <h2 class="text-white text-3xl md:text-6xl">WoodStyle Kursus.</h2>
        <p class="text-gray-300 mt-4 text-lg md:text-xl">
            Ayo berkontribusi dalam pelestarian budaya lokal bali agar tidak punah kedepannya.
        </p>
        <div class="flex mt-5">
            <a href="<?= base_url('/course') ?>"
               class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 px-5 py-2.5 bg-white text-black border-2 border-transparent">
                Lihat kursus
            </a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>