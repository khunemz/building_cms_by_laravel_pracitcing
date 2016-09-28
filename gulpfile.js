var elixir = require('laravel-elixir');

elixir.config.assetsDir = 'public/themes/default/assets/';
elixir.config.publicPath = elixir.config.assetsPath;


elixir(function(mix) {
  mix.copy('node_modules/bootstrap/dist/css/*.css'
      , 'public/themes/default/assets/css');
  mix.copy('node_modules/font-awesome/css/*.css'
      , 'public/themes/default/assets/css');
  mix.copy('node_modules/simplemde/dist/simplemde.min.css'
      , 'public/themes/default/assets/css');
  mix.copy('node_modules/eonasdan-bootstrap-datetimepick/build/css/bootstrap-datetimepicker.css'
      , 'public/themes/default/assets/css');

  mix.copy('node_modules/jquery/dist/jquery.min.js'
      , 'public/themes/default/assets/js'); 
  mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.js'
      , 'public/themes/default/assets/js'); 
  mix.copy('node_modules/simplemde/dist/simplemde.min.js'
      , 'public/themes/default/assets/js');
  mix.copy('node_modules/eonasdan-bootstrap-datetimepick/build/js/bootstrap-datetimepicker.min.js'
      , 'public/themes/default/assets/js');
  mix.copy('node_modules/moment/src/moment.js'
      , 'public/themes/default/assets/js');
  

  mix.styles(['bootstrap.min.css' , '**/*.css'], 'public/themes/default/assets/style/');
  mix.scripts(['jquery.min.js' , '**/*.js'], 'public/themes/default/assets/script/');

});
