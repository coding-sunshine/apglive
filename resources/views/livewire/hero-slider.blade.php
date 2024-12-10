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

    <!--============== Slider Area Start ==============-->
<div class="full-row p-0 overflow-hidden banner-slider">

    <div id="slider" class="overflow-hidden" style="width:1200px; height:780px; margin:0 auto;margin-bottom: 0px;">

        @foreach($slides as $slide)
            <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:5000; transition2d:104; kenburnsscale:1.00;">
                <img width="1920" height="960" src="{{ $slide['image'] }}" class="ls-bg" alt="" />
                <p style="font-size:20px; font-weight:400; top:280px; left:50%; " class="ls-l ls-hide-phone text-white" data-ls="offsetyin:100%; durationin:1500; delayin:500; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">Address Property Group</p>
                <h2 style="font-size:48px; font-weight:700; top:330px; left:50%; " class="ls-l ls-hide-phone text-white" data-ls="offsetyin:100%; durationin:1500; delayin:1000; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">{{ $slide['title'] }}</h2>
                <p style="top:460px; left:50%; text-align:center; font-weight:400; font-style:normal; text-decoration:none; width:650px; font-size:16px; color:#ffffff; line-height:26px; white-space:normal;" class="ls-l ls-hide-phone" data-ls="offsetyin:100%; durationin:1500; delayin:1500; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">{{ $slide['description'] }}</p>
            </div>
        @endforeach
    </div>
</div>
<!--============== Slider Area End ==============-->
