{% extends "layout.volt" %} {% block content %}
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        {{ title }}
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <!--begin: Datatable -->
            <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div id="m_table_1_filter" class="dataTables_filter">
                            <label>Search:
                                <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="m_table_1">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info" style="width: 1528px;">
                            <thead>
                                <tr role="row">
                                    <th style="width: 294.25px;">Database ID</th>
                                    <th style="width: 294.25px;">Player Name</th>
                                    <th style="width: 294.25px;">Player ID</th>
                                    <th style="width: 294.25px;">Bank Account</th>
                                    <th style="width: 294.25px;">Player Cash</th>
                                    <th style="width: 294.25px;">Cop Level</th>
                                    <th style="width: 294.25px;">Medic Level</th>
                                    <th style="width: 294.25px;">Admin Level</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for player in players.items %}
                                <tr>
                                    <td>{{ player.uid }}</td>
                                    <td>{{ player.name }}</td>
                                    <td>{{ player.pid }}</td>
                                    <td>{{ player.bankacc }}</td>
                                    <td>{{ player.cash }}</td>
                                    <td>{{ player.coplevel }}</td>
                                    <td>{{ player.mediclevel }}</td>
                                    <td>{{ player.adminlevel }}</td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="m_table_1_info" role="status" aria-live="polite">Showing 1 to 10 of 50 entries
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="m_table_1_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="m_table_1_previous"><a href="#" aria-controls="m_table_1" data-dt-idx="0" tabindex="0" class="page-link"><i class="la la-angle-left"></i></a></li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="m_table_1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="m_table_1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                <li class="paginate_button page-item next" id="m_table_1_next"><a href="#" aria-controls="m_table_1" data-dt-idx="6" tabindex="0" class="page-link"><i
                                                class="la la-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}