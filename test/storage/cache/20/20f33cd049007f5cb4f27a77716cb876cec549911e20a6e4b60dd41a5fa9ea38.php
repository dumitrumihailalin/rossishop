<?php

/* journal3/template/journal3/checkout/cart.twig */
class __TwigTemplate_4e364b3613d131fe68d8b19bba6e625909117bc457a248c21c3928d8927bbdf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"checkout-section cart-section\">
  <div class=\"title section-title\">";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["j3"]) ? $context["j3"] : null), "settings", array()), "get", array(0 => "sectionTitleShoppingCart"), "method");
        echo "</div>
  <div class=\"section-body\">
    <div class=\"alert alert-danger alert-dismissible\" v-if=\"stock_warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 4
        echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
        echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    <div class=\"table-responsive\">
      <table class=\"table table-bordered\">
        <thead>
        <tr>
          <td class=\"text-center td-image\">";
        // line 11
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
          <td class=\"text-left td-product\">";
        // line 12
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
          <td class=\"text-center td-model\">";
        // line 13
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
          <td class=\"text-center td-qty\">";
        // line 14
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
          <td class=\"text-right td-price\">";
        // line 15
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
          <td class=\"text-right td-total\">";
        // line 16
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
        </tr>
        </thead>
        <tbody>
        <tr v-for=\"(product, index) in products\">
          <td class=\"text-center td-image\">
            <a :href=\"product.href\">
              <img :src=\"product.thumb\" :srcset=\"srcSet(product.thumb, product.thumb2x)\" :alt=\"product.name\" :title=\"product.name\" class=\"img-thumbnail\"/>
            </a>
          </td>
          <td class=\"text-left td-product\">
            <a :href=\"product.href\" v-html=\"product.name\"></a>
            <span v-if=\"!product.stock\" class=\"text-danger\">***</span>
            <template v-for=\"option in product.option\">
              <br/>
              <small v-html=\"option.name + ': ' + option.value\"></small>
            </template>
            <br v-if=\"product.reward\"/>
            <small v-if=\"product.reward\" v-html=\"product.reward \"></small>
            <br v-if=\"product.recurring\"/>
            <span v-if=\"product.recurring\" class=\"label label-info\">";
        // line 36
        echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
        echo "</span>
            <small v-if=\"product.recurring\" v-html=\"product.recurring\"></small>
          </td>
          <td class=\"text-left td-model\" v-html=\"product.model\"></td>
          <td class=\"text-left td-qty\">
            <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
              <div class=\"stepper\">
                <input type=\"text\" v-model=\"product.quantity\" v-on:change=\"updateCartItemQuantityValue(index, \$event.target.value)\" class=\"form-control\"/>
                <span>
                      <i class=\"fa fa-angle-up\" v-on:click=\"updateCartItemQuantity(index, 1)\"></i>
                      <i class=\"fa fa-angle-down\" v-on:click=\"updateCartItemQuantity(index, -1)\"></i>
                    </span>
              </div>
              <span class=\"input-group-btn\">
                    <button type=\"button\" v-on:click=\"updateCartItem(product)\" data-toggle=\"tooltip\" title=\"";
        // line 50
        echo (isset($context["button_update"]) ? $context["button_update"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button>
                    <button type=\"button\" v-on:click=\"deleteCartItem(product)\" data-toggle=\"tooltip\" title=\"";
        // line 51
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times-circle\"></i></button>
                  </span>
            </div>
          </td>
          <td class=\"text-right td-price\" v-html=\"product.price\"></td>
          <td class=\"text-right td-total\" v-html=\"product.total\"></td>
        </tr>
        <tr v-for=\"voucher in vouchers\">
          <td></td>
          <td class=\"text-left\" v-html=\"voucher.description\">></td>
          <td class=\"text-left\"></td>
          <td class=\"text-left\">
            <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
              <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\"/>
              <span class=\"input-group-btn\">
                    <button type=\"button\" v-on:click=\"deleteVoucher(voucher)\" data-toggle=\"tooltip\" title=\"";
        // line 66
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times-circle\"></i></button>
                    </span></div>
          </td>
          <td class=\"text-right\" v-html=\"voucher.amount\"></td>
          <td class=\"text-right\" v-html=\"voucher.amount\"></td>
        </tr>
        </tbody>
      </table>
    </div>
      <table class=\"table table-bordered\">
        <tfoot v-if=\"totals.length\">
        <tr v-for=\"total in totals\">
          <td colspan=\"7\" class=\"text-right\"><strong v-html=\"total.title + ':'\"></strong></td>
          <td class=\"text-right\" v-html=\"total.text\"></td>
        </tr>
        </tfoot>
      </table>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 66,  101 => 51,  97 => 50,  80 => 36,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  41 => 12,  37 => 11,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="checkout-section cart-section">*/
/*   <div class="title section-title">{{ j3.settings.get('sectionTitleShoppingCart') }}</div>*/
/*   <div class="section-body">*/
/*     <div class="alert alert-danger alert-dismissible" v-if="stock_warning"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     <div class="table-responsive">*/
/*       <table class="table table-bordered">*/
/*         <thead>*/
/*         <tr>*/
/*           <td class="text-center td-image">{{ column_image }}</td>*/
/*           <td class="text-left td-product">{{ column_name }}</td>*/
/*           <td class="text-center td-model">{{ column_model }}</td>*/
/*           <td class="text-center td-qty">{{ column_quantity }}</td>*/
/*           <td class="text-right td-price">{{ column_price }}</td>*/
/*           <td class="text-right td-total">{{ column_total }}</td>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         <tr v-for="(product, index) in products">*/
/*           <td class="text-center td-image">*/
/*             <a :href="product.href">*/
/*               <img :src="product.thumb" :srcset="srcSet(product.thumb, product.thumb2x)" :alt="product.name" :title="product.name" class="img-thumbnail"/>*/
/*             </a>*/
/*           </td>*/
/*           <td class="text-left td-product">*/
/*             <a :href="product.href" v-html="product.name"></a>*/
/*             <span v-if="!product.stock" class="text-danger">***</span>*/
/*             <template v-for="option in product.option">*/
/*               <br/>*/
/*               <small v-html="option.name + ': ' + option.value"></small>*/
/*             </template>*/
/*             <br v-if="product.reward"/>*/
/*             <small v-if="product.reward" v-html="product.reward "></small>*/
/*             <br v-if="product.recurring"/>*/
/*             <span v-if="product.recurring" class="label label-info">{{ text_recurring_item }}</span>*/
/*             <small v-if="product.recurring" v-html="product.recurring"></small>*/
/*           </td>*/
/*           <td class="text-left td-model" v-html="product.model"></td>*/
/*           <td class="text-left td-qty">*/
/*             <div class="input-group btn-block" style="max-width: 200px;">*/
/*               <div class="stepper">*/
/*                 <input type="text" v-model="product.quantity" v-on:change="updateCartItemQuantityValue(index, $event.target.value)" class="form-control"/>*/
/*                 <span>*/
/*                       <i class="fa fa-angle-up" v-on:click="updateCartItemQuantity(index, 1)"></i>*/
/*                       <i class="fa fa-angle-down" v-on:click="updateCartItemQuantity(index, -1)"></i>*/
/*                     </span>*/
/*               </div>*/
/*               <span class="input-group-btn">*/
/*                     <button type="button" v-on:click="updateCartItem(product)" data-toggle="tooltip" title="{{ button_update }}" class="btn btn-primary"><i class="fa fa-refresh"></i></button>*/
/*                     <button type="button" v-on:click="deleteCartItem(product)" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-times-circle"></i></button>*/
/*                   </span>*/
/*             </div>*/
/*           </td>*/
/*           <td class="text-right td-price" v-html="product.price"></td>*/
/*           <td class="text-right td-total" v-html="product.total"></td>*/
/*         </tr>*/
/*         <tr v-for="voucher in vouchers">*/
/*           <td></td>*/
/*           <td class="text-left" v-html="voucher.description">></td>*/
/*           <td class="text-left"></td>*/
/*           <td class="text-left">*/
/*             <div class="input-group btn-block" style="max-width: 200px;">*/
/*               <input type="text" name="" value="1" size="1" disabled="disabled" class="form-control"/>*/
/*               <span class="input-group-btn">*/
/*                     <button type="button" v-on:click="deleteVoucher(voucher)" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-times-circle"></i></button>*/
/*                     </span></div>*/
/*           </td>*/
/*           <td class="text-right" v-html="voucher.amount"></td>*/
/*           <td class="text-right" v-html="voucher.amount"></td>*/
/*         </tr>*/
/*         </tbody>*/
/*       </table>*/
/*     </div>*/
/*       <table class="table table-bordered">*/
/*         <tfoot v-if="totals.length">*/
/*         <tr v-for="total in totals">*/
/*           <td colspan="7" class="text-right"><strong v-html="total.title + ':'"></strong></td>*/
/*           <td class="text-right" v-html="total.text"></td>*/
/*         </tr>*/
/*         </tfoot>*/
/*       </table>*/
/*   </div>*/
/* </div>*/
/* */
