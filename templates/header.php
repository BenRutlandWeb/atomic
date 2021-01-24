<!DOCTYPE html>
<html lang="<?php echo language_attributes(); ?>">

<head>
    <meta charset="<?php echo get_bloginfo('charset'); ?>">
    <meta name="csrf-token" content="<?php echo csrf_token(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('flex flex-col min-h-screen bg-steel-100'); ?>>
    <?php wp_body_open(); ?>