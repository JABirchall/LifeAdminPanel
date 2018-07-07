<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>PsiSyn Admin | {{ title }}</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {% include("components/includeCSS") %}
</head>
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
<div class="m-grid m-grid--hor m-grid--root m-page">
    <header id="m_header" class="m-grid__item m-header" m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">
                {% include("components/menuHeader") %}
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                    <button class="m-aside-header-menu-mobile-close m-aside-header-menu-mobile-close--skin-dark" id="m_aside_header_menu_mobile_close_btn">
                        <i class="la la-close"></i>
                    </button>
                    <div id="m_header_topbar" class="m-topbar m-stack m-stack--ver m-stack--general m-stack--fluid">
                        {% include("components/userBar") %}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        {% include("components/sideMenu") %}
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">{{ title }}</h3>
                    </div>
                </div>
            </div>
            <div class="m-content">
                {% block content %}{% endblock %}
            </div>
        </div>
    </div>
    {% include("components/footer") %}
</div>
<div id="m_scroll_top" class="m-scroll-top"><i class="la la-arrow-up"></i></div>
{% include("components/includeJS") %}
</body>
</html>