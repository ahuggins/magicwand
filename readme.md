# Magic Wand

A CLI entry point to your Laravel application. Basically, if you want to do things like `Artisan` but don't want to disturb `Artisan` or want to only show certain commands to your users.

Maybe you want a set of tools that your developers user, but don't want to include in the already large set of commands in `Artisan`. Or maybe you want some reporting tools, that are only used rarely, or by Cron, and therefore do not need to clutter the list in `Artisan`, this is what `Wand` should fill.

# Installation

`composer require ahuggins/magicwand`

Then after it is installed, you will need to update the `config/app.php` providers array with:

`AHuggins\Wand\WandServiceProvider::class,`

Then you will need to run: `php artisan vendor:publish`

Then you will need to give the published `wand` file executable permission, by running `chmod +x wand`

And that should be it.
