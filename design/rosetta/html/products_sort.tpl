{if $products|count > 0}
    <div class="sort{if $ajax} fn_is_ajax{/if}">
        <label class="sort_label" data-language="products_sort_by">{$lang->products_sort_by}:</label>

        <select class="fn_sort_select sort_select">
          <option class="opt{if $sort=='position'} active{/if}" value="position">{$lang->products_by_default}</option>
          <option class="opt{if $sort=='price'} active{/if}" value="price">{$lang->products_by_price_up}</option>
          <option class="opt{if $sort=='price_desc'} active{/if}" value="price_desc">{$lang->products_by_price_down}</option>
        </select>
    </div>
{/if}

{literal}
    <script type="text/javascript">
        var select = $('.fn_sort_select');
        var option = select.children('option');
        option.each(function(){
            if( $(this).hasClass('active')){
                var value = $(this).val();
                select.val(value);
            }
        });
        select.change(function(){

          var values = {};
          values['sort'] = select.val();

          $.ajax({
              url: "ajax/ajax_sort.php",
              data: values,
              success: function(data,textStatus) {
                  location.reload();
              }
          });

          //alert(select.val());
            //var url = select.val();
            //$(location).attr('href',url);
        });
    </script>
{/literal}
