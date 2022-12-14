@extends('layout/base')

@section("head.title", __("Construction Inspection Software & Safety App - Lumiform - FREE"))
@section('meta-tags')
        <meta name="keywords" content="@lang('Industries')">
        <meta name="keywords" content="@lang('overview')">
    <meta name="description" content="@lang('See how companies of all industries, with all shapes, and sizes, use the App for their quality and safety management. TRY FREE!')">
@endsection
@section("content")
    @include('components.solution.industries_banner_section',[
  'imageBg' => 'construction-banner.png',
  'class' => 'w-full py-10',
  'heading' => __('Improve safety on the construction site'),
  'text' => __('Only Lumiform is designed to help construction businesses in making their sites safer, within minutes.'),
  ])

    <section class="py-8 md:py-16 xl:py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 mb-12 xl:mb-32 uppercase tracking-heading">
                @lang('Lumiform is the easiest way for construction companies to…')
            </h2>

            <div class="flex justify-between mb-20">
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/injury-icon.svg',
                'heading' => __('Prevent injuries and reduce risks'),
                'color' => 'gold',
                'text' => __('Track whether checks are done in time and solve issues as soon as they occur.'),
                'width' => '415'
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/glass-icon_blue.svg',
                'heading' => __('Ensure full transparency'),
                'color' => 'light-blue',
                'text' => __('Cut your inspection time by 30% through faster conduction and automated documentation.'),
                'width' => '415'
                ])
                @include('components.solution.industries_icon_with_text',[
                'icon' => 'icons/time-icon_green.svg',
                'heading' => __('Save time'),
                'color' => 'green',
                'text' => __('We help you to comply with all the laws and to ensure that you have all the documents available at the right time.'),
                'width' => '415'
                ])
            </div>
            <a href="#"
               class="font-extrabold w-290 mt-5 flex justify-center items-center mx-auto bg-red text-white uppercase font-cocogoose text-20 tracking-large  h-50 xxl:h-70 px-8 rounded-20">
                @lang('Get Lumiform FREE')
            </a>
        </div>
    </section>
    <section class="py-8 md:py-16 xl:py-32 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 lg:mb-4 uppercase tracking-heading">
                @lang('Reduce the time required for audits while <span class="text-gold">improving safety</span>')
            </h2>
            <p class="text-center font-light font-din text-30 text-secondary tracking-text mb-20">
                @lang('Perform regular site inspections, discover more issues, and resolve them faster in a team with our intuitive app.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-2831.png','group-2831@2x.png'],'title' => __('Create forms'),'desc' => __('Create custom forms within minutes. Organise inspections on the construction site, to make sure the right person does all the checklists reliably.')],
            ['srcset' => ['group-2834.png','group-2834@2x.png'],'title' => __('Conduct via App'),'desc' => __('Conduct audits and inspections whether with a tablet or smartphone, Android or iOS – online or offline.')],
            ['srcset' => ['group-5199.png','group-5199@2x.png'],'title' => __('Solve Issues'),'desc' => __('Make sure all inspectors can easily report issues. Keep track of the progress, and solve issues together as a team.')],
            ['srcset' => ['group-2835.png','group-2835@2x.png'],'title' => __('Results, Reports and Analyses'),'desc' => __('Don’t waste time on post-processing and digitisation of audit and inspection reports – everything is fully automated. Uncover areas of your construction site that need your attention.')],
            ],
            'features' => ['url' => '#','text' => __('Explore more PRODUCT features')]
            ])


        </div>
    </section>

    <section class="py-8 md:py-16 xl:py-24">
        <div class="container mx-auto">
            <h3 class="text-primary text-center uppercase text-50 font-cocogoose tracking-heading font-bold mb-32">
                @lang('<span class="text-gold">All quality and safety inspections </span> with aN intuitive app')
            </h3>
            <div class="industry__icons flex justify-between flex-wrap">
                @include('components.solution.industries_icon_list',[
                'items' => [
                ['icon' => 'checkin-icon_purple.svg', 'text' => __('Site documentation')],
                ['icon' => 'list-icon_orange.svg', 'text' => __('Maintenance logs')],
                ['icon' => 'expense-icon_green.svg', 'text' => __('Expense documentation')],
                ['icon' => 'acceptance-icon_blue.svg', 'text' => __('Acceptance forms')],
                ['icon' => 'handover-icon_green.svg', 'text' => __('Handover forms')],
                ['icon' => 'safety-icon_gold.svg', 'text' => __('Work safety audits')],
                ['icon' => 'construction-icon_orange.svg', 'text' => __('Construction logbook')],
                ['icon' => 'walk-icon_red.svg', 'text' => __('Safety walks')],
                ['icon' => 'car-icon_blue.svg', 'text' => __('Vehicles inspection')],
                ['icon' => 'list-icon_red.svg', 'text' => __('Feedback survey')],
                ['icon' => 'order-icon_purple.svg', 'text' => __('Order forms')],
                ['icon' => 'glass-icon_gold.svg', 'text' => __('Pre-start siteinspection')],
                ['icon' => 'tool-box-icon_orange.svg', 'text' => __('Tool box checklist')],
                ['icon' => 'list-icon_purple.svg', 'text' => __('INCIDENT REPORT')],
                ['icon' => 'commision-icon_blue.svg', 'text' => __('Commissioning form')],
                ['icon' => 'safety-icon_orange.svg', 'text' => __('Safety assessments')],
                ]
                ])
            </div>
            <a href="#"
               class="flex items-center uppercase justify-center text-red text-center block font-bold text-20 tracking-large mt-10">
                @lang('View all construction use cases')
                <img src="{{asset('img/arrow-right-long-red.svg')}}" alt="" class="h-3 ml-8">
            </a>
        </div>
    </section>
    @include('components.solution.industries_bg_grey',[
        'heading' => __('Start with<span class="text-green"> FREE CHECKLISTS</span> for CONSTRUCTION'),
        'text' =>  __('Browse the Lumiform construction template library. Get started with expert-proofed checklists for construction businesses.'),
        'items' => [
                ['image' => 'inspections-osha-self-inspection.png','srcset' => ['inspections-osha-self-inspection.png','inspections-osha-self-inspection@2x.png'],'text' => __('Manager cleaning check')],
                ['image' => 'facility-vehicle-inspection.png','srcset' => ['facility-vehicle-inspection.png','facility-vehicle-inspection@2x.png'],'text' => __('Mystery shopper checklist')],
                ['image' => 'construction-weekly.png','srcset' => ['construction-weekly.png','construction-weekly@2x.png'],'text' => __('Daily temperature log')],
                ['image' => 'construction-daily.png','srcset' => ['construction-daily.png','construction-daily@2x.png'],'text' => __('General food safety And hygiene checklist')],
                ['image' => 'construction-safety-walk.png','srcset' => ['construction-safety-walk.png','construction-safety-walk@2x.png'],'text' => __('Self-monitoring checklist for food businesses')],
                ['image' => 'construction-toolbox-check.png','srcset' => ['construction-toolbox-check.png','construction-toolbox-check@2x.png'],'text' => __('Closing the counter checklist ')],
            ],
        'image' => 'group-1542.png',
        'template' => ['text' => __('View all TEMPLATES'),'url' => '#']
        ])
    @include('components.solution.industries_explore_section',[
    'heading' => __('<span class="text-gold">Trusted by the world’s best brands</span> in the construction industry'),
    'items' => [
    ['image' => 'construction-inspection.png','srcset' => ['construction-inspection.png','construction-inspection@2x.png'],'template' => ['url' => '#','text' => __('View INSPECTIOn CASE STUDY')] ],
    ['image' => 'construction-audit.png','srcset' => ['construction-audit.png','construction-audit@2x.png'],'template' => ['url' => '#','text' => __('View AUDIT CASE STUDY')] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'quote-orange.png',
    'class' => 'bg-orange-extralight',
    'text' => __('„In the past, we used paper, pen and camera for our audit reports. Now we can use Lumiform and we get everything we need in one tool.“'),
    'position' => __('- David,  <br> Health and Safety Manager'),
    ])
    @include('components.product.bottom_form',[
    'heading' => __('Start improving food quality now – free of charge!'),
    'sectionBg' =>'orange-light',
    'buttonBg' =>'orange',
    'image' =>'img/man-sitting.svg',
    ])
@endsection
