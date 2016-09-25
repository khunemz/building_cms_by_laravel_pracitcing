var elixir = require('laravel-elixir');

elixir.config.assetsDir = 'public/themes/default/assets/';
elixir.config.publicPath = elixir.config.asstsPath;

elixir(function(mix) {
    mix.sass('/backend.scss');
});
