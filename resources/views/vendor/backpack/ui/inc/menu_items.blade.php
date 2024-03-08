{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Editions" icon="la la-trophy" :link="backpack_url('edition')" />
<x-backpack::menu-item title="Countries" icon="la la-flag" :link="backpack_url('country')" />
<x-backpack::menu-item title="Participants" icon="la la-music" :link="backpack_url('participant')" />