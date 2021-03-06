<aside id="aside-main" class="aside-start aside-primary aside-hide-xs d-flex flex-column h-auto">

    <!-- 
        LOGO 
        visibility : desktop only
    -->
    <div class="d-none d-sm-block">
        <div class="clearfix d-flex justify-content-between">

            <!-- Logo : height: 60px max -->
            <a class="w-100 align-self-center navbar-brand p-3" href="{{ url('/dashboard') }}">
                <img src="{{ asset('images/logo/wiroon_logo-name_v2.webp') }}" class="navbar-logo-wiroon" width="350" height="75" alt="...">
            </a>

        </div>
    </div>
    <!-- /LOGO -->


    <div class="aside-wrapper scrollable-vertical scrollable-styled-light align-self-baseline h-100 w-100">

        <!--

            All parent open navs are closed on click!
            To ignore this feature, add .js-ignore to .nav-deep

            Links height (paddings):
                .nav-deep-xs
                .nav-deep-sm
                .nav-deep-md  	(default, ununsed class)

            .nav-deep-hover 	hover background slightly different
            .nav-deep-bordered	bordered links


            ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            IMPORTANT NOTE:
                Curently using ajax navigation!
                remove .js-ajax class to have regular links!
            ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        -->
        <nav class="nav-deep nav-deep-dark nav-deep-hover pb-5">
            <ul class="nav flex-column">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dashboard') }}">
                        <i class="fi fi-menu-dots"></i>
                        <b>Dashboard</b>
                    </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <span class="group-icon float-end">
                            <i class="fi fi-arrow-end-slim"></i>
                            <i class="fi fi-arrow-down-slim"></i>
                        </span>
                        <i class="fi fi-squared-info"></i>
                        IS Department
                    </a>
                
                    <ul class="nav flex-column fs--15">

                        <li class="nav-item pl-3 active">
                            <a class="nav-link" href="{{ url('/customers') }}">
                                <i class="fi fi-users"></i> <b>Customers</b>
                            </a>
                        </li>

                        <li class="nav-item pl-3">
                            <a class="nav-link" href="{{ url('/providers') }}">
                                <i class="fi fi-like"></i> <b>Providers</b>
                            </a>
                        </li>

                        <li class="nav-item pl-3">
                            <a class="nav-link" href="{{ url('/projects') }}">
                                <i class="fi fi-folder-full"></i> <b>Projects</b>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="group-icon float-end">
                            <i class="fi fi-arrow-end-slim"></i>
                            <i class="fi fi-arrow-down-slim"></i>
                        </span>
                        <i class="fi fi-code"></i>
                        <span class="badge badge-warning float-end fs--11 mt-1">new</span>
                        Components
                    </a>
                
                    <ul class="nav flex-column fs--15">

                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-alerts.html">
                                Alerts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-accordions.html">
                                Accordions
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-badges.html">
                                Badges
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-breadcrumbs.html">
                                Breadcrumbs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-buttons.html">
                                Buttons
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-cards.html">
                                Cards
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-carousel.html">
                                Carousel
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-collapse.html">
                                Collapse
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-dropdowns.html">
                                Dropdowns
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-forms.html">
                                Forms
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-icons.html">
                                Icons
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-lists.html">
                                Lists
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-media.html">
                                Media
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-modals.html">
                                Modals
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-navs.html">
                                Navs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-navigation.html">
                                Navigation
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-pagination.html">
                                Pagination
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-progress.html">
                                Progress
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-popover.html">
                                Popover
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-scrollspy.html">
                                Scrollspy
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-spinners.html">
                                Spinners
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-tabs.html">
                                Tabs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-tables.html">
                                Tables
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-timeline.html">
                                Timeline
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-thumbnails.html">
                                Thumbnails
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-tooltip.html">
                                Tooltip
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-ajax" href="components-typography.html">
                                Typography
                            </a>
                        </li>

                    </ul>




                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="group-icon float-end">
                                <i class="fi fi-arrow-end-slim"></i>
                                <i class="fi fi-arrow-down-slim"></i>
                            </span>
                            <i class="fi fi-shape-3dots"></i>
                            Utilities
                        </a>

                        <ul class="nav flex-column fs--15">

                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="util-text-backgrounds.html">
                                    Text &amp; Backgrouns
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="util-borders.html">
                                    Borders
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="util-shadows.html">
                                    Box Shadows
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="util-font.html">
                                    Font Size / Weight
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="util-width-height.html">
                                    Width / Height
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="util-padding-margin.html">
                                    Paddings / Margins
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="util-transition.html">
                                    Transitions / Transforms
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="util-position.html">
                                    Position
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="util-visibility.html">
                                    Visibility
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="util-overlays.html">
                                    Overlays &amp; Opacity
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="util-scroll.html">
                                    Scroll &amp; Scrollbar
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="util-misc.html">
                                    Miscellaneous
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="util-responsive.html">
                                    Responsive
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="util-rtl.html">
                                    RTL
                                </a>
                            </li>

                        </ul>
                    </li>





                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="group-icon float-end">
                                <i class="fi fi-arrow-end-slim"></i>
                                <i class="fi fi-arrow-down-slim"></i>
                            </span>
                            <i class="fi fi-mollecules"></i>
                            SOW : Core Plugins
                        </a>

                        <ul class="nav flex-column fs--15">

                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-search-suggest.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">9Kb</span>
                                    SOW : Search Suggest
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-ajax-navigation.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">10Kb</span>
                                    SOW : Ajax : Navigation
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-ajax-forms.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">4Kb</span>
                                    SOW : Ajax : Forms
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-ajax-content.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">4Kb</span>
                                    SOW : Ajax : Content
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-ajax-modal.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">3Kb</span>
                                    SOW : Ajax : Modals
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-ajax-confirm.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">6Kb</span>
                                    SOW : Ajax : Confirm
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-ajax-select.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">4.5Kb</span>
                                    SOW : Ajax : Select
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-form-validation.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">2Kb</span>
                                    SOW : Form Validation
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-form-advanced.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">7Kb</span>
                                    SOW : Form Advanced
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-file-upload.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">24Kb</span>
                                    SOW : File Upload
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-checkall.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">1Kb</span>
                                    SOW : Check All
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-toasts.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">4Kb</span>
                                    SOW : Toasts
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-gdpr.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">2Kb</span>
                                    SOW : GDPR Cookies
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-inline-search.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">1Kb</span>
                                    SOW : Inline Search
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-dropdown.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">3Kb</span>
                                    SOW : Dropdowns
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-deep-navigation.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">2Kb</span>
                                    SOW : Deep Navigation
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-btn-toggle.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">2.5Kb</span>
                                    SOW : Button Toggle
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-scroll-to.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">1Kb</span>
                                    SOW : Scroll To
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-timer-autohide.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">1Kb</span>
                                    SOW : Timer Autohide
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-timer-countdown.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">2Kb</span>
                                    SOW : Timer Countdown
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-gfont.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">1.5Kb</span>
                                    SOW : Google Font
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-lazyload.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">1Kb</span>
                                    SOW : Lazyload
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-count-animate.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">4.1Kb</span>
                                    SOW : Count Animate
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-sow-service-worker.html">
                                    <span class="badge float-end font-weight-light mt--3 text-gray-400">1Kb</span>
                                    SOW : Service Worker!
                                </a>
                            </li>
                            <li class="nav-item pl--15 pr--15">
                                <div class="bg-diff text-gray-500 fs--13 p-2 rounded">
                                    SOW Core plugins are developed from scratch. 
                                    You can remove, disable or use your own!
                                </div>
                            </li>

                        </ul>
                    </li>




                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="group-icon float-end">
                                <i class="fi fi-arrow-end-slim"></i>
                                <i class="fi fi-arrow-down-slim"></i>
                            </span>
                            <i class="fi fi-layers"></i>
                            Vendor Plugins
                        </a>

                        <ul class="nav flex-column fs--15">

                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-vendor-bootstrap-select.html">
                                    Vendor : Bootstrap Select
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-vendor-flickity.html">
                                    Vendor : Flickity Slider
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-vendor-swiper.html">
                                    Vendor : Swiper Slider
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-vendor-jarallax.html">
                                    Vendor : Jaxallax
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-vendor-sticky-kit.html">
                                    Vendor : Sticky Kit
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-vendor-fancybox.html">
                                    Vendor : Fancybox
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-vendor-photoswipe.html">
                                    Vendor : Photoswipe
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="components-map.html">
                                    Vendor : Map
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-vendor-slimscroll.html">
                                    Vendor : Slimscroll
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-vendor-nestable.html">
                                    Vendor : Nestable
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="#">
                                    <span class="group-icon float-end">
                                        <i class="fi fi-arrow-end-slim"></i>
                                        <i class="fi fi-arrow-down-slim"></i>
                                    </span>
                                    Vendor : Pickers
                                </a>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link js-ajax" href="plugins-vendor-datepicker.html">
                                            Datepicker
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-ajax" href="plugins-vendor-rangepicker.html">
                                            Rangepicker
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-ajax" href="plugins-vendor-colorpicker.html">
                                            Colorpicker
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="#">
                                    <span class="group-icon float-end">
                                        <i class="fi fi-arrow-end-slim"></i>
                                        <i class="fi fi-arrow-down-slim"></i>
                                    </span>
                                    Vendor : Charts
                                </a>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link js-ajax" href="plugins-vendor-chartjs.html">
                                            Chart.js
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-ajax" href="plugins-vendor-flot.html">
                                            Flot Chart
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-ajax" href="plugins-vendor-easypie.html">
                                            Easy Pie Chart
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-ajax" href="plugins-vendor-sparkline.html">
                                            Sparkline Charts
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="#">
                                    <span class="group-icon float-end">
                                        <i class="fi fi-arrow-end-slim"></i>
                                        <i class="fi fi-arrow-down-slim"></i>
                                    </span>
                                    Vendor : Editors
                                </a>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link js-ajax" href="plugins-vendor-medium-editor.html">
                                            Medium Editor
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-ajax" href="plugins-vendor-markdown.html">
                                            Markdown Editor
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link js-ajax" href="plugins-vendor-summernote.html">
                                            Summernote
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-vendor-datatable.html">
                                    Vendor : Datatable
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-vendor-fullcalendar.html">
                                    Vendor : Fullcalendar
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-vendor-prismjs.html">
                                    Vendor : Prismjs (Highlighter)
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-vendor-aos.html">
                                    Vendor : AOS
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-vendor-typed.html">
                                    Vendor : Typed
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="plugins-vendor-sortablejs.html">
                                    Vendor : Sortablejs
                                </a>
                            </li>

                        </ul>
                    </li>





                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="group-icon float-end">
                                <i class="fi fi-arrow-end-slim"></i>
                                <i class="fi fi-arrow-down-slim"></i>
                            </span>
                            <i class="fi fi-eq-vertical"></i>
                            Layout : Variants
                        </a>

                        <ul class="nav flex-column fs--15">

                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="#">
                                    <span class="group-icon float-end">
                                        <i class="fi fi-arrow-end-slim"></i>
                                        <i class="fi fi-arrow-down-slim"></i>
                                    </span>
                                    Sidebar
                                </a>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="layout-sidebar-dark.html">
                                            Sidebar : Dark
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="layout-sidebar-light.html">
                                            Sidebar : Light
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link js-ajax" href="#">
                                    <span class="group-icon float-end">
                                        <i class="fi fi-arrow-end-slim"></i>
                                        <i class="fi fi-arrow-down-slim"></i>
                                    </span>
                                    Header
                                </a>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="layout-header-dark.html">
                                            Header : Dark
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="layout-header-light.html">
                                            Header : Light
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="layout-defaults-1.html">
                                    Defaults : 1
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="layout-defaults-2.html">
                                    Defaults : 2
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="layout-defaults-3.html">
                                    Defaults : 3
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="layout-defaults-4.html">
                                    Defaults : 4
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="layout-defaults-5.html">
                                    Defaults : 5
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="layout-defaults-6.html">
                                    Defaults : 6
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="layout-defaults-7.html">
                                    Defaults : 7
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="layout-header-sticky.html">
                                    Header : Sticky
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="layout-sidebar-sticky.html">
                                    Sidebar : Sticky
                                </a>
                            </li>

                        </ul>
                    </li>





                <li class="nav-title mt-5">
                    <h6 class="fs--15 mb-1 text-white font-weight-normal">Pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-ajax" href="#">
                        <i class="fi fi-database"><!-- main icon --></i>
                        <span class="group-icon float-end">
                            <i class="fi fi-arrow-end-slim"></i>
                            <i class="fi fi-arrow-down-slim"></i>
                        </span>
                        System
                    </a>
                    <ul class="nav flex-column fs--15">
                        <li class="nav-item">
                            <a class="nav-link" href="account-signin.html">
                                Sign In/Up
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="forum-index.html">
                                Forum Pages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="account-settings.html">
                                Account Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin-staff.html">
                                Admin Staff
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="message-inbox.html">
                                Message Inbox
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page-list.html">
                                Page List
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page-product-add.html">
                                Page Product Add
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="404.html">
                                404 Error
                            </a>
                        </li>
                    </ul>
                </li>





                <li class="nav-title mt-5">
                    <h6 class="fs--15 mb-1 text-white font-weight-normal">Admin Layouts</h6>
                </li>

                <li class="nav-item">
                    
                    <a class="nav-link text-white" href="../layout_1/index.html">
                        <i class="fi fi-check text-success"><!-- main icon --></i>
                        <span class="badge opacity-2 font-weight-light float-end fs--11 mt-1">layout_1</span>
                        Smarty SaaS
                    </a>

                </li>

                <li class="nav-item">
                    
                    <a class="nav-link" href="../layout_2/index.html">
                        <i class="fi fi-shape-star"><!-- main icon --></i>
                        <span class="badge opacity-2 font-weight-light float-end fs--11 mt-1">layout_2</span>
                        Smarty Fancy
                    </a>

                </li>

                <li class="nav-item">
                    
                    <a class="nav-link" href="../layout_3/index.html">
                        <i class="fi fi-round-list text-warning"><!-- main icon --></i>
                        <span class="badge opacity-2 font-weight-light float-end fs--11 mt-1">layout_3</span>
                        Horizontal Menu 1
                    </a>

                </li>

                <li class="nav-item">
                    
                    <a class="nav-link" href="../layout_4/index.html">
                        <i class="fi fi-round-list text-warning"><!-- main icon --></i>
                        <span class="badge opacity-2 font-weight-light float-end fs--11 mt-1">layout_42</span>
                        Horizontal Menu 2
                    </a>

                </li>

            </ul>
        </nav>

    </div>
</aside>
<!-- /SIDEBAR -->