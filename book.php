<!DOCTYPE html>
<html data-wf-domain="" data-wf-page="5f32e1693b9abe829a9401e7" data-wf-site="5f299aa8f93a212823f0c502">
    <head>
        <title>Booking - Wivo Health</title>
        <?php include('partials/header.php'); ?>
    </head>
    <body class="body">
        <div style="opacity: 0;" class="layout">
            <?php include('partials/nav.php'); ?>
            <div class="section-hero-booking bg-whitish-6 bottom-padding">
                <div class="container width-75-center">
                    <div class="card-1-large bg-white load-1st" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <div class="title-centered-wrapper">
                            <p class="caption">Let's Start</p>
                            <h1 class="title-1">Booking</h1>
                            <!-- <p class="text-lead">Please select the area you're in </p> -->
                        </div>
                        <script src="//widget.simplybook.me/v2/widget/widget.js"></script>
                        <script>
                            var widget = new SimplybookWidget({
                                widget_type: "iframe",
                                url: "https:\/\/wivohealth.simplybook.me",
                                theme: "classic",
                                theme_settings: {
                                    timeline_hide_unavailable: "0",
                                    timeline_show_end_time: "0",
                                    timeline_modern_display: "as_slots",
                                    sb_base_color: "#02012d",
                                    display_item_mode: "list",
                                    body_bg_color: "#fdfdfd",
                                    sb_company_label_color: "#ffffff",
                                    hide_img_mode: "1",
                                    sb_busy: "#dad2ce",
                                    sb_available: "#d3e0f1",
                                },
                                timeline: "flexible_week",
                                datepicker: "top_calendar",
                                is_rtl: false,
                                app_config: { predefined: [] },
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    <?php include('partials/foot.php'); ?>
    </body>
</html>