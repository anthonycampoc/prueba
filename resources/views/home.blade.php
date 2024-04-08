@extends('layouts.admin')

@section('content')

<section class="full-width pageContent">
    <section class="full-width header-well">
        <div class="full-width header-well-icon">
            <i class="zmdi zmdi-account"></i>
        </div>
        <div class="full-width header-well-text">
            <p class="text-condensedLight">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aut nulla accusantium minus corporis accusamus fuga harum natus molestias necessitatibus.
            </p>
        </div>
    </section>
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewAdmin" class="mdl-tabs__tab is-active">NEW</a>
            <a href="#tabListAdmin" class="mdl-tabs__tab">LIST</a>
        </div>
        <div class="mdl-tabs__panel is-active" id="tabNewAdmin">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-primary text-center tittles">
                            New Administrator
                        </div>
                        <div class="full-width panel-content">
                            <form>
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
                                        <h5 class="text-condensedLight">Data Administrator</h5>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="DNIAdmin">
                                            <label class="mdl-textfield__label" for="DNIAdmin">DNI</label>
                                            <span class="mdl-textfield__error">Invalid number</span>
                                        </div>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameAdmin">
                                            <label class="mdl-textfield__label" for="NameAdmin">Name</label>
                                            <span class="mdl-textfield__error">Invalid name</span>
                                        </div>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="LastNameAdmin">
                                            <label class="mdl-textfield__label" for="LastNameAdmin">Last Name</label>
                                            <span class="mdl-textfield__error">Invalid last name</span>
                                        </div>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="tel" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="phoneAdmin">
                                            <label class="mdl-textfield__label" for="phoneAdmin">Phone</label>
                                            <span class="mdl-textfield__error">Invalid phone number</span>
                                        </div>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="email" id="emailAdmin">
                                            <label class="mdl-textfield__label" for="emailAdmin">E-mail</label>
                                            <span class="mdl-textfield__error">Invalid E-mail</span>
                                        </div>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" id="addressAdmin">
                                            <label class="mdl-textfield__label" for="addressAdmin">Address</label>
                                            <span class="mdl-textfield__error">Invalid address</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
                                        <h5 class="text-condensedLight">Account Details</h5>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ]*(\.[0-9]+)?" id="UserNameAdmin">
                                            <label class="mdl-textfield__label" for="UserNameAdmin">User Name</label>
                                            <span class="mdl-textfield__error">Invalid user name</span>
                                        </div>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="password" id="passwordAdmin">
                                            <label class="mdl-textfield__label" for="passwordAdmin">Password</label>
                                            <span class="mdl-textfield__error">Invalid password</span>
                                        </div>
                                        <h5 class="text-condensedLight">Choose Avatar</h5>
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="avatar-male.png">
                                            <img src="{{asset('SFI/assets/img/avatar-male.png')}}" alt="avatar" style="height: 45px; width="45px;" ">
                                            <span class="mdl-radio__label">Avatar 1</span>
                                        </label>
                                        <br><br>
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                            <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="avatar-female.png">
                                            <img src="{{asset('SFI/assets/img/avatar-female.png')}}" alt="avatar" style="height: 45px; width="45px;" ">
                                            <span class="mdl-radio__label">Avatar 2</span>
                                        </label>
                                        <br><br>
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                                            <input type="radio" id="option-3" class="mdl-radio__button" name="options" value="avatar-male2.png">
                                            <img src="{{asset('SFI/assets/img/avatar-male2.png')}}" alt="avatar" style="height: 45px; width="45px;" ">
                                            <span class="mdl-radio__label">Avatar 3</span>
                                        </label>
                                        <br><br>
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
                                            <input type="radio" id="option-4" class="mdl-radio__button" name="options" value="avatar-female2.png">
                                            <img src="{{asset('SFI/assets/img/avatar-female2.png')}}" alt="avatar" style="height: 45px; width="45px;" ">
                                            <span class="mdl-radio__label">Avatar 4</span>
                                        </label>
                                    </div>
                                </div>
                                <p class="text-center">
                                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addAdmin">
                                        <i class="zmdi zmdi-plus"></i>
                                    </button>
                                    <div class="mdl-tooltip" for="btn-addAdmin">Add Administrator</div>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mdl-tabs__panel" id="tabListAdmin">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-success text-center tittles">
                            List Administrator
                        </div>
                        <div class="full-width panel-content">
                            <form action="#">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                                    <label class="mdl-button mdl-js-button mdl-button--icon" for="searchAdmin">
                                        <i class="zmdi zmdi-search"></i>
                                    </label>
                                    <div class="mdl-textfield__expandable-holder">
                                        <input class="mdl-textfield__input" type="text" id="searchAdmin">
                                        <label class="mdl-textfield__label"></label>
                                    </div>
                                </div>
                            </form>
                            <div class="mdl-list">
                                <div class="mdl-list__item mdl-list__item--two-line">
                                    <span class="mdl-list__item-primary-content">
                                        <i class="zmdi zmdi-account mdl-list__item-avatar"></i>
                                        <span>1. Administrator name</span>
                                        <span class="mdl-list__item-sub-title">DNI</span>
                                    </span>
                                    <a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>
                                </div>
                                <li class="full-width divider-menu-h"></li>
                                <div class="mdl-list__item mdl-list__item--two-line">
                                    <span class="mdl-list__item-primary-content">
                                        <i class="zmdi zmdi-account mdl-list__item-avatar"></i>
                                        <span>2. Administrator name</span>
                                        <span class="mdl-list__item-sub-title">DNI</span>
                                    </span>
                                    <a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>
                                </div>
                                <li class="full-width divider-menu-h"></li>
                                <div class="mdl-list__item mdl-list__item--two-line">
                                    <span class="mdl-list__item-primary-content">
                                        <i class="zmdi zmdi-account mdl-list__item-avatar"></i>
                                        <span>3. Administrator name</span>
                                        <span class="mdl-list__item-sub-title">DNI</span>
                                    </span>
                                    <a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>
                                </div>
                                <li class="full-width divider-menu-h"></li>
                                <div class="mdl-list__item mdl-list__item--two-line">
                                    <span class="mdl-list__item-primary-content">
                                        <i class="zmdi zmdi-account mdl-list__item-avatar"></i>
                                        <span>4. Administrator name</span>
                                        <span class="mdl-list__item-sub-title">DNI</span>
                                    </span>
                                    <a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>
                                </div>
                                <li class="full-width divider-menu-h"></li>
                                <div class="mdl-list__item mdl-list__item--two-line">
                                    <span class="mdl-list__item-primary-content">
                                        <i class="zmdi zmdi-account mdl-list__item-avatar"></i>
                                        <span>5. Administrator name</span>
                                        <span class="mdl-list__item-sub-title">DNI</span>
                                    </span>
                                    <a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
