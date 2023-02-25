use Filament\Facades\Filament;
 
public function boot(){
  Filament::serving(function () {
    // Using Vite
    Filament::registerViteTheme('resources/css/filament.css');
 
    // Using Laravel Mix
    Filament::registerTheme(
        mix('css/filament.css'),
    );
});
}
