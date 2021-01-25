<!DOCTYPE html>
<html lang="<?php echo language_attributes(); ?>">

<head>
    <meta charset="<?php echo get_bloginfo('charset'); ?>">
    <meta name="csrf-token" content="<?php echo csrf_token(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('flex flex-col min-h-screen bg-gray-100'); ?>>
    <?php wp_body_open(); ?>

    <header class="container mx-auto">

        <nav class="nav flex flex-wrap items-center justify-between p-4">
            <span class="text-gray-600 py-4 rounded text-lg inline-flex gap-2 items-center">
                <span class="block w-10 h-10 fill-current">
                    <?php echo svg('img/atomic'); ?>
                </span>
                <span class="font-atomic text-2xl tracking-tight text-primary">Atomic</span>
            </span>

            <?php
            wp_nav_menu([
                'menu'       => 'primary_menu',
                'container'  => 'ul',
                'menu_class' => 'menu flex gap-6 justify-end list-reset m-0 w-full md:w-auto font-atomic',
            ]);
            ?>

        </nav>

    </header>