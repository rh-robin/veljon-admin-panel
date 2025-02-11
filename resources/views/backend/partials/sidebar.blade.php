<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="17">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="" height="17">
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div class="dropdown sidebar-user m-1 rounded">
        <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-flex align-items-center gap-2">
                        <img class="rounded header-profile-user" src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" alt="Header Avatar">
                        <span class="text-start">
                            <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                            <span class="d-block fs-14 sidebar-user-name-sub-text"><i class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span class="align-middle">Online</span></span>
                        </span>
                    </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <h6 class="dropdown-header">Welcome Anna!</h6>
            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
            <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
            <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
            <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
            <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
            <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
            <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
        </div>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">


            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" target="_blank" href="https://drive.google.com/file/d/1vjEP5tVi-UvUmj0NuWcLYuB5PLUqj1Fb/view?usp=sharing" role="button">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Download HTMl Template</span>
                    </a>

                </li> <!-- end Dashboard Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link{{ Request::routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}"  aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>

                </li> <!-- end Dashboard Menu -->


                {{--=========================== TIPS AND CARE START ==================--}}
                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('admin.tips_care.*') ? 'active' : '' }}" href="{{ route('admin.tips_care.index') }}" role="button" aria-expanded="false" aria-controls="tips_care">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Tips and Care</span>
                    </a>
                </li> <!-- end Dashboard Menu -->
                {{--=========================== TIPS AND CARE END ==================--}}


                {{--=========================== TIPS AND CARE START ==================--}}
                <li class="nav-item">
                    <a class="nav-link menu-link {{ Request::routeIs('admin.breed.*') ? 'active' : '' }}" href="{{ route('admin.breed.index') }}" role="button" aria-expanded="false" aria-controls="tips_care">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Breeds</span>
                    </a>
                </li> <!-- end Dashboard Menu -->
                {{--=========================== TIPS AND CARE END ==================--}}


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-apps-2-line"></i> <span data-key="t-apps">Apps</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarCalendar" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCalendar" data-key="t-calender">
                                    Calendar
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarCalendar">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-calendar.html" class="nav-link" data-key="t-main-calender"> Main Calender </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-calendar-month-grid.html" class="nav-link" data-key="t-month-grid"> Month Grid </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat.html" class="nav-link" data-key="t-chat"> Chat </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEmail" data-key="t-email">
                                    Email
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarEmail">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-mailbox.html" class="nav-link" data-key="t-mailbox"> Mailbox </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebaremailTemplates" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebaremailTemplates" data-key="t-email-templates">
                                                Email Templates
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebaremailTemplates">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-email-basic.html" class="nav-link" data-key="t-basic-action"> Basic Action </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-email-ecommerce.html" class="nav-link" data-key="t-ecommerce-action"> Ecommerce Action </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce" data-key="t-ecommerce">
                                    Ecommerce
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarEcommerce">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products"> Products </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-product-details.html" class="nav-link" data-key="t-product-Details"> Product Details </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-add-product.html" class="nav-link" data-key="t-create-product"> Create Product </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-orders.html" class="nav-link" data-key="t-orders">
                                                Orders </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-order-details.html" class="nav-link" data-key="t-order-details"> Order Details </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-customers.html" class="nav-link" data-key="t-customers"> Customers </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-cart.html" class="nav-link" data-key="t-shopping-cart"> Shopping Cart </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-checkout.html" class="nav-link" data-key="t-checkout"> Checkout </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-sellers.html" class="nav-link" data-key="t-sellers">
                                                Sellers </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-seller-details.html" class="nav-link" data-key="t-sellers-details"> Seller Details </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarProjects" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects" data-key="t-projects">
                                    Projects
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProjects">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-projects-list.html" class="nav-link" data-key="t-list"> List
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-projects-overview.html" class="nav-link" data-key="t-overview"> Overview </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-projects-create.html" class="nav-link" data-key="t-create-project"> Create Project </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTasks" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTasks" data-key="t-tasks"> Tasks
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTasks">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-tasks-kanban.html" class="nav-link" data-key="t-kanbanboard">
                                                Kanban Board </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-tasks-list-view.html" class="nav-link" data-key="t-list-view">
                                                List View </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-tasks-details.html" class="nav-link" data-key="t-task-details"> Task Details </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarCRM" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCRM" data-key="t-crm"> CRM
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarCRM">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-crm-contacts.html" class="nav-link" data-key="t-contacts">
                                                Contacts </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crm-companies.html" class="nav-link" data-key="t-companies">
                                                Companies </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crm-deals.html" class="nav-link" data-key="t-deals"> Deals
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crm-leads.html" class="nav-link" data-key="t-leads"> Leads
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarCrypto" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrypto" data-key="t-crypto"> Crypto
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarCrypto">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-crypto-transactions.html" class="nav-link" data-key="t-transactions"> Transactions </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-buy-sell.html" class="nav-link" data-key="t-buy-sell">
                                                Buy & Sell </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-orders.html" class="nav-link" data-key="t-orders">
                                                Orders </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-wallet.html" class="nav-link" data-key="t-my-wallet">
                                                My Wallet </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-ico.html" class="nav-link" data-key="t-ico-list"> ICO
                                                List </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-kyc.html" class="nav-link" data-key="t-kyc-application"> KYC Application </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarInvoices" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoices" data-key="t-invoices">
                                    Invoices
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarInvoices">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-invoices-list.html" class="nav-link" data-key="t-list-view">
                                                List View </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-invoices-details.html" class="nav-link" data-key="t-details">
                                                Details </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-invoices-create.html" class="nav-link" data-key="t-create-invoice"> Create Invoice </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTickets" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTickets" data-key="t-supprt-tickets">
                                    Support Tickets
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTickets">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-tickets-list.html" class="nav-link" data-key="t-list-view">
                                                List View </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-tickets-details.html" class="nav-link" data-key="t-ticket-details"> Ticket Details </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarnft" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarnft" data-key="t-nft-marketplace">
                                    NFT Marketplace
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarnft">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-nft-marketplace.html" class="nav-link" data-key="t-marketplace"> Marketplace </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-explore.html" class="nav-link" data-key="t-explore-now"> Explore Now </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-auction.html" class="nav-link" data-key="t-live-auction"> Live Auction </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-item-details.html" class="nav-link" data-key="t-item-details"> Item Details </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-collections.html" class="nav-link" data-key="t-collections"> Collections </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-creators.html" class="nav-link" data-key="t-creators"> Creators </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-ranking.html" class="nav-link" data-key="t-ranking"> Ranking </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-wallet.html" class="nav-link" data-key="t-wallet-connect"> Wallet Connect </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-create.html" class="nav-link" data-key="t-create-nft"> Create NFT </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="apps-file-manager.html" class="nav-link"> <span data-key="t-file-manager">File Manager</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-todo.html" class="nav-link"> <span data-key="t-to-do">To Do</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarjobs" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarjobs" data-key="t-jobs"> Jobs</a>
                                <div class="collapse menu-dropdown" id="sidebarjobs">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-job-statistics.html" class="nav-link" data-key="t-statistics"> Statistics </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarJoblists" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarJoblists" data-key="t-job-lists">
                                                Job Lists
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarJoblists">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-job-lists.html" class="nav-link" data-key="t-list"> List
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-grid-lists.html" class="nav-link" data-key="t-grid"> Grid </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-details.html" class="nav-link" data-key="t-overview"> Overview</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCandidatelists" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCandidatelists" data-key="t-candidate-lists">
                                                Candidate Lists
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCandidatelists">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-job-candidate-lists.html" class="nav-link" data-key="t-list-view"> List View
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-candidate-grid.html" class="nav-link" data-key="t-grid-view"> Grid View</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-application.html" class="nav-link" data-key="t-application"> Application </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-new.html" class="nav-link" data-key="t-new-job"> New Job </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-companies-lists.html" class="nav-link" data-key="t-companies-list"> Companies List </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-categories.html" class="nav-link" data-key="t-job-categories"> Job Categories</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="apps-api-key.html" class="nav-link" data-key="t-api-key">API Key</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Layouts</span> <span class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="layouts-horizontal.html" target="_blank" class="nav-link" data-key="t-horizontal">Horizontal</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Detached</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-two-column.html" target="_blank" class="nav-link" data-key="t-two-column">Two Column</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-vertical-hovered.html" target="_blank" class="nav-link" data-key="t-hovered">Hovered</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>





                {{--======= multi level =========--}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                        <i class="ri-share-line"></i> <span data-key="t-multi-level">Multi Level</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMultilevel">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level
                                    1.2
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAccount">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2"> Level 2.2
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCrm">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-3.1"> Level 3.1
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
