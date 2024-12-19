@if(env('HOME_PAGE_FOCUS') == 'lots')
    <!--============== Duplex Property Start ==============-->
    <livewire:property-slider title="Duplex  Properties" type="duplex"  :attr="[
        'limit' =>12,
    ]"/>
    <!--============== Duplex Property End ==============-->

    <!--============== Recent Property Start ==============-->
    <livewire:property-slider title="Recent Properties" type="latestProjects" :attr="[
        'limit' =>12
    ]"/>
    <!--============== Recent Property End ==============-->

    <!--============== Featured Property Start ==============-->
    <livewire:property-slider title="Featured Properties" type="featuredProjects"  :attr="[
        'limit' =>12,
        'is_featured_only' => '1',
    ]"/>
    <!--============== Featured Property End ==============-->

    <!--============== coliving Property Start ==============-->
    <livewire:property-slider title="Coliving Properties" type="colivingProjects"  :attr="[
        'limit' =>12,
        'co_living' => '1',
    ]"/>
    <!--============== coliving Property End ==============-->

    <!--============== cashFlowPositive Property Start ==============-->
    <livewire:property-slider title="Cash Flow Positive Properties" type="cashFlowPositiveProjects"  :attr="[
        'limit' =>12,
        'is_cashflow_positive' => '1',
    ]"/>
    <!--============== cashFlowPositive Property End ==============-->

    <!--============== Affordable Property Start ==============-->
    <livewire:property-slider title="Affordable Properties" type="affordableProjects" :attr="[
        'limit' =>12,
        'range' => '1',
        'projects_rage' => '1',
        'selected_min_price' => '10000',
        'selected_max_price' => '600000',
    ]"/>
    <!--============== Affordable Property End ==============-->
    <!--============== NDIS Property Start ==============-->
    <livewire:property-slider title="NDIS Properties" type="ndisProjects"  :attr="[
        'limit' =>12,
        'ndis' => '1',
    ]"/>
    <!--============== NDIS Property End ==============-->

    <!--============== smsf Property Start ==============-->
    <livewire:property-slider title="SMSF Properties" type="smsfProjects"  :attr="[
        'limit' =>12,
        'smsf' => '1',
    ]"/>
    <!--============== smsf Property End ==============-->

    <!--============== firb Property Start ==============-->
    <livewire:property-slider title="FIRB Properties" type="firbProjects"  :attr="[
        'limit' =>12,
        'firb' => '1',
    ]"/>
    <!--============== firb Property End ==============-->
@else
    <!--============== Duplex Property Start ==============-->
    <livewire:project-slider title="Duplex  Projects" type="duplex"  :attr="[
        'limit' =>12,
    ]"/>
    <!--============== Duplex Property End ==============-->

    <!--============== Recent Property Start ==============-->
    <livewire:project-slider title="Recent Projects" type="latestProjects" :attr="[
        'limit' =>12
    ]"/>
    <!--============== Recent Property End ==============-->

    <!--============== Featured Property Start ==============-->
    <livewire:project-slider title="Featured Projects" type="featuredProjects"  :attr="[
        'limit' =>12,
        'is_featured_only' => '1',
    ]"/>
    <!--============== Featured Property End ==============-->

    <!--============== coliving Property Start ==============-->
    <livewire:project-slider title="Coliving Projects" type="colivingProjects"  :attr="[
        'limit' =>12,
        'co_living' => '1',
    ]"/>
    <!--============== coliving Property End ==============-->

    <!--============== cashFlowPositive Property Start ==============-->
    <livewire:project-slider title="Cash Flow Positive Projects" type="cashFlowPositiveProjects"  :attr="[
        'limit' =>12,
        'is_cashflow_positive' => '1',
    ]"/>
    <!--============== cashFlowPositive Property End ==============-->

    <!--============== Affordable Property Start ==============-->
    <livewire:project-slider title="Affordable Projects" type="affordableProjects" :attr="[
        'limit' =>12,
        'range' => '1',
        'projects_rage' => '1',
        'selected_min_price' => '10000',
        'selected_max_price' => '600000',
    ]"/>
    <!--============== Affordable Property End ==============-->
    <!--============== NDIS Property Start ==============-->
    <livewire:project-slider title="NDIS Projects" type="ndisProjects"  :attr="[
        'limit' =>12,
        'ndis' => '1',
    ]"/>
    <!--============== NDIS Property End ==============-->

    <!--============== smsf Property Start ==============-->
    <livewire:project-slider title="SMSF Projects" type="smsfProjects"  :attr="[
        'limit' =>12,
        'smsf' => '1',
    ]"/>
    <!--============== smsf Property End ==============-->

    <!--============== firb Property Start ==============-->
    <livewire:project-slider title="FIRB Projects" type="firbProjects"  :attr="[
        'limit' =>12,
        'firb' => '1',
    ]"/>
    <!--============== firb Property End ==============-->
@endif






