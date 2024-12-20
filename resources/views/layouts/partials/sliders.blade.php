@foreach(config('property-sliders.sliders') as $slider)
    <!--============== {{ $slider['title'] }} Start ==============-->
    <div class="full-row bg-light" style="padding: 40px 0;">
        <div class="container">
            <div class="row">
                <div class="col mb-4">
                    <div class="align-items-center d-flex">
                        <div class="me-auto">
                            <h2 class="d-table">{{ $slider['title'] }}</h2>
                        </div>
                        <a href="{{ route('listings', array_merge(['type' => $slider['type']], $slider['attr'])) }}" 
                           class="ms-auto btn-link">View All Properties</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    @if(env('HOME_PAGE_FOCUS') == 'lots')
                        <livewire:property-slider 
                            :title="str_replace('Properties', 'Properties', $slider['title'])"
                            :type="$slider['type']"
                            :attr="$slider['attr']"
                        />
                    @else
                        <livewire:project-slider 
                            :title="str_replace('Properties', 'Projects', $slider['title'])"
                            :type="$slider['type']"
                            :attr="$slider['attr']"
                        />
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--============== {{ $slider['title'] }} End ==============-->
@endforeach