@extends('layouts.dashboard.default')


<!-- //todo: this is for desktop view alone, workaround for livewire issues -->
<!-- @section('sidebar-nav')
<livewire:onboarding.progress />
@endsection -->

@section('dashboard-content')
<livewire:onboarding.steps key="steps" />
@endsection
