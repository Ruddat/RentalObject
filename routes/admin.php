<?php


use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogPageAccess;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\BlogSystem\PostController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Livewire\Backend\Admin\EInvoiceManager\UserCertificateManager;



Route::middleware(['web', 'auth', 'verified', LogPageAccess::class])->group(function () {

    Route::view('index', 'backend.pages.index')->name('index');

    Route::view('dashboard', 'backend.pages.index')->name('dashboard');

    Route::view('project_dashboard', 'backend.pages.project_dashboard')->name('project_dashboard');
    Route::view('crypto_dashboard', 'backend.pages.crypto_dashboard')->name('crypto_dashboard');
    Route::view('education_dashboard', 'backend.pages.education_dashboard')->name('education_dashboard');

    // Nebenkosten konstrukt
    Route::view('utility-costs-table', 'backend.livewirepages._utility-costs-table')->name('utility-costs-table');
    Route::view('billing-header-form', 'backend.livewirepages._billing-header-form')->name('billing-header-form');
    Route::view('rental-object-table', 'backend.livewirepages._rental-object-table')->name('rental-object-table');
    Route::view('tenant-table', 'backend.livewirepages._tenant-table')->name('tenant-table');
    Route::view('tenant-payments', 'backend.livewirepages._tenant-payments')->name('tenant-payments');
    Route::view('utility-cost-recording', 'backend.livewirepages.utilitycosts._utility-cost-recording')->name('utility-cost-recording');
    Route::view('heating-cost-management', 'backend.livewirepages.utilitycosts._heating-cost-management')->name('heating-cost-management');
    Route::view('billing-calculation', 'backend.livewirepages.utilitycosts._billing-calculation')->name('billing-calculation');
    Route::view('billing-generation', 'backend.livewirepages.utilitycosts._billing-generation')->name('billing-generation');



    Route::view('/add-property', 'backend.livewirepages.addproperty._add-property')->name('add-property');

    Route::view('roles-permissions-table', 'backend.admin.rolesandpermission._roles-permissions-table')->name('roles-permissions-table');
    Route::view('user-table', 'backend.admin.users-table')->name('user-table');
    Route::view('profile', 'backend.pages.profile')->name('profile');
    Route::view('setting', 'backend.livewirepages.profilesettings._profile-settings')->name('setting');
    Route::view('page-access', 'backend.livewirepages.systemsetting._log-page-access')->name('page-access');

    Route::view('backup-manager', 'backend.livewirepages.systemsetting._backup-manager')->name('backup-manager');
    Route::view('settings-manager', 'backend.livewirepages.systemsetting._settings-manager')->name('settings-manager');
    Route::view('translation-editor', 'backend.livewirepages.systemsetting._translation-editor')->name('translation-editor');

    Route::view('e-invoice-manager', 'backend.livewirepages.e-invoices._e-invoice-manager')->name('e-invoice-manager');
    Route::view('e-invoice-pdf-manager', 'backend.livewirepages.e-invoices._e-invoice-pdf-manager')->name('e-invoice-pdf-manager');
    Route::get('/user-certificates', UserCertificateManager::class)->name('user.certificates');




    // Block Manager Routes (Admin Area for CRUD operations)
    // ----------------------------------------------------------------
    Route::prefix('blog-manager')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('blog-manager.index');
        Route::get('/create', [PostController::class, 'create'])->name('post.create');
        Route::post('/store', [PostController::class, 'store'])->name('post.store');
        Route::get('/edit/{id}', [PostController::class, 'edit'])->name('post.edit')->where('id', '[0-9]+');
        Route::put('/update/{id}', [PostController::class, 'update'])->name('post.update')->where('id', '[0-9]+');
        Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy')->where('id', '[0-9]+');
    });


    // Page Manager Routes (Admin Area for CRUD operations)
    // ----------------------------------------------------------------
    Route::view('pages-manager', 'backend.livewirepages.pagemanager._page-manager-form')->name('pages-manager');

    // Ticket management
    // ----------------------------------------------------------------
    Route::view('ticket-manager', 'backend.livewirepages.ticketmanager._ticket-manager')->name('ticket-manager');

    // Todo for future  enhancement
    // ----------------------------------------------------------------
    Route::view('todo-manager', 'backend.livewirepages.todomanager._to-do-manager')->name('todo-manager');

    Route::view('chat-manager', 'backend.livewirepages.chatmanager._chat-manager')->name('chat-manager');




});



Route::get('/weather/{city}', [WeatherController::class, 'getWeatherData']);



Route::view('accordions', 'backend.pages.accordions')->name('accordions');
Route::view('add_blog', 'backend.pages.add_blog')->name('add_blog');
Route::view('add_product', 'backend.pages.add_product')->name('add_product');
Route::view('advance_table', 'backend.pages.advance_table')->name('advance_table');
Route::view('alert', 'backend.pages.alert')->name('alert');
Route::view('alignment', 'backend.pages.alignment')->name('alignment');
Route::view('animated_icon', 'backend.pages.animated_icon')->name('animated_icon');
Route::view('animation', 'backend.pages.animation')->name('animation');
Route::view('api', 'backend.pages.api')->name('api');
Route::view('area_chart', 'backend.pages.area_chart')->name('area_chart');
Route::view('avatar', 'backend.pages.avatar')->name('avatar');

Route::view('background', 'backend.pages.background')->name('background');
Route::view('badges', 'backend.pages.badges')->name('badges');
Route::view('bar_chart', 'backend.pages.bar_chart')->name('bar_chart');
Route::view('base_inputs', 'backend.pages.base_inputs')->name('base_inputs');
Route::view('basic_table', 'backend.pages.basic_table')->name('basic_table');
Route::view('blank', 'backend.pages.blank')->name('blank');
Route::view('block_ui', 'backend.pages.block_ui')->name('block_ui');
Route::view('blog', 'backend.pages.blog')->name('blog');
Route::view('blog_details', 'backend.pages.blog_details')->name('blog_details');
Route::view('bookmark', 'backend.pages.bookmark')->name('bookmark');
Route::view('bootstrap_slider', 'backend.pages.bootstrap_slider')->name('bootstrap_slider');
Route::view('boxplot_chart', 'backend.pages.boxplot_chart')->name('boxplot_chart');
Route::view('bubble_chart', 'backend.pages.bubble_chart')->name('bubble_chart');
Route::view('bullet', 'backend.pages.bullet')->name('bullet');
Route::view('buttons', 'backend.pages.buttons')->name('buttons');

Route::view('calendar', 'backend.pages.calendar')->name('calendar');
Route::view('candlestick_chart', 'backend.pages.candlestick_chart')->name('candlestick_chart');
Route::view('cards', 'backend.pages.cards')->name('cards');
Route::view('cart', 'backend.pages.cart')->name('cart');
Route::view('chart_js', 'backend.pages.chart_js')->name('chart_js');
Route::view('chat', 'backend.pages.chat')->name('chat');
Route::view('cheatsheet', 'backend.pages.cheatsheet')->name('cheatsheet');
Route::view('checkbox_radio', 'backend.pages.checkbox_radio')->name('checkbox_radio');
Route::view('checkout', 'backend.pages.checkout')->name('checkout');
Route::view('clipboard', 'backend.pages.clipboard')->name('clipboard');
Route::view('collapse', 'backend.pages.collapse')->name('collapse');
Route::view('column_chart', 'backend.pages.column_chart')->name('column_chart');
Route::view('coming_soon', 'backend.pages.coming_soon')->name('coming_soon');
Route::view('count_down', 'backend.pages.count_down')->name('count_down');
Route::view('count_up', 'backend.pages.count_up')->name('count_up');

Route::view('data_table', 'backend.pages.data_table')->name('data_table');
Route::view('date_picker', 'backend.pages.date_picker')->name('date_picker');
Route::view('default_forms', 'backend.pages.default_forms')->name('default_forms');
Route::view('divider', 'backend.pages.divider')->name('divider');
Route::view('draggable', 'backend.pages.draggable')->name('draggable');
Route::view('dropdown', 'backend.pages.dropdown')->name('dropdown');
Route::view('dual_list_boxes', 'backend.pages.dual_list_boxes')->name('dual_list_boxes');

Route::view('editor', 'backend.pages.editor')->name('editor');
Route::view('email', 'backend.pages.email')->name('email');
Route::view('error_400', 'backend.pages.error_400')->name('error_400');
Route::view('error_403', 'backend.pages.error_403')->name('error_403');
Route::view('error_404', 'backend.pages.error_404')->name('error_404');
Route::view('error_500', 'backend.pages.error_500')->name('error_500');
Route::view('error_503', 'backend.pages.error_503')->name('error_503');

Route::view('faq', 'backend.pages.faq')->name('faq');
Route::view('file_manager', 'backend.pages.file_manager')->name('file_manager');
Route::view('file_upload', 'backend.pages.file_upload')->name('file_upload');
Route::view('flag_icons', 'backend.pages.flag_icons')->name('flag_icons');
Route::view('floating_labels', 'backend.pages.floating_labels')->name('floating_labels');
Route::view('fontawesome', 'backend.pages.fontawesome')->name('fontawesome');
Route::view('footer_page', 'backend.pages.footer_page')->name('footer_page');
Route::view('form_validation', 'backend.pages.form_validation')->name('form_validation');
Route::view('form_wizard_1', 'backend.pages.form_wizard_1')->name('form_wizard_1');
Route::view('form_wizard_2', 'backend.pages.form_wizard_2')->name('form_wizard_2');
Route::view('form_wizards', 'backend.pages.form_wizards')->name('form_wizards');

Route::view('gallery', 'backend.pages.gallery')->name('gallery');
Route::view('google_map', 'backend.pages.google_map')->name('google_map');
Route::view('grid', 'backend.pages.grid')->name('grid');

Route::view('heatmap', 'backend.pages.heatmap')->name('heatmap');
Route::view('helper_classes', 'backend.pages.helper_classes')->name('helper_classes');

Route::view('iconoir_icon', 'backend.pages.iconoir_icon')->name('iconoir_icon');
Route::view('input_groups', 'backend.pages.input_groups')->name('input_groups');
Route::view('input_masks', 'backend.pages.input_masks')->name('input_masks');
Route::view('invoice', 'backend.pages.invoice')->name('invoice');

Route::view('kanban_board', 'backend.pages.kanban_board')->name('kanban_board');

Route::view('landing', 'backend.pages.landing')->name('landing');
Route::view('leaflet_map', 'backend.pages.leaflet_map')->name('leaflet_map');
Route::view('line_chart', 'backend.pages.line_chart')->name('line_chart');
Route::view('list', 'backend.pages.list')->name('list');
Route::view('list_table', 'backend.pages.list_table')->name('list_table');
Route::view('lock_screen', 'backend.pages.lock_screen')->name('lock_screen');
Route::view('lock_screen_1', 'backend.pages.lock_screen_1')->name('lock_screen_1');


Route::view('maintenance', 'backend.pages.maintenance')->name('maintenance');
Route::view('misc', 'backend.pages.misc')->name('misc');
Route::view('mixed_chart', 'backend.pages.mixed_chart')->name('mixed_chart');
Route::view('modals', 'backend.pages.modals')->name('modals');
Route::view('notifications', 'backend.pages.notifications')->name('notifications');

Route::view('offcanvas', 'backend.pages.offcanvas')->name('offcanvas');
Route::view('orders', 'backend.pages.orders')->name('orders');
Route::view('order_details', 'backend.pages.order_details')->name('order_details');
Route::view('order_list', 'backend.pages.order_list')->name('order_list');



Route::view('password_create_1', 'backend.pages.password_create_1')->name('password_create_1');
Route::view('password_reset_1', 'backend.pages.password_reset_1')->name('password_reset_1');
Route::view('phosphor', 'backend.pages.phosphor')->name('phosphor');
Route::view('pie_charts', 'backend.pages.pie_charts')->name('pie_charts');
Route::view('placeholder', 'backend.pages.placeholder')->name('placeholder');
Route::view('pricing', 'backend.pages.pricing')->name('pricing');
Route::view('prismjs', 'backend.pages.prismjs')->name('prismjs');
Route::view('privacy_policy', 'backend.pages.privacy_policy')->name('privacy_policy');
Route::view('product', 'backend.pages.product')->name('product');
Route::view('product_details', 'backend.pages.product_details')->name('product_details');
Route::view('product_list', 'backend.pages.product_list')->name('product_list');

Route::view('progress', 'backend.pages.progress')->name('progress');
Route::view('project_app', 'backend.pages.project_app')->name('project_app');
Route::view('project_details', 'backend.pages.project_details')->name('project_details');
Route::view('password_create', 'backend.pages.password_create')->name('password_create');
Route::view('password_reset', 'backend.pages.password_reset')->name('password_reset');

Route::view('radar_chart', 'backend.pages.radar_chart')->name('radar_chart');
Route::view('radial_bar_chart', 'backend.pages.radial_bar_chart')->name('radial_bar_chart');
Route::view('range_slider', 'backend.pages.range_slider')->name('range_slider');
Route::view('ratings', 'backend.pages.ratings')->name('ratings');
Route::view('read_email', 'backend.pages.read_email')->name('read_email');
Route::view('ready_to_use_form', 'backend.pages.ready_to_use_form')->name('ready_to_use_form');
Route::view('ready_to_use_table', 'backend.pages.ready_to_use_table')->name('ready_to_use_table');
Route::view('ribbons', 'backend.pages.ribbons')->name('ribbons');

Route::view('scatter_chart', 'backend.pages.scatter_chart')->name('scatter_chart');
Route::view('scrollbar', 'backend.pages.scrollbar')->name('scrollbar');
Route::view('scrollpy', 'backend.pages.scrollpy')->name('scrollpy');
Route::view('select', 'backend.pages.select')->name('select');
Route::view('shadow', 'backend.pages.shadow')->name('shadow');
Route::view('sign_in', 'backend.pages.sign_in')->name('sign_in');
Route::view('sign_in_1', 'backend.pages.sign_in_1')->name('sign_in_1');
Route::view('sign_up', 'backend.pages.sign_up')->name('sign_up');
Route::view('sign_up_1', 'backend.pages.sign_up_1')->name('sign_up_1');
Route::view('sitemap', 'backend.pages.sitemap')->name('sitemap');
Route::view('slick_slider', 'backend.pages.slick_slider')->name('slick_slider');
Route::view('spinners', 'backend.pages.spinners')->name('spinners');
Route::view('sweetalert', 'backend.pages.sweetalert')->name('sweetalert');
Route::view('switch', 'backend.pages.switch')->name('switch');

Route::view('tabler_icons', 'backend.pages.tabler_icons')->name('tabler_icons');
Route::view('tabs', 'backend.pages.tabs')->name('tabs');
Route::view('team', 'backend.pages.team')->name('team');
Route::view('terms_condition', 'backend.pages.terms_condition')->name('terms_condition');
Route::view('textarea', 'backend.pages.textarea')->name('textarea');
Route::view('ticket', 'backend.pages.ticket')->name('ticket');
Route::view('ticket_details', 'backend.pages.ticket_details')->name('ticket_details');
Route::view('timeline', 'backend.pages.timeline')->name('timeline');
Route::view('timeline_range_charts', 'backend.pages.timeline_range_charts')->name('timeline_range_charts');
Route::view('to_do', 'backend.pages.to_do')->name('to_do');
Route::view('tooltips_popovers', 'backend.pages.tooltips_popovers')->name('tooltips_popovers');
Route::view('touch_spin', 'backend.pages.touch_spin')->name('touch_spin');
Route::view('tour', 'backend.pages.tour')->name('tour');
Route::view('tree-view', 'backend.pages.tree-view')->name('tree-view');
Route::view('treemap_chart', 'backend.pages.treemap_chart')->name('treemap_chart');
Route::view('two_step_verification', 'backend.pages.two_step_verification')->name('two_step_verification');
Route::view('two_step_verification_1', 'backend.pages.two_step_verification_1')->name('two_step_verification_1');
Route::view('typeahead', 'backend.pages.typeahead')->name('typeahead');

Route::view('vector_map', 'backend.pages.vector_map')->name('vector_map');
Route::view('video_embed', 'backend.pages.video_embed')->name('video_embed');
Route::view('weather_icon', 'backend.pages.weather_icon')->name('weather_icon');
Route::view('widget', 'backend.pages.widget')->name('widget');
Route::view('wishlist', 'backend.pages.wishlist')->name('wishlist');
Route::view('wrapper', 'backend.pages.wrapper')->name('wrapper');
