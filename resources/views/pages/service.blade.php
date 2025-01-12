@php

    use App\Models\DepositCoin;

    $logos = DepositCoin::inRandomOrder()->take(20)->get('logo_url');

    $page_title = 'Our services ' . site('name');
    $short_description =
        site('name') .
        ' uses advanced protocol trained on extensive trading data and algorithms to analyze market trends and execute profitable trades with high precision.';

@endphp

{{-- layout --}}
@extends('layouts.front')





@section('contents')
    <div data-elementor-type="wp-post" data-elementor-id="294" class="elementor elementor-294" data-elementor-settings="[]">
        <div class="elementor-section-wrap">
            <section
                class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-f1ac91d elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                data-id="f1ac91d" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-background-overlay">
                </div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b36272c elementor-invisible"
                        data-id="b36272c" data-element_type="column"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-467b2a0 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                                data-id="467b2a0" data-element_type="widget"
                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h1 class="elementor-heading-title elementor-size-default">Services
                                    </h1>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-293bf1b ob-harakiri-inherit elementor-widget elementor-widget-heading"
                                data-id="293bf1b" data-element_type="widget"
                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h5 class="elementor-heading-title elementor-size-default">Enjoy real benefits and
                                        rewards on your accrue investing
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-ad926b1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="ad926b1" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7a56f40"
                        data-id="7a56f40" data-element_type="column"
                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-7309b60 ob-harakiri-inherit elementor-invisible elementor-widget elementor-widget-heading"
                                data-id="7309b60" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h6 class="elementor-heading-title elementor-size-default">Why Choose Us
                                    </h6>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-7dd02ef ob-harakiri-inherit elementor-invisible elementor-widget elementor-widget-heading"
                                data-id="7dd02ef" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Smart Investing with Smart
                                        Ideas
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-f60f201 elementor-widget__width-initial ob-harakiri-inherit elementor-invisible elementor-widget elementor-widget-text-editor"
                                data-id="f60f201" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Fxcryptic have a unique approach to income generation. We build innovative wealth
                                        creation products.
                                    </p>
                                </div>
                            </div>
                            <section
                                class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-38fc485 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="38fc485" data-element_type="section"
                                data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-d1c9d93 elementor-invisible"
                                        data-id="d1c9d93" data-element_type="column"
                                        data-settings="{&quot;animation&quot;:&quot;bounceInDown&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-d7ea1aa ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                                data-id="d7ea1aa" data-element_type="widget"
                                                data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="elementskit-icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con">
                                                        <!-- link opening -->
                                                        <!-- end link opening -->
                                                        <div
                                                            class="elementskit-infobox text-center text- icon-top-align elementor-animation-   ">
                                                            <div class="elementskit-box-header elementor-animation-">

                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title">
                                                                    Security & Privacy
                                                                </h3>
                                                                <p>
                                                                    We understand the importance when it comes to the
                                                                    security of your family and your assets. That's why we
                                                                    use the latest technology to help protect your personal
                                                                    information and financial transactions.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-f4e1383 elementor-invisible"
                                        data-id="f4e1383" data-element_type="column"
                                        data-settings="{&quot;animation&quot;:&quot;bounceInDown&quot;,&quot;animation_delay&quot;:120,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-3104f33 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                                data-id="3104f33" data-element_type="widget"
                                                data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="elementskit-icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con">
                                                        <!-- link opening -->
                                                        <!-- end link opening -->
                                                        <div
                                                            class="elementskit-infobox text-center text- icon-top-align elementor-animation-   ">
                                                            <div class="elementskit-box-header elementor-animation-">

                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title">
                                                                    Investing Tools
                                                                </h3>
                                                                <p>We help you make better decisions with easy-to-use tools
                                                                    and straightforward insights from experienced
                                                                    professionals. From strategy to analysis, our tools help
                                                                    you track your finances.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7402e84 elementor-invisible"
                                        data-id="7402e84" data-element_type="column"
                                        data-settings="{&quot;animation&quot;:&quot;bounceInDown&quot;,&quot;animation_delay&quot;:240,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-ab4c5ae ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                                data-id="ab4c5ae" data-element_type="widget"
                                                data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="elementskit-icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con">
                                                        <!-- link opening -->
                                                        <!-- end link opening -->
                                                        <div
                                                            class="elementskit-infobox text-center text- icon-top-align elementor-animation-   ">
                                                            <div class="elementskit-box-header elementor-animation-">

                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title">
                                                                    Asset Protection
                                                                </h3>
                                                                <p>With our Customer Protection Guarantee, we reimburse you
                                                                    for losses from unauthorized activity in your accounts.
                                                                    We also participate in asset protection programs to
                                                                    futher secure your funds.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9d1dfde elementor-invisible"
                                        data-id="9d1dfde" data-element_type="column"
                                        data-settings="{&quot;animation&quot;:&quot;bounceInDown&quot;,&quot;animation_delay&quot;:360,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-8183ef6 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                                data-id="8183ef6" data-element_type="widget"
                                                data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="elementskit-icon-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con">
                                                        <!-- link opening -->
                                                        <!-- end link opening -->
                                                        <div
                                                            class="elementskit-infobox text-center text- icon-top-align elementor-animation-   ">
                                                            <div class="elementskit-box-header elementor-animation-">

                                                            </div>
                                                            <div class="box-body">
                                                                <h3 class="elementskit-info-box-title">
                                                                    Investment Access
                                                                </h3>
                                                                <p>We took a look at the typical investor journey and knew
                                                                    something had to change. We are creating a paradigm
                                                                    shift by providing investors access to investments
                                                                    previously available to the top 1%.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>





    <div data-elementor-type="footer" data-elementor-id="44" class="elementor elementor-44 elementor-location-footer"
        data-elementor-settings="[]">
        <div class="elementor-section-wrap">
            <section
                class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-cacbd92 elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="cacbd92" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-background-overlay">
                </div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ee6ef09 elementor-invisible"
                        data-id="ee6ef09" data-element_type="column"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-background-overlay">
                            </div>
                            <div class="elementor-element elementor-element-b45c6e6 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                                data-id="b45c6e6" data-element_type="widget"
                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h1 class="elementor-heading-title elementor-size-default">Need Prove?
                                    </h1>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-6f47ad4 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                                data-id="6f47ad4" data-element_type="widget"
                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h4 class="elementor-heading-title elementor-size-default">Check out our latest
                                        payouts.
                                    </h4>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-06d3e6a elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                data-id="06d3e6a" data-element_type="widget"
                                data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="divider.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-divider">
                                        <span class="elementor-divider-separator">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-2bf00cb elementor-widget elementor-widget-button"
                                data-id="2bf00cb" data-element_type="widget"
                                data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="/payout/index.php"
                                            class="elementor-button-link elementor-button elementor-size-md"
                                            role="button">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">View Payouts
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1ac2771"
                        data-id="1ac2771" data-element_type="column"
                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-737986f elementor-widget elementor-widget-elementskit-video"
                                data-id="737986f" data-element_type="widget"
                                data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="elementskit-video.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">
                                        <div class="video-content">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
