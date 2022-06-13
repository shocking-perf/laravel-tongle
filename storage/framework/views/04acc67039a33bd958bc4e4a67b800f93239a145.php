<div class="action-list-item-wrap">
    <!-- ACTION LIST ITEM -->
    <div class="action-list-item header-dropdown-trigger">
        <!-- ACTION LIST ITEM ICON -->
        <svg class="action-list-item-icon icon-messages">
            <use xlink:href="#svg-messages"></use>
        </svg>
        <!-- /ACTION LIST ITEM ICON -->
    </div>
    <!-- /ACTION LIST ITEM -->

    <!-- DROPDOWN BOX -->
    <div class="dropdown-box header-dropdown">
        <!-- DROPDOWN BOX HEADER -->
        <div class="dropdown-box-header">
            <!-- DROPDOWN BOX HEADER TITLE -->
            <p class="dropdown-box-header-title">Messages</p>
            <!-- /DROPDOWN BOX HEADER TITLE -->
            <?php if(false): ?>
            <!-- DROPDOWN BOX HEADER ACTIONS -->
            <div class="dropdown-box-header-actions">
                <!-- DROPDOWN BOX HEADER ACTION -->
                <p class="dropdown-box-header-action">Mark all as Read</p>
                <!-- /DROPDOWN BOX HEADER ACTION -->

                <!-- DROPDOWN BOX HEADER ACTION -->
                <p class="dropdown-box-header-action">Settings</p>
                <!-- /DROPDOWN BOX HEADER ACTION -->
            </div>
            <!-- /DROPDOWN BOX HEADER ACTIONS -->
            <?php endif; ?>
        </div>
        <!-- /DROPDOWN BOX HEADER -->

        <!-- DROPDOWN BOX LIST -->
        <div class="dropdown-box-list medium" id="header-chat-messages" data-simplebar>
            <div class="dropdown-box-list-item">
            <p>No Messages.</p>
            </div>
            <?php if(false): ?>
            <!-- DROPDOWN BOX LIST ITEM -->
            <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                <!-- USER STATUS -->
                <div class="user-status">
                    <!-- USER STATUS AVATAR -->
                    <div class="user-status-avatar">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="/assets/img/avatar/04.jpg"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- USER AVATAR PROGRESS -->
                            <div class="user-avatar-progress">
                                <!-- HEXAGON -->
                                <div class="hexagon-progress-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS -->

                            <!-- USER AVATAR PROGRESS BORDER -->
                            <div class="user-avatar-progress-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-border-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS BORDER -->

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">6</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                    </div>
                    <!-- /USER STATUS AVATAR -->

                    <!-- USER STATUS TITLE -->
                    <p class="user-status-title"><span class="bold">Bearded Wonder</span></p>
                    <!-- /USER STATUS TITLE -->

                    <!-- USER STATUS TEXT -->
                    <p class="user-status-text">Great! Then will meet with them at the party...</p>
                    <!-- /USER STATUS TEXT -->

                    <!-- USER STATUS TIMESTAMP -->
                    <p class="user-status-timestamp floaty">29 mins ago</p>
                    <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
            </a>
            <!-- /DROPDOWN BOX LIST ITEM -->
            <?php endif; ?>

        </div>
        <!-- /DROPDOWN BOX LIST -->

        <!-- DROPDOWN BOX BUTTON -->
        <a class="dropdown-box-button primary" href="<?php echo e(route('settingsMessagesGet')); ?>">View all Messages</a>
        <!-- /DROPDOWN BOX BUTTON -->
    </div>
    <!-- /DROPDOWN BOX -->
</div>
<?php /**PATH E:\xampp\htdocs\msm\resources\views/layouts/header/partial/messages.blade.php ENDPATH**/ ?>