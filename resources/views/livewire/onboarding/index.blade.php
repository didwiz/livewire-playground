<x-dashboard.layout :user="Auth::user()">
    <x-slot name="sidenav">
        {{--<livewire:onboarding.progress key="progress" />--}}
    </x-slot>
    <x-dashboard.body>
        <div class="pt-2 pb-6 md:py-6">
            <livewire:onboarding.steps />
            <livewire:onboarding.steps />
            <livewire:onboarding.steps />
            <livewire:onboarding.steps />
            <livewire:onboarding.steps />
        </div>
    </x-dashboard.body>
</x-dashboard.layout>
