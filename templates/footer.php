<footer class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <span class="text-xl font-atomic">Atomic</span>
        </a>
        <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">
            <?php printf(__('© %s %s - All rights reserved', 'atomic'), date('Y'), 'Atomic'); ?>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-gray-500 hover:text-red-700 focus:outline-none leading-3 focus:ring-2 focus:ring-offset-2 rounded-full" href="https://github.com/BenRutlandWeb/atomic" target="_blank" rel="external">
                <span class="w-8 h-8 fill-current inline-block">
                    <?php echo svg('img/github'); ?>
                </span>
            </a>
        </span>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>