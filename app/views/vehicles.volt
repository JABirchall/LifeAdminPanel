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
                        <h3 class="m-subheader__title ">{{ title }}</h3><br/>
                        <div class="m-portlet m-portlet--mobile">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item">
                                            <div class="m-portlet__body">
                                                <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1528px;">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th style="width: 294.25px;">Vehicle Classname</th>
                                                                        <th style="width: 294.25px;">Player ID</th>
                                                                        <th style="width: 294.25px;">Alive (Blown Up)</th>
                                                                        <th style="width: 294.25px;">Active (In Game)</th>
                                                                        <th style="width: 294.25px;">License Plate</th>
                                                                        <th style="width: 294.25px;">Faction Side</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    {% for vehicle in vehicles.items %}
                                                                        <tr>
                                                                            <td>{{ vehicle.classname }}</td>
                                                                            <td>{{ vehicle.pid }}</td>
                                                                            <td>{{ vehicle.alive }}</td>
                                                                            <td>{{ vehicle.active }}</td>
                                                                            <td>{{ vehicle.plate }}</td>
                                                                            <td>{{ vehicle.side }}</td>
                                                                        </tr>
                                                                    {% endfor %}
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-12">
                                                            <div class="dataTables_info" id="m_table_1_info" role="status" aria-live="polite">You are in page {{ vehicles.current }} of {{ vehicles.total_pages }}</div>
                                                            <div class="dataTables_paginate paging_simple_numbers" id="m_table_1_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous" id="m_table_1_previous"><a href="/players/vehicles?page={{vehicles.before}}" aria-controls="m_table_1" data-dt-idx="0" tabindex="0" class="page-link"><i class="la la-angle-left"></i></a></li>
                                                                    <li class="paginate_button page-item active"><a href="/players/vehicles?page={{vehicles.current}}" aria-controls="m_table_1" data-dt-idx="1" tabindex="0" class="page-link">{{ vehicles.current }}</a></li>
                                                                    <li class="paginate_button page-item next" id="m_table_1_next"><a href="/players/vehicles?page={{vehicles.next}}" aria-controls="m_table_1" data-dt-idx="6" tabindex="0" class="page-link"><i class="la la-angle-right"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
