<?= $this->extend('layouts/index') ?>
<?= $this->section('content') ?>

<div class="max-w-screen-xl mx-auto px-5">
    <div class="mt-16 text-center">
        <h1 class="text-4xl lg:text-5xl font-bold lg:tracking-tight">
            Contact
        </h1>
        <p class="text-lg mt-4 text-slate-600">
            Kami disini untuk membantu.
        </p>
    </div>
    <div class="grid md:grid-cols-2 gap-10 mx-auto max-w-4xl mt-16">
        <div>
            <h2 class="font-medium text-2xl text-gray-800">Contact WoodStyles</h2>
            <p class="text-lg leading-relaxed text-slate-500 mt-3">
                Punya sesuatu yang ingin disampaikan? Kami disni untuk membantu. Lengkapi formulir ini.
            </p>
            <div class="mt-5">
                <div class="flex items-center mt-2 space-x-2 text-gray-600">
                    <svg viewBox="0 0 24 24" class="text-gray-400 w-4 h-4" astro-icon="uil:map-marker">
                        <path fill="currentColor"
                              d="M12 2a8 8 0 0 0-8 8c0 5.4 7.05 11.5 7.35 11.76a1 1 0 0 0 1.3 0C13 21.5 20 15.4 20 10a8 8 0 0 0-8-8zm0 17.65c-2.13-2-6-6.31-6-9.65a6 6 0 0 1 12 0c0 3.34-3.87 7.66-6 9.65zM12 6a4 4 0 1 0 4 4 4 4 0 0 0-4-4zm0 6a2 2 0 1 1 2-2 2 2 0 0 1-2 2z"/>
                    </svg>
                    <span>Ubud, Gianyar</span>
                </div>
                <div class="flex items-center mt-2 space-x-2 text-gray-600">
                    <svg viewBox="0 0 24 24" class="text-gray-400 w-4 h-4" astro-icon="uil:envelope">
                        <path fill="currentColor"
                              d="M19 4H5a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3zm-.41 2-5.88 5.88a1 1 0 0 1-1.42 0L5.41 6zM20 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V7.41l5.88 5.88a3 3 0 0 0 4.24 0L20 7.41z"/>
                    </svg>
                    <a href="mailto:woodstyles">woodstyles@gmail.com</a>
                </div>
                <div class="flex items-center mt-2 space-x-2 text-gray-600">
                    <svg viewBox="0 0 24 24" class="text-gray-400 w-4 h-4" astro-icon="uil:phone">
                        <path fill="currentColor"
                              d="M19.44 13c-.22 0-.45-.07-.67-.12a9.44 9.44 0 0 1-1.31-.39 2 2 0 0 0-2.48 1l-.22.45a12.18 12.18 0 0 1-2.66-2 12.18 12.18 0 0 1-2-2.66l.42-.28a2 2 0 0 0 1-2.48 10.33 10.33 0 0 1-.39-1.31c-.05-.22-.09-.45-.12-.68a3 3 0 0 0-3-2.49h-3a3 3 0 0 0-3 3.41 19 19 0 0 0 16.52 16.46h.38a3 3 0 0 0 2-.76 3 3 0 0 0 1-2.25v-3a3 3 0 0 0-2.47-2.9zm.5 6a1 1 0 0 1-.34.75 1.05 1.05 0 0 1-.82.25A17 17 0 0 1 4.07 5.22a1.09 1.09 0 0 1 .25-.82 1 1 0 0 1 .75-.34h3a1 1 0 0 1 1 .79q.06.41.15.81a11.12 11.12 0 0 0 .46 1.55l-1.4.65a1 1 0 0 0-.49 1.33 14.49 14.49 0 0 0 7 7 1 1 0 0 0 .76 0 1 1 0 0 0 .57-.52l.62-1.4a13.69 13.69 0 0 0 1.58.46q.4.09.81.15a1 1 0 0 1 .79 1z"/>
                    </svg>
                    <a href="tel:0823726764342">+62 823 726 764 342</a>
                </div>
            </div>
        </div>
        <div>
            <!-- To make this contact form work, create your free access key from https://web3forms.com/
         Then you will get all form submissions in your email inbox. -->
            <form action="<?= base_url("/send/email") ?>" method="POST" id="form"
                  class="needs-validation astro-7NXVRVFU" novalidate>
                <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE" class="astro-7NXVRVFU">
                <!-- Create your free access key from https://web3forms.com/ -->
                <input type="checkbox" class="hidden astro-7NXVRVFU" style="display:none" name="botcheck">
                <div class="mb-5 astro-7NXVRVFU">
                    <input type="text" placeholder="Full Name" required
                           class="w-full px-4 py-3 border-2 placeholder:text-gray-800 rounded-md outline-none focus:ring-4 border-gray-300 focus:border-gray-600 ring-gray-100 astro-7NXVRVFU"
                           name="name">
                    <!--                    <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1 astro-7NXVRVFU">-->
                    <!--                        Please provide your full name.-->
                    <!--                    </div>-->
                </div>
                <div class="mb-5 astro-7NXVRVFU">
                    <label for="email_address" class="sr-only astro-7NXVRVFU">Email Address</label><input
                            id="email_address" type="email" placeholder="Email Address" name="email" required
                            class="w-full px-4 py-3 border-2 placeholder:text-gray-800 rounded-md outline-none focus:ring-4 border-gray-300 focus:border-gray-600 ring-gray-100 astro-7NXVRVFU">
                    <!--                    <div class="empty-feedback text-red-400 text-sm mt-1 astro-7NXVRVFU">-->
                    <!--                        Please provide your email address.-->
                    <!--                    </div>-->
                    <!--                    <div class="invalid-feedback text-red-400 text-sm mt-1 astro-7NXVRVFU">-->
                    <!--                        Please provide a valid email address.-->
                    <!--                    </div>-->
                </div>
                <div class="mb-3 astro-7NXVRVFU">
                    <textarea name="message" required placeholder="Your Message"
                              class="w-full px-4 py-3 border-2 placeholder:text-gray-800 rounded-md outline-none h-36 focus:ring-4 border-gray-300 focus:border-gray-600 ring-gray-100 astro-7NXVRVFU"></textarea>
                    <!--                    <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1 astro-7NXVRVFU">-->
                    <!--                        Please enter your message.-->
                    <!--                    </div>-->
                </div>
                <button type="submit"
                        class="rounded text-center transition focus-visible:ring-2 ring-offset-2 ring-gray-200 w-full px-6 py-3 bg-black text-white hover:bg-slate-900 border-2 border-transparent astro-7NXVRVFU">
                    Kirim!
                </button>
                <div id="result" class="mt-3 text-center astro-7NXVRVFU"></div>
            </form>
        </div>
    </div>
</div>
<script>


    const form = document.getElementById("form")
        , result = document.getElementById("result")
        , url = form.attributes['action'].value
        , method = form.attributes['method'].value;

    form.addEventListener("submit", function (e) {
        // enable loading
        const loader = document.getElementById('screen-loader')
        loader.style.display = 'flex'

        e.preventDefault();
        form.classList.add("was-validated");
        if (!form.checkValidity()) {
            form.querySelectorAll(":invalid")[0].focus();
            return;
        }

        const formData = new FormData(form);
        const object = Object.fromEntries(formData);
        const json = JSON.stringify(object);

        fetch(url, {
            method,
            headers: {
                "Content-Type": "application/json",
                Accept: "application/json",
            },
            body: json,
        })
            .then(async (response) => {
                window.location.reload();
            })
            .catch((error) => {
                console.log(error);
                result.innerHTML = "Something went wrong!";
            })
            .then(function () {
                form.reset();
                form.classList.remove("was-validated");
                setTimeout(() => {
                    result.style.display = "none";
                }, 5000);
            });
    });
</script>
<?= $this->endSection() ?>

