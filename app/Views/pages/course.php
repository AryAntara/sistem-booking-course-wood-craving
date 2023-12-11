<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>
    <div class="max-w-screen-xl mx-auto px-5">
        <div class="mt-16 text-center">
            <h1 class="text-4xl lg:text-5xl font-bold lg:tracking-tight">
                Kursus
            </h1>
            <p class="text-lg mt-4 text-slate-600">
                Semua kursus yang tersedia di WoodStyles
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-10 mx-auto max-w-screen-lg mt-12">
            <div>
                <div class="flex flex-col w-full order-first lg:order-none border-2 border-[#D8DEE9] border-opacity-50 py-5 px-6 rounded-md">
                    <div class="text-center">
                        <h4 class="text-lg font-medium text-gray-400">Ukir Anak</h4>
                        <p class="mt-3 text-4xl font-bold text-black md:text-4xl">
                            Rp. 212.000,00
                        </p>
                        <!-- {
                          plan.price.original && (
                            <p class="mt-1 text-xl font-medium text-gray-400 line-through md:text-2xl">
                              {plan.price.original}
                            </p>
                          )
                        } -->
                    </div>
                    <ul class="grid mt-8 text-left gap-y-4">
                        <li class="flex items-start gap-3 text-gray-800">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" fill="currentColor" fill-opacity=".16"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.75 12a8.25 8.25 0 0 1 11.916-7.393.75.75 0 1 0 .668-1.343A9.713 9.713 0 0 0 12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75c0-.366-.02-.727-.06-1.082a.75.75 0 1 0-1.49.164A8.25 8.25 0 1 1 3.75 12Zm17.78-6.47a.75.75 0 0 0-1.06-1.06L12 12.94l-2.47-2.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l9-9Z"
                                      fill="currentColor"></path>
                            </svg>
                            <span>Kurikulum Anak</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-800">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" fill="currentColor" fill-opacity=".16"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.75 12a8.25 8.25 0 0 1 11.916-7.393.75.75 0 1 0 .668-1.343A9.713 9.713 0 0 0 12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75c0-.366-.02-.727-.06-1.082a.75.75 0 1 0-1.49.164A8.25 8.25 0 1 1 3.75 12Zm17.78-6.47a.75.75 0 0 0-1.06-1.06L12 12.94l-2.47-2.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l9-9Z"
                                      fill="currentColor"></path>
                            </svg>
                            <span>Untuk 2 Anak</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-800">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" fill="currentColor" fill-opacity=".16"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.75 12a8.25 8.25 0 0 1 11.916-7.393.75.75 0 1 0 .668-1.343A9.713 9.713 0 0 0 12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75c0-.366-.02-.727-.06-1.082a.75.75 0 1 0-1.49.164A8.25 8.25 0 1 1 3.75 12Zm17.78-6.47a.75.75 0 0 0-1.06-1.06L12 12.94l-2.47-2.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l9-9Z"
                                      fill="currentColor"></path>
                            </svg>
                            <span>Usia 12 - 18 Tahun</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-800">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" fill="currentColor" fill-opacity=".16"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.75 12a8.25 8.25 0 0 1 11.916-7.393.75.75 0 1 0 .668-1.343A9.713 9.713 0 0 0 12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75c0-.366-.02-.727-.06-1.082a.75.75 0 1 0-1.49.164A8.25 8.25 0 1 1 3.75 12Zm17.78-6.47a.75.75 0 0 0-1.06-1.06L12 12.94l-2.47-2.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l9-9Z"
                                      fill="currentColor"></path>
                            </svg>
                            <span>Materi Video</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-800">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" fill="currentColor" fill-opacity=".16"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.75 12a8.25 8.25 0 0 1 11.916-7.393.75.75 0 1 0 .668-1.343A9.713 9.713 0 0 0 12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75c0-.366-.02-.727-.06-1.082a.75.75 0 1 0-1.49.164A8.25 8.25 0 1 1 3.75 12Zm17.78-6.47a.75.75 0 0 0-1.06-1.06L12 12.94l-2.47-2.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l9-9Z"
                                      fill="currentColor"></path>
                            </svg>
                            <span>Akses Lifetime</span>
                        </li>
                    </ul>
                    <div class="flex mt-8">
                        <a href="/"
                           class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 w-full px-5 py-2.5 bg-white border-2 border-black hover:bg-gray-100 text-black">Get
                            Beli
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex flex-col w-full order-first lg:order-none border-2 border-[#D8DEE9] border-opacity-50 py-5 px-6 rounded-md">
                    <div class="text-center">
                        <h4 class="text-lg font-medium text-gray-400">Ukir Remaja</h4>
                        <p class="mt-3 text-4xl font-bold text-black md:text-4xl">
                            Rp. 419.000,00
                        </p>
                        <!-- {
                          plan.price.original && (
                            <p class="mt-1 text-xl font-medium text-gray-400 line-through md:text-2xl">
                              {plan.price.original}
                            </p>
                          )
                        } -->
                    </div>
                    <ul class="grid mt-8 text-left gap-y-4">
                        <li class="flex items-start gap-3 text-gray-800">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" fill="currentColor" fill-opacity=".16"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.75 12a8.25 8.25 0 0 1 11.916-7.393.75.75 0 1 0 .668-1.343A9.713 9.713 0 0 0 12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75c0-.366-.02-.727-.06-1.082a.75.75 0 1 0-1.49.164A8.25 8.25 0 1 1 3.75 12Zm17.78-6.47a.75.75 0 0 0-1.06-1.06L12 12.94l-2.47-2.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l9-9Z"
                                      fill="currentColor"></path>
                            </svg>
                            <span>Kurikulum Remaja</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-800">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" fill="currentColor" fill-opacity=".16"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.75 12a8.25 8.25 0 0 1 11.916-7.393.75.75 0 1 0 .668-1.343A9.713 9.713 0 0 0 12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75c0-.366-.02-.727-.06-1.082a.75.75 0 1 0-1.49.164A8.25 8.25 0 1 1 3.75 12Zm17.78-6.47a.75.75 0 0 0-1.06-1.06L12 12.94l-2.47-2.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l9-9Z"
                                      fill="currentColor"></path>
                            </svg>
                            <span>Untuk 3 Remaja</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-800">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" fill="currentColor" fill-opacity=".16"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.75 12a8.25 8.25 0 0 1 11.916-7.393.75.75 0 1 0 .668-1.343A9.713 9.713 0 0 0 12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75c0-.366-.02-.727-.06-1.082a.75.75 0 1 0-1.49.164A8.25 8.25 0 1 1 3.75 12Zm17.78-6.47a.75.75 0 0 0-1.06-1.06L12 12.94l-2.47-2.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l9-9Z"
                                      fill="currentColor"></path>
                            </svg>
                            <span>Usia 18-27 Tahun.</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-800">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" fill="currentColor" fill-opacity=".16"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.75 12a8.25 8.25 0 0 1 11.916-7.393.75.75 0 1 0 .668-1.343A9.713 9.713 0 0 0 12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75c0-.366-.02-.727-.06-1.082a.75.75 0 1 0-1.49.164A8.25 8.25 0 1 1 3.75 12Zm17.78-6.47a.75.75 0 0 0-1.06-1.06L12 12.94l-2.47-2.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l9-9Z"
                                      fill="currentColor"></path>
                            </svg>
                            <span>Materi Video</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-800">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" fill="currentColor" fill-opacity=".16"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.75 12a8.25 8.25 0 0 1 11.916-7.393.75.75 0 1 0 .668-1.343A9.713 9.713 0 0 0 12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75c0-.366-.02-.727-.06-1.082a.75.75 0 1 0-1.49.164A8.25 8.25 0 1 1 3.75 12Zm17.78-6.47a.75.75 0 0 0-1.06-1.06L12 12.94l-2.47-2.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l9-9Z"
                                      fill="currentColor"></path>
                            </svg>
                            <span>Akses Lifetime</span>
                        </li>
                    </ul>
                    <div class="flex mt-8">
                        <a href="#"
                           class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 w-full px-5 py-2.5 bg-black text-white hover:bg-gray-800 border-2 border-transparent">
                            Beli
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex flex-col w-full order-first lg:order-none border-2 border-[#D8DEE9] border-opacity-50 py-5 px-6 rounded-md">
                    <div class="text-center">
                        <h4 class="text-lg font-medium text-gray-400">Ukir Dewasa</h4>
                        <p class="mt-3 text-4xl font-bold text-black md:text-4xl">
                            Rp. 900.000
                        </p>
                        <!-- {
                          plan.price.original && (
                            <p class="mt-1 text-xl font-medium text-gray-400 line-through md:text-2xl">
                              {plan.price.original}
                            </p>
                          )
                        } -->
                    </div>
                    <ul class="grid mt-8 text-left gap-y-4">
                        <li class="flex items-start gap-3 text-gray-800">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" fill="currentColor" fill-opacity=".16"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.75 12a8.25 8.25 0 0 1 11.916-7.393.75.75 0 1 0 .668-1.343A9.713 9.713 0 0 0 12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75c0-.366-.02-.727-.06-1.082a.75.75 0 1 0-1.49.164A8.25 8.25 0 1 1 3.75 12Zm17.78-6.47a.75.75 0 0 0-1.06-1.06L12 12.94l-2.47-2.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l9-9Z"
                                      fill="currentColor"></path>
                            </svg>
                            <span>Kurikulum Remaja - Dewasa</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-800">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" fill="currentColor" fill-opacity=".16"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.75 12a8.25 8.25 0 0 1 11.916-7.393.75.75 0 1 0 .668-1.343A9.713 9.713 0 0 0 12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75c0-.366-.02-.727-.06-1.082a.75.75 0 1 0-1.49.164A8.25 8.25 0 1 1 3.75 12Zm17.78-6.47a.75.75 0 0 0-1.06-1.06L12 12.94l-2.47-2.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l9-9Z"
                                      fill="currentColor"></path>
                            </svg>
                            <span>Untuk 1 orang</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-800">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" fill="currentColor" fill-opacity=".16"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.75 12a8.25 8.25 0 0 1 11.916-7.393.75.75 0 1 0 .668-1.343A9.713 9.713 0 0 0 12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75c0-.366-.02-.727-.06-1.082a.75.75 0 1 0-1.49.164A8.25 8.25 0 1 1 3.75 12Zm17.78-6.47a.75.75 0 0 0-1.06-1.06L12 12.94l-2.47-2.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l9-9Z"
                                      fill="currentColor"></path>
                            </svg>
                            <span>Akses Lifetime</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-800">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" fill="currentColor" fill-opacity=".16"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.75 12a8.25 8.25 0 0 1 11.916-7.393.75.75 0 1 0 .668-1.343A9.713 9.713 0 0 0 12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75c0-.366-.02-.727-.06-1.082a.75.75 0 1 0-1.49.164A8.25 8.25 0 1 1 3.75 12Zm17.78-6.47a.75.75 0 0 0-1.06-1.06L12 12.94l-2.47-2.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l9-9Z"
                                      fill="currentColor"></path>
                            </svg>
                            <span>Makan Siang Gratis</span>
                        </li>
                        <li class="flex items-start gap-3 text-gray-800">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" fill="currentColor" fill-opacity=".16"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M3.75 12a8.25 8.25 0 0 1 11.916-7.393.75.75 0 1 0 .668-1.343A9.713 9.713 0 0 0 12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75c0-.366-.02-.727-.06-1.082a.75.75 0 1 0-1.49.164A8.25 8.25 0 1 1 3.75 12Zm17.78-6.47a.75.75 0 0 0-1.06-1.06L12 12.94l-2.47-2.47a.75.75 0 0 0-1.06 1.06l3 3a.75.75 0 0 0 1.06 0l9-9Z"
                                      fill="currentColor"></path>
                            </svg>
                            <span>Materi Video</span>
                        </li>
                    </ul>
                    <div class="flex mt-8">
                        <a href="/contact"
                           class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 w-full px-5 py-2.5 bg-white border-2 border-black hover:bg-gray-100 text-black">Contact
                            us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>