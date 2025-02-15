<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__a0762ad499d5ea7639479a042dda6762 */
class __TwigTemplate_f965697aaf4fe5472acc61256c960586 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Produit • AKIMAKAKO</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr-fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'TG';
    var _PS_VERSION_ = '8.0.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'f85d6e8568cbc6094aa27353b8da981a';
    var token_admin_orders = tokenAdminOrders = 'e16565e911b6c5c70b0e7978d4bb8393';
    var token_admin_customers = '2825e6ca956611aea4b35484b8720bf0';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'dc8859f73ef279605decdd8c8d1676e9';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '2d1f6ef1a76d13bf2b1a14474f1266a4';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admins000/index.php/improve/modules/manage?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo';
    var admin_notification_get_link = '/prestashop/admins000/index.php/common/notifications?_to";
        // line 42
        echo "ken=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admins000/index.php/common/notifications/ack?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/admins000/themes/new-theme/public/auto703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/admins000/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admins000/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admins000\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admins000\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\"";
        // line 72
        echo ",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/admins000/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.0.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admins000/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.0.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admins000/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestas";
        // line 90
        echo "hop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.5.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/admins000\\/index.php?controller=AdminGamification&token=c94e2e73ce44871ef42e2d92c7d2ca14\";
            var current_id_tab = 10;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admins000/index.php/common/notifications?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 113
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminproducts\"
  data-base-url=\"/prestashop/admins000/index.php\"  data-token=\"krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admins000/index.php?controller=AdminDashboard&amp;token=a11f38b55cbbc4e4f7fcbd1db7303afb\"></a>
      <span id=\"shop_version\">8.0.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admins000/index.php/sell/orders?token=a41c3502b622ca4ab996eb1dda9b2088\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admins000/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=eb46873a4d71210ef6ad36c952f3ff48\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admins000/index.php/improve/modules/manage?token=a41c3502b622ca4ab996eb1dda9b2088\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admins000/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2b35a4b2eef94448d303a84a1af31a1a\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>";
        // line 149
        echo "
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admins000/index.php/sell/catalog/products/new?token=a41c3502b622ca4ab996eb1dda9b2088\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop/admins000/index.php/sell/catalog/categories/new?token=a41c3502b622ca4ab996eb1dda9b2088\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"96\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products/116?-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\"
        data-post-link=\"http://localhost/prestashop/admins000/index.php?controller=AdminQuickAccesses&token=39db92330b7e20b2a99288f3e39126df\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Produits - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admins000/index.php?controller=AdminQuickAccesses&token=39db92330b7e20b2a99288f3e39126df\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admins000/index.php?controller=AdminSearch&amp;token=df5707ea7dae7374eca4b46700f47d25\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" /";
        // line 188
        echo ">
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data";
        // line 204
        echo "-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admins000/index.php/sell/orders?token=a41c3502b622ca4ab996eb1dda9b2088\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admins000/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=eb46873a4d71210ef6ad36c952f3ff48\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admins000/index.php/improve/modules/manage?token=a41c3502b622ca4ab996eb1dda9b2088\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admins000/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2b35a4b2eef94448d303a84a1af31a1a\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admins000/index.php/sell/catalog/products/new?token=a41c3502b622ca4ab996eb1dda9b2088\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdow";
        // line 243
        echo "n-item quick-row-link\"
       href=\"http://localhost/prestashop/admins000/index.php/sell/catalog/categories/new?token=a41c3502b622ca4ab996eb1dda9b2088\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"96\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/products/116?-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\"
      data-post-link=\"http://localhost/prestashop/admins000/index.php?controller=AdminQuickAccesses&token=39db92330b7e20b2a99288f3e39126df\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Produits - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admins000/index.php?controller=AdminQuickAccesses&token=39db92330b7e20b2a99288f3e39126df\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  ";
        // line 288
        echo "</button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos &lt;strong&gt;&lt;a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=8bf992c019b717366341e9f8c8eb11b2\"&gt;paniers abandonnés&lt;/a&gt;&lt;/strong&gt; ?&lt;br&gt; Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
";
        // line 339
        echo "                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">";
        // line 388
        echo "
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" alt=\"EBAH\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir EBAH</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admins000/index.php/configure/advanced/employees/1/edit?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=training-fr&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formation
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=expert-fr&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Trouver un expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop/admins000/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo&utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=addons-fr&utm_mbo_source=menu-user-back-office\" target=\"_bla";
        // line 411
        echo "nk\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Marketplace Prestashop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/fr?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=help-center-fr&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centre d'assistance
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/admins000/index.php?controller=AdminLogin&amp;logout=1&amp;token=ed5098c2bb9c05c74bbe9f806e4cd7e6\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admins000/index.php/configure/advanced/employees/toggle-navigation?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/admins000/index.php?controller=AdminDashboard&amp;token=a11f38b55cbbc4e4f7fcbd1db7303afb\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminDashboard&amp;token=a11f38b55cbbc4e4f7fcbd1db7303afb\" class=\"link\" >
                <i class=\"material-icon";
        // line 449
        echo "s\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admins000/index.php/sell/orders/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admins000/index.php/sell/orders/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" d";
        // line 488
        echo "ata-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admins000/index.php/sell/orders/invoices/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admins000/index.php/sell/orders/credit-slips/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admins000/index.php/sell/orders/delivery-slips/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminCarts&amp;token=8bf992c019b717366341e9f8c8eb11b2\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
     ";
        // line 519
        echo "                                         
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admins000/index.php/sell/catalog/products?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admins000/index.php/sell/catalog/products?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admins000/index.php/sell/catalog/categories?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Catégories
                                </a>
        ";
        // line 548
        echo "                      </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admins000/index.php/sell/catalog/monitoring/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminAttributesGroups&amp;token=613ba697f3b0bdcb4feae534bf27e383\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admins000/index.php/sell/catalog/brands/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestas";
        // line 578
        echo "hop/admins000/index.php/sell/attachments/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminCartRules&amp;token=2b35a4b2eef94448d303a84a1af31a1a\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admins000/index.php/sell/stocks/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admins000/index.php/sell/customers/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i cla";
        // line 610
        echo "ss=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admins000/index.php/sell/customers/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admins000/index.php/sell/addresses/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminCustomerThreads&amp;token=dc8859f73ef279605decdd8c8d1676e9\" class=\"link\">
                      <i class=\"material-icons mi-chat\">c";
        // line 639
        echo "hat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminCustomerThreads&amp;token=dc8859f73ef279605decdd8c8d1676e9\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admins000/index.php/sell/customer-service/order-messages/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminReturn&amp;token=38bed55aa89b5bf95896fe14fc85218e\" class=\"link\"> Ret";
        // line 668
        echo "ours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admins000/index.php/modules/metrics/legacy/stats?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/admins000/index.php/modules/metrics/legacy/stats?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-AdminMetricsController\">
            ";
        // line 701
        echo "                    <a href=\"/prestashop/admins000/index.php/modules/metrics?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admins000/index.php/modules/mbo/modules/catalog/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"154\" id=\"subtab-AdminPsMboModuleParent\">
                              ";
        // line 736
        echo "  <a href=\"/prestashop/admins000/index.php/modules/mbo/modules/catalog/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admins000/index.php/improve/modules/manage?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=20e87623bb7592216c8d0c2015c382fd\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
            ";
        // line 766
        echo "                  
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=20e87623bb7592216c8d0c2015c382fd\" class=\"link\"> Modules du thème
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admins000/index.php/modules/mbo/themes/catalog/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/admins000/index.php/modules/improve/design/themes?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Personnalisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admins000/index.php/improve/design/mail_theme/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"lin";
        // line 793
        echo "k\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admins000/index.php/improve/design/cms-pages/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admins000/index.php/improve/design/modules/positions/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminImages&amp;token=b915115e7bc51951a59218e07c832ff0\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <";
        // line 825
        echo "a href=\"/prestashop/admins000/index.php/modules/link-widget/list?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminCarriers&amp;token=f47b43fed95f85699ebe2fff1ffe683f\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminCarriers&amp;token=f47b43fed95f85699ebe2fff1ffe683f\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                  ";
        // line 856
        echo "          
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admins000/index.php/improve/shipping/preferences/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminMbeConfiguration&amp;token=a414597ec6c1bb68ba69975a4f4339f4\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminMbeShipping&amp;token=5b4aaa7be263d9e1c0d6632ed680d899\" class=\"link\"> MBE - Expéditions
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admins000/index.php/improve/payment/payment_methods?_";
        // line 885
        echo "token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admins000/index.php/improve/payment/payment_methods?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admins000/index.php/improve/payment/preferences?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" d";
        // line 917
        echo "ata-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admins000/index.php/improve/international/localization/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admins000/index.php/improve/international/localization/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admins000/index.php/improve/international/zones/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                             ";
        // line 946
        echo "               
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admins000/index.php/improve/international/taxes/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admins000/index.php/improve/international/translations/settings?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"141\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=8dd7c3b0ec7d84df80d6f0381bd843b4\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-141\" class=\"subme";
        // line 976
        echo "nu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=8dd7c3b0ec7d84df80d6f0381bd843b4\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"151\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminPsfacebookModule&amp;token=b2f9e80846a26f8d4ddaa97fb931327c\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admins000/index.php/configure/shop/preferences/preferences?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>";
        // line 1011
        echo "
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admins000/index.php/configure/shop/preferences/preferences?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admins000/index.php/configure/shop/order-preferences/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admins000/index.php/configure/shop/product-preferences/?_token=krdjFs-KGCZHobuH1FAA_";
        // line 1040
        echo "3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admins000/index.php/configure/shop/customer-preferences/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admins000/index.php/configure/shop/contacts/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admins000/index.php/configure/shop/seo-urls/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentS";
        // line 1071
        echo "earchConf\">
                                <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminSearchConf&amp;token=835d9a62b6a83e3c9bb97fcb0e1effc7\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admins000/index.php/configure/advanced/system-information/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admins000/index.php/configure/advanced/system-information/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                      ";
        // line 1101
        echo "            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admins000/index.php/configure/advanced/performance/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admins000/index.php/configure/advanced/administration/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admins000/index.php/configure/advanced/emails/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admins000/index.php/configure/advanced/import/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Importer
                ";
        // line 1130
        echo "                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admins000/index.php/configure/advanced/employees/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admins000/index.php/configure/advanced/sql-requests/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admins000/index.php/configure/advanced/logs/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admins000/in";
        // line 1161
        echo "dex.php/configure/advanced/webservice-keys/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admins000/index.php/configure/advanced/feature-flags/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admins000/index.php/configure/advanced/security/?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"135\" id=\"subtab-AdminPsAssistantSettings\">
                    <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminPsAssistantSettings&amp;token=7a1eeafee52adf0dfe90e34497a366b4\" class=\"link\">
                      <i class=\"material-icons";
        // line 1189
        echo " mi-extension\">extension</i>
                      <span>
                      Assistance By PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div id=\"main-div\">
          
      <div class=\"content-div -notoolbar \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1217
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/prestashop/admins000/index.php?controller=AdminDashboard&amp;token=a11f38b55cbbc4e4f7fcbd1db7303afb\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"module-modal-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Se connecter à la marketplace Addons</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
                  <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      Liez votre boutique à votre compte Addons pour recevoir automatiquement les mises à jour importantes des modules que vous avez achetés. Vous n&#039;avez pas encore de compte ?
                      <a href=\"https://authv2.prestashop.com/register?_ga=2.183749797.2029715227.1645605306-2047387021.1643627469&amp;_gac=1.81371877.1644238612.CjwKCAiAo4OQBhBBEiwA5KWu_5UzrywbBPo4PKIYESy7K-noavdo7Z4riOZMJEoM9mE1IE3gks0thxoCZOwQAvD_BwE\" target=\"_blank\">Inscrivez-vous maintenant</a>
                  </p>
                  <p>
                      Si vous avez créé votre compte avec Google, veuillez suivre la procédure de mot de passe oublié de Addons Marketplace pour créer votre mot de pass";
        // line 1259
        echo "e : 
                      <a href=\"https://authv2.prestashop.com/password/request\" target=\"_blank\">Réinitialiser votre mot de passe</a>
                  </p>
                  <form id=\"addons-connect-form\"
                        action=\"/prestashop/admins000/index.php/modules/mbo/addons/login?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\"
                        method=\"POST\"
                        data-error-message=\"An error occurred while processing your request.\"
                  >
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">Adresse e-mail</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">Mot de passe</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"md-checkbox md-checkbox-inline\">
                    <label>
                      <input type=\"checkbox\" name=\"addons_remember_me\">
                      <i class=\"md-checkbox-control\"></i>
                        Se souvenir de moi
                    </label>
                  </div>
                  <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">C&#039;est parti !</button>
                    <div id=\"addons_login_btn\" class=\"spinner\" style=\"display:none;\"></div>
                  </div>
                </form>
                <p class=\"text-center py-3\">
                    <a href=\"https://authv2.prestashop.com/password/request\" target=\"_blank\">Mot de passe oublié ?</a>
                </p>
              </div>
          </div>
              </div>
    </div>
  </div>
</div>
<div id=\"module-modal-addons-logout\"";
        // line 1296
        echo " class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Confirmer la déconnexion</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    Vous êtes sur le point de vous déconnecter de votre compte Addons. Vous pourriez rater d&#039;importantes mises à jour pour les modules que vous avez achetés.
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"Annuler\">
          <a class=\"btn btn-primary uppercase\" href=\"/prestashop/admins000/index.php/modules/mbo/addons/logout?_token=krdjFs-KGCZHobuH1FAA_3CtrT9l-GcZ60H6AcJ75oo\" id=\"module-modal-addons-logout-ack\">Oui, me déconnecter</a>
      </div>

        </div>
    </div>
</div>

</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1329
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 113
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1217
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1329
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__a0762ad499d5ea7639479a042dda6762";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1504 => 1329,  1483 => 1217,  1472 => 113,  1463 => 1329,  1428 => 1296,  1389 => 1259,  1341 => 1217,  1311 => 1189,  1281 => 1161,  1248 => 1130,  1217 => 1101,  1185 => 1071,  1152 => 1040,  1121 => 1011,  1084 => 976,  1052 => 946,  1021 => 917,  987 => 885,  956 => 856,  923 => 825,  889 => 793,  860 => 766,  828 => 736,  791 => 701,  756 => 668,  725 => 639,  694 => 610,  660 => 578,  628 => 548,  597 => 519,  564 => 488,  523 => 449,  483 => 411,  458 => 388,  407 => 339,  354 => 288,  307 => 243,  266 => 204,  248 => 188,  207 => 149,  166 => 113,  141 => 90,  121 => 72,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__a0762ad499d5ea7639479a042dda6762", "");
    }
}
