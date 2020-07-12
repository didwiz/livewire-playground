<div class="hidden md:flex md:flex-shrink-0">
    <div class="flex flex-col w-96 bg-gray-800">
        <div class="h-0 flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center flex-shrink-0 px-4">
                <!-- <img class="h-8 w-auto" src="/img/logos/workflow-logo-on-dark.svg" alt="Workflow" /> -->
                <img class="h-12 w-auto" src="/img/logos/logo.svg" alt="Workflow" />
            </div>
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <!-- @yield('sidebar-nav') -->
            @if(request()->is('onboarding'))
            <livewire:onboarding.progress key="progress" />
            @else
            @yield('sidebar-nav')
            @endif
        </div>
        <div class="flex-shrink-0 flex bg-gray-700 p-4">
            <a href="#" class="flex-shrink-0 w-full group block">
                <!-- <div class="flex items-center">
            <div>
              <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
            </div>
            <div class="ml-3">
              <p class="text-sm leading-5 font-medium text-white">
                Tom Cook
              </p>
              <p class="text-xs leading-4 font-medium text-gray-300 group-hover:text-gray-200 transition ease-in-out duration-150">
                View profile
              </p>
            </div>
          </div> -->
                <div class="flex items-center">
                    <div>
                        <!-- <img class="inline-block h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" /> -->
                        <img class="inline-block h-10 w-10 rounded-full" src="{{$user->getGravatar()}}" alt="" />
                    </div>
                    <div class="ml-3">
                        <p class="text-base leading-6 font-medium text-white">
                            {{ $user->name ?? 'Tom Cook'}}
                        </p>
                        <p class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                            View profile
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
