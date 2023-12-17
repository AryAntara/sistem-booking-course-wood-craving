<!DOCTYPE html>
<html lang="en">
<head>
    <title>Course Ngukir</title>
    <?= $this->include('includes/head') ?>
</head>
<body>
<div id="screen-loader"
     class="fixed top-0 overflow-hidden flex flex-col w-screen h-screen items-center justify-center bg-white z-10">
    <div class="lds-ring">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <p class="font-bold loader-text"><span class="font-bold text-slate-800">Wood</span><span class="text-slate-500">Styles</span>
    </p>
</div>
<div class="max-w-screen-xl mx-auto px-5">

    <!--    Notification or Popup handle-->
    <?php
    $message = session('message');
    if ($message) {
        ?>
        <div id="notify" class="absolute bottom-10 right-10 bg-black rounded">
            <div class="font-bold text-white py-4 px-4 rounded-t flex items-center">
                <div class="bg-white p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 384 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                        <path d="M272 384c9.6-31.9 29.5-59.1 49.2-86.2l0 0c5.2-7.1 10.4-14.2 15.4-21.4c19.8-28.5 31.4-63 31.4-100.3C368 78.8 289.2 0 192 0S16 78.8 16 176c0 37.3 11.6 71.9 31.4 100.3c5 7.2 10.2 14.3 15.4 21.4l0 0c19.8 27.1 39.7 54.4 49.2 86.2H272zM192 512c44.2 0 80-35.8 80-80V416H112v16c0 44.2 35.8 80 80 80zM112 176c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-61.9 50.1-112 112-112c8.8 0 16 7.2 16 16s-7.2 16-16 16c-44.2 0-80 35.8-80 80z"/>
                    </svg>
                </div>
                <div class="ms-2">
                    <?= $message ?>
                </div>
            </div>
            <div id="loader" class="bg-white h-1" style="width: 100%"></div>
        </div>
    <?php } ?>
    <script>

        /**
         * Remove screen loader
         */
        function removeScreenLoader() {
            const TIME_TO_REMOVE_LOADER = 1500
            return new Promise((resolve) => {
                const screenLoader = document.querySelector('#screen-loader');
                setTimeout(() => {
                    screenLoader.style.display = 'none';
                    resolve("success");
                }, TIME_TO_REMOVE_LOADER);
            })
        }

        /**
         * Handle the notification popup when appear
         */
        function handleNotification() {
            const notif = document.getElementById('notify'),
                TIME_TO_REMOVE_NODE = 10000,
                A_SECOND = 1000,
                TIME_IN_SECOND = (TIME_TO_REMOVE_NODE / A_SECOND);

            if (notif) {
                const loader = notif.querySelector('#loader');

                // remove node when clicked
                notif.addEventListener('click', () => {
                    notif.style.transition = `all 5s`
                    notif.remove()
                })

                // remove if they was appear for a second
                setTimeout(() => notif.remove(), TIME_TO_REMOVE_NODE);

                // add animation into the loader
                loader.style.transition = `all ${TIME_IN_SECOND}s`
                loader.style.width = '0%'

            }
        }

        window.onload = async function () {
            console.log(await removeScreenLoader())
            handleNotification()
        }
    </script>
    <?= $this->include('includes/header') ?>
</div>
<?= $this->renderSection('content') ?>
<?= $this->include('includes/footer') ?>
</body>
</html>