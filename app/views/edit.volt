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
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="m-portlet m-portlet--full-height  ">
                        <div class="m-portlet__body">
                            <div class="m-card-profile">
                                <div class="m-card-profile__details">
                                    <span class="m-card-profile__name">{{ player.name|e }}</span>
                                    <a href="" class="m-card-profile__email m-link">{{ player.pid }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                        <div class="tab-content">
                            <form role="form" action="/players/edit/{{ player.pid }}" method="post">
                            <div class="tab-pane active" id="m_user_profile_tab_1">
                                    <div class="m-portlet__body">

                                        <div class="form-group m-form__group row">
                                            <div class="col-10 ml-auto">
                                                <h3 class="m-form__section">General Stats</h3>
                                            </div>
                                        </div>

                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label" id="player_name">Players Name</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" disabled value="{{ player.name|e }}" id="player_name">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label" id="player_id">Player ID</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" disabled value="{{ player.pid }}" id="player_id">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Players Bank</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" id="player_bank" name="bank" value="{{ player.bankacc }}">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Player Cash</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" id="player_cash" name="cash" value="{{ player.cash }}">
                                            </div>
                                        </div>

                                        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

                                        <div class="form-group m-form__group row">
                                            <div class="col-10 ml-auto">
                                                <h3 class="m-form__section">Whitelisting</h3>
                                            </div>
                                        </div>

                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Police Level</label>
                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                <select class="form-control edited" id="player_cop" name="cop">
                                                    <option value="0" {% if player.coplevel == 0 %}selected{% endif %}>Unwhitelisted</option>
                                                    <option value="1" {% if player.coplevel == 1 %}selected{% endif %}>Cadet</option>
                                                    <option value="2" {% if player.coplevel == 2 %}selected{% endif %}>Senior/Officer</option>
                                                    <option value="3" {% if player.coplevel == 3 %}selected{% endif %}>Corproal</option>
                                                    <option value="4" {% if player.coplevel == 4 %}selected{% endif %}>Sergent</option>
                                                    <option value="5" {% if player.coplevel == 5 %}selected{% endif %}>Department Command</option>
                                                    <option value="6" {% if player.coplevel == 6 %}selected{% endif %}>SWAT</option>
                                                    <option value="7" {% if player.coplevel == 7 %}selected{% endif %}>State Command</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">EMS Level</label>
                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                <select class="form-control edited" id="player_medic" name="medic">
                                                    <option value="0" {% if player.mediclevel == 0 %}selected{% endif %}>Unwhitelisted</option>
                                                    <option value="1" {% if player.mediclevel == 1 %}selected{% endif %}>EMS</option>
                                                    <option value="2" {% if player.mediclevel == 2 %}selected{% endif %}>Command</option>
                                                    <option value="3" {% if player.mediclevel == 3 %}selected{% endif %}>High Command</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Donator Level</label>
                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                <select class="form-control edited" id="player_donator" name="donator">
                                                    <option value="0" {% if player.donorlevel == 0 %}selected{% endif %}>Non Donator</option>
                                                    <option value="1" {% if player.donorlevel == 1 %}selected{% endif %}>Donator level 1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Admin Level</label>
                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                <select class="form-control edited" id="player_admin" name="admin">
                                                    <option value="0" {% if player.adminlevel == 0 %}selected{% endif %}>Non Admin</option>
                                                    <option value="1" {% if player.adminlevel == 1 %}selected{% endif %}>Admin level 1</option>
                                                    <option value="2" {% if player.adminlevel == 2 %}selected{% endif %}>Admin level 2</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Gang Level</label>
                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                <select class="form-control edited" id="player_admin" name="gang">
                                                    <option value="0"  {% if player.ganglevel == 0 %}selected{% endif %}>No Gang Level</option>
                                                    <option value="1"  {% if player.ganglevel == 1 %}selected{% endif %}>Reapers</option>
                                                    <option value="2"  {% if player.ganglevel == 2 %}selected{% endif %}>Sloths</option>
                                                    <option value="3"  {% if player.ganglevel == 3 %}selected{% endif %}>TC1</option>
                                                    <option value="4"  {% if player.ganglevel == 4 %}selected{% endif %}>Tr3yWay</option>
                                                    <option value="5"  {% if player.ganglevel == 5 %}selected{% endif %}>BlackWater PM</option>
                                                    <option value="6"  {% if player.ganglevel == 6 %}selected{% endif %}>BlackWater Bandits</option>
                                                    <option value="7"  {% if player.ganglevel == 7 %}selected{% endif %}>Koala Brothers</option>
                                                    <option value="8"  {% if player.ganglevel == 8 %}selected{% endif %}>Sanjeeve</option>
                                                    <option value="9"  {% if player.ganglevel == 9 %}selected{% endif %}>RPD</option>
                                                    <option value="10" {% if player.ganglevel == 10 %}selected{% endif %}>Lion Heart</option>
                                                    <option value="11" {% if player.ganglevel == 11 %}selected{% endif %}>MVR</option>
                                                    <option value="12" {% if player.ganglevel == 12 %}selected{% endif %}>Nerf</option>
                                                    <option value="13" {% if player.ganglevel == 13 %}selected{% endif %}>SAS</option>
                                                    <option value="14" {% if player.ganglevel == 14 %}selected{% endif %}>Yeet</option>
                                                    <option value="15" {% if player.ganglevel == 15 %}selected{% endif %}>Titans</option>
                                                    <option value="16" {% if player.ganglevel == 16 %}selected{% endif %}>OAuth</option>
                                                    <option value="17" {% if player.ganglevel == 17 %}selected{% endif %}>Sprintfield Army</option>
                                                    <option value="18" {% if player.ganglevel == 18 %}selected{% endif %}>Trump Gang</option>
                                                    <option value="19" {% if player.ganglevel == 19 %}selected{% endif %}>Rosso Family</option>
                                                    <option value="20" {% if player.ganglevel == 20 %}selected{% endif %}>Bloods</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

                                        <div class="form-group m-form__group row">
                                            <div class="col-10 ml-auto">
                                                <h3 class="m-form__section">SLT+ Section</h3>
                                            </div>
                                        </div>

                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Players EXP Level</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" id="player_level" name="level" value="{{ player.exp_level }}">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Players Total EXP</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" id="player_xp" name="xp" value="{{ player.exp_total }}">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Players Perk Points</label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" id="player_points" name="points" value="{{ player.exp_perkPoints }}">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-dark" id="submit">Submit</button>
                                    <a href="/edit/{{ player.pid }}" class="btn btn-secondary m-btn m-btn--air m-btn--custom">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}