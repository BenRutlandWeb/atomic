<?php echo view('header'); ?>

<main class="h-screen flex items-center">
    <div class="w-full container gap-y-6 justify-items-start">
        <a href="<?php echo url()->home(); ?>" class="button button--secondary">
            <?php _e('Go home'); ?>
        </a>
        <h1 class="text-4xl sm:text-6xl font-atomic text-steel-900">
            <?php _e('404 | Not found'); ?>
        </h1>
        <span class="text-tomato-300">
            <?php echo view('atomic-logo'); ?>
        </span>
    </div>
</main>

<?php echo view('footer'); ?>