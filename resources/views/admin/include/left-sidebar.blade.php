<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Categories">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-application" type="button"><i class="bi bi-grid-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Author">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-widgets" type="button"><i class="fa fa-pen"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Publisher">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-ecommerce" type="button"><i class="bi bi-bag-check-fill"></i></button>
            </li>
{{--            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Components">--}}
{{--                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-components" type="button"><i class="bi bi-bookmark-star-fill"></i></button>--}}
{{--            </li>--}}
{{--            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Forms">--}}
{{--                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-forms" type="button"><i class="bi bi-file-earmark-break-fill"></i></button>--}}
{{--            </li>--}}
{{--            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Tables">--}}
{{--                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-tables" type="button"><i class="bi bi-file-earmark-spreadsheet-fill"></i></button>--}}
{{--            </li>--}}

        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <img src="{{asset('adminAsset')}}/assets/images/dash-logo3.png" width="100%" alt=""/>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="pills-dashboards">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboards</h5>
                        </div>
                        <small class="mb-0">Product Manage content</small>
                    </div>
                    <a href="{{ route('add-product') }}" class="list-group-item"><i class="bi bi-cart-plus"></i>Add Product</a>
                    <a href="{{ route('manage-product') }}" class="list-group-item"><i class="bi bi-archive"></i>Manage Product</a>
                    <a href="#" class="list-group-item"><i class="bi bi-cast"></i>View Product</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-application">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Categories</h5>
                        </div>
                        <small class="mb-0">Manage Categories content</small>
                    </div>
                    <a href="{{ route('add-category') }}" class="list-group-item"><i class="bi bi-check2-square"></i>Add Category</a>
                    <a href="{{route('manage-category')}}" class="list-group-item"><i class="bi bi-receipt"></i>Manage Category</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-widgets">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Author</h5>
                        </div>
                        <small class="mb-0">Author content</small>
                    </div>
                    <a href="{{ route('add-author') }}" class="list-group-item"><i class="bi bi-check2-square"></i>Add Author</a>
                    <a href="{{ route('manage-author') }}" class="list-group-item"><i class="bi bi-receipt"></i>Manage Author</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-ecommerce">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Publisher</h5>
                        </div>
                        <small class="mb-0">Publisher content</small>
                    </div>
                    <a href="{{ route('add-publisher') }}" class="list-group-item"><i class="bi bi-check2-square"></i>Add Publisher</a>
                    <a href="{{ route('manage-publisher') }}" class="list-group-item"><i class="bi bi-receipt"></i>Manage Publisher</a></div>
            </div>
{{--            <div class="tab-pane fade" id="pills-components">--}}
{{--                <div class="list-group list-group-flush">--}}
{{--                    <div class="list-group-item">--}}
{{--                        <div class="d-flex w-100 justify-content-between">--}}
{{--                            <h5 class="mb-0">Components</h5>--}}
{{--                        </div>--}}
{{--                        <small class="mb-0">Some placeholder content</small>--}}
{{--                    </div>--}}
{{--                    <a href="component-alerts.html" class="list-group-item"><i class="bi bi-bell"></i>Alerts</a>--}}
{{--                    <a href="component-accordions.html" class="list-group-item"><i class="bi bi-arrows-collapse"></i>Accordions</a>--}}
{{--                    <a href="component-badges.html" class="list-group-item"><i class="bi bi-badge-8k"></i>Badges</a>--}}
{{--                    <a href="component-buttons.html" class="list-group-item"><i class="bi bi-menu-button"></i>Buttons</a>--}}
{{--                    <a href="component-cards.html" class="list-group-item"><i class="bi bi-card-list"></i>Cards</a>--}}
{{--                    <a href="component-carousels.html" class="list-group-item"><i class="bi bi-card-image"></i>Carousels</a>--}}
{{--                    <a href="component-list-groups.html" class="list-group-item"><i class="bi bi-list-ol"></i>List Groups</a>--}}
{{--                    <a href="component-media-object.html" class="list-group-item"><i class="bi bi-collection"></i>Media Objects</a>--}}
{{--                    <a href="component-modals.html" class="list-group-item"><i class="bi bi-binoculars"></i>Modals</a>--}}
{{--                    <a href="component-navs-tabs.html" class="list-group-item"><i class="bi bi-segmented-nav"></i>Navs & Tabs</a>--}}
{{--                    <a href="component-navbar.html" class="list-group-item"><i class="bi bi-list"></i>Navbars</a>--}}
{{--                    <a href="component-paginations.html" class="list-group-item"><i class="bi bi-arrow-down-up"></i>Pagination</a>--}}
{{--                    <a href="component-popovers-tooltips.html" class="list-group-item"><i class="bi bi-droplet"></i>Popovers & Tooltips</a>--}}
{{--                    <a href="component-progress-bars.html" class="list-group-item"><i class="bi bi-eject"></i>Progress</a>--}}
{{--                    <a href="component-spinners.html" class="list-group-item"><i class="bi bi-gear-wide"></i>Spinners</a>--}}
{{--                    <a href="component-notifications.html" class="list-group-item"><i class="bi bi-app-indicator"></i>Notifications</a>--}}
{{--                    <a href="component-avtars-chips.html" class="list-group-item"><i class="bi bi-person-badge"></i>Avatrs & Chips</a>--}}
{{--                    <a href="component-typography.html" class="list-group-item"><i class="bi bi-person-badge"></i>Typography</a>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </div>
</aside>
