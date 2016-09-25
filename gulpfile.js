var elixir = require('laravel-elixir');

elixir.config.assetsDir = 'public/themes/default/assets/';
elixir.config.publicPath = elixir.config.assetsPath;


elixir(function(mix) {
    mix.copy('node_modules/bootstrap/dist/css/*.css'
      , 'public/themes/default/assets/css');


    mix.styles(['bootstrap.min.css' , 'backend.css' ], 'public/themes/default/assets/style/');
});
