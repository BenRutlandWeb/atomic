<?php echo view('header'); ?>

<main class="text-gray-600 body-font overflow-hidden flex-1">

    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 font-atomic">
                    <?php bloginfo('name'); ?>
                </h1>
                <p class="mb-8 leading-relaxed">
                    <?php bloginfo('description'); ?>
                </p>
                <div class="flex justify-center">
                    <a href="<?php echo url('sample-page'); ?>" class="inline-flex text-white font-bold bg-primary border-0 py-2 px-6 focus:outline-none hover:bg-secondary rounded text-lg focus:ring-2 focus:ring-offset-2">
                        <?php _e('Sample Page', 'atomic'); ?>
                    </a>
                    <a href="https://github.com/BenRutlandWeb/atomic" class="ml-4 inline-flex items-center gap-2 text-gray-700 font-bold bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded text-lg focus:ring-2 focus:ring-offset-2" target="_blank" rel="external">
                        Github
                        <span class="w-4 h-4 fill-current inline-block">
                            <?php echo svg('img/github'); ?>
                        </span>
                    </a>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="<?php echo asset('img/screenshot.png'); ?>">
            </div>
        </div>
    </section>

    <?php if (have_posts()) : ?>

        <section id="blog" class="text-gray-600 body-font overflow-hidden">
            <div class="container px-5 py-12 mx-auto">
                <ul class="divide-y-4 divide-gray-300 max-w-prose">

                    <?php while (have_posts()) : the_post(); ?>

                        <li class="py-8 flex flex-wrap md:flex-nowrap">
                            <article>
                                <p class="text-sm font-medium text-gray-900 title-font mb-2">
                                    <?php the_date(); ?>
                                </p>
                                <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">
                                    <?php the_title(); ?>
                                </h2>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="rounded bg-gray-200 py-1 px-2 text-gray-700 font-bold inline-flex items-center mt-4 focus:outline-none hover:bg-gray-300 focus:ring-2 focus:ring-offset-2">
                                    <?php _e('Read more &rarr;', 'atomic'); ?>
                                </a>
                            </article>
                        </li>

                    <?php endwhile; ?>

                </ul>
            </div>
        </section>

    <?php endif; ?>

</main>

<?php echo view('footer');
