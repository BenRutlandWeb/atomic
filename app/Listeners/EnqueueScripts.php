<?php

namespace App\Listeners;

use Atomic\Events\Dispatcher;

class EnqueueScripts
{
    /**
     * Register the listeners for the subscriber.
     *
     * @param \Atomic\Events\Dispatcher $events
     * @return void
     */
    public function subscribe(Dispatcher $events): void
    {
        $events->listen('admin_enqueue_scripts', [$this, 'enqueueAdminAssets']);
        $events->listen('wp_enqueue_scripts', [$this, 'enqueueAppAssets']);
        $events->listen('login_enqueue_scripts', [$this, 'enqueueAppAssets']);
        $events->listen('admin_init', [$this, 'enqueueEditorAssets']);
    }

    /**
     * Enqueue app assets
     *
     * @return void
     */
    public function enqueueAppAssets(): void
    {
        // css
        wp_enqueue_style('atomic-app', mix('css/app.css'), [], null);
        wp_enqueue_style('atomic-font', 'https://fonts.googleapis.com/css2?family=Gugi&family=Open+Sans:wght@400;600&display=swap', [], null);

        // js
        wp_enqueue_script('atomic-app', mix('js/app.js'), [], null, true);
    }

    /**
     * Enqueue admin assets
     *
     * @param string $hookSuffix The current admin page
     *
     * @return void
     */
    public function enqueueAdminAssets(string $hookSuffix): void
    {
        // css
        wp_enqueue_style('atomic-admin', mix('css/admin.css'), [], null);

        // js
        wp_enqueue_script('atomic-admin', mix('js/admin.js'), [], null, true);
    }

    /**
     * Enqueue editor assets
     *
     * @return void
     */
    public function enqueueEditorAssets(): void
    {
        add_theme_support('editor-styles');

        add_editor_style('assets/css/editor.css');
    }
}
