@extends('layout/base')

@section("head.title", __("Easy Assessment Software & App - FREE - Lumiform"))
@section('meta-tags')
        <meta name="keywords" content="@lang('Assessment software')">
        <meta name="keywords" content="@lang('assessment app')">
    <meta name="description" content="@lang('Conduct assessments faster via the assessment app, get fully automated reports, and analyse all data in a snap with the assessment software. FOR FREE!')">
@endsection
@section("content")
    <section class="lg:pt-28 lg:pb-40 py-16 cases--assessment"
             style="
                   "
    >
        <div class="container mx-auto">
            <div class="w-full lg:w-10/12 mx-auto lg:mb-16 mb-12">
                <h1 class="text-70 font-cocogoose font-black uppercase text-center tracking-normal text-primary lg:mb-16 mb-10 leading-none">
                    @lang('Identify risks earlier,<span class="line__break"></span> through digital assessments')
                </h1>
                <p class="text-30 font-light font-din text-secondary text-center">
                    @lang('Improve your company’s safety by identifying hazards more quickly, <span class="line__break"></span> solving issues more quickly and managing workflows more successfully. ')
                </p>
            </div>
            <button class="mx-auto w-215  bg-red tracking-large font-extrabold text-white uppercase font-cocogoose text-20 h-70  rounded-20 items-center justify-center flex">
                @lang('try for FREE')
            </button>
        </div>
    </section>
    <section class="py-16 lg:py-32 with__border--bottom">
        @include('components.use-cases.image_text_horizontal',[
        'heading' => __('<span class="text-light-blue">Cut assessment time </span>'),
        'image' => ['group-4390.png','group-4390@2x.png'],
        'items' => [
        __('Conduct assessments faster, and attach photos and detailed comments.'),
        __('The system automatically creates assessment reports and results.')
        ],
        'bottom' => ['text' => __('Q-Cells reduced their assessment time by 40%, with Lumiform.'),'borderColor' => 'light-blue']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => __('Identify and solve risks <span class="text-red">four times quicker</span>'),
        'image' => ['group-5033.png','group-5033@2x.png'],
        'reversed' => true,
        'items' => [
        __('Assign tasks on the spot whenever issues occur during the assessments. '),
        __('Track issue resolution over time, and solve problems quickly, together with your teammates, via messaging.')
        ],
        'bottom' => ['text' => 'Beumer Group identified workplace risks four times faster with Lumiform. .','borderColor' => 'red']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => __('<span class="text-green">100% compliant</span>'),
        'image' => ['group-3463.png','group-3463@2x.png'],
        'items' => [
        __('All your data is kept safe, and no information is lost.'),
        __('All corrective actions are tracked, documented and attached to the report automatically.'),
        ],
        'bottom' => ['text' => __('All reports are 100% compliant with legal requirements.'),'borderColor' => 'green']
        ])
        <a href=""
           class="mx-auto base__button font-extrabold bg-red text-white uppercase font-cocogoose text-20 h-70 px-8 rounded-20 items-center flex">@lang('Get Lumiform FREE')</a>
    </section>
    <section class="py-16 lg:py-28 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 lg:mb-2 uppercase tracking-heading">
                @lang('<span class="text-light-blue">Gain more transparency </span> through digital assessments')
            </h2>
            <p class="text-left font-light font-din text-30 text-secondary tracking-text mb-10 lg:mb-26 lg:pl-26">
                @lang('Create assessments and individual reports, within minutes, or start immediately with ready to-use-templates.<span class="line__break"></span> Conduct audits via the mobile app, assign issues on the fly, and solve them together faster, as a team. <span class="line__break"></span>Analyse all data in a snap, in order to continuously improve procedures.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-4631.png','group-4631@2x.png'],'title' => __('Create assessment forms'),'desc' => __('Create digital assessment forms that meet your company’s requirements and standards, within minutes.')],
            ['srcset' => ['group-4460.png','group-4460@2x.png'],'title' => __('Conduct via App'),'desc' => __('Conduct assessments efficiently with the Lumiform mobile app, be guided through the right corrective actions, add pictures and detailed comments on all assessment checks.')],
            ['srcset' => ['group-4848.png','group-4848@2x.png'],'title' => __('Solve Issues'),'desc' => __('As soon as problems occur, assign a troubleshooting action to the right person, keep track of the solution, and solve problems as quickly as possible, as a team.')],
            ['srcset' => ['group-4850.png','group-4850@2x.png'],'title' => __('Results, Reports and Analyses'),'desc' => __('Lumiform automatically generates the assessment reports, including the calculated result, which can be viewed afterwards, and sent to stakeholders via email. Analyse all data and improve your procedures continuously.')],
            ],
            'features' => ['url' => '#','text' => __('Explore more PRODUCT features')]
            ])

        </div>
    </section>
    @include('components.solution.industries_explore_section',[
    'heading' => __('See how Lumiform is helping teams <span class="line__break"> </span>
        with<span class="text-green"> digital assessments</span> '),
    'items' => [
    ['image' => 'assessment-general-risk-large.png','srcset' => ['assessment-general-risk-large.png','assessment-general-risk-large@2x.png'],'template' => ['url' => '#','text' => __('View manufacturing assessment CASE STUDY')] ],
    ['image' => 'assessments-risk-identification.png','srcset' => ['assessments-risk-identification.png','assessments-risk-identification@2x.png'],'template' => ['url' => '#','text' => __('View construction assessment CASE STUDY')] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'quote-orange.png',
    'class' => 'bg-orange-extralight',
    'text' => __('“Lumiform has helped us to eliminate accidents on the construction site, and we have managed to increase the quality of work at the same time, through frequent safety and quality controls.“'),
    'position' => __('- Uwe, Head of Operations'),
    ])
    @include('components.use-cases.section_companies')
    @include('components.product.bottom_form',[
    'heading' => __('Start with digital assessment via Lumiform App – free of charge!'),
   'sectionBg' =>'orange-light',
    'buttonBg' =>'orange',
    'left' => true,
    'image' =>'group-2213.svg',
    ])
@endsection
