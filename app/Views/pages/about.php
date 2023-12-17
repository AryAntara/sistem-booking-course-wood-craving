<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>
<div class="max-w-screen-xl mx-auto px-5">
    <div class="mt-16 text-center">
        <h1 class="text-4xl lg:text-5xl font-bold lg:tracking-tight">
            About
        </h1>
        <p class="text-lg mt-4 text-slate-600">
            We are a small passionate team.
        </p>
    </div>
    <div class="flex flex-col gap-3 mx-auto max-w-4xl mt-16">
        <h2 class="font-bold text-3xl text-gray-800">
            Lestarikan seni ukir bersama WoodStyles.
        </h2>
        <p class="text-lg leading-relaxed text-slate-500">

            Wood Styles didirikan oleh sekumpulan pengrajin, seniman, dan penggemar seni ukir yang memiliki misi untuk
            mempertahankan dan menghidupkan kembali tradisi ukir kayu khas. Kami percaya bahwa setiap lekukan dan pola
            yang tercipta bukan sekadar bentuk, melainkan cerita, warisan, dan kebudayaan yang terjaga dalam setiap
            serat kayu.
        </p>
    </div>
    <div class="grid md:grid-cols-3 gap-10 mx-auto max-w-4xl mt-12">
        <div class="group">
            <div class="w-full aspect-square">
                <img alt="Team"
                     class="w-full h-full object-cover rounded transition  group-hover:-translate-y-1 group-hover:shadow-xl"
                     width="480" height="560" src="<?= base_url('/images/ary.jpg') ?>" loading="lazy" decoding="async">
            </div>

            <div class="mt-4 text-center">
                <h2 class="text-lg text-gray-800"> Ary Antara</h2>
                <h3 class="text-sm text-slate-500"> Web Developer</h3>
            </div>
        </div>
        <div class="group">
            <div class="w-full aspect-square">
                <img alt="Team"
                     class="w-full h-full object-cover rounded transition  group-hover:-translate-y-1 group-hover:shadow-xl"
                     width="580" height="580" src="<?= base_url('/images/sena.jpg') ?>" loading="lazy" decoding="async">
            </div>

            <div class="mt-4 text-center">
                <h2 class="text-lg text-gray-800"> Kadek Sena</h2>
                <h3 class="text-sm text-slate-500"> Web Developer</h3>
            </div>
        </div>
        <div class="group">
            <div class="w-full aspect-square">
                <img alt="Team"
                     class="w-full h-full object-cover rounded transition  group-hover:-translate-y-1 group-hover:shadow-xl"
                     width="580" height="580" src="<?= base_url('/images/eka_laksana.jpg') ?>" loading="lazy" decoding="async">
            </div>

            <div class="mt-4 text-center">
                <h2 class="text-lg text-gray-800"> Eka Laksana </h2>
                <h3 class="text-sm text-slate-500"> Web Developer</h3>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

