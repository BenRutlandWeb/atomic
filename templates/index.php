<?php echo view('header'); ?>

<main class="text-gray-600 body-font overflow-hidden flex-1">

    <?php if (have_posts()) : ?>

        <section class="text-gray-600 body-font overflow-hidden">
            <div class="container px-5 py-24 mx-auto">

                <?php while (have_posts()) : the_post(); ?>

                    <article class="prose">
                        <h1 class="font-atomic">
                            <?php the_title(); ?>
                        </h1>
                        <?php the_content(); ?>
                    </article>

                <?php endwhile; ?>

            </div>
        </section>

    <?php endif; ?>

</main>

<?php echo view('footer');
