{if $deliveries}
    {* Delivery *}

    <div class="row">
        <div class="col-sm-6">
          <h2 class="h2" data-language="cart_delivery">{$lang->cart_delivery}</h2>

          <div class="shadowbox">
              {foreach $deliveries as $delivery}
                  <div class="delivery_item">

                      <label class="delivery_label{if $delivery@first} active{/if}" for="deliveries_{$delivery->id}">

                          <input class="visually_hidden" id="deliveries_{$delivery->id}" onclick="change_payment_method({$delivery->id})" type="radio" name="delivery_id" value="{$delivery->id}" {if $delivery_id==$delivery->id || $delivery@first} checked{/if} />

                          {if $delivery->image}
                              <img src="{$delivery->image|resize:50:25:false:$config->resized_deliveries_dir}" />
                          {/if}

                          <span class="delivery_name" style="">
                              {$delivery->name|escape}

                              {if $cart->total_price < $delivery->free_from && $delivery->price>0 && !$delivery->separate_payment}
                                  <span class="nowrap">({$delivery->price|convert} {$currency->sign|escape})</span>
                              {elseif $delivery->separate_payment}
                                  <span data-language="cart_free">({$lang->cart_paid_separate})</span>
                              {elseif $cart->total_price >= $delivery->free_from && !$delivery->separate_payment}
                                  <span data-language="cart_free">({$lang->cart_free})</span>
                              {/if}
                          </span>
                      </label>
                {*novaposhta_ttn*}
                {if $delivery->app_id}
                    <div class="seldiv" id="delivery_new_post" style="margin-left:5px; display:none;">
                        <label style=""><span class="labelcity">Город: </span></label>
                        <select name="city" data-placeholder="Выберете город" tabindex="1" class="npcity"></select>
                        <p style="padding-bottom: 10px;"></p>
                        <label style=""><span class="labelware" style="display:none;">Отделение: </span></label>
                        <select name="np_warehouse" data-placeholder="Выберете отделение" class="npware" style="display:none!important;">
                        </select>
                    </div>
                {/if}
                {*/novaposhta_ttn*}
                      <div class="delivery_description">
                          <small>{$delivery->description}</small>
                      </div>
                  </div>
              {/foreach}
          </div>
        </div>
        <div class="col-sm-6">
          {* Payment methods *}
          {foreach $deliveries as $delivery}
              {if $delivery->payment_methods}
                  <div class="fn_delivery_payment" id="fn_delivery_payment_{$delivery->id}"{if $delivery@iteration != 1} style="display:none"{/if}>

                      <h2 class="h2" data-language="cart_payment">{$lang->cart_payment}</h2>

                      <div class="shadowbox">
                          {foreach $delivery->payment_methods as $payment_method}
                              <div class="delivery_item">

                                  <label class="delivery_label{if $payment_method@first} active{/if}" for="payment_{$delivery->id}_{$payment_method->id}">

                                      <input class="visually_hidden" id="payment_{$delivery->id}_{$payment_method->id}" type="radio" name="payment_method_id" value="{$payment_method->id}"{if $delivery@first && $payment_method@first} checked{/if} />

                                      {if $payment_method->image}
                                          <img src="{$payment_method->image|resize:50:25:false:$config->resized_payments_dir}" />
                                      {/if}

                                      <span class="delivery_name">
                                          {$total_price_with_delivery = $cart->total_price}
                                          {if !$delivery->separate_payment && $cart->total_price < $delivery->free_from}
                                              {$total_price_with_delivery = $cart->total_price + $delivery->price}
                                          {/if}

                                          {$payment_method->name|escape} {$lang->cart_deliveries_to_pay}
                                          <span class="nowrap">{$total_price_with_delivery|convert:$payment_method->currency_id} {$all_currencies[$payment_method->currency_id]->sign|escape}</span>
                                      </span>
                                  </label>
                                  <div class="delivery_description">
                                      <small>{$payment_method->description}</small>
                                  </div>
                              </div>
                          {/foreach}
                      </div>
                  </div>
              {/if}
          {/foreach}
        </div>
    </div>






{/if}
