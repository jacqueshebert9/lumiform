@extends('layout/base')

@section("head.title", __("Food & Hospitality Hygiene App & Inspection Software - FREE"))
@section('meta-tags')
        <meta name="keywords" content="@lang('Food hygiene app')">
        <meta name="keywords" content="@lang('Food safety app')">
        <meta name="keywords" content="@lang('Food quality management software')">
        <meta name="keywords" content="@lang('Food inspection software')">
    <meta name="description" content="@lang('Start with easy quality management software. Use the food safety / hygiene app for adequate food inspections and avoid reputational damages. FOR FREE!')">
@endsection
@section("content")
    @include('components.solution.industries_banner_section',[
    'imageBg' => 'food-banner.png',
    'heading' => __('Digital quality assurance for your food business.'),
    'text' => __('Lumiform helps your business within the food industry to comply with regulations and improve quality through more transparent processes.'),
    ])

    <section class="py-8 md:py-16 xl:py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 mb-10 lg:mb-32 uppercase tracking-heading">
                @lang('With Lumiform, your <span class="text-gold">food and hospitality</span> company can…')
            </h2>

            <div class="flex justify-between mb-20 md:flex-no-wrap flex-wrap">
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/umbrella-icon.svg',
                'heading' => __('Protect your brand'),
                'color' => 'light-blue',
                'text' => __('Track whether checks are done in time and solve issues as soon as they occur.'),
                'width' => '415'
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/time-icon.svg',
                'heading' => __('Save on documentation time'),
                'color' => 'purple',
                'text' => __('Cut your inspection time by 30%, through faster conduction and automated documentation.'),
                'width' => '440'
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/check-icon.svg',
                'heading' => __('Comply 100% with regulations'),
                'color' => 'green',
                'text' => __('We help you to comply with all the laws and to ensure that you have all the documents available at the right time.'),
                'width' => '480'
                ])
            </div>
            <a href="#"
               class="font-extrabold w-290 mt-5 flex justify-center items-center mx-auto bg-red text-white uppercase font-cocogoose  text-20 tracking-large  h-70 px-8 rounded-20">
                @lang('Get Lumiform FREE')
            </a>
        </div>
    </section>
    <section class="py-8 md:py-16 xl:py-32 food__dropdown">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 lg:mb-4 uppercase tracking-heading">
                @lang('<span class="text-light-blue">Reduce documentation time</span> while increasing food quality')
            </h2>
            <p class="text-center font-light font-din text-30 text-secondary tracking-text mb-20">
                @lang('Make sure all inspections and audits are done reliably and issues resolved quickly. Get the visibility you need to steer the ship.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-4752.png','group-4752@2x.png'],'title' => __('Create forms'),'desc' => __('Create custom forms within minutes. Organise food inspections, to make sure the right person does all the checklists at the right time.')],
            ['srcset' => ['group-2969.png','group-2969@2x.png'],'title' => __('Conduct via App'),'desc' => __('Conduct audits and inspections whether with a tablet or smartphone, Android or iOS – online or offline.')],
            ['srcset' => ['group-4757.png','group-2969@2x.png'],'title' => __('Automate temperature and humidity checks'),'desc' => __('Use temperature and humidity sensors to automate temperature documentation, while protecting food adequately.')],
            ['srcset' => ['group-3430.png','group-2969@2x.png'],'title' => __('Solve Issues'),'desc' => __('Make sure all inspectors can easily raise issues. Keep track of the progress and solve issues together, as a team.')],
            ['srcset' => ['group-4759.png','group-2969@2x.png'],'title' => __('Results, Reports and Analyses'),'desc' => __('Don’t waste time on post-processing and digitisation of audit and inspection reports – everything is fully automated. Uncover areas that need your attention through in-depth analyses.')],
            ],
            'features' => ['url' => '#','text' => __('Explore more PRODUCT features')]
            ])


        </div>
    </section>
    <section id="temperature" class="with__border--bottom pb-16 sm:pb-0">
        <div class="container mx-auto flex items-center justify-between sm:flex-row flex-col">
            <div class="w-6/12 mb-5 sm:mb-0">
                <img src="{{asset('img/group-3311.png')}}" alt="" srcset="{{asset('img/group-3311.png')}},
                {{asset('img/group-3311@2x.png')}}">
            </div>
            <div class="w-full sm:w-5/12">
                <h3 class="text-red uppercase text-50 font-cocogoose tracking-heading font-bold mb-6 w-9/12">
                    @lang('Add automatic temperature monitoring')
                </h3>
                <p class="font-din font-light text-30 tracking-text text-secondary mb-10">
                    @lang('Explore the most affordable temperature tracking system on the market. It’s manufacturer-independent and very easy to install.')
                </p>
                <a href="{{route(app()->getLocale().'.resources.sensors')}}"
                   class="flex items-center font-bold uppercase text-red text-center block text-20 tracking-large">
                    @lang('Discover the sensor solution')
                    <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
                </a>
            </div>
        </div>
    </section>
    <section class="py-8 md:py-16 xl:py-24">
        <div class="container mx-auto">
            <h3 class="text-primary text-center uppercase text-50 font-cocogoose tracking-heading font-bold mb-16 lg:mb-32">
                @lang('<span class="text-purple">Check all of your quality standards</span> with one app')
            </h3>
            <div class="industry__icons flex justify-between flex-wrap">
                @include('components.solution.industries_icon_list',[
                'items' => [
                ['icon' => 'haccr-icon.svg', 'text' => __('HACCP documentation')],
                ['icon' => 'equipment-icon.svg', 'text' => __('Equipment log')],
                ['icon' => 'glass-icon.svg', 'text' => __('Glass breakage documentation')],
                ['icon' => 'loading-icon.svg', 'text' => __('Bearing inspections')],
                ['icon' => 'goods-icon.svg', 'text' => __('Incoming goods inspection')],
                ['icon' => 'inventory-icon.svg', 'text' => __('Inventory control')],
                ['icon' => 'visitor-icon.svg', 'text' => __('Visitor documentation')],
                ['icon' => 'frying-icon.svg', 'text' => __('Frying fat control')],
                ['icon' => 'cleaning-icon.svg', 'text' => __('Cleaning documentation')],
                ['icon' => 'complaint-icon.svg', 'text' => __('Complaint form')],
                ['icon' => 'temperature-icon.svg', 'text' => __('Temperature logs')],
                ['icon' => 'hazard-icon.svg', 'text' => __('Hazard assessment')],
                ['icon' => 'audits-icon.svg', 'text' => __('Store audits')],
                ['icon' => 'pest-icon.svg', 'text' => __('Pest control')],
                ['icon' => 'training-icon.svg', 'text' => __('Training documentation')],
                ['icon' => 'alergen-icon.svg', 'text' => __('Allergen documentation')],
                ]
                ])
            </div>
            <a href="#"
               class="font-bold flex items-center uppercase justify-center text-red text-center block text-20 tracking-large xl:mt-10">
                @lang('View all food use cases')
                <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
            </a>
        </div>
    </section>
    @include('components.solution.industries_bg_grey',[
        'heading' => __('Quickstart <span class="text-green">free Checklists</span> for food businesses'),
        'text' =>  __('Lumiform offers expert-proofed, ready-to-use templates, and you can customise them as needed.'),
        'items' => [
                ['image' => 'food-manager-cleaning-check.png','srcset' => ['food-manager-cleaning-check.png','food-manager-cleaning-check@2x.png'],'text' => __('Manager cleaning check')],
                ['image' => 'food-mystery-shopper.png','srcset' => ['food-mystery-shopper.png','food-mystery-shopper@2x.png'],'text' => __('Mystery shopper checklist')],
                ['image' => 'food-daily-temperature-log.png','srcset' => ['food-daily-temperature-log.png','food-daily-temperature-log@2x.png'],'text' => __('Daily temperature log')],
                ['image' => 'food-hygiene.png','srcset' => ['food-hygiene.png','food-hygiene@2x.png'],'text' => __('General food safety And hygiene checklist')],
                ['image' => 'food-self-monitoring.png','srcset' => ['food-self-monitoring.png','food-self-monitoring@2x.png'],'text' => __('Self-monitoring checklist for food businesses')],
                ['image' => 'food-closing-the-counter.png','srcset' => ['food-closing-the-counter.png','food-closing-the-counter@2x.png'],'text' => __('Closing the counter checklist ')],
            ],
        'image' => 'group-1509.png',
        'template' => ['text' => __('View all TEMPLATES'),'url' => '#']
        ])
    @include('components.solution.industries_explore_section',[
    'heading' => __('Explore how <span class="text-gold">leaders in the food industry</span> use Lumiform'),
    'items' => [
    ['image' => 'inspections-food.png','srcset' => ['inspections-food.png','inspections-food@2x.png'],'template' => ['url' => '#','text' => __('View INSPECTIOn CASE STUDY')] ],
    ['image' => 'food-safety.png','srcset' => ['food-safety.png','food-safety@2x.png'],'template' => ['url' => '#','text' => __('View AUDIT CASE STUDY')] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'group-1031.png',
    'text' => __('„In the past, we used paper, pen and camera for our audit reports. Now we can use Lumiform and we get everything we need in one tool.“'),
    'position' => __('-Sven,  <br>Head of Quality Management'),
    ])
    @include('components.product.bottom_form',[
    'heading' => __('Start improving food quality now – free of charge!'),
    'sectionBg' =>'red-opacity',
    'buttonBg' =>'red',
    'left' => true,
    'image' =>'group-2001.svg',
    ])
@endsection
