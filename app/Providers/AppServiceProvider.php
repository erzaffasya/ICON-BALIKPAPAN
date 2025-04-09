<?php

namespace App\Providers;

use App\Filament\Resources\AdsResource;
use App\Filament\Resources\CategoryResource;
use App\Filament\Resources\ContactResource;
use App\Filament\Resources\CarouselResource;
use App\Filament\Resources\PostResource;
use App\Filament\Resources\MapResource;
use App\Filament\Resources\AreaResource;
use App\Filament\Resources\ProductResource;
use App\Filament\Resources\FormregistrationResource;
use App\Filament\Resources\GaleryResource;
use App\Filament\Resources\PaymentDetailResource;
use App\Filament\Resources\PaymentResource;
use App\Filament\Resources\TestimonyResource;
use App\Filament\Resources\SocialMediaResource;
use App\Filament\Resources\UserResource;
use App\Filament\Resources\VidioResource;
use App\Filament\Resources\WhatsappResource;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Filament::navigation(function (NavigationBuilder $builder): NavigationBuilder {
            return $builder->groups([
                NavigationGroup::make('')
                    ->collapsible(false)
                    ->items([
                        NavigationItem::make('Dashboard')
                            ->icon('heroicon-o-home')
                            ->activeIcon('heroicon-s-home')
                            ->isActiveWhen(fn (): bool => request()->routeIs('filament.pages.dashboard'))
                            ->url(route('filament.pages.dashboard')),
                        NavigationItem::make('Halaman Utama')
                            ->url('/', shouldOpenInNewTab: true)
                            ->icon('heroicon-o-external-link')
                    ]),
                NavigationGroup::make('Blogs')
                    ->collapsible(true)
                    ->items([
                        ...CarouselResource::getNavigationItems(),
                        ...CategoryResource::getNavigationItems(),
                        ...PostResource::getNavigationItems(),
                        ...TestimonyResource::getNavigationItems(),
                        ...VidioResource::getNavigationItems(),
                        ...GaleryResource::getNavigationItems(),
                        ...AdsResource::getNavigationItems(),
                    ]),
                NavigationGroup::make('Coverage')
                    ->collapsible(true)
                    ->items([
                        ...MapResource::getNavigationItems(),
                        ...AreaResource::getNavigationItems(),
                    ]),
                NavigationGroup::make('Internet')
                    ->collapsible(true)
                    ->items([
                        ...ProductResource::getNavigationItems(),
                        ...FormregistrationResource::getNavigationItems(),
                    ]),
                NavigationGroup::make('Metode Pembayaran')
                    ->collapsible(true)
                    ->items([
                        ...PaymentResource::getNavigationItems(),
                        ...PaymentDetailResource::getNavigationItems()
                    ]),
                NavigationGroup::make('')
                    ->collapsible(false)
                    ->items([
                        ...UserResource::getNavigationItems(),
                        ...WhatsappResource::getNavigationItems(),
                    ])
            ]);
        });

        Filament::serving(function () {
            // Using Vite
            Filament::registerViteTheme('resources/css/filament.css');
        });
    }
}
