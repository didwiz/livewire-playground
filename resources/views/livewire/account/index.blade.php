<x-dashboard.layout :user="Auth::user()">
    <x-slot name="sidenav">
        <x-dashboard.sidenav />
    </x-slot>
    <x-dashboard.body>
        <div class="pt-2 pb-6 md:py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                <h3 class="text-lg leading-6 font-medium text-gray-900 mt-5">
                    Last 30 days
                </h3>
                <div class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
                    <x-stat title="Total Subscribers" value="71,897" :increase='true' percent='70%' icon='users' />
                    <x-stat title="Avg. Open Rate" value="58.16%" :increase='true' percent='6%' icon='envelope' />
                    <x-stat title="Avg. Click Rate" value="22.07%" :increase='false' percent='3.2%' icon='click' />
                </div>
                <x-music.collections />
            </div>
        </div>
    </x-dashboard.body>
</x-dashboard.layout>
