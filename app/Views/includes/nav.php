<nav class="hidden w-full lg:w-auto mt-2 lg:flex lg:mt-0" :class="{ 'block': open, 'hidden': !open }"
     x-transition>
    <ul class="flex flex-col lg:flex-row lg:gap-3">
        <li>
            <a href="<?= base_url() ?>" class="flex lg:px-3 py-2 hover:text-gray-900 text-dark <?= $page == 'home' ? 'border-b-2 border-black' : 'text-gray-600'?>">
                Home
            </a>
        </li>
        <li>
            <a href="/course" class="flex lg:px-3 py-2 hover:text-gray-900 <?= $page == 'course' ? 'border-b-2 border-black' : 'text-gray-600'?>">
                Courses
            </a>
        </li>
        <li>
            <a href="/about" class="flex lg:px-3 py-2 hover:text-gray-900 <?= $page == 'about' ? 'border-b-2 border-black' : 'text-gray-600'?>">
                About
            </a>
        </li>
        <li>
            <a href="/contact" class="flex lg:px-3 py-2 hover:text-gray-900 <?= $page == 'contact' ? 'border-b-2 border-black' : 'text-gray-600'?>">
                Contact
            </a>
        </li>
    </ul>
</nav>