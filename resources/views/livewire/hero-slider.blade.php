<?php

use Livewire\Volt\Component;

new class extends Component {
    public $slides = [
        [
            'image' => '/assets/images/banner1.png',
            'title' => 'Your Partner in Building Wealth Through Property Investment',
            'description' => 'At Address Property Group, our mission is to empower Australians in achieving financial freedom and security through strategic property investments.',
        ],
        [
            'image' => '/assets/images/banner2.png',
            'title' => 'Your Partner in Building Wealth Through Property Investment',
            'description' => 'At Address Property Group, our mission is to empower Australians in achieving financial freedom and security through strategic property investments.',
        ],
        [
            'image' => '/assets/images/banner3.png',
            'title' => 'Your Partner in Building Wealth Through Property Investment',
            'description' => 'At Address Property Group, our mission is to empower Australians in achieving financial freedom and security through strategic property investments.',
        ],
    ];
}; ?>
    <!--============== Search Banner Start ==============-->
<div class="full-row p-0"
     style="background-image: url('assets/images/banner3.png'); background-position: center center;">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12">
                <div class="banner-search" style="padding-top: 300px; padding-bottom: 320px;">
                    <h2 class="text-center mx-auto text-white">Search what you are looking for...</h2>
                    @include('layouts.partials.searchbar')
                </div>
            </div>
        </div>
    </div>
</div>
