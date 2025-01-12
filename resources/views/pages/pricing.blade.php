@php
    use App\Models\Bot;

    $page_title = 'Our pricing';
    $short_description =
        'We have vering portfolio ranges for our pricing plans. Select any that best fits your pocket.';

    $bots = Bot::get();

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
                                    <h1 class="elementor-heading-title elementor-size-default">Investment Plans
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
                class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-75cd2cb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="75cd2cb" data-element_type="section"
                data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2fcac4c elementor-invisible"
                        data-id="2fcac4c" data-element_type="column"
                        data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-40020e9 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                                data-id="40020e9" data-element_type="widget"
                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Choose the best plan for your
                                        business.
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-61b6f29 ob-harakiri-inherit elementor-widget elementor-widget-text-editor"
                                data-id="61b6f29" data-element_type="widget"
                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>We move, create opportunities and protect money for customers and clients worldwide
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-ee45260 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="ee45260" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9d54727"
                        data-id="9d54727" data-element_type="column"
                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-7d75f5a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="7d75f5a" data-element_type="section"
                                data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-0ddf454 elementor-invisible"
                                        data-id="0ddf454" data-element_type="column"
                                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-1c93599 elementor-widget elementor-widget-price-table"
                                                data-id="1c93599" data-element_type="widget"
                                                data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="price-table.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-price-table">
                                                        <div class="elementor-price-table__header">
                                                            <h3 class="elementor-price-table__heading">Silver Plan
                                                            </h3>
                                                            <span class="elementor-price-table__subheading">Investment
                                                                Service
                                                            </span>
                                                        </div>
                                                        <div class="elementor-price-table__price">
                                                            <span
                                                                class="elementor-price-table__currency elementor-currency--before">
                                                            </span>
                                                            <span class="elementor-price-table__integer-part">20
                                                            </span>
                                                            <div class="elementor-price-table__after-price">
                                                                <span
                                                                    class="elementor-price-table__fractional-part">%/24Hours
                                                                </span>
                                                            </div>
                                                            <span
                                                                class="elementor-price-table__period elementor-typo-excluded">
                                                            </span>
                                                        </div>
                                                        <ul class="elementor-price-table__features-list">
                                                            <li class="elementor-repeater-item-bfa36f7">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Duration: 24 Hours </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-105561f">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Minimum: $100
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-474ad15">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Maximum: $1,999
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-2234086">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Referral: 5%
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-2234086">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Asset Protection
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            </li>

                                                            <li class="elementor-repeater-item-e7980d8">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Live Support
                                                                    </span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="elementor-price-table__footer">
                                                            <a class="elementor-price-table__button elementor-button elementor-size-md"
                                                                href="/trade/register">Get Started
                                                            </a>
                                                            <div class="elementor-price-table__additional_info">*Contact Us
                                                                for Consultations.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-0ddf454 elementor-invisible"
                                        data-id="0ddf454" data-element_type="column"
                                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-1c93599 elementor-widget elementor-widget-price-table"
                                                data-id="1c93599" data-element_type="widget"
                                                data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="price-table.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-price-table">
                                                        <div class="elementor-price-table__header">
                                                            <h3 class="elementor-price-table__heading">Premium Plan
                                                            </h3>
                                                            <span class="elementor-price-table__subheading">Investment
                                                                Service
                                                            </span>
                                                        </div>
                                                        <div class="elementor-price-table__price">
                                                            <span
                                                                class="elementor-price-table__currency elementor-currency--before">
                                                            </span>
                                                            <span class="elementor-price-table__integer-part">40
                                                            </span>
                                                            <div class="elementor-price-table__after-price">
                                                                <span
                                                                    class="elementor-price-table__fractional-part">%/48Hours
                                                                </span>
                                                            </div>
                                                            <span
                                                                class="elementor-price-table__period elementor-typo-excluded">
                                                            </span>
                                                        </div>
                                                        <ul class="elementor-price-table__features-list">
                                                            <li class="elementor-repeater-item-bfa36f7">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Duration: 48 Hours
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-105561f">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Minimum: $2,000
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-474ad15">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Maximum: $4,999
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-2234086">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Referral: 5%
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-2234086">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Asset Protection
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-e7980d8">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Live Support
                                                                    </span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="elementor-price-table__footer">
                                                            <a class="elementor-price-table__button elementor-button elementor-size-md"
                                                                href="/trade/register">Get Started
                                                            </a>
                                                            <div class="elementor-price-table__additional_info">*Contact Us
                                                                for Consultations.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-0ddf454 elementor-invisible"
                                        data-id="0ddf454" data-element_type="column"
                                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-1c93599 elementor-widget elementor-widget-price-table"
                                                data-id="1c93599" data-element_type="widget"
                                                data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="price-table.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-price-table">
                                                        <div class="elementor-price-table__header">
                                                            <h3 class="elementor-price-table__heading">Diamond Plan
                                                            </h3>
                                                            <span class="elementor-price-table__subheading">Investment
                                                                Service
                                                            </span>
                                                        </div>
                                                        <div class="elementor-price-table__price">
                                                            <span
                                                                class="elementor-price-table__currency elementor-currency--before">
                                                            </span>
                                                            <span class="elementor-price-table__integer-part">60
                                                            </span>
                                                            <div class="elementor-price-table__after-price">
                                                                <span
                                                                    class="elementor-price-table__fractional-part">%/72Hours
                                                                </span>
                                                            </div>
                                                            <span
                                                                class="elementor-price-table__period elementor-typo-excluded">
                                                            </span>
                                                        </div>
                                                        <ul class="elementor-price-table__features-list">
                                                            <li class="elementor-repeater-item-bfa36f7">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Duration: 72 Hours
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-105561f">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Minimum: $5,000
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-474ad15">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Maximum: $9,999
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-2234086">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Referral: 5%
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-2234086">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Asset Protection
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-e7980d8">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Live Support
                                                                    </span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="elementor-price-table__footer">
                                                            <a class="elementor-price-table__button elementor-button elementor-size-md"
                                                                href="/trade/register">Get Started
                                                            </a>
                                                            <div class="elementor-price-table__additional_info">*Contact Us
                                                                for Consultations.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-0ddf454 elementor-invisible"
                                        data-id="0ddf454" data-element_type="column"
                                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-1c93599 elementor-widget elementor-widget-price-table"
                                                data-id="1c93599" data-element_type="widget"
                                                data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="price-table.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-price-table">
                                                        <div class="elementor-price-table__header">
                                                            <h3 class="elementor-price-table__heading">Professional plan
                                                            </h3>
                                                            <span class="elementor-price-table__subheading">Investment
                                                                Service
                                                            </span>
                                                        </div>
                                                        <div class="elementor-price-table__price">
                                                            <span
                                                                class="elementor-price-table__currency elementor-currency--before">
                                                            </span>
                                                            <span class="elementor-price-table__integer-part">80
                                                            </span>
                                                            <div class="elementor-price-table__after-price">
                                                                <span
                                                                    class="elementor-price-table__fractional-part">%/168Hours
                                                                </span>
                                                            </div>
                                                            <span
                                                                class="elementor-price-table__period elementor-typo-excluded">
                                                            </span>
                                                        </div>
                                                        <ul class="elementor-price-table__features-list">
                                                            <li class="elementor-repeater-item-bfa36f7">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Duration: 168 Hours
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-105561f">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Minimum: $10,000
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-474ad15">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Maximum: Infinity
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-2234086">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Referral: 5%
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-2234086">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Asset Protection
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <li class="elementor-repeater-item-e7980d8">
                                                                <div class="elementor-price-table__feature-inner">
                                                                    <i aria-hidden="true" class="fa fa-check">
                                                                    </i>
                                                                    <span>
                                                                        Live Support
                                                                    </span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="elementor-price-table__footer">
                                                            <a class="elementor-price-table__button elementor-button elementor-size-md"
                                                                href="/trade/register">Get Started
                                                            </a>
                                                            <div class="elementor-price-table__additional_info">*Contact Us
                                                                for Consultations.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-0ddf454 elementor-invisible" data-id="0ddf454" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-1c93599 elementor-widget elementor-widget-price-table" data-id="1c93599" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="price-table.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-price-table">
                                                            <div class="elementor-price-table__header">
                                                                <h3 class="elementor-price-table__heading">Diamond
                                                                </h3>
                                                                <span class="elementor-price-table__subheading">Investment Service
                                        </span>
                                                            </div>
                                                            <div class="elementor-price-table__price">
                                        <span class="elementor-price-table__currency elementor-currency--before">
                                        </span>
                                                                <span class="elementor-price-table__integer-part">50
                                        </span>
                                                                <div class="elementor-price-table__after-price">
                                          <span class="elementor-price-table__fractional-part">%
                                          </span>
                                                                </div>
                                                                <span class="elementor-price-table__period elementor-typo-excluded">
                                        </span>
                                                            </div>
                                                            <ul class="elementor-price-table__features-list">
                                                                <li class="elementor-repeater-item-bfa36f7">
                                                                    <div class="elementor-price-table__feature-inner">
                                                                        <i aria-hidden="true" class="fa fa-check">
                                                                        </i>
                                                                        <span >
                                              After 48 hours
                                            </span>
                                                                    </div>
                                                                </li>
                                                                <li class="elementor-repeater-item-105561f">
                                                                    <div class="elementor-price-table__feature-inner">
                                                                        <i aria-hidden="true" class="fa fa-check">
                                                                        </i>
                                                                        <span >
                                              Minimum:  $5001
                                            </span>
                                                                    </div>
                                                                </li>
                                                                <li class="elementor-repeater-item-474ad15">
                                                                    <div class="elementor-price-table__feature-inner">
                                                                        <i aria-hidden="true" class="fa fa-check">
                                                                        </i>
                                                                        <span >
                                                                                                                                                Maximum:  $10000
                                                                                                                </span>
                                                                    </div>
                                                                </li>
                                                                <li class="elementor-repeater-item-2234086">
                                                                    <div class="elementor-price-table__feature-inner">
                                                                        <i aria-hidden="true" class="fa fa-check">
                                                                        </i>
                                                                        <span >
                                              Asset Protection
                                            </span>
                                                                    </div>
                                                                </li>
                                                                <li class="elementor-repeater-item-e7980d8">
                                                                    <div class="elementor-price-table__feature-inner">
                                                                        <i aria-hidden="true" class="fa fa-check">
                                                                        </i>
                                                                        <span >
                                              Live Support
                                            </span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="elementor-price-table__footer">
                                                                <a class="elementor-price-table__button elementor-button elementor-size-md" href="/?a=signup">Get Started
                                                                </a>
                                                                <div class="elementor-price-table__additional_info">*Contact Us for Consultations.-->
                                </div>
                        </div>
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
    </div>
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
            </section>
        @endsection
