<nav class="main_navigation <?= (isset($_COOKIE['menu_opened']) && $_COOKIE['menu_opened'] == 'true') ? 'opened no_animation' : '' ?>">
    <div class="employee_info">
        <div class="profile_picture">
            <img src="/img/user.png" alt="User Profile Picture">
        </div>
        <span class="name"><?= $this->session->u->Username ?> </span>
        <span class="privilege"><?= $this->session->u->GroupName ?></span>
    </div>
    <ul class="app_navigation">
        <li class="<?= $this->matchUrl('/') === true ? ' selected' : '' ?>"><a href="/index.php/"><i class="fa fa-dashboard"></i> <?= $text_general_statistics ?></a></li>
        <li class="submenu">
            <a href="javascript:;"><i class="fa fa-credit-card"></i> <?= $text_transactions ?></a>
            <ul>
                <li><a href="/index.php/purchases"><i class="fa fa-gift"></i> <?= $text_transactions_purchases ?></a></li>
                <li><a href="/index.php/sales"><i class="fa fa-shopping-bag"></i> <?= $text_transactions_sales ?></a></li>
            </ul>
        </li>
        <li class="submenu">
            <a href="javascript:;"><i class="fa fa-money"></i> <?= $text_expenses ?></a>
            <ul>
                <li><a href="/index.php/expensescategories"><i class="fa fa-list-ul"></i> <?= $text_expenses_categories ?></a></li>
                <li><a href="/index.php/dailyexpenses"><i class="fa fa-dollar"></i> <?= $text_expenses_daily_expenses ?></a></li>
            </ul>
        </li>
        <li class="submenu">
            <a href="javascript:;"><i class="material-icons">store</i> <?= $text_store ?></a>
            <ul>
                <li><a href="/index.php/productcategories"><i class="fa fa-archive"></i> <?= $text_store_categories ?></a></li>
                <li><a href="/index.php/productlist"><i class="fa fa-tag"></i> <?= $text_store_products ?></a></li>
            </ul>
        </li>
        <li><a href="/index.php/clients"><i class="material-icons">contacts</i> <?= $text_clients ?></a></li>
        <li class="<?= $this->matchUrl('/suppliers') === true ? ' selected' : '' ?>"><a href="/index.php/suppliers"><i class="material-icons">group</i> <?= $text_suppliers ?></a></li>
        <li class="submenu">
            <a href="javascript:;"><i class="fa fa-user"></i> <?= $text_users ?></a>
            <ul>
                <li><a href="/index.php/users"><i class="fa fa-user-circle"></i> <?= $text_users_list ?></a></li>
                <li><a href="/index.php/usersgroups"><i class="fa fa-group"></i> <?= $text_users_groups ?></a></li>
                <li><a href="/index.php/privileges"><i class="fa fa-key"></i> <?= $text_users_privileges ?></a></li>
            </ul>
        </li>
        <li><a href="/index.php/reports"><i class="fa fa-bar-chart"></i> <?= $text_reports ?></a></li>
        <li><a href="/index.php/notifications"><i class="fa fa-bell"></i> <?= $text_notifications ?></a></li>
        <li><a href="/index.php/auth/logout"><i class="fa fa-sign-out"></i> <?= $text_log_out ?></a></li>
    </ul>
</nav>
<div class="action_view <?= (isset($_COOKIE['menu_opened']) && $_COOKIE['menu_opened'] == 'true') ? 'collapsed no_animation' : '' ?>">
<?php $messages = $this->messenger->getMessages(); if(!empty($messages)): foreach ($messages as $message): ?>
<p class="message t<?= $message[1] ?>"><?= $message[0] ?><a href="/index.php/" class="closeBtn"><i class="fa fa-times"></i></a></p>
<?php endforeach;endif; ?>