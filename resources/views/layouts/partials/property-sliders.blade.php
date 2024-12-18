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
        'coliving' => '1',
    ]"/>
<!--============== coliving Property End ==============-->

<!--============== cashFlowPositive Property Start ==============-->
<livewire:property-slider title="Cash Flow Positive Properties" type="cashFlowPositiveProjects"  :attr="[
        'limit' =>12,
        'is_cashflow_positive' => '1',
    ]"/>
<!--============== cashFlowPositive Property End ==============-->

<!--Hot properties - properties less than 550k-->

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





