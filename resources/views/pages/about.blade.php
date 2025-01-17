@php

    use App\Models\DepositCoin;

    $logos = DepositCoin::inRandomOrder()->take(20)->get('logo_url');

    $page_title = 'About Us';
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
                                    <h1 class="elementor-heading-title elementor-size-default">About Us
                                    </h1>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-293bf1b ob-harakiri-inherit elementor-widget elementor-widget-heading"
                                data-id="293bf1b" data-element_type="widget"
                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h5 class="elementor-heading-title elementor-size-default">We move, create opportunities
                                        and protect money for customers and clients worldwide
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section
                class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-9e55886 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="9e55886" data-element_type="section"
                data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3dc3f31 elementor-invisible"
                        data-id="3dc3f31" data-element_type="column"
                        data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-80935ab ob-harakiri-inherit elementor-widget elementor-widget-heading"
                                data-id="80935ab" data-element_type="widget"
                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h6 class="elementor-heading-title elementor-size-default">About Company
                                    </h6>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-9193c26 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                                data-id="9193c26" data-element_type="widget"
                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">For a secure and planned
                                        future
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-ca77d0c ob-harakiri-inherit elementor-widget elementor-widget-text-editor"
                                data-id="ca77d0c" data-element_type="widget"
                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>
                                        Fxcryptic is an investment management company. We are run by a team of trading
                                        experts who generate profits by buying and selling currencies, stocks, options and
                                        commodities on the foreign exchange market. We employ a variety of trading
                                        techniques to achieve the set goals for the client.
                                    </p>
                                    <p>
                                        Fxcryptic consists a team of financial market professionals assembled specifically
                                        in order to provide the best possible trading conditions to its customers. Our
                                        specialists have been involved in the development of technical specification for
                                        designing an up-to-date platform that is suitable for both beginners and experienced
                                        traders.
                                    </p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-2e76fa3 elementor-widget elementor-widget-button"
                                data-id="2e76fa3" data-element_type="widget"
                                data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="/trade/register"
                                            class="elementor-button-link elementor-button elementor-size-md elementor-animation-wobble-horizontal"
                                            role="button">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">signup
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <center>
                <div> <video src="/fxcrptic/images/b9cryptomining.mp4" width="100%" height="360" video=""
                        controls=""preload="metadata" or preload="none"></video>
            </center>
        </div>
        <section
            class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-4d222d8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="4d222d8" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
            <div class="elementor-background-overlay">
            </div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6bf193d"
                    data-id="6bf193d" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-96bfd81 ob-harakiri-inherit elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="96bfd81" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h6 class="elementor-heading-title elementor-size-default">Company Value
                                </h6>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6bea625 ob-harakiri-inherit elementor-invisible elementor-widget elementor-widget-heading"
                            data-id="6bea625" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Its all about your Future
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-f4d2de9 elementor-widget__width-initial ob-harakiri-inherit elementor-invisible elementor-widget elementor-widget-text-editor"
                            data-id="f4d2de9" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                            data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p>We focus on comprehensive financial advice and investment services
                                </p>
                            </div>
                        </div>
                        <section
                            class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-db01ba1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="db01ba1" data-element_type="section"
                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a3879b8 elementor-invisible"
                                    data-id="a3879b8" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-9f05554 ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="9f05554" data-element_type="widget"
                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <!-- end link opening -->
                                                    <div
                                                        class="elementskit-infobox text-center text- icon-top-align elementor-animation-   ">
                                                        <div class="box-body">
                                                            <h3 class="elementskit-info-box-title">
                                                                Vision
                                                            </h3>
                                                            <p>In a fast-moving and increasingly complex global economy, our
                                                                success depends on how faithfully we adhere to our core
                                                                principles: delivering exceptional client service and acting
                                                                with integrity.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9ddae7c elementor-invisible"
                                    data-id="9ddae7c" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:120,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-0c4c0a6 ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="0c4c0a6" data-element_type="widget"
                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <!-- end link opening -->
                                                    <div
                                                        class="elementskit-infobox text-center text- icon-top-align elementor-animation-   ">
                                                        <div class="box-body">
                                                            <h3 class="elementskit-info-box-title">
                                                                Mission
                                                            </h3>
                                                            <p>Our mission is to generate world-class investment returns
                                                                over the long term. We aspire to do so in a way that makes
                                                                our partners and portfolio companies proud, as we build a
                                                                unique, global company.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-abf2b90 elementor-invisible"
                                    data-id="abf2b90" data-element_type="column"
                                    data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:240,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-a9e6bcc ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="a9e6bcc" data-element_type="widget"
                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <!-- end link opening -->
                                                    <div
                                                        class="elementskit-infobox text-center text- icon-top-align elementor-animation-   ">
                                                        <div class="box-body">
                                                            <h3 class="elementskit-info-box-title">
                                                                Guarantee
                                                            </h3>
                                                            <p>We are here because we are passionate about open, transparent
                                                                markets and aim to be a major driving force in widespread
                                                                adoption, we are the first and the best in investment
                                                                management.
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
                                        <a href="https://Fxcryptic.net/payout/index.php"
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
            </section>
        @endsection
