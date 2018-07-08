{% extends "layout.volt" %} {% block content %}
    <div class="m-portlet ">
        <div class="m-portlet__body  m-portlet__body--no-padding">
            <div class="row m-row--no-padding m-row--col-separator-xl">
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                Total Economy
                            </h4><br>
                            <span class="m-widget24__desc">
                                Total $$$ in the server!
                            </span>
                            <span class="m-widget24__stats m--font-brand">
                                {{ eco }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                Total Amount of Players
                            </h4><br>
                            <span class="m-widget24__desc">
                                Wow, we're popular!
                            </span>
                            <span class="m-widget24__stats m--font-info">
                                {{ players }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                Total Vehicles
                            </h4><br>
                            <span class="m-widget24__desc">
                                Total amount owned by players!
                            </span>
                            <span class="m-widget24__stats m--font-danger">
                                {{ vehicles }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Users-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                Total Houses
                            </h4><br>
                            <span class="m-widget24__desc">
                                Total amount owned by players!
                            </span>
                            <span class="m-widget24__stats m--font-success">
                                {{ houses }}
                            </span>
                            <div class="m--space-10"></div>
                        </div>
                    </div>
                    <!--end::New Users-->
                </div>
            </div>
        </div>
    </div>
{% endblock %}