<?php

return [
    [
        'id'        => 'layout',
        'title'     => '布局',
        'icon'      => 'fa-cubes',
        'uri'       => 'layout',
        'parent_id' => 0,
    ],

    /////////////////////////////////////////////////////
    [
        'id'        => 'tables',
        'title'     => '列表',
        'icon'      => 'feather icon-grid',
        'uri'       => '',
        'parent_id' => 0,
    ],

    [
        'id'        => 'grid',
        'title'     => '普通表格',
        'icon'      => '',
        'uri'       => 'components/grid',
        'parent_id' => 'tables',
    ],

    [
        'id'        => 'reports',
        'title'     => '组合表头',
        'icon'      => '',
        'uri'       => 'reports',
        'parent_id' => 'tables',
    ],

    [
        'id'        => 'grid-tree',
        'title'     => '树',
        'icon'      => '',
        'uri'       => 'tree',
        'parent_id' => 'tables',
    ],
    [
        'id'        => 'selector',
        'title'     => '筛选器',
        'icon'      => '',
        'uri'       => 'tables/selector',
        'parent_id' => 'tables',
    ],

    ///////////////////////////////

    [
        'id'        => 'form',
        'title'     => '表单',
        'icon'      => 'feather icon-edit',
        'uri'       => '',
        'parent_id' => 0,
    ],
    [
        'id'        => 'form1',
        'title'     => '普通表单',
        'icon'      => '',
        'uri'       => 'form',
        'parent_id' => 'form',
    ],
    [
        'id'        => 'modalf',
        'title'     => '弹窗表单',
        'icon'      => '',
        'uri'       => 'form/modal',
        'parent_id' => 'form',
    ],
    [
        'id'        => 'stform',
        'title'     => '分步表单',
        'icon'      => ' fa-list-ol',
        'uri'       => 'form/step',
        'parent_id' => 'form',
    ],

    [
        'id'        => 'full',
        'title'     => 'Full Page',
        'icon'      => 'fa-cut',
        'uri'       => 'full',
        'parent_id' => 0,
    ],

    ///////////////////////////////////////////////////////
//    [
//        'id'        => 'chart',
//        'title'     => 'Chart',
//        'icon'      => ' fa-pie-chart',
//        'uri'       => 'components/charts',
//        'parent_id' => 1,
//    ],
    [
        'id'        => 'metric-card',
        'title'     => '数据统计卡片',
        'icon'      => ' fa fa-clone',
        'uri'       => 'components/metric-cards',
        'parent_id' => 1,
    ],


    ///////////////////////////////////////////////////////
    [
        'id'        => 1,
        'title'     => '组件',
        'icon'      => 'fa-building',
        'uri'       => '',
        'parent_id' => 0,
    ],
//    [
//        'id'        => 'navbar',
//        'title'     => 'Navbar',
//        'icon'      => 'fa-navicon',
//        'uri'       => 'components/navbar',
//        'parent_id' => 1,
//    ],
    [
        'id'        => 'dropdown',
        'title'     => 'Dropdown',
        'icon'      => 'fa-list-ol',
        'uri'       => 'components/dropdown-menu',
        'parent_id' => 1,
    ],
    [
        'id'        => 'button',
        'title'     => 'Tab & Button',
        'icon'      => 'fa-btc',
        'uri'       => 'components/tab-button',
        'parent_id' => 1,
    ],
    [
        'id'        => 'checkbox',
        'title'     => 'Checkbox & Radio',
        'icon'      => 'fa-check-square-o',
        'uri'       => 'components/checkbox-radio',
        'parent_id' => 1,
    ],
    [
        'id'        => 'alert',
        'title'     => 'Alert',
        'icon'      => 'fa-circle-o-notch',
        'uri'       => 'components/alert',
        'parent_id' => 1,
    ],
    [
        'id'        => 'markdown',
        'title'     => 'Markdown',
        'icon'      => 'fa-trademark',
        'uri'       => 'components/markdown',
        'parent_id' => 1,
    ],
    [
        'id'        => 'tooltip',
        'title'     => 'Tooltip',
        'icon'      => 'fa-info-circle',
        'uri'       => 'components/tooltip',
        'parent_id' => 1,
    ],
    [
        'id'        => 'loading',
        'title'     => 'Loading',
        'icon'      => 'fa-spin fa-circle-o-notch',
        'uri'       => 'components/loading',
        'parent_id' => 1,
    ],
//    [
//        'id'        => 'accordion',
//        'title'     => 'Accordion',
//        'icon'      => 'fa-plus-circle',
//        'uri'       => 'components/accordion',
//        'parent_id' => 1,
//    ],


    ///////////////////////////////////////////////////////
    [
        'id'        => 'api',
        'title'     => 'Data From Api',
        'icon'      => 'fa-film',
        'uri'       => '',
        'parent_id' => 0,
    ],
    [
        'id'        => 'theaters',
        'title'     => 'In Theaters',
        'icon'      => '',
        'uri'       => 'movies/in-theaters',
        'parent_id' => 'api',
    ],
    [
        'id'        => 'coming',
        'title'     => 'Coming Soon',
        'icon'      => '',
        'uri'       => 'movies/coming-soon',
        'parent_id' => 'api',
    ],
    [
        'id'        => 'top250',
        'title'     => 'Top 250',
        'icon'      => '',
        'uri'       => 'movies/top250',
        'parent_id' => 'api',
    ],

    //////////////////////////////////
//    [
//        'id'        => 'extensions',
//        'title'     => 'Extension Demo',
//        'icon'      => 'fa fa-plugin',
//        'uri'       => '',
//        'parent_id' => 0,
//    ],
    [
        'id'        => 'UEditor',
        'title'     => 'UEditor',
        'icon'      => 'fa-underline',
        'uri'       => 'extensions/ueditor',
        'parent_id' => '0',
    ],

];
