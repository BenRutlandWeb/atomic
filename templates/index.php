<?php echo view('header'); ?>

<header class="container">
    <div class="alignwide flex justify-end">
        <?php
        wp_nav_menu([
            'menu'            => 'primary_menu',
            'container'       => 'nav',
            'container_class' => 'py-4',
            'menu_class'      => 'flex gap-6 items-center',
        ]);
        ?>
    </div>
</header>

<main class="min-h-screen pt-16 pb-32">
    <div class="container gap-y-6 justify-items-start">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h1 class="text-4xl sm:text-6xl font-atomic text-steel-900">
                    <?php the_title(); ?>
                </h1>
                <div class="prose max-w-none prose-steel">
                    <?php the_content(); ?>
                </div>
                <span class="text-tomato-300">
                    <?php echo view('atomic-logo'); ?>
                </span>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>

<?php echo view('footer'); ?>