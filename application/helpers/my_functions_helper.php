<?php add_action('after_render_single_aside_menu', 'my_custom_menu_items'); function my_custom_menu_items($order) { if ($order == 2) { echo ' <li>
<a href="#" aria-expanded="false">
    <i class="fa fa-address-book menu-icon">
    </i>
    Directory
    <span class="fa arrow">
    </span>
</a>
<ul class="nav nav-second-level collapse" aria-expanded="false">
    <li>
        <a href="' . admin_url("the_directory") . '">
            Call Center
        </a>
    </li>
    <li>
        <a href="' . admin_url("the_directory/add_contact") . '">
            Add Contact
        </a>
    </li>
</ul>
</li>
';
}
if ($order == 8) {
echo '
<li>
<a href="#" aria-expanded="false">
    <i class="fa fa-area-chart menu-icon">
    </i>
    Custom Reports
    <span class="fa arrow">
    </span>
</a>
<ul class="nav nav-second-level collapse" aria-expanded="false">
    <li>
        <a href="' . admin_url("custom_reports/delivery_note") . '">
            Delivery Note
        </a>
    </li>
    <li>
        <a href="' . admin_url("custom_reports/dss") . '">
            Daily Service Sheet
        </a>
    </li>
    <li>
        <a href="' . admin_url("custom_reports/item_sale") . '">
            Items Sale Report
        </a>
    </li>
</ul>
</li>
';
}
}
